<?php

namespace BBIT\PageBundle\Controller;

use AppBundle\Entity\TestPage;
use BBIT\PageBundle\Entity\Page;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdminPageController extends Controller
{
    public function indexAction()
    {

        $t = new TestPage();
        $t->setTitle("sdfT");
        $this->getDoctrine()->getManager()->persist($t);
        $this->getDoctrine()->getManager()->flush();


        $entityName = 'BBITPageBundle:AbstractPage';

        $items = $this->get('doctrine.orm.default_entity_manager')
            ->getRepository($entityName)
            ->createQueryBuilder('x')
            ->getQuery()
            ->getResult();

        return $this->render('BBITAdminBundle:pages:index.html.twig', ['items' => $items]);
    }
}