<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        /*
        $prod = new \Acme\DemoBundle\Entity\Product();
        $prod->setSku('my-sku2');
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($prod);
        $manager->flush();
         */

        /*
        $products = $this->getDoctrine()
            ->getRepository('AcmeDemoBundle:Product')
            ->findAll();
         */
        $products = $this->container
            ->get('acme.demo.repository.product')
            ->findAll();

        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         */
        return $this->render(
            'AcmeDemoBundle:Welcome:index.html.twig',
            array('products' => $products)
        );
    }
}
