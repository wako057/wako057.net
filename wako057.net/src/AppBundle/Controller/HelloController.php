<?php
/**
 * Created by IntelliJ IDEA.
 * User: Gregs
 * Date: 05/06/2016
 * Time: 21:01
 */
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HelloController
{
    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }

}
