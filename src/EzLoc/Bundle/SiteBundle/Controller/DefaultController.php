<?php

namespace EzLoc\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EzLocSiteBundle:Place')->findAll();

        return $this->render('EzLocSiteBundle:Default:index.html.twig', array('entities' => $entities,));
    }
}
