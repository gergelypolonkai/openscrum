<?php

namespace OpenScrum\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('OpenScrumInfoBundle:' . $this->getRequest()->getLocale() . ':index.html.twig', array());
    }

    public function infopageAction($page)
    {
	    return $this->render('OpenScrumInfoBundle:' . $this->getRequest()->getLocale() . ':' . $page . '.html.twig', array());
    }
}
