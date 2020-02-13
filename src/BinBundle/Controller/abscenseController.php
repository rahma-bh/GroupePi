<?php

namespace BinBundle\Controller;

use BinBundle\Form\updateAbscenseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BinBundle\Entity\abscense;
use BinBundle\Form\abscenseType;

class abscenseController extends Controller
{
    public function addAction(Request $request)
    {
        $abscense = new abscense();
        $form = $this->createForm(abscenseType::class, $abscense);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($abscense);
            $em->flush();
        }
        return $this->render('@Bin\abscense\add.html.twig', array('form' => $form->createView()));
}
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $abscenses = $em->getRepository("BinBundle:abscense")
            ->findAll();
        return $this->render('@Bin/abscense/list.html.twig',array(
            'abscenses'=>$abscenses
        ));
    }
    public function deleteAction($id){

        $em = $this->getDoctrine()->getManager();
        $rec = $em->getRepository('BinBundle:abscense')->find($id);
        $em->remove($rec);
        $em->flush();



        return $this->redirectToRoute('listabsences');

    }
    public function updateAction(Request $request, $id)
    {
        $abscense= $this->getDoctrine()->getmanager()->getRepository(abscense::class)->find($id);
        $form= $this->createForm(updateAbscenseType::class,$abscense);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($abscense);
            $em->flush();
            return $this->redirectToRoute('listabsences');
        }
        return $this->render("@Bin/abscense/update.html.twig",array("form"=>$form->createView()));

    }
}
