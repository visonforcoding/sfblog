<?php

/* CwpUtilBundle:Layout:base.html.twig */
class __TwigTemplate_d89a0179919ccc9a395eda3fd072a1049fb9502981219724b23a7bb23deb2e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'css' => array($this, 'block_css'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--><html lang=\"en\"><!--<![endif]-->

    <head>
        <meta charset=\"utf-8\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!-- Bootstrap Stylesheet -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

        <!-- jquery-ui Stylesheets -->

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/css/jquery.ui.all.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/jquery-ui.custom.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/timepicker/jquery-ui-timepicker.css"), "html", null, true);
        echo "\">
        <!-- Uniform Stylesheet -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\">

        <!-- Plugin Stylsheets first to ease overrides -->



        <!-- End Plugin Stylesheets -->

        <!-- Main Layout Stylesheet -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/css/fonts/icomoon/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/css/main-style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/css/base.css"), "html", null, true);
        echo "\">

    ";
        // line 36
        $this->displayBlock('javascript', $context, $blocks);
        // line 37
        $this->displayBlock('css', $context, $blocks);
        // line 38
        echo "<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js></script>
<![endif]-->

<script type=\"text/javascript\">
    document.domain = \"sfblog\";
</script>
<title>sfblog</title>

</head>

<body>

    <div id=\"customizer\">
        <div id=\"showButton\"><i class=\"icon-cogs\"></i></div>
        <div id=\"layoutMode\">
            <label class=\"checkbox\"><input type=\"checkbox\" class=\"uniform\" name=\"layout-mode\" value=\"boxed\"> Boxed</label>
        </div>
    </div>

    <div id=\"wrapper\">
        <header id=\"header\" class=\"navbar navbar-inverse\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <div class=\"brand-wrap pull-left\">
                        <div class=\"brand-img\">
                            <a class=\"brand\" href=\"#\">
                                <img src=\"assets/images/logo.png\" alt=\"\">
                            </a>
                        </div>
                    </div>

                    <div id=\"header-right\" class=\"clearfix\">
                        <div id=\"nav-toggle\" data-toggle=\"collapse\" data-target=\"#navigation\" class=\"collapsed\">
                            <i class=\"icon-caret-down\"></i>
                        </div>
                        <div id=\"header-search\">
                            <span id=\"search-toggle\" data-toggle=\"dropdown\">
                                <i class=\"icon-search\"></i>
                            </span>
                            <form class=\"navbar-search\">
                                <input type=\"text\" class=\"search-query\" placeholder=\"Search\">
                            </form>
                        </div>
                        <div id=\"dropdown-lists\">
                            <a class=\"item\" href=\"#\">
                                <span class=\"item-icon\"><i class=\"icon-exclamation-sign\"></i></span>
                                <span class=\"item-label\">Notifications</span>
                                <span class=\"item-count\">4</span>
                            </a>
                            <a class=\"item\" href=\"mail.html\">
                                <span class=\"item-icon\"><i class=\"icon-envelope\"></i></span>
                                <span class=\"item-label\">Messages</span>
                                <span class=\"item-count\">16</span>
                            </a>
                        </div>

                        <div id=\"header-functions\" class=\"pull-right\">
                            <div id=\"user-info\" class=\"clearfix\">
                                <span class=\"info\">
                                    Welcome
                                    <span class=\"name\">Shana-chan</span>
                                </span>
                                <div class=\"avatar\">
                                    <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">
                                        <img src=\"assets/images/pp.jpg\" alt=\"Avatar\">
                                    </a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li><a href=\"profile.html\"><i class=\"icol-user\"></i> My Profile</a></li>
                                        <li><a href=\"#\"><i class=\"icol-layout\"></i> My Invoices</a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"index.html\"><i class=\"icol-key\"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id=\"logout-ribbon\">
                                <a href=\"index.html\"><i class=\"icon-off\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id=\"content-wrap\">
            <div id=\"content\">
                <div id=\"content-outer\">
                    <div id=\"content-inner\">
                        <aside id=\"sidebar\">
                            <nav id=\"navigation\" class=\"collapse\">
                                <ul>
                                    <li>
                                        <span title=\"General\">
                                            <i class=\"icon-home\"></i>
                                            <span class=\"nav-title\">General</span>
                                        </span>
                                        <ul class=\"inner-nav\">
                                            <li><a href=\"dashboard.html\"><i class=\"icol-dashboard\"></i> Dashboard</a></li>
                                            <li><a href=\"calendar.html\"><i class=\"icol-calendar-2\"></i> Calendar</a></li>
                                            <li><a href=\"icons.html\"><i class=\"icol-lifebuoy\"></i> Icons</a></li>
                                            <li><a href=\"grids.html\"><i class=\"icol-grid\"></i> Grids</a></li>
                                            <li><a href=\"typography.html\"><i class=\"icol-font\"></i> Typography</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span title=\"Table\">
                                            <i class=\"icon-table\"></i>
                                            <span class=\"nav-title\">Table</span>
                                        </span>
                                        <ul class=\"inner-nav\">
                                            <li><a href=\"tables.html\"><i class=\"icol-style\"></i> Static Tables</a></li>
                                            <li><a href=\"responsive_tables.html\"><i class=\"icol-hammer-screwdriver\"></i> Responsive Tables</a></li>
                                            <li><a href=\"data_tables.html\"><i class=\"icol-table\"></i> Data Tables</a></li>
                                            <li><a href=\"detail_view.html\"><i class=\"icol-eye\"></i> Detail View Table</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span title=\"Statistic\">
                                            <i class=\"icon-graph\"></i>
                                            <span class=\"nav-title\">Statistic</span>
                                        </span>
                                        <ul class=\"inner-nav\">
                                            <li><a href=\"statistic.html\"><i class=\"icol-chart-curve\"></i> Statistical Elements</a></li>
                                            <li><a href=\"charts_gallery.html\"><i class=\"icol-chart-pie\"></i> Charts Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"active\">
                                        <span title=\"Form\">
                                            <i class=\"icon-list\"></i>
                                            <span class=\"nav-title\">Form</span>
                                        </span>
                                        <ul class=\"inner-nav\">
                                            <li><a href=\"form_layouts.html\"><i class=\"icol-layout-select\"></i> Form Layouts</a></li>
                                            <li><a href=\"form_elements.html\"><i class=\"icol-ui-text-field-password\"></i> Form Elements</a></li>
                                            <li><a href=\"form_wizard.html\"><i class=\"icol-wand\"></i> Form Wizard</a></li>
                                            <li><a href=\"form_validation.html\"><i class=\"icol-accept\"></i> Form Validation</a></li>
                                            <li class=\"active\"><a href=\"wysiwyg.html\"><i class=\"icol-pencil\"></i> WYSIWYG</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span title=\"Elements\">
                                            <i class=\"icon-cogs\"></i>
                                            <span class=\"nav-title\">Elements</span>
                                        </span>
                                        <ul class=\"inner-nav\">
                                            <li><a href=\"ui_bootstrap.html\"><i class=\"icol-ui-tab-content\"></i> Bootstrap Elements</a></li>
                                            <li><a href=\"ui_components.html\"><i class=\"icol-pipette\"></i> Other Elements</a></li>
                                            <li><a href=\"alerts.html\"><i class=\"icol-error\"></i> Alerts and Notifications</a></li>
                                            <li><a href=\"boxes.html\"><i class=\"icol-cog\"></i> Widget Boxes</a></li>
                                            <li><a href=\"buttons.html\"><i class=\"icol-joystick\"></i> Buttons</a></li>
                                            <li><a href=\"file_uploader.html\"><i class=\"icol-computer\"></i> File Uploader</a></li>
                                            <li><a href=\"file_manager.html\"><i class=\"icol-databases\"></i> File Manager</a>
                                        </ul>
                                    </li>
                                    <li>
                                        <span title=\"Extra\">
                                            <i class=\"icon-gift\"></i>
                                            <span class=\"nav-title\">Extra</span>
                                        </span>
                                        <ul class=\"inner-nav\">
                                            <li><a href=\"profile.html\"><i class=\"icol-user\"></i> Profile Page</a></li>
                                            <li><a href=\"mail.html\"><i class=\"icol-email\"></i> Mail Page</a></li>
                                            <li><a href=\"widgets.html\"><i class=\"icol-ruby\"></i> Custom Widgets</a></li>
                                            <li><a href=\"gallery.html\"><i class=\"icol-images\"></i> Image Gallery</a>
                                            <li><a href=\"contacts.html\"><i class=\"icol-vcard\"></i> Contact List</a></li>
                                            <li><a href=\"404.html\"><i class=\"icol-error\"></i> Error Page (404)</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </aside>

                        <div id=\"sidebar-separator\"></div>

                        <section id=\"main\" class=\"clearfix\">
                            <div id=\"main-header\" class=\"page-header\">
                                <ul class=\"breadcrumb\">
                                    <li>
                                        <i class=\"icon-home\"></i>MoonCake
                                        <span class=\"divider\">&raquo;</span>
                                    </li>
                                    <li>
                                        <a href=\"#\">Form</a>
                                        <span class=\"divider\">&raquo;</span>
                                    </li>
                                    <li>
                                        <a href=\"#\">WYSIWYG</a>
                                    </li>
                                </ul>

                                <h1 id=\"main-heading\">
                                    WYSIWYG <span>This page features CLEditor as a WYSIWYG editor for it's small size and simplicity</span>
                                </h1>
                            </div>

                            <div id=\"main-content\">
                            ";
        // line 235
        $this->displayBlock('main', $context, $blocks);
        // line 236
        echo "                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <footer id=\"footer\">
            <div class=\"footer-left\">MoonCake - Responsive Admin Template</div>
            <div class=\"footer-right\"><p>Copyright 2012. All Rights Reserved.</p></div>
        </footer>

    </div>


    <!-- Core Scripts -->
    <script src=\"assets/js/libs/jquery-1.8.2.min.js\"></script>
    <script src=\"bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/libs/jquery.placeholder.min.js\"></script>
    <script src=\"assets/js/libs/jquery.mousewheel.min.js\"></script>

    <!-- Template Script -->
    <script src=\"assets/js/template.js\"></script>
    <script src=\"assets/js/setup.js\"></script>







    <!-- Plugin Scripts -->





</body>

</html>
";
    }

    // line 36
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 37
    public function block_css($context, array $blocks = array())
    {
    }

    // line 235
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CwpUtilBundle:Layout:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 235,  337 => 37,  332 => 36,  288 => 236,  286 => 235,  87 => 38,  85 => 37,  83 => 36,  78 => 34,  74 => 33,  70 => 32,  58 => 23,  53 => 21,  49 => 20,  45 => 19,  38 => 15,  22 => 1,);
    }
}
