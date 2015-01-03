<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'cwp_util_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Cwp\\UtilBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_util_addCat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\UtilBundle\\Controller\\CategoryController::addCatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/util/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_util_forbidden' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\UtilBundle\\Controller\\BackendController::forbiddenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/util/forbidden',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/admin/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\IndexController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/index/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\IndexController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_userlist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::userlistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/user_list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_useradd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::userAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/user_add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_userdel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::userDelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/user_del',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_doadduser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::doAddUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/doadduser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_groupadd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::groupAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/group_add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_grouplist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::groupListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/group_list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_groupupdate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::groupUpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/group_update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_accessconfig' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\UserController::accessConfigAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/access_config',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_addcat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\BlogController::addCatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addcat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_blogcatlist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\BlogController::catListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/blogcatlist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_bloglist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\BlogController::blogListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/content/blog_list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_addblog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\BlogController::addBlogAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/content/blog_add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_blogupdate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\BlogController::blogUpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/content/blog_update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_menulist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\MenuController::menuListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/menu_list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_addmenu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\MenuController::addMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/menu_add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_menuupdate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\MenuController::menuUpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/menu_update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_admin_menudel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\AdminBundle\\Controller\\MenuController::menuDelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/menu_del',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\BlogBundle\\Controller\\IndexController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_blog_blogread' => array (  0 =>   array (    0 => 'blog_id',  ),  1 =>   array (    '_controller' => 'Cwp\\BlogBundle\\Controller\\IndexController::blogReadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '-',      2 => '[^/]++',      3 => 'blog_id',    ),    1 =>     array (      0 => 'text',      1 => '/blog/single',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_blog_bloglist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cwp\\BlogBundle\\Controller\\IndexController::blogListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cwp_user_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'CwpUserBundle:Default:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
