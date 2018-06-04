<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
     * @Route("/tienda")
     */
class TiendaController extends Controller
{
    /**
     * @Route("/", name="tienda")
     */
    public function index()
    {
        return $this->render('tienda/index.html.twig', [
            'controller_name' => 'TiendaController',
        ]);
    }

    /**
     * @Route("/postal", name="recibe_form")
     */
    public function codigoPostal(Request $request)
    {
		  $codigopostal = intval($request->request->get('inputcp'));
		 	if(($codigopostal > 46000) && ($codigopostal < 47000) ){  //tengo tienda
		 		return $this->redirectToRoute('tienda_home');
		 
 			}
 	        else { //no tengo tienda
 		        return $this->redirectToRoute('main');
 	        }
 	        
 	 }

 	 /**
     * @Route("/", name="tienda_home")
     */
    public function cargarPrincipalTienda(Request $request)
    {
        return $this->render('tienda/index.html.twig', [
            'controller_name' => 'TiendaController',
        ]);
   	}
    
}


