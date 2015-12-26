<?php

namespace Uni\Bundle\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('uniProyectoBundle:Default:index.html.twig', array('name' => $name));
    }
   
    public function holaAction()
    {
        return $this->render('uniProyectoBundle:Default:hola.html.twig');
    }
}
