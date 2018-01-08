<?php

namespace AppBundle\Domain\Breed\Model;

use AppBundle\Domain\Fidanimo\Model\Race;
use Greg0ire\Enum\AbstractEnum;

class Breed extends AbstractEnum
{
    const Race_UNKNOWN = 'Race_unknown';
    const Race_OTHER = 'Race_other';

    //##Cats###
    const CAT_1 = 'cat_1';
    const CAT_2 = 'cat_2';
    const CAT_3 = 'cat_3';
    const CAT_4 = 'cat_4';
    const CAT_5 = 'cat_5';
    const CAT_6 = 'cat_6';
    const CAT_7 = 'cat_7';
    const CAT_8 = 'cat_8';
    const CAT_9 = 'cat_9';
    const CAT_10 = 'cat_10';
    const CAT_11 = 'cat_11';
    const CAT_12 = 'cat_12';
    const CAT_13 = 'cat_13';
    const CAT_14 = 'cat_14';
    const CAT_15 = 'cat_15';
    const CAT_16 = 'cat_16';
    const CAT_17 = 'cat_17';
    const CAT_18 = 'cat_18';
    const CAT_19 = 'cat_19';
    const CAT_20 = 'cat_20';
    const CAT_21 = 'cat_21';
    const CAT_22 = 'cat_22';
    const CAT_23 = 'cat_23';
    const CAT_24 = 'cat_24';
    const CAT_25 = 'cat_25';
    const CAT_26 = 'cat_26';
    const CAT_27 = 'cat_27';
    const CAT_28 = 'cat_28';
    const CAT_29 = 'cat_29';
    const CAT_30 = 'cat_30';
    const CAT_31 = 'cat_31';
    const CAT_32 = 'cat_32';
    const CAT_33 = 'cat_33';
    const CAT_34 = 'cat_34';
    const CAT_35 = 'cat_35';
    const CAT_36 = 'cat_36';
    const CAT_37 = 'cat_37';
    const CAT_38 = 'cat_38';
    const CAT_39 = 'cat_39';
    const CAT_40 = 'cat_40';
    const CAT_41 = 'cat_41';
    const CAT_42 = 'cat_42';
    const CAT_43 = 'cat_43';
    const CAT_44 = 'cat_44';
    const CAT_45 = 'cat_45';
    const CAT_46 = 'cat_46';
    const CAT_47 = 'cat_47';
    const CAT_48 = 'cat_48';
    const CAT_49 = 'cat_49';
    const CAT_50 = 'cat_50';
    const CAT_51 = 'cat_51';
    const CAT_52 = 'cat_52';

    //##Dogs###
    const DOG_1 = 'dog_1';
    const DOG_2 = 'dog_2';
    const DOG_3 = 'dog_3';
    const DOG_4 = 'dog_4';
    const DOG_5 = 'dog_5';
    const DOG_6 = 'dog_6';
    const DOG_7 = 'dog_7';
    const DOG_8 = 'dog_8';
    const DOG_9 = 'dog_9';
    const DOG_10 = 'dog_10';
    const DOG_11 = 'dog_11';
    const DOG_12 = 'dog_12';
    const DOG_13 = 'dog_13';
    const DOG_14 = 'dog_14';
    const DOG_15 = 'dog_15';
    const DOG_16 = 'dog_16';
    const DOG_17 = 'dog_17';
    const DOG_18 = 'dog_18';
    const DOG_19 = 'dog_19';
    const DOG_20 = 'dog_20';
    const DOG_21 = 'dog_21';
    const DOG_22 = 'dog_22';
    const DOG_23 = 'dog_23';
    const DOG_24 = 'dog_24';
    const DOG_25 = 'dog_25';
    const DOG_26 = 'dog_26';
    const DOG_27 = 'dog_27';
    const DOG_28 = 'dog_28';
    const DOG_29 = 'dog_29';
    const DOG_30 = 'dog_30';
    const DOG_31 = 'dog_31';
    const DOG_32 = 'dog_32';
    const DOG_33 = 'dog_33';
    const DOG_34 = 'dog_34';
    const DOG_35 = 'dog_35';
    const DOG_36 = 'dog_36';
    const DOG_37 = 'dog_37';
    const DOG_38 = 'dog_38';
    const DOG_39 = 'dog_39';
    const DOG_40 = 'dog_40';
    const DOG_41 = 'dog_41';
    const DOG_42 = 'dog_42';
    const DOG_43 = 'dog_43';
    const DOG_44 = 'dog_44';
    const DOG_45 = 'dog_45';
    const DOG_46 = 'dog_46';
    const DOG_47 = 'dog_47';
    const DOG_48 = 'dog_48';
    const DOG_49 = 'dog_49';
    const DOG_50 = 'dog_50';
    const DOG_51 = 'dog_51';
    const DOG_52 = 'dog_52';
    const DOG_53 = 'dog_53';
    const DOG_54 = 'dog_54';
    const DOG_55 = 'dog_55';
    const DOG_56 = 'dog_56';
    const DOG_57 = 'dog_57';
    const DOG_58 = 'dog_58';
    const DOG_59 = 'dog_59';
    const DOG_60 = 'dog_60';
    const DOG_61 = 'dog_61';
    const DOG_62 = 'dog_62';
    const DOG_63 = 'dog_63';
    const DOG_64 = 'dog_64';
    const DOG_65 = 'dog_65';
    const DOG_66 = 'dog_66';
    const DOG_67 = 'dog_67';
    const DOG_68 = 'dog_68';
    const DOG_69 = 'dog_69';
    const DOG_70 = 'dog_70';
    const DOG_71 = 'dog_71';
    const DOG_72 = 'dog_72';
    const DOG_73 = 'dog_73';
    const DOG_74 = 'dog_74';
    const DOG_75 = 'dog_75';
    const DOG_76 = 'dog_76';
    const DOG_77 = 'dog_77';
    const DOG_78 = 'dog_78';
    const DOG_79 = 'dog_79';
    const DOG_80 = 'dog_80';
    const DOG_81 = 'dog_81';
    const DOG_82 = 'dog_82';
    const DOG_83 = 'dog_83';
    const DOG_84 = 'dog_84';
    const DOG_85 = 'dog_85';
    const DOG_86 = 'dog_86';
    const DOG_87 = 'dog_87';
    const DOG_88 = 'dog_88';
    const DOG_89 = 'dog_89';
    const DOG_90 = 'dog_90';
    const DOG_91 = 'dog_91';
    const DOG_92 = 'dog_92';
    const DOG_93 = 'dog_93';
    const DOG_94 = 'dog_94';
    const DOG_95 = 'dog_95';
    const DOG_96 = 'dog_96';
    const DOG_97 = 'dog_97';
    const DOG_98 = 'dog_98';
    const DOG_99 = 'dog_99';
    const DOG_100 = 'dog_100';
    const DOG_101 = 'dog_101';
    const DOG_102 = 'dog_102';
    const DOG_103 = 'dog_103';
    const DOG_104 = 'dog_104';
    const DOG_105 = 'dog_105';
    const DOG_106 = 'dog_106';
    const DOG_107 = 'dog_107';
    const DOG_108 = 'dog_108';
    const DOG_109 = 'dog_109';
    const DOG_110 = 'dog_110';
    const DOG_111 = 'dog_111';
    const DOG_112 = 'dog_112';
    const DOG_113 = 'dog_113';
    const DOG_114 = 'dog_114';
    const DOG_115 = 'dog_115';
    const DOG_116 = 'dog_116';
    const DOG_117 = 'dog_117';
    const DOG_118 = 'dog_118';
    const DOG_119 = 'dog_119';
    const DOG_120 = 'dog_120';
    const DOG_121 = 'dog_121';
    const DOG_122 = 'dog_122';
    const DOG_123 = 'dog_123';
    const DOG_124 = 'dog_124';
    const DOG_125 = 'dog_125';
    const DOG_126 = 'dog_126';
    const DOG_127 = 'dog_127';
    const DOG_128 = 'dog_128';
    const DOG_129 = 'dog_129';
    const DOG_130 = 'dog_130';
    const DOG_131 = 'dog_131';
    const DOG_132 = 'dog_132';
    const DOG_133 = 'dog_133';
    const DOG_134 = 'dog_134';
    const DOG_135 = 'dog_135';
    const DOG_136 = 'dog_136';
    const DOG_137 = 'dog_137';
    const DOG_138 = 'dog_138';
    const DOG_139 = 'dog_139';
    const DOG_140 = 'dog_140';
    const DOG_141 = 'dog_141';
    const DOG_142 = 'dog_142';
    const DOG_143 = 'dog_143';
    const DOG_144 = 'dog_144';
    const DOG_145 = 'dog_145';
    const DOG_146 = 'dog_146';
    const DOG_147 = 'dog_147';
    const DOG_148 = 'dog_148';
    const DOG_149 = 'dog_149';
    const DOG_150 = 'dog_150';
    const DOG_151 = 'dog_151';
    const DOG_152 = 'dog_152';
    const DOG_156 = 'dog_156';
    const DOG_157 = 'dog_157';
    const DOG_158 = 'dog_158';
    const DOG_159 = 'dog_159';
    const DOG_160 = 'dog_160';
    const DOG_161 = 'dog_161';
    const DOG_162 = 'dog_162';
    const DOG_163 = 'dog_163';
    const DOG_164 = 'dog_164';
    const DOG_165 = 'dog_165';
    const DOG_166 = 'dog_166';
    const DOG_167 = 'dog_167';
    const DOG_168 = 'dog_168';
    const DOG_169 = 'dog_169';
    const DOG_170 = 'dog_170';
    const DOG_171 = 'dog_171';
    const DOG_172 = 'dog_172';
    const DOG_173 = 'dog_173';
    const DOG_174 = 'dog_174';
    const DOG_175 = 'dog_175';
    const DOG_176 = 'dog_176';
    const DOG_177 = 'dog_177';
    const DOG_178 = 'dog_178';
    const DOG_179 = 'dog_179';
    const DOG_180 = 'dog_180';
    const DOG_181 = 'dog_181';
    const DOG_182 = 'dog_182';
    const DOG_183 = 'dog_183';
    const DOG_184 = 'dog_184';
    const DOG_185 = 'dog_185';
    const DOG_186 = 'dog_186';
    const DOG_187 = 'dog_187';
    const DOG_188 = 'dog_188';
    const DOG_189 = 'dog_189';
    const DOG_190 = 'dog_190';
    const DOG_191 = 'dog_191';
    const DOG_192 = 'dog_192';
    const DOG_193 = 'dog_193';
    const DOG_194 = 'dog_194';
    const DOG_195 = 'dog_195';
    const DOG_196 = 'dog_196';
    const DOG_197 = 'dog_197';
    const DOG_198 = 'dog_198';
    const DOG_199 = 'dog_199';
    const DOG_200 = 'dog_200';
    const DOG_201 = 'dog_201';
    const DOG_202 = 'dog_202';
    const DOG_203 = 'dog_203';
    const DOG_204 = 'dog_204';
    const DOG_205 = 'dog_205';
    const DOG_206 = 'dog_206';
    const DOG_207 = 'dog_207';
    const DOG_208 = 'dog_208';
    const DOG_209 = 'dog_209';
    const DOG_210 = 'dog_210';
    const DOG_211 = 'dog_211';
    const DOG_212 = 'dog_212';
    const DOG_213 = 'dog_213';
    const DOG_214 = 'dog_214';
    const DOG_215 = 'dog_215';
    const DOG_216 = 'dog_216';
    const DOG_217 = 'dog_217';
    const DOG_218 = 'dog_218';
    const DOG_219 = 'dog_219';
    const DOG_220 = 'dog_220';
    const DOG_221 = 'dog_221';
    const DOG_222 = 'dog_222';
    const DOG_223 = 'dog_223';
    const DOG_224 = 'dog_224';
    const DOG_225 = 'dog_225';
    const DOG_226 = 'dog_226';
    const DOG_227 = 'dog_227';
    const DOG_228 = 'dog_228';
    const DOG_229 = 'dog_229';
    const DOG_230 = 'dog_230';
    const DOG_231 = 'dog_231';
    const DOG_232 = 'dog_232';
    const DOG_233 = 'dog_233';
    const DOG_234 = 'dog_234';
    const DOG_235 = 'dog_235';
    const DOG_236 = 'dog_236';
    const DOG_237 = 'dog_237';
    const DOG_238 = 'dog_238';
    const DOG_239 = 'dog_239';
    const DOG_240 = 'dog_240';
    const DOG_241 = 'dog_241';
    const DOG_242 = 'dog_242';
    const DOG_243 = 'dog_243';
    const DOG_244 = 'dog_244';
    const DOG_245 = 'dog_245';
    const DOG_246 = 'dog_246';
    const DOG_247 = 'dog_247';
    const DOG_248 = 'dog_248';
    const DOG_249 = 'dog_249';
    const DOG_250 = 'dog_250';
    const DOG_251 = 'dog_251';
    const DOG_252 = 'dog_252';
    const DOG_253 = 'dog_253';
    const DOG_254 = 'dog_254';
    const DOG_255 = 'dog_255';
    const DOG_256 = 'dog_256';
    const DOG_257 = 'dog_257';
    const DOG_258 = 'dog_258';
    const DOG_259 = 'dog_259';
    const DOG_260 = 'dog_260';
    const DOG_261 = 'dog_261';
    const DOG_262 = 'dog_262';
    const DOG_263 = 'dog_263';
    const DOG_264 = 'dog_264';
    const DOG_265 = 'dog_265';
    const DOG_266 = 'dog_266';
    const DOG_267 = 'dog_267';
    const DOG_268 = 'dog_268';
    const DOG_269 = 'dog_269';
    const DOG_270 = 'dog_270';
    const DOG_271 = 'dog_271';
    const DOG_272 = 'dog_272';
    const DOG_273 = 'dog_273';
    const DOG_274 = 'dog_274';
    const DOG_275 = 'dog_275';
    const DOG_276 = 'dog_276';
    const DOG_277 = 'dog_277';
    const DOG_278 = 'dog_278';
    const DOG_279 = 'dog_279';
    const DOG_280 = 'dog_280';
    const DOG_281 = 'dog_281';
    const DOG_282 = 'dog_282';
    const DOG_283 = 'dog_283';
    const DOG_284 = 'dog_284';
    const DOG_285 = 'dog_285';
    const DOG_286 = 'dog_286';
    const DOG_287 = 'dog_287';
    const DOG_288 = 'dog_288';
    const DOG_289 = 'dog_289';
    const DOG_290 = 'dog_290';
    const DOG_291 = 'dog_291';
    const DOG_292 = 'dog_292';
    const DOG_293 = 'dog_293';
    const DOG_294 = 'dog_294';
    const DOG_295 = 'dog_295';
    const DOG_296 = 'dog_296';
    const DOG_297 = 'dog_297';
    const DOG_298 = 'dog_298';
    const DOG_299 = 'dog_299';
    const DOG_300 = 'dog_300';
    const DOG_301 = 'dog_301';
    const DOG_302 = 'dog_302';
    const DOG_303 = 'dog_303';
    const DOG_304 = 'dog_304';
    const DOG_305 = 'dog_305';
    const DOG_306 = 'dog_306';
    const DOG_307 = 'dog_307';
    const DOG_308 = 'dog_308';
    const DOG_309 = 'dog_309';
    const DOG_310 = 'dog_310';
    const DOG_311 = 'dog_311';
    const DOG_312 = 'dog_312';
    const DOG_313 = 'dog_313';
    const DOG_314 = 'dog_314';
    const DOG_315 = 'dog_315';
    const DOG_316 = 'dog_316';
    const DOG_317 = 'dog_317';
    const DOG_318 = 'dog_318';
    const DOG_319 = 'dog_319';
    const DOG_320 = 'dog_320';
    const DOG_321 = 'dog_321';
    const DOG_322 = 'dog_322';
    const DOG_323 = 'dog_323';
    const DOG_324 = 'dog_324';
    const DOG_325 = 'dog_325';
    const DOG_326 = 'dog_326';
    const DOG_327 = 'dog_327';
    const DOG_328 = 'dog_328';
    const DOG_329 = 'dog_329';
    const DOG_330 = 'dog_330';
    const DOG_331 = 'dog_331';
    const DOG_332 = 'dog_332';
    const DOG_333 = 'dog_333';
    const DOG_334 = 'dog_334';
    const DOG_335 = 'dog_335';
    const DOG_336 = 'dog_336';
    const DOG_337 = 'dog_337';
    const DOG_338 = 'dog_338';
    const DOG_339 = 'dog_339';
    const DOG_340 = 'dog_340';
    const DOG_341 = 'dog_341';
    const DOG_342 = 'dog_342';
    const DOG_343 = 'dog_343';
    const DOG_344 = 'dog_344';
    const DOG_345 = 'dog_345';
    const DOG_346 = 'dog_346';
    const DOG_347 = 'dog_347';
    const DOG_348 = 'dog_348';
    const DOG_349 = 'dog_349';
    const DOG_350 = 'dog_350';
    const DOG_351 = 'dog_351';
    const DOG_352 = 'dog_352';
    const DOG_353 = 'dog_353';
    const DOG_354 = 'dog_354';
    const DOG_355 = 'dog_355';
    const DOG_356 = 'dog_356';


    static function getFidAnimoCorrespondance($race){
        switch($race){
            case self::CAT_1:
                return Race::CAT_1;
            case self::CAT_2:
                return Race::CAT_2;
            case self::CAT_3:
                return Race::CAT_3;
            case self::CAT_4:
                return Race::CAT_4;
            case self::CAT_5:
                return Race::CAT_5;
            case self::CAT_6:
                return Race::CAT_6;
            case self::CAT_7:
                return Race::CAT_7;
            case self::CAT_8:
                return Race::CAT_8;
            case self::CAT_9:
                return Race::CAT_9;
            case self::CAT_10:
                return Race::CAT_10;
            case self::CAT_11:
                return Race::CAT_11;
            case self::CAT_12:
                return Race::CAT_12;
            case self::CAT_13:
                return Race::CAT_13;
            case self::CAT_14:
                return Race::CAT_14;
            case self::CAT_15:
                return Race::CAT_15;
            case self::CAT_16:
                return Race::CAT_16;
            case self::CAT_17:
                return Race::CAT_17;
            case self::CAT_18:
                return Race::CAT_18;
            case self::CAT_19:
                return Race::CAT_19;
            case self::CAT_20:
                return Race::CAT_20;
            case self::CAT_21:
                return Race::CAT_21;
            case self::CAT_22:
                return Race::CAT_22;
            case self::CAT_23:
                return Race::CAT_23;
            case self::CAT_24:
                return Race::CAT_24;
            case self::CAT_25:
                return Race::CAT_25;
            case self::CAT_26:
                return Race::CAT_26;
            case self::CAT_27:
                return Race::CAT_27;
            case self::CAT_28:
                return Race::CAT_28;
            case self::CAT_29:
                return Race::CAT_29;
            case self::CAT_30:
                return Race::CAT_30;
            case self::CAT_31:
                return Race::CAT_31;
            case self::CAT_32:
                return Race::CAT_32;
            case self::CAT_33:
                return Race::CAT_33;
            case self::CAT_34:
                return Race::CAT_34;
            case self::CAT_35:
                return Race::CAT_35;
            case self::CAT_36:
                return Race::CAT_36;
            case self::CAT_37:
                return Race::CAT_37;
            case self::CAT_38:
                return Race::CAT_38;
            case self::CAT_39:
                return Race::CAT_39;
            case self::CAT_40:
                return Race::CAT_40;
            case self::CAT_41:
                return Race::CAT_41;
            case self::CAT_42:
                return Race::CAT_42;
            case self::CAT_43:
                return Race::CAT_43;
            case self::CAT_44:
                return Race::CAT_44;
            case self::CAT_45:
                return Race::CAT_45;
            case self::CAT_46:
                return Race::CAT_46;
            case self::CAT_47:
                return Race::CAT_47;
            case self::CAT_48:
                return Race::CAT_48;
            case self::CAT_49:
                return Race::CAT_49;
            case self::CAT_50:
                return Race::CAT_50;
            case self::CAT_51:
                return Race::CAT_51;
            case self::CAT_52:
                return Race::CAT_52;



            case self::DOG_1:
                return Race::DOG_1;
            case self::DOG_2:
                return Race::DOG_2;
            case self::DOG_3:
                return Race::DOG_3;
            case self::DOG_4:
                return Race::DOG_4;
            case self::DOG_5:
                return Race::DOG_5;
            case self::DOG_6:
                return Race::DOG_6;
            case self::DOG_7:
                return Race::DOG_7;
            case self::DOG_8:
                return Race::DOG_8;
            case self::DOG_9:
                return Race::DOG_9;
            case self::DOG_10:
                return Race::DOG_10;
            case self::DOG_11:
                return Race::DOG_11;
            case self::DOG_12:
                return Race::DOG_12;
            case self::DOG_13:
                return Race::DOG_13;
            case self::DOG_14:
                return Race::DOG_14;
            case self::DOG_15:
                return Race::DOG_15;
            case self::DOG_16:
                return Race::DOG_16;
            case self::DOG_17:
                return Race::DOG_17;
            case self::DOG_18:
                return Race::DOG_18;
            case self::DOG_19:
                return Race::DOG_19;
            case self::DOG_20:
                return Race::DOG_20;
            case self::DOG_21:
                return Race::DOG_21;
            case self::DOG_22:
                return Race::DOG_22;
            case self::DOG_23:
                return Race::DOG_23;
            case self::DOG_24:
                return Race::DOG_24;
            case self::DOG_25:
                return Race::DOG_25;
            case self::DOG_26:
                return Race::DOG_26;
            case self::DOG_27:
                return Race::DOG_27;
            case self::DOG_28:
                return Race::DOG_28;
            case self::DOG_29:
                return Race::DOG_29;
            case self::DOG_30:
                return Race::DOG_30;
            case self::DOG_31:
                return Race::DOG_31;
            case self::DOG_32:
                return Race::DOG_32;
            case self::DOG_33:
                return Race::DOG_33;
            case self::DOG_34:
                return Race::DOG_34;
            case self::DOG_35:
                return Race::DOG_35;
            case self::DOG_36:
                return Race::DOG_36;
            case self::DOG_37:
                return Race::DOG_37;
            case self::DOG_38:
                return Race::DOG_38;
            case self::DOG_39:
                return Race::DOG_39;
            case self::DOG_40:
                return Race::DOG_40;
            case self::DOG_41:
                return Race::DOG_41;
            case self::DOG_42:
                return Race::DOG_42;
            case self::DOG_43:
                return Race::DOG_43;
            case self::DOG_44:
                return Race::DOG_44;
            case self::DOG_45:
                return Race::DOG_45;
            case self::DOG_46:
                return Race::DOG_46;
            case self::DOG_47:
                return Race::DOG_47;
            case self::DOG_48:
                return Race::DOG_48;
            case self::DOG_49:
                return Race::DOG_49;
            case self::DOG_50:
                return Race::DOG_50;
            case self::DOG_51:
                return Race::DOG_51;
            case self::DOG_52:
                return Race::DOG_52;
            case self::DOG_53:
                return Race::DOG_53;
            case self::DOG_54:
                return Race::DOG_54;
            case self::DOG_55:
                return Race::DOG_55;
            case self::DOG_56:
                return Race::DOG_56;
            case self::DOG_57:
                return Race::DOG_57;
            case self::DOG_58:
                return Race::DOG_58;
            case self::DOG_59:
                return Race::DOG_59;
            case self::DOG_60:
                return Race::DOG_60;
            case self::DOG_61:
                return Race::DOG_61;
            case self::DOG_62:
                return Race::DOG_62;
            case self::DOG_63:
                return Race::DOG_63;
            case self::DOG_64:
                return Race::DOG_64;
            case self::DOG_65:
                return Race::DOG_65;
            case self::DOG_66:
                return Race::DOG_66;
            case self::DOG_67:
                return Race::DOG_67;
            case self::DOG_68:
                return Race::DOG_68;
            case self::DOG_69:
                return Race::DOG_69;
            case self::DOG_70:
                return Race::DOG_70;
            case self::DOG_71:
                return Race::DOG_71;
            case self::DOG_72:
                return Race::DOG_72;
            case self::DOG_73:
                return Race::DOG_73;
            case self::DOG_74:
                return Race::DOG_74;
            case self::DOG_75:
                return Race::DOG_75;
            case self::DOG_76:
                return Race::DOG_76;
            case self::DOG_77:
                return Race::DOG_77;
            case self::DOG_78:
                return Race::DOG_78;
            case self::DOG_79:
                return Race::DOG_79;
            case self::DOG_80:
                return Race::DOG_80;
            case self::DOG_81:
                return Race::DOG_81;
            case self::DOG_82:
                return Race::DOG_82;
            case self::DOG_83:
                return Race::DOG_83;
            case self::DOG_84:
                return Race::DOG_84;
            case self::DOG_85:
                return Race::DOG_85;
            case self::DOG_86:
                return Race::DOG_86;
            case self::DOG_87:
                return Race::DOG_87;
            case self::DOG_88:
                return Race::DOG_88;
            case self::DOG_89:
                return Race::DOG_89;
            case self::DOG_90:
                return Race::DOG_90;
            case self::DOG_91:
                return Race::DOG_91;
            case self::DOG_92:
                return Race::DOG_92;
            case self::DOG_93:
                return Race::DOG_93;
            case self::DOG_94:
                return Race::DOG_94;
            case self::DOG_95:
                return Race::DOG_95;
            case self::DOG_96:
                return Race::DOG_96;
            case self::DOG_97:
                return Race::DOG_97;
            case self::DOG_98:
                return Race::DOG_98;
            case self::DOG_99:
                return Race::DOG_99;
            case self::DOG_100:
                return Race::DOG_100;
            case self::DOG_101:
                return Race::DOG_101;
            case self::DOG_102:
                return Race::DOG_102;
            case self::DOG_103:
                return Race::DOG_103;
            case self::DOG_104:
                return Race::DOG_104;
            case self::DOG_105:
                return Race::DOG_105;
            case self::DOG_106:
                return Race::DOG_106;
            case self::DOG_107:
                return Race::DOG_107;
            case self::DOG_108:
                return Race::DOG_108;
            case self::DOG_109:
                return Race::DOG_109;
            case self::DOG_110:
                return Race::DOG_110;
            case self::DOG_111:
                return Race::DOG_111;
            case self::DOG_112:
                return Race::DOG_112;
            case self::DOG_113:
                return Race::DOG_113;
            case self::DOG_114:
                return Race::DOG_114;
            case self::DOG_115:
                return Race::DOG_115;
            case self::DOG_116:
                return Race::DOG_116;
            case self::DOG_117:
                return Race::DOG_117;
            case self::DOG_118:
                return Race::DOG_118;
            case self::DOG_119:
                return Race::DOG_119;
            case self::DOG_120:
                return Race::DOG_120;
            case self::DOG_121:
                return Race::DOG_121;
            case self::DOG_122:
                return Race::DOG_122;
            case self::DOG_123:
                return Race::DOG_123;
            case self::DOG_124:
                return Race::DOG_124;
            case self::DOG_125:
                return Race::DOG_125;
            case self::DOG_126:
                return Race::DOG_126;
            case self::DOG_127:
                return Race::DOG_127;
            case self::DOG_128:
                return Race::DOG_128;
            case self::DOG_129:
                return Race::DOG_129;
            case self::DOG_130:
                return Race::DOG_130;
            case self::DOG_131:
                return Race::DOG_131;
            case self::DOG_132:
                return Race::DOG_132;
            case self::DOG_133:
                return Race::DOG_133;
            case self::DOG_134:
                return Race::DOG_134;
            case self::DOG_135:
                return Race::DOG_135;
            case self::DOG_136:
                return Race::DOG_136;
            case self::DOG_137:
                return Race::DOG_137;
            case self::DOG_138:
                return Race::DOG_138;
            case self::DOG_139:
                return Race::DOG_139;
            case self::DOG_140:
                return Race::DOG_140;
            case self::DOG_141:
                return Race::DOG_141;
            case self::DOG_142:
                return Race::DOG_142;
            case self::DOG_143:
                return Race::DOG_143;
            case self::DOG_144:
                return Race::DOG_144;
            case self::DOG_145:
                return Race::DOG_145;
            case self::DOG_146:
                return Race::DOG_146;
            case self::DOG_147:
                return Race::DOG_147;
            case self::DOG_148:
                return Race::DOG_148;
            case self::DOG_149:
                return Race::DOG_149;
            case self::DOG_150:
                return Race::DOG_150;
            case self::DOG_151:
                return Race::DOG_151;
            case self::DOG_152:
                return Race::DOG_152;
            case self::DOG_156:
                return Race::DOG_156;
            case self::DOG_157:
                return Race::DOG_157;
            case self::DOG_158:
                return Race::DOG_158;
            case self::DOG_159:
                return Race::DOG_159;
            case self::DOG_160:
                return Race::DOG_160;
            case self::DOG_161:
                return Race::DOG_161;
            case self::DOG_162:
                return Race::DOG_162;
            case self::DOG_163:
                return Race::DOG_163;
            case self::DOG_164:
                return Race::DOG_164;
            case self::DOG_165:
                return Race::DOG_165;
            case self::DOG_166:
                return Race::DOG_166;
            case self::DOG_167:
                return Race::DOG_167;
            case self::DOG_168:
                return Race::DOG_168;
            case self::DOG_169:
                return Race::DOG_169;
            case self::DOG_170:
                return Race::DOG_170;
            case self::DOG_171:
                return Race::DOG_171;
            case self::DOG_172:
                return Race::DOG_172;
            case self::DOG_173:
                return Race::DOG_173;
            case self::DOG_174:
                return Race::DOG_174;
            case self::DOG_175:
                return Race::DOG_175;
            case self::DOG_176:
                return Race::DOG_176;
            case self::DOG_177:
                return Race::DOG_177;
            case self::DOG_178:
                return Race::DOG_178;
            case self::DOG_179:
                return Race::DOG_179;
            case self::DOG_180:
                return Race::DOG_180;
            case self::DOG_181:
                return Race::DOG_181;
            case self::DOG_182:
                return Race::DOG_182;
            case self::DOG_183:
                return Race::DOG_183;
            case self::DOG_184:
                return Race::DOG_184;
            case self::DOG_185:
                return Race::DOG_185;
            case self::DOG_186:
                return Race::DOG_186;
            case self::DOG_187:
                return Race::DOG_187;
            case self::DOG_188:
                return Race::DOG_188;
            case self::DOG_189:
                return Race::DOG_189;
            case self::DOG_190:
                return Race::DOG_190;
            case self::DOG_191:
                return Race::DOG_191;
            case self::DOG_192:
                return Race::DOG_192;
            case self::DOG_193:
                return Race::DOG_193;
            case self::DOG_194:
                return Race::DOG_194;
            case self::DOG_195:
                return Race::DOG_195;
            case self::DOG_196:
                return Race::DOG_196;
            case self::DOG_197:
                return Race::DOG_197;
            case self::DOG_198:
                return Race::DOG_198;
            case self::DOG_199:
                return Race::DOG_199;
            case self::DOG_200:
                return Race::DOG_200;
            case self::DOG_201:
                return Race::DOG_201;
            case self::DOG_202:
                return Race::DOG_202;
            case self::DOG_203:
                return Race::DOG_203;
            case self::DOG_204:
                return Race::DOG_204;
            case self::DOG_205:
                return Race::DOG_205;
            case self::DOG_206:
                return Race::DOG_206;
            case self::DOG_207:
                return Race::DOG_207;
            case self::DOG_208:
                return Race::DOG_208;
            case self::DOG_209:
                return Race::DOG_209;
            case self::DOG_210:
                return Race::DOG_210;
            case self::DOG_211:
                return Race::DOG_211;
            case self::DOG_212:
                return Race::DOG_212;
            case self::DOG_213:
                return Race::DOG_213;
            case self::DOG_214:
                return Race::DOG_214;
            case self::DOG_215:
                return Race::DOG_215;
            case self::DOG_216:
                return Race::DOG_216;
            case self::DOG_217:
                return Race::DOG_217;
            case self::DOG_218:
                return Race::DOG_218;
            case self::DOG_219:
                return Race::DOG_219;
            case self::DOG_220:
                return Race::DOG_220;
            case self::DOG_221:
                return Race::DOG_221;
            case self::DOG_222:
                return Race::DOG_222;
            case self::DOG_223:
                return Race::DOG_223;
            case self::DOG_224:
                return Race::DOG_224;
            case self::DOG_225:
                return Race::DOG_225;
            case self::DOG_226:
                return Race::DOG_226;
            case self::DOG_227:
                return Race::DOG_227;
            case self::DOG_228:
                return Race::DOG_228;
            case self::DOG_229:
                return Race::DOG_229;
            case self::DOG_230:
                return Race::DOG_230;
            case self::DOG_231:
                return Race::DOG_231;
            case self::DOG_232:
                return Race::DOG_232;
            case self::DOG_233:
                return Race::DOG_233;
            case self::DOG_234:
                return Race::DOG_234;
            case self::DOG_235:
                return Race::DOG_235;
            case self::DOG_236:
                return Race::DOG_36;
            case self::DOG_237:
                return Race::DOG_237;
            case self::DOG_238:
                return Race::DOG_238;
            case self::DOG_239:
                return Race::DOG_239;
            case self::DOG_240:
                return Race::DOG_240;
            case self::DOG_241:
                return Race::DOG_241;
            case self::DOG_242:
                return Race::DOG_242;
            case self::DOG_243:
                return Race::DOG_243;
            case self::DOG_244:
                return Race::DOG_244;
            case self::DOG_245:
                return Race::DOG_245;
            case self::DOG_246:
                return Race::DOG_246;
            case self::DOG_247:
                return Race::DOG_247;
            case self::DOG_248:
                return Race::DOG_248;
            case self::DOG_249:
                return Race::DOG_249;
            case self::DOG_250:
                return Race::DOG_250;
            case self::DOG_251:
                return Race::DOG_251;
            case self::DOG_252:
                return Race::DOG_252;
            case self::DOG_253:
                return Race::DOG_253;
            case self::DOG_254:
                return Race::DOG_254;
            case self::DOG_255:
                return Race::DOG_255;
            case self::DOG_256:
                return Race::DOG_256;
            case self::DOG_257:
                return Race::DOG_257;
            case self::DOG_258:
                return Race::DOG_258;
            case self::DOG_259:
                return Race::DOG_259;
            case self::DOG_260:
                return Race::DOG_260;
            case self::DOG_261:
                return Race::DOG_261;
            case self::DOG_262:
                return Race::DOG_262;
            case self::DOG_263:
                return Race::DOG_263;
            case self::DOG_264:
                return Race::DOG_264;
            case self::DOG_265:
                return Race::DOG_265;
            case self::DOG_266:
                return Race::DOG_266;
            case self::DOG_267:
                return Race::DOG_267;
            case self::DOG_268:
                return Race::DOG_268;
            case self::DOG_269:
                return Race::DOG_269;
            case self::DOG_270:
                return Race::DOG_270;
            case self::DOG_271:
                return Race::DOG_271;
            case self::DOG_272:
                return Race::DOG_272;
            case self::DOG_273:
                return Race::DOG_273;
            case self::DOG_274:
                return Race::DOG_74;
            case self::DOG_275:
                return Race::DOG_275;
            case self::DOG_276:
                return Race::DOG_276;
            case self::DOG_277:
                return Race::DOG_277;
            case self::DOG_278:
                return Race::DOG_278;
            case self::DOG_279:
                return Race::DOG_279;
            case self::DOG_280:
                return Race::DOG_280;
            case self::DOG_281:
                return Race::DOG_281;
            case self::DOG_282:
                return Race::DOG_282;
            case self::DOG_283:
                return Race::DOG_283;
            case self::DOG_284:
                return Race::DOG_284;
            case self::DOG_285:
                return Race::DOG_285;
            case self::DOG_286:
                return Race::DOG_286;
            case self::DOG_287:
                return Race::DOG_287;
            case self::DOG_288:
                return Race::DOG_288;
            case self::DOG_289:
                return Race::DOG_289;
            case self::DOG_290:
                return Race::DOG_290;
            case self::DOG_291:
                return Race::DOG_291;
            case self::DOG_292:
                return Race::DOG_292;
            case self::DOG_293:
                return Race::DOG_293;
            case self::DOG_294:
                return Race::DOG_294;
            case self::DOG_295:
                return Race::DOG_295;
            case self::DOG_296:
                return Race::DOG_296;
            case self::DOG_297:
                return Race::DOG_297;
            case self::DOG_298:
                return Race::DOG_298;
            case self::DOG_299:
                return Race::DOG_299;
            case self::DOG_300:
                return Race::DOG_300;
            case self::DOG_301:
                return Race::DOG_301;
            case self::DOG_302:
                return Race::DOG_302;
            case self::DOG_303:
                return Race::DOG_303;
            case self::DOG_304:
                return Race::DOG_304;
            case self::DOG_305:
                return Race::DOG_305;
            case self::DOG_306:
                return Race::DOG_306;
            case self::DOG_307:
                return Race::DOG_307;
            case self::DOG_308:
                return Race::DOG_308;
            case self::DOG_309:
                return Race::DOG_309;
            case self::DOG_310:
                return Race::DOG_310;
            case self::DOG_311:
                return Race::DOG_311;
            case self::DOG_312:
                return Race::DOG_312;
            case self::DOG_313:
                return Race::DOG_313;
            case self::DOG_314:
                return Race::DOG_314;
            case self::DOG_315:
                return Race::DOG_315;
            case self::DOG_316:
                return Race::DOG_316;
            case self::DOG_317:
                return Race::DOG_317;
            case self::DOG_318:
                return Race::DOG_318;
            case self::DOG_319:
                return Race::DOG_319;
            case self::DOG_320:
                return Race::DOG_320;
            case self::DOG_321:
                return Race::DOG_321;
            case self::DOG_322:
                return Race::DOG_322;
            case self::DOG_323:
                return Race::DOG_323;
            case self::DOG_324:
                return Race::DOG_324;
            case self::DOG_325:
                return Race::DOG_325;
            case self::DOG_326:
                return Race::DOG_326;
            case self::DOG_327:
                return Race::DOG_327;
            case self::DOG_328:
                return Race::DOG_328;
            case self::DOG_329:
                return Race::DOG_329;
            case self::DOG_330:
                return Race::DOG_330;
            case self::DOG_331:
                return Race::DOG_331;
            case self::DOG_332:
                return Race::DOG_332;
            case self::DOG_333:
                return Race::DOG_333;
            case self::DOG_334:
                return Race::DOG_334;
            case self::DOG_335:
                return Race::DOG_335;
            case self::DOG_336:
                return Race::DOG_336;
            case self::DOG_337:
                return Race::DOG_337;
            case self::DOG_338:
                return Race::DOG_338;
            case self::DOG_339:
                return Race::DOG_339;
            case self::DOG_340:
                return Race::DOG_340;
            case self::DOG_341:
                return Race::DOG_341;
            case self::DOG_342:
                return Race::DOG_342;
            case self::DOG_343:
                return Race::DOG_343;
            case self::DOG_344:
                return Race::DOG_344;
            case self::DOG_345:
                return Race::DOG_345;
            case self::DOG_346:
                return Race::DOG_346;
            case self::DOG_347:
                return Race::DOG_347;
            case self::DOG_348:
                return Race::DOG_348;
            case self::DOG_349:
                return Race::DOG_349;
            case self::DOG_350:
                return Race::DOG_350;
            case self::DOG_351:
                return Race::DOG_351;
            case self::DOG_352:
                return Race::DOG_352;
            case self::DOG_353:
                return Race::DOG_353;
            case self::DOG_354:
                return Race::DOG_354;
            case self::DOG_355:
                return Race::DOG_355;
            case self::DOG_356:
                return Race::DOG_356;
        }
    }
}
