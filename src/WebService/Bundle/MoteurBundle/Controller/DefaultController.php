<?php

namespace WebService\Bundle\MoteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WebServiceMoteurBundle:Default:index.html.twig', array('name' => $name));
    }
}
