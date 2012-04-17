<?php

namespace OpenScrum\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('OpenScrumInfoBundle:' . $this->get('session')->getLocale() . ':index.html.twig', array());
    }

    public function infopageAction($page)
    {
	    return $this->render('OpenScrumInfoBundle:' . $this->get('session')->getLocale() . ':' . $page . '.html.twig', array());
    }
}
