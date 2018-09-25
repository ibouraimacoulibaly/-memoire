<?php

namespace Mairie\MairieBundle\Controller;

use Mairie\MairieBundle\Entity\commune;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Commune controller.
 *
 * @Route("commune")
 */
class communeController extends Controller
{
    /**
     * Lists all commune entities.
     *
     * @Route("/", name="commune_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $communes = $em->getRepository('MairieMairieBundle:commune')->findAll();

        return $this->render('commune/index.html.twig', array(
            'communes' => $communes,
        ));
    }

    /**
     * Creates a new commune entity.
     *
     * @Route("/new", name="commune_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $commune = new Commune();
        $form = $this->createForm('Mairie\MairieBundle\Form\communeType', $commune);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commune);
            $em->flush();

            return $this->redirectToRoute('commune_show', array('id' => $commune->getId()));
        }

        return $this->render('commune/new.html.twig', array(
            'commune' => $commune,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a commune entity.
     *
     * @Route("/{id}", name="commune_show")
     * @Method("GET")
     */
    public function showAction(commune $commune)
    {
        $deleteForm = $this->createDeleteForm($commune);

        return $this->render('commune/show.html.twig', array(
            'commune' => $commune,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing commune entity.
     *
     * @Route("/{id}/edit", name="commune_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, commune $commune)
    {
        $deleteForm = $this->createDeleteForm($commune);
        $editForm = $this->createForm('Mairie\MairieBundle\Form\communeType', $commune);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commune_edit', array('id' => $commune->getId()));
        }

        return $this->render('commune/edit.html.twig', array(
            'commune' => $commune,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a commune entity.
     *
     * @Route("/{id}", name="commune_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, commune $commune)
    {
        $form = $this->createDeleteForm($commune);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commune);
            $em->flush();
        }

        return $this->redirectToRoute('commune_index');
    }

    /**
     * Creates a form to delete a commune entity.
     *
     * @param commune $commune The commune entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(commune $commune)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commune_delete', array('id' => $commune->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}