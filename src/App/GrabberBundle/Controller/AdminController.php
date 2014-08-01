<?php

namespace App\GrabberBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class AdminController
 * @package App\BlogBundle\Controller
 *
 * @Route("/admin", name="admin_controller")
 *
 */
class AdminController extends Controller
{

    /**
     * @Route("/", name="blog_admin_dashboard")
     * @Method("GET")
     * @Template()
     */
    public function dashboardAction()
    {
        return [];
    }
}
