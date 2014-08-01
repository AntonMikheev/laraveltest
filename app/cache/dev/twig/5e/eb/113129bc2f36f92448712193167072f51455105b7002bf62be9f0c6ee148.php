<?php

/* AppGrabberBundle:Admin:login.html.twig */
class __TwigTemplate_5eeb113129bc2f36f92448712193167072f51455105b7002bf62be9f0c6ee148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AppGrabberBundle:Layouts:admin.layout.html.twig");

        $this->blocks = array(
            'header_search' => array($this, 'block_header_search'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppGrabberBundle:Layouts:admin.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header_search($context, array $blocks = array())
    {
        echo " ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

    ";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <form class=\"form-signin\" role=\"form\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_security_check");
        echo "\" method=\"post\">

        <input type=\"text\" class=\"form-control\" placeholder=\"User name\" required=\"\" autofocus=\"\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" name=\"_password\">
        <label class=\"checkbox\">
            <input type=\"checkbox\" value=\"remember-me\" id=\"remember_me\" name=\"_remember_me\"> Remember me
        </label>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
    </form>


";
    }

    public function getTemplateName()
    {
        return "AppGrabberBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  152 => 50,  126 => 29,  124 => 28,  113 => 22,  104 => 17,  77 => 6,  34 => 5,  90 => 11,  84 => 8,  76 => 7,  70 => 5,  58 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 33,  128 => 49,  107 => 18,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 15,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 29,  105 => 40,  91 => 27,  62 => 52,  49 => 19,  38 => 4,  28 => 3,  87 => 25,  21 => 2,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 4,  56 => 29,  31 => 4,  24 => 1,  26 => 6,  25 => 1,  19 => 1,  93 => 12,  88 => 6,  78 => 21,  46 => 7,  44 => 7,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 41,  40 => 18,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 26,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 13,  96 => 31,  83 => 25,  74 => 5,  66 => 24,  55 => 15,  52 => 44,  50 => 9,  43 => 8,  41 => 15,  35 => 3,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 49,  147 => 58,  144 => 44,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 24,  109 => 34,  106 => 16,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 7,  73 => 6,  64 => 4,  60 => 49,  57 => 11,  54 => 45,  51 => 14,  48 => 24,  45 => 17,  42 => 6,  39 => 11,  36 => 10,  33 => 5,  30 => 4,);
    }
}
