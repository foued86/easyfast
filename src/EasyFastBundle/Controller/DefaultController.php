<?php

namespace EasyFastBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="easyfast_home")
     */
    public function indexAction()
    {
        return $this->render('EasyFastBundle:Default:index.html.twig');
    }

    /**
     * @Route("/tarifs-taxi-moto", name="easyfast_tarifs")
     */
    public function tarifsAction()
    {
        return $this->render('EasyFastBundle:Default:tarifs.html.twig');
    }
}
