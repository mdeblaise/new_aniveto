<?php

namespace AppBundle\Domain\Fidanimo\Model;

use AppBundle\Domain\Breed\Model\Breed;
use Greg0ire\Enum\AbstractEnum;

class Race extends AbstractEnum
{
    const BREED_UNKNOWN = 387;
    const BREED_OTHER = 387;

    //##Cats###
    const CAT_1 = 298;
    const CAT_2 = 299;
    const CAT_3 = 300;
    const CAT_4 = 301;
    const CAT_5 = 302;
    const CAT_6 = 303;
    const CAT_7 = 304;
    const CAT_8 = 307;
    const CAT_9 = 308;
    const CAT_10 = 310;
    const CAT_11 = 311;
    const CAT_12 = 314;
    const CAT_13 = 315;
    const CAT_14 = 388;
    const CAT_15 = 324;
    const CAT_16 = 327;
    const CAT_17 = 388;
    const CAT_18 = 328;
    const CAT_19 = 329;
    const CAT_20 = 330;
    const CAT_21 = 331;
    const CAT_22 = 334;
    const CAT_23 = 337;
    const CAT_24 = 388;
    const CAT_25 = 338;
    const CAT_26 = 340;
    const CAT_27 = 343;
    const CAT_28 = 345;
    const CAT_29 = 346;
    const CAT_30 = 319;
    const CAT_31 = 347;
    const CAT_32 = 349;
    const CAT_33 = 350;
    const CAT_34 = 351;
    const CAT_35 = 352;
    const CAT_36 = 354;
    const CAT_37 = 307;
    const CAT_38 = 356;
    const CAT_39 = 357;
    const CAT_40 = 358;
    const CAT_41 = 360;
    const CAT_42 = 361;
    const CAT_43 = 362;
    const CAT_44 = 363;
    const CAT_45 = 363;
    const CAT_46 = 366;
    const CAT_47 = 367;
    const CAT_48 = 368;
    const CAT_49 = 369;
    const CAT_50 = 371;
    const CAT_51 = 372;
    const CAT_52 = 374;

    //##Dogs###
    const DOG_1 = 29;
    const DOG_2 = 29;
    const DOG_3 = 192;
    const DOG_4 = 32;
    const DOG_5 = 31;
    const DOG_6 = 33;
    const DOG_7 = 34;
    const DOG_8 = 254;
    const DOG_9 = 38;
    const DOG_10 = 37;
    const DOG_11 = 387;
    const DOG_12 = 30;
    const DOG_13 = 26;
    const DOG_14 = 42;
    const DOG_15 = 46;
    const DOG_16 = 50;
    const DOG_17 = 50;
    const DOG_18 = 25;
    const DOG_19 = 67;
    const DOG_20 = 387;
    const DOG_21 = 51;
    const DOG_22 = 387;
    const DOG_23 = 387;
    const DOG_24 = 292;
    const DOG_25 = 292;
    const DOG_26 = 195;
    const DOG_27 = 387;
    const DOG_28 = 218;
    const DOG_29 = 240;
    const DOG_30 = 241;
    const DOG_31 = 28;
    const DOG_32 = 45;
    const DOG_33 = 44;
    const DOG_34 = 127;
    const DOG_35 = 253;
    const DOG_36 = 54;
    const DOG_37 = 387;
    const DOG_38 = 387;
    const DOG_39 = 48;
    const DOG_40 = 128;
    const DOG_41 = 283;
    const DOG_42 = 35;
    const DOG_43 = 72;
    const DOG_44 = 76;
    const DOG_45 = 77;
    const DOG_46 = 389;
    const DOG_47 = 141;
    const DOG_48 = 231;
    const DOG_49 = 231;
    const DOG_50 = 232;
    const DOG_51 = 256;
    const DOG_52 = 255;
    const DOG_53 = 257;
    const DOG_54 = 387;
    const DOG_55 = 289;
    const DOG_56 = 97;
    const DOG_57 = 78;
    const DOG_58 = 143;
    const DOG_59 = 246;
    const DOG_60 = 144;
    const DOG_61 = 165;
    const DOG_62 = 263;
    const DOG_63 = 387;
    const DOG_64 = 387;
    const DOG_65 = 142;
    const DOG_66 = 145;
    const DOG_67 = 93;
    const DOG_68 = 94;
    const DOG_69 = 213;
    const DOG_70 = 214;
    const DOG_71 = 290;
    const DOG_72 = 166;
    const DOG_73 = 204;
    const DOG_74 = 186;
    const DOG_75 = 201;
    const DOG_76 = 39;
    const DOG_77 = 285;
    const DOG_78 = 215;
    const DOG_79 = 216;
    const DOG_80 = 217;
    const DOG_81 = 385;
    const DOG_82 = 125;
    const DOG_83 = 387;
    const DOG_84 = 387;
    const DOG_85 = 387;
    const DOG_86 = 40;
    const DOG_87 = 52;
    const DOG_88 = 387;
    const DOG_89 = 250;
    const DOG_90 = 146;
    const DOG_91 = 74;
    const DOG_92 = 73;
    const DOG_93 = 75;
    const DOG_94 = 175;
    const DOG_95 = 117;
    const DOG_96 = 286;
    const DOG_97 = 1;
    const DOG_98 = 27;
    const DOG_99 = 68;
    const DOG_100 = 169;
    const DOG_101 = 169;
    const DOG_102 = 200;
    const DOG_103 = 287;
    const DOG_104 = 190;
    const DOG_105 = 293;
    const DOG_106 = 387;
    const DOG_107 = 387;
    const DOG_108 = 387;
    const DOG_109 = 193;
    const DOG_110 = 12;
    const DOG_111 = 96;
    const DOG_112 = 138;
    const DOG_113 = 219;
    const DOG_114 = 220;
    const DOG_115 = 259;
    const DOG_116 = 268;
    const DOG_117 = 387;
    const DOG_118 = 190;
    const DOG_119 = 294;
    const DOG_120 = 387;
    const DOG_121 = 14;
    const DOG_122 = 7;
    const DOG_123 = 92;
    const DOG_124 = 92;
    const DOG_125 = 281;
    const DOG_126 = 12;
    const DOG_127 = 168;
    const DOG_128 = 297;
    const DOG_129 = 284;
    const DOG_130 = 284;
    const DOG_131 = 284;
    const DOG_132 = 187;
    const DOG_133 = 4;
    const DOG_134 = 161;
    const DOG_135 = 252;
    const DOG_136 = 122;
    const DOG_137 = 273;
    const DOG_138 = 114;
    const DOG_139 = 114;
    const DOG_140 = 387;
    const DOG_141 = 387;
    const DOG_142 = 387;
    const DOG_143 = 387;
    const DOG_144 = 387;
    const DOG_145 = 387;
    const DOG_146 = 274;
    const DOG_147 = 274;
    const DOG_148 = 53;
    const DOG_149 = 387;
    const DOG_150 = 203;
    const DOG_151 = 387;
    const DOG_152 = 271;
    const DOG_156 = 387;
    const DOG_157 = 162;
    const DOG_158 = 131;
    const DOG_159 = 3;
    const DOG_160 = 2;
    const DOG_161 = 387;
    const DOG_162 = 387;
    const DOG_163 = 387;
    const DOG_164 = 387;
    const DOG_165 = 265;
    const DOG_166 = 276;
    const DOG_167 = 387;
    const DOG_168 = 16;
    const DOG_169 = 124;
    const DOG_170 = 126;
    const DOG_171 = 387;
    const DOG_172 = 387;
    const DOG_173 = 387;
    const DOG_174 = 387;
    const DOG_175 = 387;
    const DOG_176 = 387;
    const DOG_177 = 387;
    const DOG_178 = 234;
    const DOG_179 = 387;
    const DOG_180 = 235;
    const DOG_181 = 387;
    const DOG_182 = 387;
    const DOG_183 = 167;
    const DOG_184 = 387;
    const DOG_185 = 61;
    const DOG_186 = 387;
    const DOG_187 = 387;
    const DOG_188 = 387;
    const DOG_189 = 171;
    const DOG_190 = 9;
    const DOG_191 = 9;
    const DOG_192 = 10;
    const DOG_193 = 174;
    const DOG_194 = 178;
    const DOG_195 = 387;
    const DOG_196 = 168;
    const DOG_197 = 387;
    const DOG_198 = 387;
    const DOG_199 = 387;
    const DOG_200 = 107;
    const DOG_201 = 387;
    const DOG_202 = 106;
    const DOG_203 = 106;
    const DOG_204 = 387;
    const DOG_205 = 111;
    const DOG_206 = 9;
    const DOG_207 = 11;
    const DOG_208 = 24;
    const DOG_209 = 90;
    const DOG_210 = 119;
    const DOG_211 = 182;
    const DOG_212 = 183;
    const DOG_213 = 185;
    const DOG_214 = 227;
    const DOG_215 = 237;
    const DOG_216 = 238;
    const DOG_217 = 24;
    const DOG_218 = 112;
    const DOG_219 = 109;
    const DOG_220 = 113;
    const DOG_221 = 113;
    const DOG_222 = 387;
    const DOG_223 = 387;
    const DOG_224 = 387;
    const DOG_225 = 114;
    const DOG_226 = 387;
    const DOG_227 = 387;
    const DOG_228 = 387;
    const DOG_229 = 115;
    const DOG_230 = 387;
    const DOG_231 = 387;
    const DOG_232 = 387;
    const DOG_233 = 387;
    const DOG_234 = 91;
    const DOG_235 = 387;
    const DOG_236 = 387;
    const DOG_237 = 19;
    const DOG_238 = 117;
    const DOG_239 = 17;
    const DOG_240 = 18;
    const DOG_241 = 21;
    const DOG_242 = 178;
    const DOG_243 = 226;
    const DOG_244 = 22;
    const DOG_245 = 23;
    const DOG_246 = 387;
    const DOG_247 = 387;
    const DOG_248 = 387;
    const DOG_249 = 387;
    const DOG_250 = 387;
    const DOG_251 = 129;
    const DOG_252 = 247;
    const DOG_253 = 20;
    const DOG_254 = 137;
    const DOG_255 = 245;
    const DOG_256 = 80;
    const DOG_257 = 82;
    const DOG_258 = 117;
    const DOG_259 = 117;
    const DOG_260 = 239;
    const DOG_261 = 387;
    const DOG_262 = 387;
    const DOG_263 = 81;
    const DOG_264 = 387;
    const DOG_265 = 83;
    const DOG_266 = 85;
    const DOG_267 = 85;
    const DOG_268 = 88;
    const DOG_269 = 86;
    const DOG_270 = 86;
    const DOG_271 = 87;
    const DOG_272 = 118;
    const DOG_273 = 387;
    const DOG_274 = 117;
    const DOG_275 = 177;
    const DOG_276 = 229;
    const DOG_277 = 150;
    const DOG_278 = 151;
    const DOG_279 = 153;
    const DOG_280 = 155;
    const DOG_281 = 159;
    const DOG_282 = 387;
    const DOG_283 = 387;
    const DOG_284 = 184;
    const DOG_285 = 270;
    const DOG_286 = 14;
    const DOG_287 = 236;
    const DOG_288 = 260;
    const DOG_289 = 261;
    const DOG_290 = 262;
    const DOG_291 = 262;
    const DOG_292 = 243;
    const DOG_293 = 387;
    const DOG_294 = 244;
    const DOG_295 = 244;
    const DOG_296 = 198;
    const DOG_297 = 173;
    const DOG_298 = 123;
    const DOG_299 = 133;
    const DOG_300 = 132;
    const DOG_301 = 134;
    const DOG_302 = 148;
    const DOG_303 = 164;
    const DOG_304 = 282;
    const DOG_305 = 148;
    const DOG_306 = 387;
    const DOG_307 = 387;
    const DOG_308 = 387;
    const DOG_309 = 13;
    const DOG_310 = 387;
    const DOG_311 = 387;
    const DOG_312 = 387;
    const DOG_313 = 120;
    const DOG_314 = 60;
    const DOG_315 = 59;
    const DOG_316 = 57;
    const DOG_317 = 58;
    const DOG_318 = 136;
    const DOG_319 = 228;
    const DOG_320 = 98;
    const DOG_321 = 98;
    const DOG_322 = 98;
    const DOG_323 = 98;
    const DOG_324 = 181;
    const DOG_325 = 181;
    const DOG_326 = 79;
    const DOG_327 = 104;
    const DOG_328 = 104;
    const DOG_329 = 160;
    const DOG_330 = 211;
    const DOG_331 = 266;
    const DOG_332 = 288;
    const DOG_333 = 100;
    const DOG_334 = 194;
    const DOG_335 = 225;
    const DOG_336 = 156;
    const DOG_337 = 99;
    const DOG_338 = 69;
    const DOG_339 = 71;
    const DOG_340 = 130;
    const DOG_341 = 157;
    const DOG_342 = 158;
    const DOG_343 = 196;
    const DOG_344 = 205;
    const DOG_345 = 251;
    const DOG_346 = 15;
    const DOG_347 = 207;
    const DOG_348 = 387;
    const DOG_349 = 208;
    const DOG_350 = 387;
    const DOG_351 = 296;
    const DOG_352 = 209;
    const DOG_353 = 387;
    const DOG_354 = 387;
    const DOG_355 = 269;
    const DOG_356 = 210;

    static function getAnivetoCorrespondance($race){
        switch($race){
            case self::CAT_1:
                return Breed::CAT_1;
            case self::CAT_2:
                return Breed::CAT_2;
            case self::CAT_3:
                return Breed::CAT_3;
            case self::CAT_4:
                return Breed::CAT_4;
            case self::CAT_5:
                return Breed::CAT_5;
            case self::CAT_6:
                return Breed::CAT_6;
            case self::CAT_7:
                return Breed::CAT_7;
            case self::CAT_8:
                return Breed::CAT_8;
            case self::CAT_9:
                return Breed::CAT_9;
            case self::CAT_10:
                return Breed::CAT_10;
            case self::CAT_11:
                return Breed::CAT_11;
            case self::CAT_12:
                return Breed::CAT_12;
            case self::CAT_13:
                return Breed::CAT_13;
            case self::CAT_14:
                return Breed::CAT_14;
            case self::CAT_15:
                return Breed::CAT_15;
            case self::CAT_16:
                return Breed::CAT_16;
            case self::CAT_17:
                return Breed::CAT_17;
            case self::CAT_18:
                return Breed::CAT_18;
            case self::CAT_19:
                return Breed::CAT_19;
            case self::CAT_20:
                return Breed::CAT_20;
            case self::CAT_21:
                return Breed::CAT_21;
            case self::CAT_22:
                return Breed::CAT_22;
            case self::CAT_23:
                return Breed::CAT_23;
            case self::CAT_24:
                return Breed::CAT_24;
            case self::CAT_25:
                return Breed::CAT_25;
            case self::CAT_26:
                return Breed::CAT_26;
            case self::CAT_27:
                return Breed::CAT_27;
            case self::CAT_28:
                return Breed::CAT_28;
            case self::CAT_29:
                return Breed::CAT_29;
            case self::CAT_30:
                return Breed::CAT_30;
            case self::CAT_31:
                return Breed::CAT_31;
            case self::CAT_32:
                return Breed::CAT_32;
            case self::CAT_33:
                return Breed::CAT_33;
            case self::CAT_34:
                return Breed::CAT_34;
            case self::CAT_35:
                return Breed::CAT_35;
            case self::CAT_36:
                return Breed::CAT_36;
            case self::CAT_37:
                return Breed::CAT_37;
            case self::CAT_38:
                return Breed::CAT_38;
            case self::CAT_39:
                return Breed::CAT_39;
            case self::CAT_40:
                return Breed::CAT_40;
            case self::CAT_41:
                return Breed::CAT_41;
            case self::CAT_42:
                return Breed::CAT_42;
            case self::CAT_43:
                return Breed::CAT_43;
            case self::CAT_44:
                return Breed::CAT_44;
            case self::CAT_45:
                return Breed::CAT_45;
            case self::CAT_46:
                return Breed::CAT_46;
            case self::CAT_47:
                return Breed::CAT_47;
            case self::CAT_48:
                return Breed::CAT_48;
            case self::CAT_49:
                return Breed::CAT_49;
            case self::CAT_50:
                return Breed::CAT_50;
            case self::CAT_51:
                return Breed::CAT_51;
            case self::CAT_52:
                return Breed::CAT_52;



            case self::DOG_1:
                return Breed::DOG_1;
            case self::DOG_2:
                return Breed::DOG_2;
            case self::DOG_3:
                return Breed::DOG_3;
            case self::DOG_4:
                return Breed::DOG_4;
            case self::DOG_5:
                return Breed::DOG_5;
            case self::DOG_6:
                return Breed::DOG_6;
            case self::DOG_7:
                return Breed::DOG_7;
            case self::DOG_8:
                return Breed::DOG_8;
            case self::DOG_9:
                return Breed::DOG_9;
            case self::DOG_10:
                return Breed::DOG_10;
            case self::DOG_11:
                return Breed::DOG_11;
            case self::DOG_12:
                return Breed::DOG_12;
            case self::DOG_13:
                return Breed::DOG_13;
            case self::DOG_14:
                return Breed::DOG_14;
            case self::DOG_15:
                return Breed::DOG_15;
            case self::DOG_16:
                return Breed::DOG_16;
            case self::DOG_17:
                return Breed::DOG_17;
            case self::DOG_18:
                return Breed::DOG_18;
            case self::DOG_19:
                return Breed::DOG_19;
            case self::DOG_20:
                return Breed::DOG_20;
            case self::DOG_21:
                return Breed::DOG_21;
            case self::DOG_22:
                return Breed::DOG_22;
            case self::DOG_23:
                return Breed::DOG_23;
            case self::DOG_24:
                return Breed::DOG_24;
            case self::DOG_25:
                return Breed::DOG_25;
            case self::DOG_26:
                return Breed::DOG_26;
            case self::DOG_27:
                return Breed::DOG_27;
            case self::DOG_28:
                return Breed::DOG_28;
            case self::DOG_29:
                return Breed::DOG_29;
            case self::DOG_30:
                return Breed::DOG_30;
            case self::DOG_31:
                return Breed::DOG_31;
            case self::DOG_32:
                return Breed::DOG_32;
            case self::DOG_33:
                return Breed::DOG_33;
            case self::DOG_34:
                return Breed::DOG_34;
            case self::DOG_35:
                return Breed::DOG_35;
            case self::DOG_36:
                return Breed::DOG_36;
            case self::DOG_37:
                return Breed::DOG_37;
            case self::DOG_38:
                return Breed::DOG_38;
            case self::DOG_39:
                return Breed::DOG_39;
            case self::DOG_40:
                return Breed::DOG_40;
            case self::DOG_41:
                return Breed::DOG_41;
            case self::DOG_42:
                return Breed::DOG_42;
            case self::DOG_43:
                return Breed::DOG_43;
            case self::DOG_44:
                return Breed::DOG_44;
            case self::DOG_45:
                return Breed::DOG_45;
            case self::DOG_46:
                return Breed::DOG_46;
            case self::DOG_47:
                return Breed::DOG_47;
            case self::DOG_48:
                return Breed::DOG_48;
            case self::DOG_49:
                return Breed::DOG_49;
            case self::DOG_50:
                return Breed::DOG_50;
            case self::DOG_51:
                return Breed::DOG_51;
            case self::DOG_52:
                return Breed::DOG_52;
            case self::DOG_53:
                return Breed::DOG_53;
            case self::DOG_54:
                return Breed::DOG_54;
            case self::DOG_55:
                return Breed::DOG_55;
            case self::DOG_56:
                return Breed::DOG_56;
            case self::DOG_57:
                return Breed::DOG_57;
            case self::DOG_58:
                return Breed::DOG_58;
            case self::DOG_59:
                return Breed::DOG_59;
            case self::DOG_60:
                return Breed::DOG_60;
            case self::DOG_61:
                return Breed::DOG_61;
            case self::DOG_62:
                return Breed::DOG_62;
            case self::DOG_63:
                return Breed::DOG_63;
            case self::DOG_64:
                return Breed::DOG_64;
            case self::DOG_65:
                return Breed::DOG_65;
            case self::DOG_66:
                return Breed::DOG_66;
            case self::DOG_67:
                return Breed::DOG_67;
            case self::DOG_68:
                return Breed::DOG_68;
            case self::DOG_69:
                return Breed::DOG_69;
            case self::DOG_70:
                return Breed::DOG_70;
            case self::DOG_71:
                return Breed::DOG_71;
            case self::DOG_72:
                return Breed::DOG_72;
            case self::DOG_73:
                return Breed::DOG_73;
            case self::DOG_74:
                return Breed::DOG_74;
            case self::DOG_75:
                return Breed::DOG_75;
            case self::DOG_76:
                return Breed::DOG_76;
            case self::DOG_77:
                return Breed::DOG_77;
            case self::DOG_78:
                return Breed::DOG_78;
            case self::DOG_79:
                return Breed::DOG_79;
            case self::DOG_80:
                return Breed::DOG_80;
            case self::DOG_81:
                return Breed::DOG_81;
            case self::DOG_82:
                return Breed::DOG_82;
            case self::DOG_83:
                return Breed::DOG_83;
            case self::DOG_84:
                return Breed::DOG_84;
            case self::DOG_85:
                return Breed::DOG_85;
            case self::DOG_86:
                return Breed::DOG_86;
            case self::DOG_87:
                return Breed::DOG_87;
            case self::DOG_88:
                return Breed::DOG_88;
            case self::DOG_89:
                return Breed::DOG_89;
            case self::DOG_90:
                return Breed::DOG_90;
            case self::DOG_91:
                return Breed::DOG_91;
            case self::DOG_92:
                return Breed::DOG_92;
            case self::DOG_93:
                return Breed::DOG_93;
            case self::DOG_94:
                return Breed::DOG_94;
            case self::DOG_95:
                return Breed::DOG_95;
            case self::DOG_96:
                return Breed::DOG_96;
            case self::DOG_97:
                return Breed::DOG_97;
            case self::DOG_98:
                return Breed::DOG_98;
            case self::DOG_99:
                return Breed::DOG_99;
            case self::DOG_100:
                return Breed::DOG_100;
            case self::DOG_101:
                return Breed::DOG_101;
            case self::DOG_102:
                return Breed::DOG_102;
            case self::DOG_103:
                return Breed::DOG_103;
            case self::DOG_104:
                return Breed::DOG_104;
            case self::DOG_105:
                return Breed::DOG_105;
            case self::DOG_106:
                return Breed::DOG_106;
            case self::DOG_107:
                return Breed::DOG_107;
            case self::DOG_108:
                return Breed::DOG_108;
            case self::DOG_109:
                return Breed::DOG_109;
            case self::DOG_110:
                return Breed::DOG_110;
            case self::DOG_111:
                return Breed::DOG_111;
            case self::DOG_112:
                return Breed::DOG_112;
            case self::DOG_113:
                return Breed::DOG_113;
            case self::DOG_114:
                return Breed::DOG_114;
            case self::DOG_115:
                return Breed::DOG_115;
            case self::DOG_116:
                return Breed::DOG_116;
            case self::DOG_117:
                return Breed::DOG_117;
            case self::DOG_118:
                return Breed::DOG_118;
            case self::DOG_119:
                return Breed::DOG_119;
            case self::DOG_120:
                return Breed::DOG_120;
            case self::DOG_121:
                return Breed::DOG_121;
            case self::DOG_122:
                return Breed::DOG_122;
            case self::DOG_123:
                return Breed::DOG_123;
            case self::DOG_124:
                return Breed::DOG_124;
            case self::DOG_125:
                return Breed::DOG_125;
            case self::DOG_126:
                return Breed::DOG_126;
            case self::DOG_127:
                return Breed::DOG_127;
            case self::DOG_128:
                return Breed::DOG_128;
            case self::DOG_129:
                return Breed::DOG_129;
            case self::DOG_130:
                return Breed::DOG_130;
            case self::DOG_131:
                return Breed::DOG_131;
            case self::DOG_132:
                return Breed::DOG_132;
            case self::DOG_133:
                return Breed::DOG_133;
            case self::DOG_134:
                return Breed::DOG_134;
            case self::DOG_135:
                return Breed::DOG_135;
            case self::DOG_136:
                return Breed::DOG_136;
            case self::DOG_137:
                return Breed::DOG_137;
            case self::DOG_138:
                return Breed::DOG_138;
            case self::DOG_139:
                return Breed::DOG_139;
            case self::DOG_140:
                return Breed::DOG_140;
            case self::DOG_141:
                return Breed::DOG_141;
            case self::DOG_142:
                return Breed::DOG_142;
            case self::DOG_143:
                return Breed::DOG_143;
            case self::DOG_144:
                return Breed::DOG_144;
            case self::DOG_145:
                return Breed::DOG_145;
            case self::DOG_146:
                return Breed::DOG_146;
            case self::DOG_147:
                return Breed::DOG_147;
            case self::DOG_148:
                return Breed::DOG_148;
            case self::DOG_149:
                return Breed::DOG_149;
            case self::DOG_150:
                return Breed::DOG_150;
            case self::DOG_151:
                return Breed::DOG_151;
            case self::DOG_152:
                return Breed::DOG_152;
            case self::DOG_156:
                return Breed::DOG_156;
            case self::DOG_157:
                return Breed::DOG_157;
            case self::DOG_158:
                return Breed::DOG_158;
            case self::DOG_159:
                return Breed::DOG_159;
            case self::DOG_160:
                return Breed::DOG_160;
            case self::DOG_161:
                return Breed::DOG_161;
            case self::DOG_162:
                return Breed::DOG_162;
            case self::DOG_163:
                return Breed::DOG_163;
            case self::DOG_164:
                return Breed::DOG_164;
            case self::DOG_165:
                return Breed::DOG_165;
            case self::DOG_166:
                return Breed::DOG_166;
            case self::DOG_167:
                return Breed::DOG_167;
            case self::DOG_168:
                return Breed::DOG_168;
            case self::DOG_169:
                return Breed::DOG_169;
            case self::DOG_170:
                return Breed::DOG_170;
            case self::DOG_171:
                return Breed::DOG_171;
            case self::DOG_172:
                return Breed::DOG_172;
            case self::DOG_173:
                return Breed::DOG_173;
            case self::DOG_174:
                return Breed::DOG_174;
            case self::DOG_175:
                return Breed::DOG_175;
            case self::DOG_176:
                return Breed::DOG_176;
            case self::DOG_177:
                return Breed::DOG_177;
            case self::DOG_178:
                return Breed::DOG_178;
            case self::DOG_179:
                return Breed::DOG_179;
            case self::DOG_180:
                return Breed::DOG_180;
            case self::DOG_181:
                return Breed::DOG_181;
            case self::DOG_182:
                return Breed::DOG_182;
            case self::DOG_183:
                return Breed::DOG_183;
            case self::DOG_184:
                return Breed::DOG_184;
            case self::DOG_185:
                return Breed::DOG_185;
            case self::DOG_186:
                return Breed::DOG_186;
            case self::DOG_187:
                return Breed::DOG_187;
            case self::DOG_188:
                return Breed::DOG_188;
            case self::DOG_189:
                return Breed::DOG_189;
            case self::DOG_190:
                return Breed::DOG_190;
            case self::DOG_191:
                return Breed::DOG_191;
            case self::DOG_192:
                return Breed::DOG_192;
            case self::DOG_193:
                return Breed::DOG_193;
            case self::DOG_194:
                return Breed::DOG_194;
            case self::DOG_195:
                return Breed::DOG_195;
            case self::DOG_196:
                return Breed::DOG_196;
            case self::DOG_197:
                return Breed::DOG_197;
            case self::DOG_198:
                return Breed::DOG_198;
            case self::DOG_199:
                return Breed::DOG_199;
            case self::DOG_200:
                return Breed::DOG_200;
            case self::DOG_201:
                return Breed::DOG_201;
            case self::DOG_202:
                return Breed::DOG_202;
            case self::DOG_203:
                return Breed::DOG_203;
            case self::DOG_204:
                return Breed::DOG_204;
            case self::DOG_205:
                return Breed::DOG_205;
            case self::DOG_206:
                return Breed::DOG_206;
            case self::DOG_207:
                return Breed::DOG_207;
            case self::DOG_208:
                return Breed::DOG_208;
            case self::DOG_209:
                return Breed::DOG_209;
            case self::DOG_210:
                return Breed::DOG_210;
            case self::DOG_211:
                return Breed::DOG_211;
            case self::DOG_212:
                return Breed::DOG_212;
            case self::DOG_213:
                return Breed::DOG_213;
            case self::DOG_214:
                return Breed::DOG_214;
            case self::DOG_215:
                return Breed::DOG_215;
            case self::DOG_216:
                return Breed::DOG_216;
            case self::DOG_217:
                return Breed::DOG_217;
            case self::DOG_218:
                return Breed::DOG_218;
            case self::DOG_219:
                return Breed::DOG_219;
            case self::DOG_220:
                return Breed::DOG_220;
            case self::DOG_221:
                return Breed::DOG_221;
            case self::DOG_222:
                return Breed::DOG_222;
            case self::DOG_223:
                return Breed::DOG_223;
            case self::DOG_224:
                return Breed::DOG_224;
            case self::DOG_225:
                return Breed::DOG_225;
            case self::DOG_226:
                return Breed::DOG_226;
            case self::DOG_227:
                return Breed::DOG_227;
            case self::DOG_228:
                return Breed::DOG_228;
            case self::DOG_229:
                return Breed::DOG_229;
            case self::DOG_230:
                return Breed::DOG_230;
            case self::DOG_231:
                return Breed::DOG_231;
            case self::DOG_232:
                return Breed::DOG_232;
            case self::DOG_233:
                return Breed::DOG_233;
            case self::DOG_234:
                return Breed::DOG_234;
            case self::DOG_235:
                return Breed::DOG_235;
            case self::DOG_236:
                return Breed::DOG_36;
            case self::DOG_237:
                return Breed::DOG_237;
            case self::DOG_238:
                return Breed::DOG_238;
            case self::DOG_239:
                return Breed::DOG_239;
            case self::DOG_240:
                return Breed::DOG_240;
            case self::DOG_241:
                return Breed::DOG_241;
            case self::DOG_242:
                return Breed::DOG_242;
            case self::DOG_243:
                return Breed::DOG_243;
            case self::DOG_244:
                return Breed::DOG_244;
            case self::DOG_245:
                return Breed::DOG_245;
            case self::DOG_246:
                return Breed::DOG_246;
            case self::DOG_247:
                return Breed::DOG_247;
            case self::DOG_248:
                return Breed::DOG_248;
            case self::DOG_249:
                return Breed::DOG_249;
            case self::DOG_250:
                return Breed::DOG_250;
            case self::DOG_251:
                return Breed::DOG_251;
            case self::DOG_252:
                return Breed::DOG_252;
            case self::DOG_253:
                return Breed::DOG_253;
            case self::DOG_254:
                return Breed::DOG_254;
            case self::DOG_255:
                return Breed::DOG_255;
            case self::DOG_256:
                return Breed::DOG_256;
            case self::DOG_257:
                return Breed::DOG_257;
            case self::DOG_258:
                return Breed::DOG_258;
            case self::DOG_259:
                return Breed::DOG_259;
            case self::DOG_260:
                return Breed::DOG_260;
            case self::DOG_261:
                return Breed::DOG_261;
            case self::DOG_262:
                return Breed::DOG_262;
            case self::DOG_263:
                return Breed::DOG_263;
            case self::DOG_264:
                return Breed::DOG_264;
            case self::DOG_265:
                return Breed::DOG_265;
            case self::DOG_266:
                return Breed::DOG_266;
            case self::DOG_267:
                return Breed::DOG_267;
            case self::DOG_268:
                return Breed::DOG_268;
            case self::DOG_269:
                return Breed::DOG_269;
            case self::DOG_270:
                return Breed::DOG_270;
            case self::DOG_271:
                return Breed::DOG_271;
            case self::DOG_272:
                return Breed::DOG_272;
            case self::DOG_273:
                return Breed::DOG_273;
            case self::DOG_274:
                return Breed::DOG_74;
            case self::DOG_275:
                return Breed::DOG_275;
            case self::DOG_276:
                return Breed::DOG_276;
            case self::DOG_277:
                return Breed::DOG_277;
            case self::DOG_278:
                return Breed::DOG_278;
            case self::DOG_279:
                return Breed::DOG_279;
            case self::DOG_280:
                return Breed::DOG_280;
            case self::DOG_281:
                return Breed::DOG_281;
            case self::DOG_282:
                return Breed::DOG_282;
            case self::DOG_283:
                return Breed::DOG_283;
            case self::DOG_284:
                return Breed::DOG_284;
            case self::DOG_285:
                return Breed::DOG_285;
            case self::DOG_286:
                return Breed::DOG_286;
            case self::DOG_287:
                return Breed::DOG_287;
            case self::DOG_288:
                return Breed::DOG_288;
            case self::DOG_289:
                return Breed::DOG_289;
            case self::DOG_290:
                return Breed::DOG_290;
            case self::DOG_291:
                return Breed::DOG_291;
            case self::DOG_292:
                return Breed::DOG_292;
            case self::DOG_293:
                return Breed::DOG_293;
            case self::DOG_294:
                return Breed::DOG_294;
            case self::DOG_295:
                return Breed::DOG_295;
            case self::DOG_296:
                return Breed::DOG_296;
            case self::DOG_297:
                return Breed::DOG_297;
            case self::DOG_298:
                return Breed::DOG_298;
            case self::DOG_299:
                return Breed::DOG_299;
            case self::DOG_300:
                return Breed::DOG_300;
            case self::DOG_301:
                return Breed::DOG_301;
            case self::DOG_302:
                return Breed::DOG_302;
            case self::DOG_303:
                return Breed::DOG_303;
            case self::DOG_304:
                return Breed::DOG_304;
            case self::DOG_305:
                return Breed::DOG_305;
            case self::DOG_306:
                return Breed::DOG_306;
            case self::DOG_307:
                return Breed::DOG_307;
            case self::DOG_308:
                return Breed::DOG_308;
            case self::DOG_309:
                return Breed::DOG_309;
            case self::DOG_310:
                return Breed::DOG_310;
            case self::DOG_311:
                return Breed::DOG_311;
            case self::DOG_312:
                return Breed::DOG_312;
            case self::DOG_313:
                return Breed::DOG_313;
            case self::DOG_314:
                return Breed::DOG_314;
            case self::DOG_315:
                return Breed::DOG_315;
            case self::DOG_316:
                return Breed::DOG_316;
            case self::DOG_317:
                return Breed::DOG_317;
            case self::DOG_318:
                return Breed::DOG_318;
            case self::DOG_319:
                return Breed::DOG_319;
            case self::DOG_320:
                return Breed::DOG_320;
            case self::DOG_321:
                return Breed::DOG_321;
            case self::DOG_322:
                return Breed::DOG_322;
            case self::DOG_323:
                return Breed::DOG_323;
            case self::DOG_324:
                return Breed::DOG_324;
            case self::DOG_325:
                return Breed::DOG_325;
            case self::DOG_326:
                return Breed::DOG_326;
            case self::DOG_327:
                return Breed::DOG_327;
            case self::DOG_328:
                return Breed::DOG_328;
            case self::DOG_329:
                return Breed::DOG_329;
            case self::DOG_330:
                return Breed::DOG_330;
            case self::DOG_331:
                return Breed::DOG_331;
            case self::DOG_332:
                return Breed::DOG_332;
            case self::DOG_333:
                return Breed::DOG_333;
            case self::DOG_334:
                return Breed::DOG_334;
            case self::DOG_335:
                return Breed::DOG_335;
            case self::DOG_336:
                return Breed::DOG_336;
            case self::DOG_337:
                return Breed::DOG_337;
            case self::DOG_338:
                return Breed::DOG_338;
            case self::DOG_339:
                return Breed::DOG_339;
            case self::DOG_340:
                return Breed::DOG_340;
            case self::DOG_341:
                return Breed::DOG_341;
            case self::DOG_342:
                return Breed::DOG_342;
            case self::DOG_343:
                return Breed::DOG_343;
            case self::DOG_344:
                return Breed::DOG_344;
            case self::DOG_345:
                return Breed::DOG_345;
            case self::DOG_346:
                return Breed::DOG_346;
            case self::DOG_347:
                return Breed::DOG_347;
            case self::DOG_348:
                return Breed::DOG_348;
            case self::DOG_349:
                return Breed::DOG_349;
            case self::DOG_350:
                return Breed::DOG_350;
            case self::DOG_351:
                return Breed::DOG_351;
            case self::DOG_352:
                return Breed::DOG_352;
            case self::DOG_353:
                return Breed::DOG_353;
            case self::DOG_354:
                return Breed::DOG_354;
            case self::DOG_355:
                return Breed::DOG_355;
            case self::DOG_356:
                return Breed::DOG_356;
        }
    }
}
