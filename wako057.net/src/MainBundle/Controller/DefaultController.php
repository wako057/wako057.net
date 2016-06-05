<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
//        phpinfo();
//        exit;
        return $this->render('MainBundle:Default:index.html.twig');
    }


    /**
     * @Route("/about")
     */
    public function aboutAction()
    {


//        return $this->render('MainBundle:Default:about.html.twig');
    }
}
