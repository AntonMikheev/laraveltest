<?php
/**
 * Created by PhpStorm.
 * User: worker
 * Date: 25.06.14
 * Time: 8:50
 */

namespace App\GrabberBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Security\Core\SecurityContext;

class SecuredController extends Controller
{
    /**
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/admin/login", name="admin_login")
     * @Method({"GET", "POST"})
     * @Template("AppGrabberBundle:Admin:login.html.twig")
     */
    public function loginAction()
    {

        $request = $this->getRequest();
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return [
            'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ];
    }

    /**
     * @Route("/admin/login_check", name="admin_security_check")
     * @Method("POST")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request
        return [];
    }

    /**
     * @Route("/admin/logout", name="app_admin_logout")
     */
    public function logoutAction()
    {
        // The security layer will intercept this request
    }


} 