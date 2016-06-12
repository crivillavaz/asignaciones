<?php

namespace PTP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PTPUserBundle:Default:index.html.twig');
    }
}
