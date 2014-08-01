<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_47da85d728746ef58331dabc388bde801785fc5b8ffb2657adcab18e3f8e9a18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name"), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo "</h3>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 11,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  210 => 73,  206 => 71,  202 => 68,  198 => 66,  192 => 64,  185 => 59,  180 => 56,  175 => 53,  172 => 51,  167 => 48,  165 => 47,  160 => 44,  137 => 37,  100 => 23,  81 => 15,  65 => 83,  129 => 59,  97 => 47,  23 => 12,  53 => 10,  152 => 50,  126 => 29,  124 => 28,  113 => 31,  104 => 17,  77 => 36,  34 => 15,  90 => 20,  84 => 16,  76 => 7,  70 => 5,  58 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 3,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 54,  169 => 49,  140 => 55,  132 => 33,  128 => 49,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 83,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 76,  217 => 75,  208 => 72,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 15,  71 => 17,  67 => 25,  63 => 15,  59 => 14,  201 => 92,  196 => 65,  183 => 82,  171 => 61,  166 => 71,  163 => 45,  158 => 67,  156 => 41,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 34,  105 => 51,  91 => 44,  62 => 82,  49 => 19,  38 => 4,  28 => 44,  87 => 25,  21 => 11,  94 => 39,  89 => 43,  85 => 25,  75 => 30,  68 => 4,  56 => 23,  31 => 14,  24 => 1,  26 => 14,  25 => 12,  19 => 11,  93 => 21,  88 => 6,  78 => 31,  46 => 7,  44 => 19,  27 => 13,  79 => 37,  72 => 10,  69 => 9,  47 => 43,  40 => 20,  37 => 19,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 49,  98 => 24,  96 => 31,  83 => 25,  74 => 11,  66 => 29,  55 => 79,  52 => 20,  50 => 44,  43 => 8,  41 => 18,  35 => 15,  32 => 16,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 61,  187 => 60,  182 => 57,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 40,  149 => 49,  147 => 58,  144 => 44,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 24,  109 => 53,  106 => 16,  103 => 50,  99 => 31,  95 => 22,  92 => 21,  86 => 17,  82 => 39,  80 => 7,  73 => 6,  64 => 28,  60 => 23,  57 => 80,  54 => 45,  51 => 22,  48 => 21,  45 => 28,  42 => 27,  39 => 17,  36 => 17,  33 => 11,  30 => 9,);
    }
}
