<?php

namespace FishAndPlaces\UI\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends Controller
{
    /**
     * @Route("/", name="home")
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('search')
            ->add('search_box', TextType::class)
            ->add('search', SubmitType::class, array('label' => 'Search'))
            ->getForm();

        $form->handleRequest($request);

        $searchResult = [];

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $criteria = $form->getData();

            return $this->redirectToRoute('home');
        }

        return $this->render('@Main/search/search_form.html.twig', array(
            'form' => $form->createView(),
            'searchResult' => $searchResult
        ));
    }
}
