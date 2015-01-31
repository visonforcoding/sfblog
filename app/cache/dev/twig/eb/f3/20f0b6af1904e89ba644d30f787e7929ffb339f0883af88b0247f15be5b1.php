<?php

/* CwpUtilBundle:Layout:layout.html.twig */
class __TwigTemplate_ebf320f0b6af1904e89ba644d30f787e7929ffb339f0883af88b0247f15be5b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
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
        <title>sfblog</title>
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
        <!-- iButton -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/ibutton/jquery.ibutton.css"), "html", null, true);
        echo "\">

        <!-- Circular Stat -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/custom-plugins/circular-stat/circular-stat.css"), "html", null, true);
        echo "\">
        <!-- msgBox -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/msgbox/jquery.msgbox.css"), "html", null, true);
        echo "\">
        <!-- pnotify -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/pnotify/jquery.pnotify.css"), "html", null, true);
        echo "\">
        <!-- End Plugin Stylesheets -->
        <!-- Main Layout Stylesheet -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/css/fonts/icomoon/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/css/main-style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/css/base.css"), "html", null, true);
        echo "\">
    ";
        // line 39
        $this->displayBlock('javascript', $context, $blocks);
        // line 40
        $this->displayBlock('css', $context, $blocks);
        // line 41
        echo "<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js></script>
<![endif]-->

<script type=\"text/javascript\">
    document.domain = \"sfblog\";
</script>

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
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                                </span>
                                <div class=\"avatar\">
                                    <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">
                                        <img src=\"";
        // line 104
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
                                    ";
        // line 130
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CwpUtilBundle:Menu:showMenu"));
        echo "
                                </ul>
                            </nav>
                        </aside>

                        <div id=\"sidebar-separator\"></div>

                        <section id=\"main\" class=\"clearfix\">
                            <div id=\"main-header\" class=\"page-header\">
                                ";
        // line 139
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CwpUtilBundle:Menu:showCrumb"));
        echo "
                            </div>
                            <div id=\"main-content\">
                                ";
        // line 142
        $this->displayBlock('main', $context, $blocks);
        // line 144
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
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/libs/jquery-1.8.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/libs/jquery.placeholder.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/libs/jquery.mousewheel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Template Script -->
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/template.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/setup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Customizer, remove if not needed -->
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/customizer.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Uniform Script -->
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- jquery-ui Scripts -->
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/js/jquery-ui-1.8.24.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/jquery-ui.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/timepicker/jquery-ui-timepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/jui/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Plugin Scripts -->

    <!-- Flot -->
    <!--[if lt IE 9]>
    <script src=\"assets/js/libs/excanvas.min.js></script>
    <![endif]-->
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/flot/plugins/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/flot/plugins/jquery.flot.pie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/flot/plugins/jquery.flot.resize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- Circular Stat -->
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/custom-plugins/circular-stat/circular-stat.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- SparkLine -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- iButton -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/ibutton/jquery.ibutton.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- msgBox -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/msgbox/jquery.msgbox.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- pnotify -->
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/pnotify/jquery.pnotify.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- DataTables -->
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/datatables/TableTools/js/TableTools.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/datatables/jquery.dataTables.columnFilter.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Demo Scripts -->
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/demo/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/assets/js/demo/dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/js/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        // line 215
        $this->displayBlock('script', $context, $blocks);
        // line 216
        echo "</body>
</html>
";
    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 40
    public function block_css($context, array $blocks = array())
    {
    }

    // line 142
    public function block_main($context, array $blocks = array())
    {
        // line 143
        echo "                                ";
    }

    // line 215
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
        return array (  402 => 215,  398 => 143,  395 => 142,  390 => 40,  385 => 39,  379 => 216,  377 => 215,  373 => 214,  369 => 213,  365 => 212,  360 => 210,  356 => 209,  352 => 208,  348 => 207,  342 => 204,  336 => 201,  330 => 198,  324 => 195,  318 => 192,  312 => 189,  308 => 188,  304 => 187,  300 => 186,  289 => 178,  285 => 177,  281 => 176,  277 => 175,  271 => 172,  265 => 169,  259 => 166,  255 => 165,  249 => 162,  245 => 161,  241 => 160,  237 => 159,  220 => 144,  218 => 142,  212 => 139,  200 => 130,  171 => 104,  164 => 100,  103 => 41,  101 => 40,  99 => 39,  95 => 38,  91 => 37,  87 => 36,  81 => 33,  76 => 31,  71 => 29,  65 => 26,  59 => 23,  54 => 21,  50 => 20,  46 => 19,  39 => 15,  23 => 1,);
    }
}
