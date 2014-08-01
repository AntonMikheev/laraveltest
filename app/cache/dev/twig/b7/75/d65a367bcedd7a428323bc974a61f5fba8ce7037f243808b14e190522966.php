<?php

/* AppGrabberBundle:Layouts:admin.layout.html.twig */
class __TwigTemplate_b775d65a367bcedd7a428323bc974a61f5fba8ce7037f243808b14e190522966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_css' => array($this, 'block_head_css'),
            'head_js' => array($this, 'block_head_js'),
            'header_search' => array($this, 'block_header_search'),
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
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('head_js', $context, $blocks);
        // line 15
        echo "</head>
<body>
";
        // line 17
        $this->displayBlock('header_search', $context, $blocks);
        // line 41
        echo "<section>

    <div class=\"container\">
        ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "    </div>
</section>


";
        // line 49
        $this->displayBlock('javascript', $context, $blocks);
        // line 52
        echo "
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome in Admin Area";
    }

    // line 5
    public function block_head_css($context, array $blocks = array())
    {
        // line 6
        echo "
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appgrabber/css/admin.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appgrabber/css/bootstrap.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 11
    public function block_head_js($context, array $blocks = array())
    {
        // line 12
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appgrabber/js/jquery-1.9.0.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appgrabber/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 17
    public function block_header_search($context, array $blocks = array())
    {
        // line 18
        echo "    <section>
        <div class=\"container\">
            <nav class=\"navbar navbar-inverse\" role=\"navigation\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("blog_admin_dashboard");
        echo "\">Grabber</a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-9\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("blog_admin_dashboard");
        echo "\">Dashboard</a></li>
                        ";
        // line 28
        echo "                        ";
        // line 29
        echo "                        <li><a href=\"#\">Contents</a></li>
                        <li><a href=\"#\">Navigations</a></li>
                        <li><a href=\"#\">Domains</a></li>
                        <li><a href=\"#\">Regulars</a></li>
                        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("app_admin_logout");
        echo "\">Logout</a></li>
                    </ul>
                </div>

            </nav>
        </div>
    </section>
";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
    }

    // line 49
    public function block_javascript($context, array $blocks = array())
    {
        // line 50
        echo "   <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "AppGrabberBundle:Layouts:admin.layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 50,  126 => 29,  124 => 28,  113 => 22,  104 => 17,  77 => 6,  34 => 5,  90 => 11,  84 => 8,  76 => 7,  70 => 5,  58 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 33,  128 => 49,  107 => 18,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 15,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 29,  105 => 40,  91 => 27,  62 => 52,  49 => 19,  38 => 12,  28 => 3,  87 => 25,  21 => 2,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 4,  56 => 29,  31 => 4,  24 => 1,  26 => 6,  25 => 1,  19 => 1,  93 => 12,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 41,  40 => 18,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 26,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 13,  96 => 31,  83 => 25,  74 => 5,  66 => 24,  55 => 15,  52 => 44,  50 => 25,  43 => 8,  41 => 15,  35 => 11,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 49,  147 => 58,  144 => 44,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 24,  109 => 34,  106 => 16,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 7,  73 => 6,  64 => 4,  60 => 49,  57 => 11,  54 => 45,  51 => 14,  48 => 24,  45 => 17,  42 => 7,  39 => 11,  36 => 10,  33 => 5,  30 => 4,);
    }
}
