<?php
/**
 * Created by IntelliJ IDEA.
 * User: OCTO
 * Date: 18/02/2017
 * Time: 21:53
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/genus")
     */
    public function showAction()
    {
        return new Response('Under the sea!');

    }

}