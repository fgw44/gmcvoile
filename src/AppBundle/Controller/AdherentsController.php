<?php

namespace AppBundle\Controller;

use FOS\RestBundle\View\View;
use AppBundle\Entity\Adherent;
use AppBundle\Entity\AdherentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\ConstraintViolationList;
use FOS\RestBundle\Controller\FOSRestController;

class AdherentsController extends FOSRestController
{

    /**
     * Get user by id
     *
     * @param $slug userid
     *
     * @return View
     */
    public function getAdherentAction($slug)
    {
    	set_time_limit(120); // 0 = no limits
    	
    	$adherent = $this->getDoctrine()
    		->getRepository('AppBundle:Adherent')
    		->findOneByAdhNum($slug);
    	
    	$logger = $this->get('logger');
    	$logger->debug('Get adherent ' . $slug);
    	
    	if (!$adherent) {
    		$logger->debug('adherent ' . $slug . ' not found'); 
    		throw $this->createNotFoundException(
    				'No adherent found for id '.$slug
    				);
    	}
    	$logger->debug('adherent ' . $adherent->getAdhEmail() . ' found');
    	$logger->debug('** adh HERE ***');
    	
    	$view = View::create();
    	$view->setData($adherent)->setStatusCode(200);
    	return $this->handleView($view);
    	
    } // "get_adherent"             [GET] /adherents/{slug}

    public function editAdherentAction($slug)
    {
    	
    	
    	
    	
    } // "edit_adherent"            [GET] /adherents/{slug}/edit

    public function deleteAdherentAction($slug)
    {} // "delete_adherent"          [DELETE] /adherents/{slug}
    
}