<?php
// src/AppBundle/Controller/AboutController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class AboutController extends Controller {

    /**
     * Matches /about exactly
     *
     * @Route("/about")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Default:about.html.twig');
    }

}
