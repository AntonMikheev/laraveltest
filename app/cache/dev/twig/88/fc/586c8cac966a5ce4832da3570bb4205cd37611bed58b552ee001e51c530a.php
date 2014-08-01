<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_88fc586c8cac966a5ce4832da3570bb4205cd37611bed58b552ee001e51c530a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        echo "<!DOCTYPE html>
<html ";
        // line 23
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 25
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "
        <title>
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 59
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"))))) {
            // line 60
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 62
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 63
                echo "                    -
                    ";
                // line 64
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 65
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first"))) {
                        // line 66
                        echo "                            ";
                        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 2)) {
                            // line 67
                            echo "                                &gt;
                            ";
                        }
                        // line 69
                        echo "
                            ";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 72
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                ";
            }
            // line 74
            echo "            ";
        }
        // line 75
        echo "        </title>
    </head>
    <body ";
        // line 77
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 78
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 153
        echo "
        ";
        // line 154
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 309
        echo "    </body>
</html>
";
    }

    // line 23
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 25
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 26
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "
            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 33
            echo "                <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["stylesheet"]) ? $context["stylesheet"] : $this->getContext($context, "stylesheet"))), "html", null, true);
            echo "\"  />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 41
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 42
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 44
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 51
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["javascript"]) ? $context["javascript"] : $this->getContext($context, "javascript"))), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        ";
    }

    // line 77
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 78
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 79
        echo "            <header class=\"header\">
                ";
        // line 80
        $this->displayBlock('logo', $context, $blocks);
        // line 90
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 151
        echo "            </header>
        ";
    }

    // line 80
    public function block_logo($context, array $blocks = array())
    {
        // line 81
        echo "                    <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 82
        if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 83
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
            echo "\">";
            if (("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method"))) {
                echo "&nbsp;";
            }
            // line 84
            echo "                        ";
        }
        // line 85
        echo "                        ";
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 86
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
            echo "
                        ";
        }
        // line 88
        echo "                    </a>
                ";
    }

    // line 90
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 91
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 92
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 101
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 126
            echo "                            </div>

                            ";
            // line 128
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 148
            echo "                        </nav>
                    ";
        }
        // line 150
        echo "                ";
    }

    // line 101
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 102
        echo "                                    ";
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) || array_key_exists("action", $context))) {
            // line 103
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 104
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 105
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 106
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 107
                        echo "                                                        ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                            // line 108
                            echo "                                                            <li>
                                                                ";
                            // line 109
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri")))) {
                                // line 110
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri"), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label");
                                echo "</a>
                                                                ";
                            } else {
                                // line 112
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 114
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 116
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 118
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "                                                ";
                }
                // line 120
                echo "                                            ";
            } else {
                // line 121
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 123
            echo "                                        </ol>
                                    ";
        }
        // line 125
        echo "                                ";
    }

    // line 128
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 129
        echo "                                <div class=\"navbar-right\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 135
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"));
        $template->display($context);
        // line 136
        echo "                                        </li>
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 142
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"));
        $template->display($context);
        // line 143
        echo "                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
    }

    // line 154
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 155
        echo "            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                ";
        // line 156
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 228
        echo "
                <aside class=\"right-side\">
                    ";
        // line 230
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 305
        echo "                </aside>

            </div>
        ";
    }

    // line 156
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 157
        echo "                    <aside class=\"left-side sidebar-offcanvas\">
                        <section class=\"sidebar\">
                            ";
        // line 159
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 225
        echo "                        </section>
                    </aside>
                ";
    }

    // line 159
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 160
        echo "                                ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 174
        echo "
                                ";
        // line 175
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 176
        echo "                                ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 221
        echo "                                ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 224
        echo "                            ";
    }

    // line 160
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 161
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 162
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                            <div class=\"input-group custom-search-form\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-flat\" type=\"submit\">
                                                            <i class=\"fa fa-search\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </form>
                                    ";
        }
        // line 173
        echo "                                ";
    }

    // line 175
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 176
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 177
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 178
            echo "                                        <ul class=\"sidebar-menu\">
                                            ";
            // line 179
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 180
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 181
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 182
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 183
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "
                                                ";
                // line 186
                echo "                                                ";
                $context["item_count"] = 0;
                // line 187
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 188
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 189
                            echo "                                                        ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 190
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 191
                                echo "                                                        ";
                            }
                            // line 192
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 193
                    echo "                                                ";
                }
                // line 194
                echo "
                                                ";
                // line 195
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 196
                    echo "                                                    ";
                    $context["active"] = false;
                    // line 197
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 198
                        echo "                                                        ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code")))) {
                            // line 199
                            echo "                                                            ";
                            $context["active"] = true;
                            // line 200
                            echo "                                                        ";
                        }
                        // line 201
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    echo "                                                    <li class=\"treeview";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                        <a href=\"#\">
                                                            ";
                    // line 204
                    if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon"))) : (""))) {
                        echo $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "icon");
                    }
                    // line 205
                    echo "                                                            <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                    echo "</span>
                                                            <i class=\"fa pull-right fa-angle-left\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu";
                    // line 208
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                            ";
                    // line 209
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 210
                        echo "                                                                ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 211
                            echo "                                                                    <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code"))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 213
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "                                                        </ul>
                                                    </li>
                                                ";
                }
                // line 217
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                                        </ul>
                                    ";
        }
        // line 220
        echo "                                ";
    }

    // line 221
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 222
        echo "                                    <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a></p>
                                ";
    }

    // line 230
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 231
        echo "                        <section class=\"content-header\">
                            ";
        // line 232
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 264
        echo "                        </section>

                        <section class=\"content\">
                            ";
        // line 267
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 303
        echo "                        </section>
                    ";
    }

    // line 232
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 233
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 262
        echo "
                            ";
    }

    // line 233
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 234
        echo "                                    ";
        if (((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) || (!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))))) {
            // line 235
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            ";
            // line 236
            if ((!twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"))))) {
                // line 237
                echo "                                                <div class=\"navbar-header\">
                                                    <span class=\"navbar-brand\">";
                // line 238
                echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
                echo "</span>
                                                </div>
                                            ";
            }
            // line 241
            echo "                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 243
            if ((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))))) {
                // line 244
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 246
            echo "                                                </div>

                                                ";
            // line 248
            if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
                // line 249
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 253
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 258
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 261
        echo "                                ";
    }

    // line 267
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 268
        echo "
                                ";
        // line 269
        $this->displayBlock('notice', $context, $blocks);
        // line 272
        echo "
                                ";
        // line 273
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"))))) {
            // line 274
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                ";
        }
        // line 276
        echo "
                                ";
        // line 277
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"))))) {
            // line 278
            echo "                                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                ";
        }
        // line 280
        echo "
                                ";
        // line 281
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"))))) {
            // line 282
            echo "                                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                ";
        }
        // line 284
        echo "
                                ";
        // line 285
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"))))) {
            // line 286
            echo "                                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                ";
        }
        // line 288
        echo "
                                ";
        // line 289
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))))) {
            // line 290
            echo "                                    <div class=\"row\">
                                        <div class=\"sonata-ba-list ";
            // line 291
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 292
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                        </div>

                                        ";
            // line 295
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 296
                echo "                                            <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 297
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                            </div>
                                        ";
            }
            // line 300
            echo "                                    </div>
                                ";
        }
        // line 302
        echo "                            ";
    }

    // line 269
    public function block_notice($context, array $blocks = array())
    {
        // line 270
        echo "                                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 271
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  868 => 273,  863 => 269,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 233,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  757 => 221,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  713 => 209,  688 => 202,  682 => 201,  679 => 200,  673 => 198,  668 => 197,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  647 => 191,  632 => 187,  629 => 186,  626 => 184,  610 => 181,  603 => 179,  600 => 178,  594 => 176,  588 => 175,  570 => 164,  561 => 161,  554 => 224,  551 => 221,  522 => 156,  507 => 156,  479 => 135,  471 => 129,  451 => 120,  424 => 114,  418 => 112,  410 => 110,  376 => 103,  373 => 102,  370 => 101,  356 => 126,  326 => 86,  261 => 50,  284 => 106,  279 => 77,  275 => 103,  692 => 399,  676 => 199,  652 => 376,  645 => 369,  641 => 189,  631 => 364,  625 => 361,  615 => 354,  607 => 180,  597 => 177,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  548 => 176,  536 => 306,  516 => 294,  500 => 291,  486 => 286,  482 => 136,  452 => 268,  434 => 118,  421 => 244,  339 => 191,  310 => 171,  302 => 168,  296 => 151,  282 => 161,  244 => 43,  231 => 133,  226 => 131,  188 => 25,  150 => 55,  563 => 188,  549 => 182,  543 => 174,  537 => 159,  532 => 174,  525 => 157,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  508 => 165,  495 => 289,  491 => 157,  487 => 156,  460 => 123,  455 => 141,  449 => 138,  436 => 132,  415 => 121,  354 => 101,  331 => 96,  325 => 94,  320 => 84,  267 => 78,  249 => 74,  155 => 73,  778 => 267,  763 => 244,  760 => 222,  748 => 242,  745 => 241,  742 => 240,  736 => 238,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  700 => 205,  661 => 380,  656 => 378,  653 => 218,  650 => 192,  644 => 190,  633 => 209,  616 => 182,  599 => 206,  595 => 205,  590 => 338,  587 => 203,  584 => 173,  581 => 201,  578 => 200,  573 => 198,  560 => 187,  558 => 160,  553 => 184,  546 => 175,  540 => 160,  534 => 162,  531 => 225,  528 => 173,  521 => 182,  513 => 230,  510 => 293,  504 => 155,  499 => 173,  475 => 169,  473 => 168,  468 => 128,  454 => 121,  448 => 119,  445 => 152,  439 => 133,  429 => 148,  422 => 147,  420 => 123,  417 => 243,  411 => 120,  399 => 139,  396 => 138,  380 => 107,  361 => 207,  348 => 118,  345 => 116,  340 => 91,  330 => 112,  324 => 179,  317 => 121,  307 => 104,  304 => 81,  300 => 102,  291 => 80,  286 => 98,  259 => 149,  256 => 96,  237 => 86,  232 => 84,  190 => 66,  321 => 109,  295 => 100,  274 => 53,  272 => 81,  242 => 82,  236 => 42,  216 => 35,  170 => 74,  110 => 40,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 269,  947 => 249,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 286,  900 => 228,  897 => 227,  894 => 226,  892 => 282,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  860 => 268,  857 => 267,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 233,  793 => 182,  785 => 232,  783 => 177,  780 => 303,  772 => 248,  769 => 247,  767 => 246,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  749 => 218,  746 => 161,  739 => 239,  729 => 235,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 208,  699 => 142,  697 => 141,  696 => 204,  695 => 139,  694 => 138,  689 => 137,  683 => 393,  680 => 134,  678 => 390,  675 => 132,  666 => 382,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 211,  638 => 210,  635 => 188,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 199,  564 => 162,  557 => 96,  555 => 317,  550 => 187,  547 => 93,  529 => 159,  527 => 91,  524 => 297,  515 => 305,  512 => 84,  509 => 228,  503 => 81,  501 => 154,  496 => 172,  493 => 143,  490 => 142,  478 => 74,  470 => 278,  467 => 72,  464 => 125,  459 => 273,  456 => 68,  450 => 64,  442 => 134,  433 => 130,  428 => 116,  426 => 126,  414 => 144,  408 => 109,  405 => 108,  403 => 117,  400 => 233,  390 => 136,  388 => 42,  385 => 225,  377 => 129,  371 => 35,  366 => 150,  363 => 32,  350 => 26,  344 => 193,  342 => 23,  335 => 21,  332 => 88,  316 => 16,  313 => 15,  311 => 83,  308 => 86,  290 => 5,  288 => 79,  276 => 393,  266 => 366,  263 => 365,  255 => 353,  250 => 44,  245 => 83,  222 => 81,  215 => 78,  207 => 33,  194 => 248,  191 => 26,  186 => 111,  181 => 80,  161 => 75,  114 => 71,  200 => 31,  184 => 233,  153 => 56,  146 => 49,  358 => 103,  351 => 120,  347 => 134,  343 => 92,  338 => 113,  327 => 111,  323 => 85,  319 => 124,  315 => 120,  301 => 80,  299 => 112,  293 => 90,  289 => 163,  281 => 105,  277 => 136,  271 => 374,  265 => 51,  262 => 88,  260 => 98,  257 => 103,  251 => 101,  248 => 116,  239 => 97,  228 => 41,  225 => 298,  213 => 69,  211 => 81,  197 => 30,  174 => 154,  148 => 64,  134 => 59,  127 => 32,  20 => 11,  270 => 157,  253 => 95,  233 => 71,  212 => 76,  210 => 75,  206 => 74,  202 => 266,  198 => 66,  192 => 86,  185 => 68,  180 => 66,  175 => 77,  172 => 51,  167 => 57,  165 => 77,  160 => 58,  137 => 59,  100 => 62,  81 => 38,  65 => 27,  129 => 67,  97 => 63,  23 => 18,  53 => 17,  152 => 92,  126 => 66,  124 => 31,  113 => 41,  104 => 18,  77 => 58,  34 => 14,  90 => 34,  84 => 39,  76 => 30,  70 => 27,  58 => 22,  480 => 75,  474 => 150,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 143,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 107,  398 => 232,  393 => 230,  387 => 110,  384 => 106,  381 => 105,  379 => 104,  374 => 217,  368 => 126,  365 => 141,  362 => 148,  360 => 128,  355 => 122,  341 => 131,  337 => 90,  322 => 93,  314 => 88,  312 => 149,  309 => 82,  305 => 115,  298 => 101,  294 => 90,  285 => 78,  283 => 97,  278 => 160,  268 => 373,  264 => 2,  258 => 354,  252 => 85,  247 => 84,  241 => 77,  229 => 73,  220 => 80,  214 => 99,  177 => 65,  169 => 78,  140 => 47,  132 => 58,  128 => 58,  107 => 41,  61 => 21,  273 => 392,  269 => 100,  254 => 46,  243 => 89,  240 => 139,  238 => 312,  235 => 311,  230 => 106,  227 => 301,  224 => 39,  221 => 38,  219 => 101,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 70,  143 => 59,  135 => 35,  119 => 28,  102 => 37,  71 => 25,  67 => 28,  63 => 22,  59 => 20,  201 => 72,  196 => 68,  183 => 82,  171 => 153,  166 => 100,  163 => 45,  158 => 74,  156 => 57,  151 => 52,  142 => 61,  138 => 36,  136 => 70,  121 => 75,  117 => 51,  105 => 27,  91 => 56,  62 => 29,  49 => 15,  38 => 18,  28 => 14,  87 => 57,  21 => 12,  94 => 60,  89 => 33,  85 => 31,  75 => 32,  68 => 31,  56 => 21,  31 => 15,  24 => 13,  26 => 13,  25 => 12,  19 => 11,  93 => 34,  88 => 60,  78 => 37,  46 => 35,  44 => 16,  27 => 14,  79 => 28,  72 => 31,  69 => 24,  47 => 14,  40 => 18,  37 => 17,  22 => 12,  246 => 99,  157 => 57,  145 => 52,  139 => 60,  131 => 48,  123 => 65,  120 => 56,  115 => 50,  111 => 78,  108 => 39,  101 => 89,  98 => 44,  96 => 37,  83 => 55,  74 => 26,  66 => 23,  55 => 18,  52 => 20,  50 => 19,  43 => 12,  41 => 11,  35 => 16,  32 => 15,  29 => 15,  209 => 75,  203 => 32,  199 => 265,  193 => 73,  189 => 65,  187 => 64,  182 => 23,  176 => 309,  173 => 65,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 182,  147 => 90,  144 => 62,  141 => 72,  133 => 69,  130 => 57,  125 => 45,  122 => 44,  116 => 44,  112 => 49,  109 => 19,  106 => 64,  103 => 63,  99 => 17,  95 => 43,  92 => 59,  86 => 43,  82 => 33,  80 => 41,  73 => 29,  64 => 23,  60 => 22,  57 => 19,  54 => 19,  51 => 16,  48 => 21,  45 => 13,  42 => 16,  39 => 15,  36 => 14,  33 => 16,  30 => 15,);
    }
}
