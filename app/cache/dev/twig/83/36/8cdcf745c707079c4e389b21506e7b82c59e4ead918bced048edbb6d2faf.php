<?php

/* CwpBlogBundle:Index:index.html.twig */
class __TwigTemplate_83368cdcf745c707079c4e389b21506e7b82c59e4ead918bced048edbb6d2faf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CwpBlogBundle:Layout:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CwpBlogBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "CwpBlogBundle:Index:index";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- HEADER -->
    <header>
        <div class=\"wrapper cf\">

            <div id=\"logo\">
                <a href=\"index.html\"><img  src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/logo.png"), "html", null, true);
        echo "\" alt=\"Simpler\"></a>
            </div>

            <!-- nav -->
            <ul id=\"nav\" class=\"sf-menu\">
                <li class=\"current-menu-item\"><a href=\"index.html\">HOME</a></li>
                <li><a href=\"blog.html\">BLOG</a></li>
                <li><a href=\"page.html\">ABOUT</a>
                    <ul>
                        <li><a href=\"page-elements.html\">Elements</a></li>
                        <li><a href=\"page-icons.html\">Icons</a></li>
                        <li><a href=\"page-typography.html\">Typography</a></li>
                    </ul>
                </li>
                <li><a href=\"portfolio.html\">WORK</a></li>
                <li><a href=\"contact.html\">CONTACT</a></li>
            </ul>
            <div id=\"combo-holder\"></div>
            <!-- ends nav -->


            <!-- SLIDER -->\t\t\t\t
            <div id=\"home-slider\" class=\"lof-slidecontent\">

                <div class=\"preload\"><div></div></div>

                <!-- slider content --> 
                <div class=\"main-slider-content\" >
                    <ul class=\"sliders-wrap-inner\">
                        <li>
                            <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/01.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                            <div class=\"slider-description\">
                                <h4>Lorem ipsum dolor</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                                    <a class=\"link\" href=\"#\">Read more </a>
                                </p>
                            </div>
                        </li>

                        <li>
                            <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/02.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                            <div class=\"slider-description\">
                                <h4>Lorem ipsum dolor</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                                    <a class=\"link\" href=\"#\">Read more </a>
                                </p>
                            </div>
                        </li>

                        <li>
                            <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/03.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                            <div class=\"slider-description\">
                                <h4>Lorem ipsum dolor</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                                    <a class=\"link\" href=\"#\">Read more </a>
                                </p>
                            </div>
                        </li>

                        <li>
                            <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/04.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                            <div class=\"slider-description\">
                                <h4>Lorem ipsum dolor</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                                    <a class=\"link\" href=\"#\">Read more </a>
                                </p>
                            </div>
                        </li>

                        <li>
                            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/05.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                            <div class=\"slider-description\">
                                <h4>Lorem ipsum dolor</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                                    <a class=\"link\" href=\"#\">Read more </a>
                                </p>
                            </div>
                        </li>

                        <li>
                            <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/06.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                            <div class=\"slider-description\">
                                <h4>Lorem ipsum dolor</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                                    <a class=\"link\" href=\"#\">Read more </a>
                                </p>
                            </div>
                        </li>

                        <li>
                            <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/07.jpg"), "html", null, true);
        echo "\" title=\"\" alt=\"alt\" />           
                            <div class=\"slider-description\">
                                <h4>Lorem ipsum dolor</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est...
                                    <a class=\"link\" href=\"#\">Read more </a>
                                </p>
                            </div>
                        </li>

                    </ul>  \t
                </div>
                <!-- ENDS slider content --> 

                <!-- slider nav -->
                <div class=\"navigator-content\">
                    <div class=\"navigator-wrapper\">
                        <ul class=\"navigator-wrap-inner\">
                            <li><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/01_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                            <li><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/02_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                            <li><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/03_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                            <li><img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/04_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                            <li><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/05_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                            <li><img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/06_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                            <li><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/slides/01_thumb.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></li>
                        </ul>
                    </div>
                    <div class=\"button-next\">Next</div>
                    <div  class=\"button-previous\">Previous</div>
                    <!-- REMOVED TILL FIXED <div class=\"button-control\"><span>STOP</span></div> -->
                </div> 
                <!-- slider nav -->



            </div> 
            <!-- ENDS SLIDER -->





        </div>
    </header>
    <!-- ENDS HEADER -->

    <!-- MAIN -->
    <div id=\"main\">
        <div class=\"wrapper cf\">





            <!-- featured -->
            <div class=\"home-featured\">

                <ul id=\"filter-buttons\">
                    <li><a href=\"#\" data-filter=\"*\" class=\"selected\">show all</a></li>
                    <li><a href=\"#\" data-filter=\".web\">web</a></li>
                    <li><a href=\"#\" data-filter=\".print\">print</a></li>
                    <li><a href=\"#\" data-filter=\".design\">design</a></li>
                    <li><a href=\"#\" data-filter=\".photo\">photo</a></li>
                </ul>

                <!-- Filter container -->
                <div id=\"filter-container\" class=\"cf\">
                    <figure class=\"web\">
                        <a href=\"project.html\" class=\"thumb\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/featured/01.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></a>
                        <figcaption>
                            <a href=\"project.html\"><h3 class=\"heading\">Pellentesque </h3></a>
                            Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
                    </figure>

                    <figure class=\"print\">
                        <a href=\"project.html\" class=\"thumb\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/featured/02.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></a>
                        <figcaption>
                            <a href=\"project.html\"><h3 class=\"heading\">Pellentesque habitant morbi</h3></a>
                            Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
                    </figure>


                    <figure class=\"design\">
                        <a href=\"project.html\" class=\"thumb\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/featured/03.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></a>
                        <figcaption>
                            <a href=\"project.html\" ><h3 class=\"heading\">Habitant morbi</h3></a>
                            Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
                    </figure>


                    <figure class=\"photo\">
                        <a href=\"project.html\" class=\"thumb\"><img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/featured/04.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></a>
                        <figcaption>
                            <a href=\"project.html\" ><h3 class=\"heading\">Pellentesque habitant morbi</h3></a>
                            Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
                    </figure>


                    <figure class=\"web photo\">
                        <a href=\"project.html\" class=\"thumb\"><img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/featured/05.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></a>
                        <figcaption>
                            <a href=\"project.html\" ><h3 class=\"heading\">Pellentesque habitant morbi</h3></a>
                            Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
                    </figure>


                    <figure class=\"web print\">
                        <a href=\"project.html\" class=\"thumb\"><img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/featured/06.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></a>
                        <figcaption>
                            <a href=\"project.html\" ><h3 class=\"heading\">Pellentesque habitant morbi</h3></a>
                            Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
                    </figure>


                    <figure class=\"photo\">
                        <a href=\"project.html\" class=\"thumb\"><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/featured/04.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></a>
                        <figcaption>
                            <a href=\"project.html\" ><h3 class=\"heading\">Pellentesque habitant morbi</h3></a>
                            Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
                    </figure>


                    <figure class=\"web photo\">
                        <a href=\"project.html\" class=\"thumb\"><img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/featured/05.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></a>
                        <figcaption>
                            <a href=\"project.html\" ><h3 class=\"heading\">Pellentesque habitant morbi</h3></a>
                            Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
                    </figure>


                    <figure class=\"web print\">
                        <a href=\"project.html\" class=\"thumb\"><img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/featured/01.jpg"), "html", null, true);
        echo "\" alt=\"alt\" /></a>
                        <figcaption>
                            <a href=\"project.html\" ><h3 class=\"heading\">Pellentesque habitant morbi</h3></a>
                            Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
                    </figure>

                </div><!-- ENDS Filter container -->

            </div>
            <!-- ENDS featured -->




        </div><!-- ENDS WRAPPER -->
    </div>
    <!-- ENDS MAIN -->


    <!-- FOOTER -->
    <footer>
        <div class=\"wrapper cf\">

            <!-- widgets -->
            <ul  class=\"widget-cols cf\">
                <li class=\"first-col\">

                    <div class=\"widget-block\">
                        <h4>RECENT POSTS</h4>
                        <div class=\"recent-post cf\">
                            <a href=\"#\" class=\"thumb\"><img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/54x54.gif"), "html", null, true);
        echo "\" alt=\"Post\" /></a>
                            <div class=\"post-head\">
                                <a href=\"#\">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                            </div>
                        </div>
                        <div class=\"recent-post cf\">
                            <a href=\"#\" class=\"thumb\"><img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/54x54.gif"), "html", null, true);
        echo "\" alt=\"Post\" /></a>
                            <div class=\"post-head\">
                                <a href=\"#\">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                            </div>
                        </div>
                        <div class=\"recent-post cf\">
                            <a href=\"#\" class=\"thumb\"><img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwpblog/img/dummies/54x54.gif"), "html", null, true);
        echo "\" alt=\"Post\" /></a>
                            <div class=\"post-head\">
                                <a href=\"#\">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                            </div>
                        </div>
                    </div>
                </li>

                <li class=\"second-col\">

                    <div class=\"widget-block\">
                        <h4>ABOUT</h4>
                        <p>Folder it's completely free this means you don't have to pay anything <a href=\"http://luiszuno.com/blog/license\" tar >read license</a>.</p> 
                        <p>Visit <a href=\"http://templatecreme.com/\" >Template Creme</a> and find the most beautiful free templates up to date.</p>
                    </div>

                </li>

                <li class=\"third-col\">

                    <div class=\"widget-block\">
                        <div id=\"tweets\" class=\"footer-col tweet\">
                            <h4>TWITTER WIDGET</h4>
                        </div>
                    </div>

                </li>

                <li class=\"fourth-col\">

                    <div class=\"widget-block\">
                        <h4>CATEGORIES</h4>
                        <ul>
                            <li class=\"cat-item\"><a href=\"#\" >Design</a></li>
                            <li class=\"cat-item\"><a href=\"#\" >Photo</a></li>
                            <li class=\"cat-item\"><a href=\"#\" >Art</a></li>
                            <li class=\"cat-item\"><a href=\"#\" >Game</a></li>
                            <li class=\"cat-item\"><a href=\"#\" >Film</a></li>
                            <li class=\"cat-item\"><a href=\"#\" >TV</a></li>
                        </ul>
                    </div>

                </li>\t
            </ul>
            <!-- ENDS widgets -->\t


            <!-- bottom -->
            <div class=\"footer-bottom\">
                <div class=\"left\">by <a href=\"http://luiszuno.com\" >luiszuno.com</a></div>
                <ul id=\"social-bar\" class=\"cf sb\">
                    <li><a href=\"http://www.facebook.com\"  title=\"Become a fan\" class=\"facebook\">Facebbok</a></li>
                    <li><a href=\"http://www.twitter.com\" title=\"Follow my tweets\" class=\"twitter\"></a></li>
                    <li><a href=\"http://plus.google.com\" title=\"Enter my circles\" class=\"plus\"></a></li>
                </ul>
            </div>\t
            <!-- ENDS bottom -->

        </div>
    </footer>
    <!-- ENDS FOOTER -->
";
    }

    public function getTemplateName()
    {
        return "CwpBlogBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 271,  376 => 265,  367 => 259,  334 => 229,  323 => 221,  312 => 213,  301 => 205,  290 => 197,  279 => 189,  268 => 181,  257 => 173,  247 => 166,  200 => 122,  196 => 121,  192 => 120,  188 => 119,  184 => 118,  180 => 117,  176 => 116,  156 => 99,  143 => 89,  130 => 79,  117 => 69,  104 => 59,  91 => 49,  78 => 39,  45 => 9,  38 => 4,  35 => 3,  29 => 2,);
    }
}
