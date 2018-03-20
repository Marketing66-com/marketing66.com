<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/19/2018
 * Time: 9:56 AM
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class MarketingController extends Controller
{


    /**
     * @return Response
     * @Route("",name="home")
     * @Method("GET")
     */
    public function defaultAction()
    {

        return $this->render('marketing66/home.html.twig');
    }


    /**
     * @Route("/affiliate",name="affiliate")
     */
    public function affiliateAction()
    {
        $genus = "hello";
        return $this->render('marketing66/home.html.twig');
    }
    /**
     * @Route("/services",name="services")
     */
    public function servicesAction()
    {
        $genus = "hello";
        return $this->render('marketing66/home.html.twig', array(
            'genus' => $genus
        ));
    }
}