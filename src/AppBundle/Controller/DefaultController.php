<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig', []);
    }

    /**
     * @Route("/item", name="item_page")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function itemAction()
    {
        return $this->render('default/item.html.twig', []);
    }
}
