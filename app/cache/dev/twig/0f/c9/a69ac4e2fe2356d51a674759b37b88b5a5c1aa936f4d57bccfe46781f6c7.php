<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_0fc9a69ac4e2fe2356d51a674759b37b88b5a5c1aa936f4d57bccfe46781f6c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'formactions' => array($this, 'block_formactions'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 21
    public function block_form($context, array $blocks = array())
    {
        // line 22
        echo "    <form class=\"form-horizontal\"
              action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "
              method=\"POST\"
              ";
        // line 25
        if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method"))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 26
        echo "              >
        ";
        // line 27
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "errors")) > 0)) {
            // line 28
            echo "            <div class=\"sonata-ba-form-error\">
                ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            </div>
        ";
        }
        // line 32
        echo "
        <table class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 38
            echo "                    <th>";
            echo twig_escape_filter($this->env, (isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tr>
            </thead>
            <tbody>
            ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 44
            echo "                <tr>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
            echo "</td>
                    ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 47
                echo "                    <td>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") . (isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission"))), array(), "array"), 'widget');
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
        </table>

        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 56
        $this->displayBlock('formactions', $context, $blocks);
        // line 61
        echo "    </form>
";
    }

    // line 56
    public function block_formactions($context, array $blocks = array())
    {
        // line 57
        echo "            <div class=\"well well-small form-actions\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 224,  620 => 223,  612 => 220,  601 => 216,  585 => 209,  580 => 207,  574 => 205,  572 => 204,  566 => 203,  559 => 201,  545 => 198,  526 => 190,  497 => 156,  485 => 124,  463 => 117,  447 => 113,  412 => 126,  406 => 111,  404 => 90,  401 => 89,  391 => 163,  369 => 148,  359 => 144,  333 => 132,  329 => 130,  318 => 86,  287 => 77,  195 => 54,  178 => 48,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  868 => 273,  863 => 269,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 233,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  757 => 221,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  713 => 209,  688 => 202,  682 => 201,  679 => 200,  673 => 198,  668 => 197,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  647 => 191,  632 => 187,  629 => 186,  626 => 184,  610 => 181,  603 => 179,  600 => 178,  594 => 212,  588 => 175,  570 => 164,  561 => 161,  554 => 224,  551 => 199,  522 => 156,  507 => 165,  479 => 135,  471 => 129,  451 => 120,  424 => 91,  418 => 112,  410 => 113,  376 => 153,  373 => 102,  370 => 101,  356 => 126,  326 => 129,  261 => 73,  284 => 76,  279 => 77,  275 => 103,  692 => 399,  676 => 199,  652 => 376,  645 => 369,  641 => 189,  631 => 364,  625 => 361,  615 => 354,  607 => 218,  597 => 177,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 324,  548 => 176,  536 => 194,  516 => 294,  500 => 291,  486 => 286,  482 => 136,  452 => 268,  434 => 118,  421 => 90,  339 => 191,  310 => 83,  302 => 79,  296 => 151,  282 => 161,  244 => 43,  231 => 133,  226 => 131,  188 => 25,  150 => 56,  563 => 202,  549 => 182,  543 => 174,  537 => 159,  532 => 192,  525 => 157,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  495 => 289,  491 => 157,  487 => 156,  460 => 123,  455 => 115,  449 => 138,  436 => 132,  415 => 127,  354 => 142,  331 => 96,  325 => 94,  320 => 87,  267 => 78,  249 => 74,  155 => 73,  778 => 267,  763 => 244,  760 => 222,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  700 => 205,  661 => 380,  656 => 378,  653 => 218,  650 => 192,  644 => 190,  633 => 209,  616 => 182,  599 => 215,  595 => 205,  590 => 338,  587 => 203,  584 => 173,  581 => 201,  578 => 200,  573 => 198,  560 => 187,  558 => 160,  553 => 184,  546 => 175,  540 => 160,  534 => 162,  531 => 225,  528 => 173,  521 => 182,  513 => 230,  510 => 293,  504 => 164,  499 => 173,  475 => 169,  473 => 168,  468 => 128,  454 => 121,  448 => 119,  445 => 152,  439 => 133,  429 => 148,  422 => 147,  420 => 123,  417 => 243,  411 => 120,  399 => 139,  396 => 138,  380 => 107,  361 => 207,  348 => 118,  345 => 116,  340 => 136,  330 => 112,  324 => 179,  317 => 121,  307 => 82,  304 => 81,  300 => 102,  291 => 80,  286 => 98,  259 => 149,  256 => 96,  237 => 86,  232 => 84,  190 => 66,  321 => 109,  295 => 100,  274 => 53,  272 => 81,  242 => 82,  236 => 42,  216 => 35,  170 => 74,  110 => 172,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 269,  947 => 249,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  860 => 268,  857 => 267,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 233,  793 => 182,  785 => 232,  783 => 177,  780 => 303,  772 => 248,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  749 => 218,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 208,  699 => 142,  697 => 141,  696 => 204,  695 => 139,  694 => 138,  689 => 137,  683 => 393,  680 => 134,  678 => 390,  675 => 132,  666 => 382,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 211,  638 => 210,  635 => 226,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 199,  564 => 162,  557 => 96,  555 => 200,  550 => 187,  547 => 93,  529 => 191,  527 => 91,  524 => 297,  515 => 305,  512 => 84,  509 => 228,  503 => 81,  501 => 163,  496 => 172,  493 => 155,  490 => 154,  478 => 74,  470 => 121,  467 => 72,  464 => 125,  459 => 116,  456 => 68,  450 => 114,  442 => 134,  433 => 130,  428 => 116,  426 => 126,  414 => 144,  408 => 109,  405 => 108,  403 => 117,  400 => 233,  390 => 136,  388 => 42,  385 => 159,  377 => 129,  371 => 35,  366 => 150,  363 => 32,  350 => 26,  344 => 193,  342 => 23,  335 => 133,  332 => 88,  316 => 16,  313 => 84,  311 => 83,  308 => 86,  290 => 5,  288 => 79,  276 => 393,  266 => 366,  263 => 365,  255 => 353,  250 => 44,  245 => 83,  222 => 81,  215 => 78,  207 => 58,  194 => 248,  191 => 26,  186 => 51,  181 => 80,  161 => 75,  114 => 174,  200 => 31,  184 => 233,  153 => 56,  146 => 49,  358 => 103,  351 => 141,  347 => 140,  343 => 92,  338 => 113,  327 => 111,  323 => 88,  319 => 124,  315 => 120,  301 => 80,  299 => 112,  293 => 90,  289 => 163,  281 => 75,  277 => 136,  271 => 374,  265 => 51,  262 => 88,  260 => 98,  257 => 103,  251 => 101,  248 => 116,  239 => 64,  228 => 41,  225 => 298,  213 => 69,  211 => 81,  197 => 30,  174 => 154,  148 => 64,  134 => 182,  127 => 32,  20 => 11,  270 => 157,  253 => 95,  233 => 71,  212 => 60,  210 => 59,  206 => 74,  202 => 266,  198 => 55,  192 => 53,  185 => 68,  180 => 49,  175 => 47,  172 => 51,  167 => 57,  165 => 77,  160 => 57,  137 => 59,  100 => 81,  81 => 32,  65 => 27,  129 => 180,  97 => 39,  23 => 13,  53 => 22,  152 => 61,  126 => 179,  124 => 47,  113 => 44,  104 => 40,  77 => 30,  34 => 18,  90 => 34,  84 => 39,  76 => 30,  70 => 27,  58 => 22,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 107,  398 => 88,  393 => 168,  387 => 110,  384 => 106,  381 => 157,  379 => 154,  374 => 217,  368 => 126,  365 => 141,  362 => 148,  360 => 128,  355 => 122,  341 => 131,  337 => 90,  322 => 93,  314 => 88,  312 => 149,  309 => 82,  305 => 115,  298 => 101,  294 => 90,  285 => 78,  283 => 97,  278 => 160,  268 => 373,  264 => 74,  258 => 72,  252 => 68,  247 => 84,  241 => 77,  229 => 73,  220 => 80,  214 => 99,  177 => 65,  169 => 44,  140 => 51,  132 => 58,  128 => 47,  107 => 41,  61 => 27,  273 => 392,  269 => 100,  254 => 46,  243 => 66,  240 => 139,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 61,  221 => 38,  219 => 101,  217 => 79,  208 => 124,  204 => 57,  179 => 66,  159 => 70,  143 => 59,  135 => 35,  119 => 28,  102 => 37,  71 => 29,  67 => 26,  63 => 25,  59 => 20,  201 => 56,  196 => 68,  183 => 50,  171 => 153,  166 => 100,  163 => 58,  158 => 74,  156 => 38,  151 => 52,  142 => 61,  138 => 49,  136 => 70,  121 => 75,  117 => 175,  105 => 170,  91 => 37,  62 => 24,  49 => 18,  38 => 7,  28 => 14,  87 => 36,  21 => 12,  94 => 60,  89 => 33,  85 => 32,  75 => 29,  68 => 31,  56 => 23,  31 => 15,  24 => 13,  26 => 14,  25 => 12,  19 => 11,  93 => 35,  88 => 33,  78 => 34,  46 => 19,  44 => 18,  27 => 16,  79 => 31,  72 => 28,  69 => 27,  47 => 22,  40 => 17,  37 => 17,  22 => 12,  246 => 67,  157 => 56,  145 => 54,  139 => 60,  131 => 181,  123 => 52,  120 => 46,  115 => 50,  111 => 40,  108 => 171,  101 => 37,  98 => 72,  96 => 37,  83 => 55,  74 => 29,  66 => 23,  55 => 21,  52 => 23,  50 => 21,  43 => 18,  41 => 11,  35 => 22,  32 => 15,  29 => 16,  209 => 75,  203 => 32,  199 => 265,  193 => 73,  189 => 52,  187 => 64,  182 => 23,  176 => 309,  173 => 46,  168 => 69,  164 => 72,  162 => 68,  154 => 67,  149 => 35,  147 => 52,  144 => 26,  141 => 58,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 45,  112 => 49,  109 => 43,  106 => 64,  103 => 82,  99 => 30,  95 => 38,  92 => 38,  86 => 36,  82 => 33,  80 => 31,  73 => 24,  64 => 23,  60 => 26,  57 => 19,  54 => 23,  51 => 16,  48 => 21,  45 => 13,  42 => 15,  39 => 14,  36 => 16,  33 => 16,  30 => 17,);
    }
}
