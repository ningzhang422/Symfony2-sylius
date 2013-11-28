<?php

namespace Acme\Bundle\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeShopBundle:Default:index.html.twig', array('name' => $name));
    }
}
