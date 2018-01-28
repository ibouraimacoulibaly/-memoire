<?php

namespace Mairie\MairieBundle\Controller;

use Mairie\MairieBundle\Entity\Naissance;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Naissance controller.
 *
 * @Route("naissance")
 */
class NaissanceController extends Controller
{
    /**
     * Lists all naissance entities.
     *
     * @Route("/", name="naissance_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $naissances = $em->getRepository('MairieMairieBundle:Naissance')->findAll();

        return $this->render('naissance/index.html.twig', array(
            'naissances' => $naissances,
        ));
    }

    /**
     * Creates a new naissance entity.
     *
     * @Route("/new", name="naissance_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $naissance = new Naissance();
        $form = $this->createForm('Mairie\MairieBundle\Form\NaissanceType', $naissance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($naissance);
            $em->flush();

            return $this->redirectToRoute('naissance_show', array('id' => $naissance->getId()));
        }

        return $this->render('naissance/new.html.twig', array(
            'naissance' => $naissance,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a naissance entity.
     *
     * @Route("/{id}", name="naissance_show")
     * @Method("GET")
     */
    public function showAction(Naissance $naissance)
    {
        $deleteForm = $this->createDeleteForm($naissance);

        return $this->render('naissance/show.html.twig', array(
            'naissance' => $naissance,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing naissance entity.
     *
     * @Route("/{id}/edit", name="naissance_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Naissance $naissance)
    {
        $deleteForm = $this->createDeleteForm($naissance);
        $editForm = $this->createForm('Mairie\MairieBundle\Form\NaissanceType', $naissance);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('naissance_edit', array('id' => $naissance->getId()));
        }

        return $this->render('naissance/edit.html.twig', array(
            'naissance' => $naissance,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a naissance entity.
     *
     * @Route("/{id}", name="naissance_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Naissance $naissance)
    {
        $form = $this->createDeleteForm($naissance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($naissance);
            $em->flush();
        }

        return $this->redirectToRoute('naissance_index');
    }

    /**
     * Creates a form to delete a naissance entity.
     *
     * @param Naissance $naissance The naissance entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Naissance $naissance)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('naissance_delete', array('id' => $naissance->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
