<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Oeuvre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Oeuvre controller.
 *
 * @Route("oeuvre")
 */
class OeuvreController extends Controller
{
    /**
     * Lists all oeuvre entities.
     *
     * @Route("/", name="oeuvre_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $oeuvres = $em->getRepository('AppBundle:Oeuvre')->findAll();

        return $this->render('oeuvre/index.html.twig', array(
            'oeuvres' => $oeuvres,
        ));
    }

    /**
     * Creates a new oeuvre entity.
     *
     * @Route("/new", name="oeuvre_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $oeuvre = new Oeuvre();
        $form = $this->createForm('AppBundle\Form\OeuvreType', $oeuvre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($oeuvre);
            $em->flush();

            return $this->redirectToRoute('oeuvre_show', array('id' => $oeuvre->getId()));
        }

        return $this->render('oeuvre/new.html.twig', array(
            'oeuvre' => $oeuvre,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a oeuvre entity.
     *
     * @Route("/{id}", name="oeuvre_show")
     * @Method("GET")
     */
    public function showAction(Oeuvre $oeuvre)
    {
        $deleteForm = $this->createDeleteForm($oeuvre);

        return $this->render('oeuvre/show.html.twig', array(
            'oeuvre' => $oeuvre,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing oeuvre entity.
     *
     * @Route("/{id}/edit", name="oeuvre_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Oeuvre $oeuvre)
    {
        $deleteForm = $this->createDeleteForm($oeuvre);
        $editForm = $this->createForm('AppBundle\Form\OeuvreType', $oeuvre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('oeuvre_edit', array('id' => $oeuvre->getId()));
        }

        return $this->render('oeuvre/edit.html.twig', array(
            'oeuvre' => $oeuvre,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a oeuvre entity.
     *
     * @Route("/{id}", name="oeuvre_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Oeuvre $oeuvre)
    {
        $form = $this->createDeleteForm($oeuvre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($oeuvre);
            $em->flush();
        }

        return $this->redirectToRoute('oeuvre_index');
    }

    /**
     * Creates a form to delete a oeuvre entity.
     *
     * @param Oeuvre $oeuvre The oeuvre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Oeuvre $oeuvre)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('oeuvre_delete', array('id' => $oeuvre->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
