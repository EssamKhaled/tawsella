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

class WidgetsController extends Controller
{
    
    public function getFilterWidgetAction(){               
       return $this->render('FrontendBundle:Widgets:filter.html.twig');           
    }
    
    public function getLatestRidesWidgetAction(){       
        
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CoreBundle:OfferRide')->findBy(array(), array('id' => 'DESC'),3);        
        
       return $this->render('FrontendBundle:Widgets:latestRides.html.twig', array(
            'entities' => $entities,
        ));            
    }   
    
    public function getProfileMenuWidgetAction($route){               
       return $this->render('FrontendBundle:Widgets:profileMenu.html.twig',array('route'=>$route));           
    }   
    
    public function getCitiesWidgetAction(){       
        
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CoreBundle:City')->findAll();        
        
       return $this->render('FrontendBundle:Widgets:cities.html.twig', array(
            'entities' => $entities,
        ));            
    }      
    
    
  
    
}
