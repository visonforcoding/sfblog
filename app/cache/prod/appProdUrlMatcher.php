<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // cwp_util_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cwp_util_homepage')), array (  '_controller' => 'Cwp\\UtilBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/util')) {
            // cwp_util_addCat
            if ($pathinfo === '/util/index') {
                return array (  '_controller' => 'Cwp\\UtilBundle\\Controller\\CategoryController::addCatAction',  '_route' => 'cwp_util_addCat',);
            }

            // cwp_util_forbidden
            if ($pathinfo === '/util/forbidden') {
                return array (  '_controller' => 'Cwp\\UtilBundle\\Controller\\BackendController::forbiddenAction',  '_route' => 'cwp_util_forbidden',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // cwp_admin_homepage
            if (0 === strpos($pathinfo, '/admin/hello') && preg_match('#^/admin/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cwp_admin_homepage')), array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\DefaultController::indexAction',));
            }

            // cwp_admin_index
            if ($pathinfo === '/admin/index/index') {
                return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\IndexController::indexAction',  '_route' => 'cwp_admin_index',);
            }

            // login
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\IndexController::loginAction',  '_route' => 'login',);
            }

            if (0 === strpos($pathinfo, '/admin/user/user_')) {
                // cwp_admin_userlist
                if ($pathinfo === '/admin/user/user_list') {
                    return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::userlistAction',  '_route' => 'cwp_admin_userlist',);
                }

                // cwp_admin_useradd
                if ($pathinfo === '/admin/user/user_add') {
                    return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::userAddAction',  '_route' => 'cwp_admin_useradd',);
                }

                // cwp_admin_userdel
                if ($pathinfo === '/admin/user/user_del') {
                    return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::userDelAction',  '_route' => 'cwp_admin_userdel',);
                }

            }

            // cwp_admin_doadduser
            if ($pathinfo === '/admin/doadduser') {
                return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::doAddUserAction',  '_route' => 'cwp_admin_doadduser',);
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                if (0 === strpos($pathinfo, '/admin/user/group_')) {
                    // cwp_admin_groupadd
                    if ($pathinfo === '/admin/user/group_add') {
                        return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::groupAddAction',  '_route' => 'cwp_admin_groupadd',);
                    }

                    // cwp_admin_grouplist
                    if ($pathinfo === '/admin/user/group_list') {
                        return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::groupListAction',  '_route' => 'cwp_admin_grouplist',);
                    }

                    // cwp_admin_groupupdate
                    if ($pathinfo === '/admin/user/group_update') {
                        return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::groupUpdateAction',  '_route' => 'cwp_admin_groupupdate',);
                    }

                }

                // cwp_admin_accessconfig
                if ($pathinfo === '/admin/user/access_config') {
                    return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::accessConfigAction',  '_route' => 'cwp_admin_accessconfig',);
                }

            }

            // cwp_admin_addcat
            if ($pathinfo === '/admin/addcat') {
                return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\BlogController::addCatAction',  '_route' => 'cwp_admin_addcat',);
            }

            // cwp_admin_blogcatlist
            if ($pathinfo === '/admin/blogcatlist') {
                return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\BlogController::catListAction',  '_route' => 'cwp_admin_blogcatlist',);
            }

            if (0 === strpos($pathinfo, '/admin/content/blog_')) {
                // cwp_admin_bloglist
                if ($pathinfo === '/admin/content/blog_list') {
                    return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\BlogController::blogListAction',  '_route' => 'cwp_admin_bloglist',);
                }

                // cwp_admin_addblog
                if ($pathinfo === '/admin/content/blog_add') {
                    return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\BlogController::addBlogAction',  '_route' => 'cwp_admin_addblog',);
                }

                // cwp_admin_blogupdate
                if ($pathinfo === '/admin/content/blog_update') {
                    return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\BlogController::blogUpdateAction',  '_route' => 'cwp_admin_blogupdate',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/user/menu_')) {
                // cwp_admin_menulist
                if ($pathinfo === '/admin/user/menu_list') {
                    return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\MenuController::menuListAction',  '_route' => 'cwp_admin_menulist',);
                }

                // cwp_admin_addmenu
                if ($pathinfo === '/admin/user/menu_add') {
                    return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\MenuController::addMenuAction',  '_route' => 'cwp_admin_addmenu',);
                }

                // cwp_admin_menuupdate
                if ($pathinfo === '/admin/user/menu_update') {
                    return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\MenuController::menuUpdateAction',  '_route' => 'cwp_admin_menuupdate',);
                }

                // cwp_admin_menudel
                if ($pathinfo === '/admin/user/menu_del') {
                    return array (  '_controller' => 'Cwp\\AdminBundle\\Controller\\MenuController::menuDelAction',  '_route' => 'cwp_admin_menudel',);
                }

            }

        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Cwp\\BlogBundle\\Controller\\IndexController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // cwp_blog_blogread
            if (0 === strpos($pathinfo, '/blog/single') && preg_match('#^/blog/single\\-(?P<blog_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cwp_blog_blogread')), array (  '_controller' => 'Cwp\\BlogBundle\\Controller\\IndexController::blogReadAction',));
            }

            // cwp_blog_bloglist
            if ($pathinfo === '/blog/list') {
                return array (  '_controller' => 'Cwp\\BlogBundle\\Controller\\IndexController::blogListAction',  '_route' => 'cwp_blog_bloglist',);
            }

        }

        // cwp_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cwp_user_homepage')), array (  '_controller' => 'CwpUserBundle:Default:index',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
