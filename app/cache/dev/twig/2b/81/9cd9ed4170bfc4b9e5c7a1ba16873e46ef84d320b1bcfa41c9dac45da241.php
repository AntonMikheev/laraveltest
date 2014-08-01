<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_2b819cd9ed4170bfc4b9e5c7a1ba16873e46ef84d320b1bcfa41c9dac45da241 extends Twig_Template
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
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').replaceWith(html); // replace the html

                Admin.shared_setup(jQuery('#field_container_";
        // line 51
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 58
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 65
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 74
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 78
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  778 => 251,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  734 => 237,  717 => 233,  714 => 232,  711 => 231,  703 => 226,  700 => 225,  661 => 220,  656 => 219,  653 => 218,  650 => 217,  644 => 213,  633 => 209,  616 => 207,  599 => 206,  595 => 205,  590 => 204,  587 => 203,  584 => 202,  581 => 201,  578 => 200,  573 => 198,  560 => 191,  558 => 190,  553 => 188,  546 => 166,  540 => 164,  534 => 162,  531 => 161,  528 => 160,  521 => 182,  513 => 179,  510 => 178,  504 => 175,  499 => 173,  475 => 169,  473 => 168,  468 => 160,  454 => 156,  448 => 153,  445 => 152,  439 => 150,  429 => 148,  422 => 147,  420 => 146,  417 => 145,  411 => 143,  399 => 139,  396 => 138,  380 => 130,  361 => 124,  348 => 118,  345 => 116,  340 => 114,  330 => 112,  324 => 110,  317 => 107,  307 => 104,  304 => 103,  300 => 102,  291 => 99,  286 => 98,  259 => 87,  256 => 86,  237 => 79,  232 => 78,  190 => 66,  321 => 109,  295 => 100,  274 => 135,  272 => 91,  242 => 82,  236 => 109,  216 => 100,  170 => 79,  110 => 42,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 248,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 223,  680 => 134,  678 => 133,  675 => 132,  666 => 222,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 211,  638 => 210,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 199,  564 => 193,  557 => 96,  555 => 189,  550 => 187,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  515 => 180,  512 => 84,  509 => 83,  503 => 81,  501 => 174,  496 => 172,  493 => 171,  490 => 77,  478 => 74,  470 => 167,  467 => 72,  464 => 71,  459 => 159,  456 => 68,  450 => 64,  442 => 151,  433 => 149,  428 => 59,  426 => 58,  414 => 144,  408 => 142,  405 => 141,  403 => 48,  400 => 47,  390 => 136,  388 => 42,  385 => 41,  377 => 129,  371 => 35,  366 => 125,  363 => 32,  350 => 26,  344 => 24,  342 => 23,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  290 => 5,  288 => 4,  276 => 393,  266 => 366,  263 => 365,  255 => 353,  250 => 341,  245 => 83,  222 => 297,  215 => 280,  207 => 269,  194 => 248,  191 => 246,  186 => 239,  181 => 232,  161 => 57,  114 => 111,  200 => 70,  184 => 233,  153 => 72,  146 => 181,  358 => 123,  351 => 120,  347 => 134,  343 => 115,  338 => 113,  327 => 111,  323 => 125,  319 => 124,  315 => 150,  301 => 144,  299 => 8,  293 => 6,  289 => 140,  281 => 96,  277 => 136,  271 => 374,  265 => 130,  262 => 88,  260 => 363,  257 => 103,  251 => 101,  248 => 116,  239 => 97,  228 => 88,  225 => 298,  213 => 82,  211 => 81,  197 => 90,  174 => 217,  148 => 60,  134 => 161,  127 => 48,  20 => 11,  270 => 4,  253 => 342,  233 => 304,  212 => 76,  210 => 270,  206 => 74,  202 => 266,  198 => 66,  192 => 88,  185 => 63,  180 => 66,  175 => 53,  172 => 51,  167 => 48,  165 => 77,  160 => 76,  137 => 37,  100 => 42,  81 => 31,  65 => 25,  129 => 148,  97 => 47,  23 => 18,  53 => 10,  152 => 50,  126 => 147,  124 => 47,  113 => 43,  104 => 40,  77 => 58,  34 => 26,  90 => 34,  84 => 32,  76 => 31,  70 => 27,  58 => 23,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 140,  398 => 129,  393 => 137,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 128,  368 => 126,  365 => 141,  362 => 110,  360 => 109,  355 => 122,  341 => 131,  337 => 22,  322 => 101,  314 => 99,  312 => 149,  309 => 148,  305 => 119,  298 => 101,  294 => 90,  285 => 3,  283 => 97,  278 => 95,  268 => 373,  264 => 2,  258 => 354,  252 => 85,  247 => 84,  241 => 77,  229 => 73,  220 => 290,  214 => 99,  177 => 65,  169 => 62,  140 => 52,  132 => 59,  128 => 58,  107 => 41,  61 => 2,  273 => 392,  269 => 133,  254 => 102,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 106,  227 => 301,  224 => 103,  221 => 79,  219 => 101,  217 => 77,  208 => 72,  204 => 267,  179 => 224,  159 => 196,  143 => 59,  135 => 51,  119 => 45,  102 => 74,  71 => 19,  67 => 32,  63 => 24,  59 => 49,  201 => 92,  196 => 68,  183 => 82,  171 => 216,  166 => 209,  163 => 45,  158 => 55,  156 => 54,  151 => 52,  142 => 59,  138 => 61,  136 => 60,  121 => 131,  117 => 34,  105 => 39,  91 => 56,  62 => 29,  49 => 9,  38 => 17,  28 => 14,  87 => 65,  21 => 11,  94 => 69,  89 => 47,  85 => 25,  75 => 28,  68 => 26,  56 => 23,  31 => 15,  24 => 12,  26 => 20,  25 => 12,  19 => 11,  93 => 36,  88 => 6,  78 => 29,  46 => 35,  44 => 19,  27 => 13,  79 => 32,  72 => 37,  69 => 13,  47 => 43,  40 => 13,  37 => 17,  22 => 2,  246 => 99,  157 => 57,  145 => 46,  139 => 169,  131 => 160,  123 => 57,  120 => 56,  115 => 33,  111 => 78,  108 => 28,  101 => 89,  98 => 47,  96 => 37,  83 => 37,  74 => 20,  66 => 25,  55 => 22,  52 => 19,  50 => 22,  43 => 20,  41 => 18,  35 => 16,  32 => 18,  29 => 15,  209 => 75,  203 => 93,  199 => 265,  193 => 73,  189 => 240,  187 => 64,  182 => 85,  176 => 82,  173 => 65,  168 => 62,  164 => 59,  162 => 60,  154 => 189,  149 => 182,  147 => 69,  144 => 68,  141 => 67,  133 => 50,  130 => 49,  125 => 46,  122 => 46,  116 => 44,  112 => 52,  109 => 105,  106 => 104,  103 => 43,  99 => 38,  95 => 41,  92 => 45,  86 => 43,  82 => 28,  80 => 41,  73 => 57,  64 => 51,  60 => 15,  57 => 80,  54 => 25,  51 => 21,  48 => 40,  45 => 19,  42 => 18,  39 => 14,  36 => 17,  33 => 11,  30 => 9,);
    }
}
