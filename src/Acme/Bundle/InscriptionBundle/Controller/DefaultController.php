<?php

namespace Acme\Bundle\InscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeInscriptionBundle:Default:index.html.twig', array('name' => $name));
    }
}
