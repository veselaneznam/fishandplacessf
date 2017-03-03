<?php

namespace FishAndPlaces\UI\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('@Main/base.html.twig', array(
        ));
    }
}
