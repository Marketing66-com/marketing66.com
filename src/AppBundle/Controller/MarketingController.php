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
        $service->setName('SEO/Content marketing');
        $service->setImgUrl('images/images/Affiliate-Networks-icon.png');
        $service->setPlainText('Invest in your content and SEO for a guarantee of traffic to your
site.');
        $service->setHighlightText('Our team will provide professional SEO services and ensure 
your content is high-quality and easily readable for both
Google crawlers and human audience.
 ');


        $em = $this->getDoctrine()->getManager();
        $em->persist($service);
        $em->flush();
        return new Response('<html><body>Service created!</body></html>');
    }





/**
 * @Route("/updateService")
 */
public function updateServiceAction()
{
    $id = "1";
    $entityManager = $this->getDoctrine()->getManager();
    $service = $entityManager->getRepository(Service::class)->find($id);

    if (!$service) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
        );
    }

    $service->setImgUrl('images/images/aso-icon.png');
    $entityManager->flush();

    return new Response('<html><body>Service updated!</body></html>');
}



    /**
     * @Route("/getAllServices",name="all", options={"expose" = true})
     */
    public function getAllServicesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $services = $em->getRepository('AppBundle:Service')
            ->findAll();

        $serializer = $this->container->get('jms_serializer');
        $versionJSON = $serializer->serialize($services, 'json');

        return new Response($versionJSON);
    }



    /**
     * @Route("/angular")
     */
    public function angularAction()
    {
        return $this->render('marketing66/listAngular.html.twig');
    }



    /**
     * @Route("/twig")
     */
    public function twigAction()
    {
        return $this->render('marketing66/listAngular.html.twig');
    }
}
