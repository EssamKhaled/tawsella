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
 * MyRides controller.
 *
 * @Route("/my-rides")
 */
class MyRidesController extends Controller
{
    /**
     * @Route("/", name="my-rides")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        
        $entities = $em->getRepository('CoreBundle:OfferRide')->findByUser($user);

        return array(
            'entities' => $entities,
        );
    }
    
    /**
     * Displays a form to edit an existing OfferRide entity.
     *
     * @Route("/edit/{id}", name="offer-ride-edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoreBundle:OfferRide')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OfferRide entity.');
        }

        $editForm = $this->createEditForm($entity);        

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),            
        );
    } 
    
    
    /**
    * Creates a form to edit a OfferRide entity.
    *
    * @param OfferRide $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(OfferRide $entity)
    {
        $form = $this->createForm(new OfferRideType(), $entity, array(
            'action' => $this->generateUrl('offer-ride-update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        return $form;
    }
    
    /**
     * Edits an existing OfferRide entity.
     *
     * @Route("/edit/{id}", name="offer-ride-update")
     * @Method("PUT")
     * @Template("FrontendBundle:OfferRide:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $OfferRide = $em->getRepository('CoreBundle:OfferRide')->find($id);
        
        if (!$OfferRide) {
            throw $this->createNotFoundException('Unable to find OfferRide entity.');
        }

        $editForm = $this->createEditForm($OfferRide);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {                        
            
            $em->flush();

            return $this->redirect($this->generateUrl('offer-ride-edit', array('id' => $id)));
        }
    }
    
    /**
     * Deletes a OfferRide entity.
     *
     * @Route("/delete/{id}", name="offer-ride-delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CoreBundle:OfferRide')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OfferRide entity.');            
        }
        $em->remove($entity);
        $em->flush();        

        return $this->redirect($this->generateUrl('my-rides'));
    }      
    


    
    
}
