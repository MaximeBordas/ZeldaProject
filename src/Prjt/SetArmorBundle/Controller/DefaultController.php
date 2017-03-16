<?php

namespace Prjt\SetArmorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SetArmorBundle:Default:index.html.twig');
    }
}
