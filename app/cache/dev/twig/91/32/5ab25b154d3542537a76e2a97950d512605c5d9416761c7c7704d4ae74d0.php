<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_91325ab25b154d3542537a76e2a97950d512605c5d9416761c7c7704d4ae74d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "history"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-archive\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 106,  279 => 104,  275 => 103,  692 => 399,  676 => 385,  652 => 376,  645 => 369,  641 => 368,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  548 => 313,  536 => 306,  516 => 294,  500 => 291,  486 => 286,  482 => 285,  452 => 268,  434 => 256,  421 => 244,  339 => 191,  310 => 171,  302 => 168,  296 => 167,  282 => 161,  244 => 140,  231 => 133,  226 => 131,  188 => 84,  150 => 55,  563 => 188,  549 => 182,  543 => 179,  537 => 176,  532 => 174,  525 => 172,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  508 => 165,  495 => 289,  491 => 157,  487 => 156,  460 => 143,  455 => 141,  449 => 138,  436 => 132,  415 => 121,  354 => 101,  331 => 96,  325 => 94,  320 => 122,  267 => 78,  249 => 74,  155 => 52,  778 => 251,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  734 => 237,  717 => 233,  714 => 232,  711 => 231,  703 => 226,  700 => 225,  661 => 380,  656 => 378,  653 => 218,  650 => 217,  644 => 213,  633 => 209,  616 => 207,  599 => 206,  595 => 205,  590 => 338,  587 => 203,  584 => 202,  581 => 201,  578 => 200,  573 => 198,  560 => 187,  558 => 186,  553 => 184,  546 => 166,  540 => 308,  534 => 162,  531 => 161,  528 => 173,  521 => 182,  513 => 179,  510 => 293,  504 => 292,  499 => 173,  475 => 169,  473 => 168,  468 => 160,  454 => 156,  448 => 153,  445 => 152,  439 => 133,  429 => 148,  422 => 147,  420 => 123,  417 => 243,  411 => 120,  399 => 139,  396 => 138,  380 => 107,  361 => 207,  348 => 118,  345 => 116,  340 => 114,  330 => 112,  324 => 179,  317 => 121,  307 => 104,  304 => 85,  300 => 102,  291 => 99,  286 => 98,  259 => 149,  256 => 96,  237 => 86,  232 => 84,  190 => 66,  321 => 109,  295 => 100,  274 => 135,  272 => 81,  242 => 82,  236 => 109,  216 => 70,  170 => 74,  110 => 40,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 248,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 393,  680 => 134,  678 => 390,  675 => 132,  666 => 382,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 211,  638 => 210,  635 => 365,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 199,  564 => 193,  557 => 96,  555 => 317,  550 => 187,  547 => 93,  529 => 299,  527 => 91,  524 => 297,  515 => 180,  512 => 84,  509 => 83,  503 => 81,  501 => 161,  496 => 172,  493 => 171,  490 => 287,  478 => 74,  470 => 278,  467 => 72,  464 => 275,  459 => 273,  456 => 68,  450 => 64,  442 => 134,  433 => 130,  428 => 59,  426 => 126,  414 => 144,  408 => 142,  405 => 118,  403 => 117,  400 => 233,  390 => 136,  388 => 42,  385 => 225,  377 => 129,  371 => 35,  366 => 106,  363 => 32,  350 => 26,  344 => 193,  342 => 23,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 118,  308 => 86,  290 => 5,  288 => 107,  276 => 393,  266 => 366,  263 => 365,  255 => 353,  250 => 93,  245 => 83,  222 => 81,  215 => 78,  207 => 269,  194 => 248,  191 => 69,  186 => 111,  181 => 80,  161 => 71,  114 => 71,  200 => 70,  184 => 233,  153 => 56,  146 => 49,  358 => 103,  351 => 120,  347 => 134,  343 => 115,  338 => 113,  327 => 111,  323 => 125,  319 => 124,  315 => 120,  301 => 144,  299 => 112,  293 => 109,  289 => 163,  281 => 105,  277 => 136,  271 => 374,  265 => 99,  262 => 88,  260 => 98,  257 => 103,  251 => 101,  248 => 116,  239 => 97,  228 => 83,  225 => 298,  213 => 69,  211 => 81,  197 => 70,  174 => 64,  148 => 64,  134 => 59,  127 => 32,  20 => 11,  270 => 157,  253 => 95,  233 => 71,  212 => 76,  210 => 75,  206 => 74,  202 => 266,  198 => 66,  192 => 86,  185 => 68,  180 => 66,  175 => 77,  172 => 51,  167 => 57,  165 => 59,  160 => 58,  137 => 59,  100 => 36,  81 => 25,  65 => 27,  129 => 57,  97 => 63,  23 => 18,  53 => 23,  152 => 92,  126 => 42,  124 => 31,  113 => 41,  104 => 18,  77 => 58,  34 => 16,  90 => 34,  84 => 39,  76 => 27,  70 => 27,  58 => 22,  480 => 75,  474 => 150,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 110,  384 => 109,  381 => 120,  379 => 119,  374 => 217,  368 => 126,  365 => 141,  362 => 110,  360 => 104,  355 => 122,  341 => 131,  337 => 97,  322 => 93,  314 => 88,  312 => 149,  309 => 117,  305 => 115,  298 => 101,  294 => 90,  285 => 3,  283 => 97,  278 => 160,  268 => 373,  264 => 2,  258 => 354,  252 => 85,  247 => 84,  241 => 77,  229 => 73,  220 => 80,  214 => 99,  177 => 65,  169 => 74,  140 => 47,  132 => 58,  128 => 58,  107 => 41,  61 => 23,  273 => 392,  269 => 100,  254 => 147,  243 => 89,  240 => 139,  238 => 312,  235 => 311,  230 => 106,  227 => 301,  224 => 103,  221 => 79,  219 => 101,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 59,  135 => 35,  119 => 28,  102 => 37,  71 => 19,  67 => 28,  63 => 24,  59 => 23,  201 => 72,  196 => 68,  183 => 82,  171 => 63,  166 => 100,  163 => 45,  158 => 53,  156 => 57,  151 => 52,  142 => 61,  138 => 36,  136 => 60,  121 => 75,  117 => 51,  105 => 27,  91 => 56,  62 => 29,  49 => 20,  38 => 18,  28 => 14,  87 => 33,  21 => 12,  94 => 16,  89 => 33,  85 => 31,  75 => 28,  68 => 31,  56 => 21,  31 => 15,  24 => 13,  26 => 13,  25 => 12,  19 => 11,  93 => 34,  88 => 60,  78 => 24,  46 => 35,  44 => 17,  27 => 14,  79 => 28,  72 => 25,  69 => 24,  47 => 18,  40 => 18,  37 => 17,  22 => 12,  246 => 99,  157 => 57,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 56,  115 => 50,  111 => 78,  108 => 39,  101 => 89,  98 => 44,  96 => 37,  83 => 37,  74 => 26,  66 => 25,  55 => 21,  52 => 20,  50 => 19,  43 => 20,  41 => 19,  35 => 16,  32 => 15,  29 => 15,  209 => 75,  203 => 122,  199 => 265,  193 => 73,  189 => 65,  187 => 64,  182 => 80,  176 => 65,  173 => 65,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 182,  147 => 90,  144 => 62,  141 => 67,  133 => 50,  130 => 57,  125 => 45,  122 => 44,  116 => 44,  112 => 49,  109 => 19,  106 => 104,  103 => 46,  99 => 17,  95 => 43,  92 => 61,  86 => 43,  82 => 33,  80 => 41,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 38,  48 => 21,  45 => 20,  42 => 16,  39 => 15,  36 => 14,  33 => 16,  30 => 15,);
    }
}
