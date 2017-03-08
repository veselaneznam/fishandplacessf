<?php

namespace FishAndPlaces\UI\Bundle\MainBundle\Controller;

use APY\DataGridBundle\Grid\Source\Vector;
use FishAndPlaces\Application\Dam\DamCommand;
use FishAndPlaces\Domain\Dam\Model\Dam;
use FishAndPlaces\UI\Bundle\MainBundle\Form\DamType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PlacesController extends Controller
{
    /**
     * @Route("/add_dam", name="placesList")
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request)
    {
        $damService = $this->get('fish_and_places.dam_service');

        $damImagesService = $this->get('fish_and_places.dam_image_service');

        $dam = $this->get('fish_and_places.dam_representer');

        $form = $this->createForm(DamType::class);

        return $this->render('@Main/dam/add_dam.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/places", name="placesList")
     *
     */
    public function indexController(Request $request)
    {
        $damList = $this->get('fish_and_places.dam_repository')->findAll();
        $dataGrid = $this->get('datagrid.factory')->createDataGrid('dam');
        $dataGrid->setData($damList);

        if ($request->getMethod() == 'POST') {
            $dataGrid->bindData($request);
            $this->getDoctrine()->getManager()->flush();
        }

        return $this->render('@Main/dam/dam_list.html.twig', array(
            'datagrid' => $dataGrid->createView()
        ));
    }
}
