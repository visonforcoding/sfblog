<?php

/* CwpBlogBundle:Index:blog_read.html.twig */
class __TwigTemplate_984e7841f31659cc40a99acfd4d8bad07bcd6f47c12ddc7d4046159c002c61d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CwpBlogBundle:Layout:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'css' => array($this, 'block_css'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CwpBlogBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page"] = "blog";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "小绾的博客";
    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        // line 6
        echo "    <!-- ueditor -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />  
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cwputil/plugins/ueditor/third-party/SyntaxHighlighter/shCore.js"), "html", null, true);
        echo "\" ></script>
    <script>
        \$(function () {
            SyntaxHighlighter.all();
        })
    </script>
";
    }

    // line 15
    public function block_css($context, array $blocks = array())
    {
        // line 16
        echo "    <style>
        .wrapper {
            width: 1020px;
        }
        #posts-list {
            width: 720px;
        }
        #posts-list article .box {
            background: #F8F5F2;
        }
        #posts-list article .box .excerpt {
            float: none;
            width: 100%;
        }
        #posts-list article .box {
            padding-right: 20px;
        }
    </style>";
    }

    // line 34
    public function block_main($context, array $blocks = array())
    {
        // line 35
        echo "        <!-- MAIN -->
        <div id=\"main\">
            <div class=\"wrapper cf\">
                <!-- masthead -->
              ";
        // line 42
        echo "                <!-- ENDS masthead -->
                <!-- posts list -->
                <div id=\"posts-list\" class=\"cf\">        \t
                    <!-- Standard -->
                    <article class=\"format-standard\">
                      ";
        // line 50
        echo "                        <div class=\"box cf\">
                            <div class=\"entry-date\"><div class=\"number\">";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "ctime", array()), "d"), "html", null, true);
        echo "</div><div class=\"month\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "ctime", array()), "M"), "html", null, true);
        echo "</div></div>

                            <div class=\"excerpt\">
                                <div class=\"post-heading\" >";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</div>
                                <div class=\"entry-content\">
                                    ";
        // line 56
        echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "content", array());
        echo "
                                </div>
                            </div>

                            ";
        // line 66
        echo "
                        </div>
                    </article>
                    <!-- ENDS  Standard -->


                    <!-- comments list -->
                    <div id=\"comments-wrap\">
                        <h4 class=\"heading\">5 Comments</h4>

                        <ol class=\"commentlist\">


                            <li class=\"comment even thread-even depth-1\" id=\"li-comment-1\">

                                <div id=\"comment-1\" class=\"comment-body cf\">
                                    <img alt='' src='' class='avatar avatar-35 photo' height='35' width='35' />      
                                    <div class=\"comment-author vcard\">Jhon</div>
                                    <div class=\"comment-meta commentmetadata\">
                                        <span class=\"comment-date\">3 days ago  </span>
                                        <span class=\"comment-reply-link-wrap\"><a class='comment-reply-link' href='replytocom=23#respond' onclick='return addComment.moveForm(\"comment-1\", \"1\", \"respond\", \"432\")'>Reply</a></span>

                                    </div>
                                    <div class=\"comment-inner\">
                                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                                    </div>
                                </div>

                                <!-- child -->
                                <ul class='children'>
                                    <li class=\"comment even alt depth-2\" id=\"li-comment-2-1\">
                                        <div id=\"comment-2\" class=\"comment-body cf\">
                                            <img alt='' src='' class='avatar avatar-35 photo' height='35' width='35' />      
                                            <div class=\"comment-author vcard\">Jhon</div>
                                            <div class=\"comment-meta commentmetadata\">
                                                <span class=\"comment-date\">1 hour ago  </span>
                                                <span class=\"comment-reply-link-wrap\"><a class='comment-reply-link' href='replytocom=24#respond' onclick='return addComment.moveForm(\"comment-2\", \"2\", \"respond\", \"432\")'>Reply</a></span>
                                            </div>
                                            <div class=\"comment-inner\">
                                                <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class=\"comment odd alt depth-2\" id=\"li-comment-2-2\">
                                        <div id=\"comment-3\" class=\"comment-body cf\">
                                            <img alt='' src='' class='avatar avatar-35 photo' height='35' width='35' />      
                                            <div class=\"comment-author vcard\">Jhon</div>
                                            <div class=\"comment-meta commentmetadata\">
                                                <span class=\"comment-date\">1 hour ago  </span>
                                                <span class=\"comment-reply-link-wrap\"><a class='comment-reply-link' href='replytocom=24#respond' onclick='return addComment.moveForm(\"comment-3\", \"2\", \"respond\", \"432\")'>Reply</a></span>
                                            </div>
                                            <div class=\"comment-inner\">
                                                <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                                <!-- ENDS child -->
                            </li>


                            <li class=\"comment odd thread-even depth-1\" id=\"li-comment-3\">

                                <div id=\"comment-4\" class=\"comment-body cf\">
                                    <img alt='' src='' class='avatar avatar-35 photo' height='35' width='35' />      
                                    <div class=\"comment-author vcard\">Jhon</div>
                                    <div class=\"comment-meta commentmetadata\">
                                        <span class=\"comment-date\">3 days ago  </span>
                                        <span class=\"comment-reply-link-wrap\"><a class='comment-reply-link' href='replytocom=23#respond' onclick='return addComment.moveForm(\"comment-4\", \"1\", \"respond\", \"432\")'>Reply</a></span>

                                    </div>
                                    <div class=\"comment-inner\">
                                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                                    </div>
                                </div>
                            </li>





                            <li class=\"comment even thread-even depth-1\" id=\"li-comment-4\">

                                <div id=\"comment-5\" class=\"comment-body cf\">
                                    <img alt='' src='' class='avatar avatar-35 photo' height='35' width='35' />      
                                    <div class=\"comment-author vcard\">Jhon</div>
                                    <div class=\"comment-meta commentmetadata\">
                                        <span class=\"comment-date\">3 days ago  </span>
                                        <span class=\"comment-reply-link-wrap\"><a class='comment-reply-link' href='replytocom=23#respond' onclick='return addComment.moveForm(\"comment-5\", \"1\", \"respond\", \"432\")'>Reply</a></span>

                                    </div>
                                    <div class=\"comment-inner\">
                                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                                    </div>
                                </div>
                            </li>






                        </ol>
                    </div>
                    <!-- ENDS comments list -->


                    <!-- Respond -->\t\t\t\t
                    <div id=\"respond\">
                        <h3 id=\"reply-title\">Leave a Reply <small><a rel=\"nofollow\" id=\"cancel-comment-reply-link\" href=\"/themes/wp-simpler/archives/34#respond\" style=\"display:none;\">Cancel reply</a></small></h3>


                        <form action=\"single.html\" method=\"post\" id=\"commentform\">
                            <p class=\"comment-notes\">Your email address will not be published. Required fields are marked <span class=\"required\">*</span></p>

                            <p class=\"comment-form-author\"><label for=\"author\">Name<span class=\"required\">*</span></label> <input id=\"author\" name=\"author\" type=\"text\" value=\"\" size=\"30\" aria-required=\"true\"></p>

                            <p class=\"comment-form-email\"><label for=\"email\">Email<span class=\"required\">*</span></label> <input id=\"email\" name=\"email\" type=\"text\" value=\"\" size=\"30\" aria-required=\"true\"></p>
                            <p class=\"comment-form-url\"><label for=\"url\">Website</label><input id=\"url\" name=\"url\" type=\"text\" value=\"\" size=\"30\"></p>

                            <p class=\"comment-form-comment\"><label for=\"comment\">Comment</label><textarea id=\"comment\" name=\"comment\" cols=\"45\" rows=\"8\" aria-required=\"true\"></textarea></p>\t\t\t\t\t\t

                            <!-- allowed tags -->
                            <p class=\"form-allowed-tags\">You may use these <abbr title=\"HyperText Markup Language\">HTML</abbr> tags and attributes:  <code>&lt;a href=\"\" title=\"\"&gt; &lt;abbr title=\"\"&gt; &lt;acronym title=\"\"&gt; &lt;b&gt; &lt;blockquote cite=\"\"&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=\"\"&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=\"\"&gt; &lt;strike&gt; &lt;strong&gt; </code></p>\t\t\t\t\t\t
                            <!-- ENDS allowed tags -->

                            <p class=\"form-submit\">
                                <input name=\"submit\" type=\"submit\" id=\"submit\" value=\"Post Comment\">
                                <input type=\"hidden\" name=\"comment_post_ID\" value=\"34\" id=\"comment_post_ID\">
                                <input type=\"hidden\" name=\"comment_parent\" id=\"comment_parent\" value=\"0\">
                            </p>

                        </form>
                    </div>
                    <!-- ENDS Respond -->



                </div>
                <!-- ENDS posts list -->

                <!-- sidebar -->
                <aside id=\"sidebar\">

                    <ul>
                        <li class=\"block\">
                            <h4>Text Widget</h4>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. 
                        </li>

                        <li class=\"block\">
                            <h4>Categories</h4>
                            <ul>
                                <li class=\"cat-item\"><a href=\"#\" title=\"title\">Film and video<span class=\"post-counter\"> (2)</span></a></li>
                                <li class=\"cat-item\"><a href=\"#\" title=\"title\">Print<span class=\"post-counter\"> (2)</span></a></li>
                                <li class=\"cat-item\"><a href=\"#\" title=\"title\">Photo and lomo<span class=\"post-counter\"> (2)</span></a></li>
                                <li class=\"cat-item\"><a href=\"#\" title=\"title\">Habitant morbi<span class=\"post-counter\"> (2)</span></a></li>
                                <li class=\"cat-item\"><a href=\"#\" title=\"title\">Film and video<span class=\"post-counter\"> (2)</span></a></li>
                                <li class=\"cat-item\"><a href=\"#\" title=\"title\">Print<span class=\"post-counter\"> (2)</span></a></li>
                                <li class=\"cat-item\"><a href=\"#\" title=\"title\">Photo and lomo<span class=\"post-counter\"> (2)</span></a></li>
                                <li class=\"cat-item\"><a href=\"#\" title=\"title\">Habitant morbi<span class=\"post-counter\"> (2)</span></a></li>
                            </ul>
                        </li>

                        <li class=\"block\">
                            <h4>Archives</h4>
                            <ul>
                                <li class=\"cat-item\"><a href=\"#\" title=\"title\">January</a></li>
                                <li class=\"cat-item\"><a href=\"#\" title=\"title\">February</a></li>
                                <li class=\"cat-item\"><a href=\"#\" title=\"title\">March</a></li>
                            </ul>
                        </li>

                    </ul>

                </aside>
                <!-- ENDS sidebar -->


            </div><!-- ENDS WRAPPER -->
        </div>
        <!-- ENDS MAIN -->

    ";
    }

    public function getTemplateName()
    {
        return "CwpBlogBundle:Index:blog_read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 66,  116 => 56,  111 => 54,  103 => 51,  100 => 50,  93 => 42,  87 => 35,  84 => 34,  63 => 16,  60 => 15,  49 => 8,  45 => 7,  42 => 6,  39 => 5,  33 => 4,  28 => 3,);
    }
}
