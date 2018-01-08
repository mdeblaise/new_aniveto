<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180108143558 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE public.animal (id UUID NOT NULL, user_id UUID NOT NULL, name VARCHAR(180) NOT NULL, gender VARCHAR(255) NOT NULL, specie VARCHAR(255) NOT NULL, breed VARCHAR(255) DEFAULT NULL, date_of_birth DATE DEFAULT NULL, is_vaccinated BOOLEAN DEFAULT \'false\' NOT NULL, is_identified BOOLEAN DEFAULT \'false\' NOT NULL, is_sterilized BOOLEAN DEFAULT \'false\' NOT NULL, created_at__c TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at__c TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_2045573FA76ED395 ON public.animal (user_id)');
        $this->addSql('COMMENT ON COLUMN public.animal.id IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN public.animal.user_id IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE TABLE public.devis (id UUID NOT NULL, user_id UUID NOT NULL, animal_id UUID DEFAULT NULL, eid VARCHAR(255) DEFAULT NULL, status VARCHAR(10) NOT NULL, comment TEXT DEFAULT NULL, created_at__c TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at__c TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_BAF6A44FA76ED395 ON public.devis (user_id)');
        $this->addSql('CREATE INDEX IDX_BAF6A44F8E962C16 ON public.devis (animal_id)');
        $this->addSql('COMMENT ON COLUMN public.devis.id IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN public.devis.user_id IS \'(DC2Type:uuid)\'');
        $this->addSql('COMMENT ON COLUMN public.devis.animal_id IS \'(DC2Type:uuid)\'');
        $this->addSql('CREATE TABLE public."user" (id UUID NOT NULL, email VARCHAR(180) NOT NULL, gender VARCHAR(5) DEFAULT NULL, ln VARCHAR(255) DEFAULT NULL, fn VARCHAR(255) DEFAULT NULL, date_of_birth DATE DEFAULT NULL, phone VARCHAR(128) DEFAULT NULL, street VARCHAR(255) DEFAULT NULL, postcode VARCHAR(16) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, status VARCHAR(10) NOT NULL, created_at__c TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at__c TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_327C5DE7E7927C74 ON public."user" (email)');
        $this->addSql('COMMENT ON COLUMN public."user".id IS \'(DC2Type:uuid)\'');
        $this->addSql('ALTER TABLE public.animal ADD CONSTRAINT FK_2045573FA76ED395 FOREIGN KEY (user_id) REFERENCES public."user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE public.devis ADD CONSTRAINT FK_BAF6A44FA76ED395 FOREIGN KEY (user_id) REFERENCES public."user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE public.devis ADD CONSTRAINT FK_BAF6A44F8E962C16 FOREIGN KEY (animal_id) REFERENCES public.animal (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE public.devis DROP CONSTRAINT FK_BAF6A44F8E962C16');
        $this->addSql('ALTER TABLE public.animal DROP CONSTRAINT FK_2045573FA76ED395');
        $this->addSql('ALTER TABLE public.devis DROP CONSTRAINT FK_BAF6A44FA76ED395');
        $this->addSql('DROP TABLE public.animal');
        $this->addSql('DROP TABLE public.devis');
        $this->addSql('DROP TABLE public."user"');
    }
}
