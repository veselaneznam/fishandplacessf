<?php

namespace FishAndPlaces\UI\Bundle\MainBundle\Controller;

use FishingAndPlaces\Dam\Applicaiton\Dam\DamRepresenter;
use FishingAndPlaces\UI\Bundle\MainBundle\Form\DamType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PlacesController extends Controller
{
    /**
     * @Route("/places", name="placesList")
     */
    public function indexAction(Request $request)
    {
        $dam = new DamRepresenter($dam);
        $form = $this->createForm(DamType::class, );

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
