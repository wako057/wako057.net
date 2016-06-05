<?php
/**
 * Created by IntelliJ IDEA.
 * User: Gregs
 * Date: 05/06/2016
 * Time: 21:07
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
class MainController
{
    /**
     * @Route("/blog/{slug}")
     */
    public function showAction($slug)
    {
        // ...
    }
}
