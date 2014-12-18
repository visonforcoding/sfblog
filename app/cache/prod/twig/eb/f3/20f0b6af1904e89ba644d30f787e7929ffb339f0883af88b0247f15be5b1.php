<?php

/* CwpUtilBundle:Layout:layout.html.twig */
class __TwigTemplate_ebf320f0b6af1904e89ba644d30f787e7929ffb339f0883af88b0247f15be5b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'main' => array($this, 'block_main'),
            'script' => array($this, 'block_script'),
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
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

        <!-- jquery-ui Stylesheets -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/css/jquery.ui.all.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/jquery-ui.custom.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/timepicker/jquery-ui-timepicker.css"), "html", null, true);
        echo "\">
        <!-- Uniform Stylesheet -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\">
        <!-- Plugin Stylsheets first to ease overrides -->
        <!-- iButton -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/ibutton/jquery.ibutton.css"), "html", null, true);
        echo "\">

        <!-- Circular Stat -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/custom-plugins/circular-stat/circular-stat.css"), "html", null, true);
        echo "\">
        <!-- msgBox -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/msgbox/jquery.msgbox.css"), "html", null, true);
        echo "\">
        <!-- pnotify -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/pnotify/jquery.pnotify.css"), "html", null, true);
        echo "\">
        <!-- End Plugin Stylesheets -->
        <!-- Main Layout Stylesheet -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/css/fonts/icomoon/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/css/main-style.css"), "html", null, true);
        echo "\">
    ";
        // line 37
        $this->displayBlock('css', $context, $blocks);
        // line 38
        echo "    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js></script>
    <![endif]-->


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
                                <!--<img src=\"/Public/Admin/images/logo.png\" alt=\"\">-->sfblog
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
                                    欢迎您
                                    <span class=\"name\">";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                                </span>
                                <div class=\"avatar\">
                                    <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">
                                        <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/images/pp.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\">
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
                                    {:W('Menu/menu')} 
                                </ul>
                            </nav>
                        </aside>

                        <div id=\"sidebar-separator\"></div>

                        <section id=\"main\" class=\"clearfix\">
                            <div id=\"main-header\" class=\"page-header\">
                                {:W('Menu/crumb')}
                            </div>
                            <div id=\"main-content\">
                                ";
        // line 137
        $this->displayBlock('main', $context, $blocks);
        // line 139
        echo "                                </block>
                            </div>
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
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/libs/jquery-1.8.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/libs/jquery.placeholder.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/libs/jquery.mousewheel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Template Script -->
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/template.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/setup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Customizer, remove if not needed -->
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/customizer.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Uniform Script -->
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- jquery-ui Scripts -->
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/js/jquery-ui-1.8.24.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/jquery-ui.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/timepicker/jquery-ui-timepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Plugin Scripts -->

    <!-- Flot -->
    <!--[if lt IE 9]>
    <script src=\"assets/js/libs/excanvas.min.js></script>
    <![endif]-->
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/flot/plugins/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/flot/plugins/jquery.flot.pie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/flot/plugins/jquery.flot.resize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Circular Stat -->
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/custom-plugins/circular-stat/circular-stat.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- SparkLine -->
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- iButton -->
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/ibutton/jquery.ibutton.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- msgBox -->
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/msgbox/jquery.msgbox.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- pnotify -->
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/pnotify/jquery.pnotify.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- DataTables -->
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/datatables/TableTools/js/TableTools.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/datatables/jquery.dataTables.columnFilter.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Demo Scripts -->
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/demo/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/demo/dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        // line 210
        $this->displayBlock('script', $context, $blocks);
        // line 211
        echo "</body>
</html>
";
    }

    // line 37
    public function block_css($context, array $blocks = array())
    {
    }

    // line 137
    public function block_main($context, array $blocks = array())
    {
        // line 138
        echo "                                ";
    }

    // line 210
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CwpUtilBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 210,  377 => 138,  374 => 137,  369 => 37,  363 => 211,  361 => 210,  357 => 209,  353 => 208,  348 => 206,  344 => 205,  340 => 204,  336 => 203,  330 => 200,  324 => 197,  318 => 194,  312 => 191,  306 => 188,  300 => 185,  296 => 184,  292 => 183,  288 => 182,  277 => 174,  273 => 173,  269 => 172,  265 => 171,  259 => 168,  253 => 165,  247 => 162,  243 => 161,  237 => 158,  233 => 157,  229 => 156,  225 => 155,  207 => 139,  205 => 137,  164 => 99,  157 => 95,  98 => 38,  96 => 37,  92 => 36,  88 => 35,  82 => 32,  77 => 30,  72 => 28,  66 => 25,  60 => 22,  55 => 20,  51 => 19,  47 => 18,  43 => 17,  37 => 14,  22 => 1,);
    }
}
