<?php

namespace EzLoc\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EzLocSiteBundle:Default:index.html.twig');
    }
}
