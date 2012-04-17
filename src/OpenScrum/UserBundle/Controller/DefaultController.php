<?php

namespace OpenScrum\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('OpenScrumUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
