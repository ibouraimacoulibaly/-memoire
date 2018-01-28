<?php

namespace Mairie\MairieBundle\Controller;

use Mairie\MairieBundle\Entity\Deces;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Dece controller.
 *
 * @Route("deces")
 */
class DecesController extends Controller
{
    /**
     * Lists all dece entities.
     *
     * @Route("/", name="deces_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $deces = $em->getRepository('MairieMairieBundle:Deces')->findAll();

        return $this->render('deces/index.html.twig', array(
            'deces' => $deces,
        ));
    }

    /**
     * Creates a new dece entity.
     *
     * @Route("/new", name="deces_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $dece = new Dece();
        $form = $this->createForm('Mairie\MairieBundle\Form\DecesType', $dece);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dece);
            $em->flush();

            return $this->redirectToRoute('deces_show', array('id' => $dece->getId()));
        }

        return $this->render('deces/new.html.twig', array(
            'dece' => $dece,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a dece entity.
     *
     * @Route("/{id}", name="deces_show")
     * @Method("GET")
     */
    public function showAction(Deces $dece)
    {
        $deleteForm = $this->createDeleteForm($dece);

        return $this->render('deces/show.html.twig', array(
            'dece' => $dece,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing dece entity.
     *
     * @Route("/{id}/edit", name="deces_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Deces $dece)
    {
        $deleteForm = $this->createDeleteForm($dece);
        $editForm = $this->createForm('Mairie\MairieBundle\Form\DecesType', $dece);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('deces_edit', array('id' => $dece->getId()));
        }

        return $this->render('deces/edit.html.twig', array(
            'dece' => $dece,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a dece entity.
     *
     * @Route("/{id}", name="deces_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Deces $dece)
    {
        $form = $this->createDeleteForm($dece);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($dece);
            $em->flush();
        }

        return $this->redirectToRoute('deces_index');
    }

    /**
     * Creates a form to delete a dece entity.
     *
     * @param Deces $dece The dece entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Deces $dece)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deces_delete', array('id' => $dece->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
