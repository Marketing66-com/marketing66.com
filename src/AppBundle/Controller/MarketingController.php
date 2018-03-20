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
use AppBundle\Entity\Service;

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

        return $this->render('marketing66/services.html.twig');
    }


    /**
     * @Route("/test")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $services= $em->getRepository('AppBundle:Service')
            ->findAllOrderedByABC();

        return $this->render('marketing66/list.html.twig', [
            'services' => $services
        ]);
    }


    /**
     * @Route("/newService")
     */
    public function newServiceAction()
    {
        $service = new Service();
        $service->setName('ASO');
        $service->setImgUrl('images/images/box-aso.png');
        $service->setPlainText('Get the highest possible ranking for your app, and downloads 
that come with it. Whether it be for iPod or Android.');
        $service->setHighlightText('We will help you optimize the content of your app.');


        $em = $this->getDoctrine()->getManager();
        $em->persist($service);
        $em->flush();
        return new Response('<html><body>Service created!</body></html>');
    }
}