<?php

namespace OpenScrum\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('OpenScrumInfoBundle:Default:index.html.twig', array('name' => $name));
    }
}
