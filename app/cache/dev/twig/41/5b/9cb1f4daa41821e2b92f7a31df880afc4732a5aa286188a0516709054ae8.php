<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_415b9cb1f4daa41821e2b92f7a31df880afc4732a5aa286188a0516709054ae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")))));
        echo "

    ";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "top")) > 0)) {
            // line 21
            echo "        <div class=\"row\">
            ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "top"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 23
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "class"), "html", null, true);
                echo "\">
                    ";
                // line 24
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "settings"))));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </div>
    ";
        }
        // line 29
        echo "
    <div class=\"row\">
        ";
        // line 31
        $context["has_center"] = false;
        // line 32
        echo "
        <div class=\"";
        // line 33
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center")) > 0)) {
            echo "col-md-4";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "left"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 35
            echo "                ";
            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "settings"))));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>

        ";
        // line 39
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center")) > 0)) {
            // line 40
            echo "            <div class=\"col-md-4\">
                ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 42
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "settings"))));
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </div>
        ";
        }
        // line 46
        echo "
        <div class=\"";
        // line 47
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center")) > 0)) {
            echo "col-md-4";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "right"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 49
            echo "                ";
            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "settings"))));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
    </div>

    ";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "bottom")) > 0)) {
            // line 55
            echo "        <div class=\"row\">
            ";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "bottom"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 57
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "class"), "html", null, true);
                echo "\">
                    ";
                // line 58
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "type"), "settings" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "settings"))));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </div>
    ";
        }
        // line 63
        echo "


    ";
        // line 66
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 46,  306 => 95,  303 => 94,  292 => 91,  280 => 87,  12 => 36,  624 => 224,  620 => 223,  612 => 220,  601 => 216,  585 => 209,  580 => 207,  574 => 205,  572 => 204,  566 => 203,  559 => 201,  545 => 198,  526 => 190,  497 => 156,  485 => 124,  463 => 117,  447 => 113,  412 => 126,  406 => 111,  404 => 90,  401 => 89,  391 => 163,  369 => 148,  359 => 144,  333 => 132,  329 => 130,  318 => 86,  287 => 89,  195 => 54,  178 => 46,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  868 => 273,  863 => 269,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 233,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  757 => 221,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  713 => 209,  688 => 202,  682 => 201,  679 => 200,  673 => 198,  668 => 197,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  647 => 191,  632 => 187,  629 => 186,  626 => 184,  610 => 181,  603 => 179,  600 => 178,  594 => 212,  588 => 175,  570 => 164,  561 => 161,  554 => 224,  551 => 199,  522 => 156,  507 => 165,  479 => 135,  471 => 129,  451 => 120,  424 => 91,  418 => 112,  410 => 113,  376 => 153,  373 => 102,  370 => 101,  356 => 126,  326 => 129,  261 => 73,  284 => 76,  279 => 77,  275 => 86,  692 => 399,  676 => 199,  652 => 376,  645 => 369,  641 => 189,  631 => 364,  625 => 361,  615 => 354,  607 => 218,  597 => 177,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 324,  548 => 176,  536 => 194,  516 => 294,  500 => 291,  486 => 286,  482 => 136,  452 => 268,  434 => 118,  421 => 90,  339 => 191,  310 => 83,  302 => 79,  296 => 151,  282 => 161,  244 => 43,  231 => 69,  226 => 131,  188 => 48,  150 => 35,  563 => 202,  549 => 182,  543 => 174,  537 => 159,  532 => 192,  525 => 157,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  495 => 289,  491 => 157,  487 => 156,  460 => 123,  455 => 115,  449 => 138,  436 => 132,  415 => 127,  354 => 142,  331 => 96,  325 => 94,  320 => 87,  267 => 78,  249 => 74,  155 => 73,  778 => 267,  763 => 244,  760 => 222,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  700 => 205,  661 => 380,  656 => 378,  653 => 218,  650 => 192,  644 => 190,  633 => 209,  616 => 182,  599 => 215,  595 => 205,  590 => 338,  587 => 203,  584 => 173,  581 => 201,  578 => 200,  573 => 198,  560 => 187,  558 => 160,  553 => 184,  546 => 175,  540 => 160,  534 => 162,  531 => 225,  528 => 173,  521 => 182,  513 => 230,  510 => 293,  504 => 164,  499 => 173,  475 => 169,  473 => 168,  468 => 128,  454 => 121,  448 => 119,  445 => 152,  439 => 133,  429 => 148,  422 => 147,  420 => 123,  417 => 243,  411 => 120,  399 => 139,  396 => 138,  380 => 107,  361 => 207,  348 => 118,  345 => 116,  340 => 136,  330 => 103,  324 => 179,  317 => 121,  307 => 82,  304 => 81,  300 => 93,  291 => 80,  286 => 98,  259 => 149,  256 => 79,  237 => 71,  232 => 84,  190 => 49,  321 => 100,  295 => 100,  274 => 53,  272 => 81,  242 => 82,  236 => 42,  216 => 35,  170 => 74,  110 => 41,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 269,  947 => 249,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  860 => 268,  857 => 267,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 233,  793 => 182,  785 => 232,  783 => 177,  780 => 303,  772 => 248,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  749 => 218,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 208,  699 => 142,  697 => 141,  696 => 204,  695 => 139,  694 => 138,  689 => 137,  683 => 393,  680 => 134,  678 => 390,  675 => 132,  666 => 382,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 211,  638 => 210,  635 => 226,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 199,  564 => 162,  557 => 96,  555 => 200,  550 => 187,  547 => 93,  529 => 191,  527 => 91,  524 => 297,  515 => 305,  512 => 84,  509 => 228,  503 => 81,  501 => 163,  496 => 172,  493 => 155,  490 => 154,  478 => 74,  470 => 121,  467 => 72,  464 => 125,  459 => 116,  456 => 68,  450 => 114,  442 => 134,  433 => 130,  428 => 116,  426 => 126,  414 => 144,  408 => 109,  405 => 108,  403 => 117,  400 => 233,  390 => 136,  388 => 42,  385 => 159,  377 => 129,  371 => 35,  366 => 150,  363 => 32,  350 => 26,  344 => 193,  342 => 23,  335 => 133,  332 => 88,  316 => 16,  313 => 84,  311 => 83,  308 => 86,  290 => 90,  288 => 79,  276 => 393,  266 => 366,  263 => 365,  255 => 353,  250 => 44,  245 => 83,  222 => 66,  215 => 78,  207 => 58,  194 => 66,  191 => 26,  186 => 47,  181 => 80,  161 => 75,  114 => 44,  200 => 54,  184 => 48,  153 => 56,  146 => 34,  358 => 103,  351 => 141,  347 => 140,  343 => 92,  338 => 113,  327 => 102,  323 => 88,  319 => 124,  315 => 98,  301 => 80,  299 => 112,  293 => 90,  289 => 163,  281 => 75,  277 => 136,  271 => 374,  265 => 51,  262 => 81,  260 => 98,  257 => 103,  251 => 101,  248 => 116,  239 => 64,  228 => 41,  225 => 67,  213 => 69,  211 => 81,  197 => 30,  174 => 42,  148 => 49,  134 => 28,  127 => 52,  20 => 1,  270 => 84,  253 => 78,  233 => 71,  212 => 60,  210 => 59,  206 => 57,  202 => 55,  198 => 55,  192 => 53,  185 => 61,  180 => 49,  175 => 45,  172 => 51,  167 => 56,  165 => 77,  160 => 38,  137 => 29,  100 => 43,  81 => 31,  65 => 29,  129 => 44,  97 => 41,  23 => 12,  53 => 27,  152 => 61,  126 => 55,  124 => 25,  113 => 40,  104 => 43,  77 => 29,  34 => 15,  90 => 16,  84 => 34,  76 => 35,  70 => 29,  58 => 25,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 107,  398 => 88,  393 => 168,  387 => 110,  384 => 106,  381 => 157,  379 => 154,  374 => 217,  368 => 126,  365 => 141,  362 => 148,  360 => 128,  355 => 122,  341 => 131,  337 => 90,  322 => 93,  314 => 88,  312 => 97,  309 => 82,  305 => 115,  298 => 101,  294 => 90,  285 => 78,  283 => 97,  278 => 160,  268 => 373,  264 => 82,  258 => 72,  252 => 68,  247 => 75,  241 => 77,  229 => 73,  220 => 65,  214 => 63,  177 => 43,  169 => 44,  140 => 51,  132 => 28,  128 => 47,  107 => 37,  61 => 28,  273 => 85,  269 => 100,  254 => 46,  243 => 73,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 61,  221 => 38,  219 => 101,  217 => 56,  208 => 124,  204 => 57,  179 => 44,  159 => 70,  143 => 33,  135 => 35,  119 => 44,  102 => 19,  71 => 32,  67 => 32,  63 => 20,  59 => 23,  201 => 56,  196 => 52,  183 => 46,  171 => 57,  166 => 100,  163 => 58,  158 => 74,  156 => 38,  151 => 52,  142 => 30,  138 => 49,  136 => 47,  121 => 24,  117 => 45,  105 => 20,  91 => 38,  62 => 28,  49 => 28,  38 => 18,  28 => 14,  87 => 14,  21 => 11,  94 => 34,  89 => 42,  85 => 36,  75 => 34,  68 => 31,  56 => 26,  31 => 16,  24 => 14,  26 => 2,  25 => 12,  19 => 11,  93 => 17,  88 => 37,  78 => 32,  46 => 19,  44 => 18,  27 => 14,  79 => 35,  72 => 30,  69 => 29,  47 => 25,  40 => 19,  37 => 20,  22 => 12,  246 => 67,  157 => 51,  145 => 60,  139 => 59,  131 => 48,  123 => 48,  120 => 42,  115 => 45,  111 => 39,  108 => 42,  101 => 40,  98 => 35,  96 => 18,  83 => 32,  74 => 29,  66 => 30,  55 => 22,  52 => 21,  50 => 20,  43 => 21,  41 => 20,  35 => 20,  32 => 4,  29 => 3,  209 => 58,  203 => 55,  199 => 265,  193 => 51,  189 => 63,  187 => 64,  182 => 23,  176 => 58,  173 => 46,  168 => 41,  164 => 55,  162 => 54,  154 => 36,  149 => 62,  147 => 52,  144 => 48,  141 => 58,  133 => 46,  130 => 57,  125 => 46,  122 => 45,  116 => 41,  112 => 105,  109 => 46,  106 => 64,  103 => 41,  99 => 38,  95 => 35,  92 => 28,  86 => 33,  82 => 36,  80 => 13,  73 => 27,  64 => 24,  60 => 15,  57 => 18,  54 => 23,  51 => 21,  48 => 8,  45 => 18,  42 => 17,  39 => 16,  36 => 6,  33 => 16,  30 => 13,);
    }
}
