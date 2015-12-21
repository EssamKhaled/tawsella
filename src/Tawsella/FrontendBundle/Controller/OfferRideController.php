<?php

namespace Tawsella\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Tawsella\CoreBundle\Entity\OfferRide;
use Tawsella\FrontendBundle\Form\OfferRideType;

/**
 * OfferRide controller.
 *
 * @Route("/offer-ride")
 */
class OfferRideController extends Controller
{
    /**
     * @Route("/new/", name="offer-ride")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $entity = new OfferRide();

        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }
    
    /**
     * Creates a new OfferRide entity.
     *
     * @Route("/new", name="create_offerRide")
     * @Method("POST")
     * @Template("FrontendBundle:OfferRide:index.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new OfferRide();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->getUser();
            
            $entity->setUser($user);
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('offer-ride-confirmation'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }
    
    /**
    * Creates a form to create a OfferRide entity.
    *
    * @param OfferRide $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(OfferRide $entity)
    {
        $form = $this->createForm(new OfferRideType(), $entity, array(
            'action' => $this->generateUrl('create_offerRide'),
            'method' => 'POST',
        ));

        return $form;
    }     
    
    /**
     * @Route("/confirmation", name="offer-ride-confirmation")
     * @Method("GET")
     * @Template()
     */
    public function confirmAction()
    {
        return array();
    } 
    
    
    
    /**
     * @Route("/available", name="offer-ride-available")
     * @Method("GET")
     * @Template()
     */
    public function availableAction()
    {        
        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository("CoreBundle:OfferRide")->findAll();        

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query,$this->get('request')->query->get('page', 1),15);

	
	
        return array(
            'pagination' => $pagination,
        );    

    } 
    
    /**
     * @Route("/search-result", name="offer-ride-search-result")
     * @Method("GET")
     * @Template()
     */
    public function searchResultAction(Request $request)
    {

        $rideFrom = $request->get('rideFrom');     
        $rideTo = $request->get('rideTo');
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository("CoreBundle:OfferRide")
                    ->createQueryBuilder('o')
                    ->where('o.rideFrom = :rideFrom')
                    ->orWhere('o.rideTo = :rideTo')
                    ->setParameter('rideFrom', $rideFrom)
                    ->setParameter('rideTo', $rideTo);        

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query,$this->get('request')->query->get('page', 1),15);

        return array(
            'pagination' => $pagination,
        );    

    }     

    /**
     * @Route("/search-filter", name="offer-ride-search-filter")
     * @Method("GET")
     * @Template()
     */
    public function searchFilterAction(Request $request)
    {
        $rideFrom = $request->get('rideFrom');     
        $rideTo = $request->get('rideTo');
        //$departureDate = $request->get('departureDate');
        $availableSeats = $request->get('availableSeats');
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository("CoreBundle:OfferRide")
                    ->createQueryBuilder('o')
                    ->where('o.rideFrom = :rideFrom')
                    ->orWhere('o.rideTo = :rideTo')
                    ->orWhere('o.availableSeats = :availableSeats')
                    //->orWhere('o.departureDate LIKE :departureDate')
                    ->setParameter('rideFrom', $rideFrom)
                    ->setParameter('rideTo', $rideTo)
                    ->setParameter('availableSeats', $availableSeats)
                    //->setParameter('departureDate', '%'.$departureDate.'%')
                ;

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query,$this->get('request')->query->get('page', 1),15);

        return array(
            'pagination' => $pagination,
        );    

    } 
    
    /**
     * @Route("/more-details/{id}", name="offer-ride-more-details")
     * @Method("GET")
     * @Template()
     */
    public function moreDetailsAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('CoreBundle:OfferRide')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OfferRide entity.');
        }
        
        return array(
            'entity' => $entity,
        );
    }    
    
  
    
}

                            