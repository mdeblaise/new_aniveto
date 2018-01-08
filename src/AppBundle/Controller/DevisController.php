<?php

namespace AppBundle\Controller;

use AppBundle\Domain\Devis\DevisProvider;
use AppBundle\Domain\Devis\Manager as DevisManager;
use AppBundle\Domain\Fidanimo\Manager as FidanimoManager;
use AppBundle\Domain\User\Model\Status;
use AppBundle\Domain\User\UserProvider;
use AppBundle\Entity\User;
use AppBundle\Form\Type\AnimalType;
use AppBundle\Form\Type\AuthentificationType;
use AppBundle\Form\Type\ProfilType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Templating\EngineInterface;

/**
 * @Route(path="/devis", service="app.controller.devis")
 */
class DevisController
{
    protected $templating;

    protected $router;

    protected $formFactory;

    protected $devisManager;

    protected $userProvider;

    protected $devisProvider;

    protected $fidanimoManager;

    public function __construct(
        EngineInterface $templating,
        RouterInterface $router,
        FormFactoryInterface $formFactory,
        DevisManager $devisManager,
        UserProvider $userProvider,
        DevisProvider $devisProvider,
        FidanimoManager $fidanimoManager
    ) {
        $this->templating = $templating;
        $this->router = $router;
        $this->formFactory = $formFactory;
        $this->devisManager = $devisManager;
        $this->userProvider = $userProvider;
        $this->devisProvider = $devisProvider;
        $this->fidanimoManager = $fidanimoManager;
    }

    /**
     * @Route(path="", name="app.devis")
     */
    public function indexAction(Request $request)
    {
        $form = $this->formFactory->create(AuthentificationType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $email = $data['email'];

            $user = $this->userProvider->findUserByEmail($email);

            if (!$user) {
                $user = $this->devisManager->saveEmailStep($email);
            }

            if ($user->getStatus() == Status::JUST_EMAIL) {
                return new RedirectResponse($this->router->generate('app.profil', ['id' => $user->getId()]), 302);
            }

            return new RedirectResponse($this->router->generate('app.animal', ['id' => $user->getId()]), 302);
        }

        return $this->templating->renderResponse(':default:step1.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route(path="/inscription/{id}", name="app.profil")
     * @ParamConverter("user", class="AppBundle:User")
     */
    public function profilAction(Request $request, $user = null)
    {
        $user = $request->attributes->get('user');

        if (!$user || $user->getStatus() != Status::JUST_EMAIL) {
            return new RedirectResponse($this->router->generate('app.devis'), 302);
        }

        $form = $this->formFactory->create(ProfilType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->devisManager->saveProfilStep($form->getData(), $user);

            return new RedirectResponse($this->router->generate('app.animal', ['id' => $user->getId()]), 302);
        }

        return $this->templating->renderResponse(':default:step2.html.twig', [
            'form' => $form->createView(),
            'id' => $user->getId(),
        ]);
    }

    /**
     * @Route(path="/fiche-animal/{id}", name="app.animal")
     * @ParamConverter("user", class="AppBundle:User")
     */
    public function animalAction(Request $request, $user = null)
    {
        $user = $request->attributes->get('user');

        if (!$user || $user->getStatus() != Status::JUST_USER) {
            return new RedirectResponse($this->router->generate('app.devis'), 302);
        }

        $form = $this->formFactory->create(AnimalType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $devis = $this->devisManager->saveAnimalStep($form->getData(), $user);

            $response = $this->fidanimoManager->send($devis);
            dump($response);die;

            return new RedirectResponse($this->router->generate('app.devis'), 302);
        }

        return $this->templating->renderResponse(':default:step3.html.twig', [
            'form' => $form->createView(),
            'id' => $user->getId(),
        ]);
    }
}
