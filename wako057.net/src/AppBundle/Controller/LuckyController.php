<?php
/**
 * Created by IntelliJ IDEA.
 * User: Gregs
 * Date: 05/06/2016
 * Time: 20:59
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Debug\Debug;
class LuckyController
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = rand(0, 100);
        Debug::enable();

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
