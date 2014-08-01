<?php

/* AppGrabberBundle:Layouts:base.layout.html.twig */
class __TwigTemplate_3b5c4886fb6428cff4353b325fc9d4ae5630ade02dfc4009fc5ef0ca55389143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_css' => array($this, 'block_head_css'),
            'head_js' => array($this, 'block_head_js'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 5
        $this->displayBlock('head_css', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('head_js', $context, $blocks);
        // line 18
        echo "</head>
<body>

<section>

    <div class=\"container\">
        ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "    </div>
</section>


";
        // line 29
        $this->displayBlock('javascript', $context, $blocks);
        // line 30
        echo "
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome in Home Page";
    }

    // line 5
    public function block_head_css($context, array $blocks = array())
    {
        // line 6
        echo "
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appblog/css/admin.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appblog/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appblog/css/jquery.fancybox.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 12
    public function block_head_js($context, array $blocks = array())
    {
        // line 13
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appblog/js/jquery-1.9.0.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appblog/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appblog/js/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appblog/js/jquery.mousewheel-3.0.6.pack.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
    }

    // line 29
    public function block_javascript($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "AppGrabberBundle:Layouts:base.layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 12,  84 => 9,  76 => 7,  70 => 5,  58 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 15,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 29,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  38 => 12,  28 => 3,  87 => 25,  21 => 2,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 29,  31 => 4,  24 => 1,  26 => 6,  25 => 3,  19 => 1,  93 => 13,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 18,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 14,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 25,  43 => 8,  41 => 5,  35 => 11,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 24,  109 => 34,  106 => 16,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 8,  73 => 6,  64 => 4,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 24,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 5,  30 => 7,);
    }
}
