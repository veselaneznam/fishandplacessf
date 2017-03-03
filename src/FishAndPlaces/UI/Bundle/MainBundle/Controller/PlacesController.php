<?php

namespace FishAndPlaces\UI\Bundle\MainBundle\Controller;

use FishAndPlaces\Application\Dam\DamCommand;
use FishAndPlaces\UI\Bundle\MainBundle\Form\DamType;
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
        $damService = $this->get('fish_and_places.dam_service');

        $damImagesService = $this->get('fish_and_places.dam_image_service');

        $dam = $this->get('fish_and_places.dam_representer');

        $form = $this->createForm(DamType::class);

        return $this->render('@Main/dam/add_dam.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
