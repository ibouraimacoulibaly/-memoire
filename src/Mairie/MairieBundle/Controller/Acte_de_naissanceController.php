<?php

namespace Mairie\MairieBundle\Controller;

use Mairie\MairieBundle\Entity\Acte_de_naissance;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Acte_de_naissance controller.
 *
 * @Route("acte_de_naissance")
 */
class Acte_de_naissanceController extends Controller
{
    /**
     * Lists all acte_de_naissance entities.
     *
     * @Route("/", name="acte_de_naissance_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $acte_de_naissances = $em->getRepository('MairieMairieBundle:Acte_de_naissance')->findAll();

        return $this->render('acte_de_naissance/index.html.twig', array(
            'acte_de_naissances' => $acte_de_naissances,
        ));
    }

    /**
     * Creates a new acte_de_naissance entity.
     *
     * @Route("/new", name="acte_de_naissance_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $acte_de_naissance = new Acte_de_naissance();
        $form = $this->createForm('Mairie\MairieBundle\Form\Acte_de_naissanceType', $acte_de_naissance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acte_de_naissance);
            $em->flush();

            return $this->redirectToRoute('acte_de_naissance_show', array('id' => $acte_de_naissance->getId()));
        }

        return $this->render('acte_de_naissance/new.html.twig', array(
            'acte_de_naissance' => $acte_de_naissance,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a acte_de_naissance entity.
     *
     * @Route("/{id}", name="acte_de_naissance_show")
     * @Method("GET")
     */
    public function showAction(Acte_de_naissance $acte_de_naissance)
    {
        $deleteForm = $this->createDeleteForm($acte_de_naissance);

        return $this->render('acte_de_naissance/show.html.twig', array(
            'acte_de_naissance' => $acte_de_naissance,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing acte_de_naissance entity.
     *
     * @Route("/{id}/edit", name="acte_de_naissance_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Acte_de_naissance $acte_de_naissance)
    {
        $deleteForm = $this->createDeleteForm($acte_de_naissance);
        $editForm = $this->createForm('Mairie\MairieBundle\Form\Acte_de_naissanceType', $acte_de_naissance);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('acte_de_naissance_edit', array('id' => $acte_de_naissance->getId()));
        }

        return $this->render('acte_de_naissance/edit.html.twig', array(
            'acte_de_naissance' => $acte_de_naissance,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a acte_de_naissance entity.
     *
     * @Route("/{id}", name="acte_de_naissance_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Acte_de_naissance $acte_de_naissance)
    {
        $form = $this->createDeleteForm($acte_de_naissance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acte_de_naissance);
            $em->flush();
        }

        return $this->redirectToRoute('acte_de_naissance_index');
    }

    /**
     * Creates a form to delete a acte_de_naissance entity.
     *
     * @param Acte_de_naissance $acte_de_naissance The acte_de_naissance entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Acte_de_naissance $acte_de_naissance)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('acte_de_naissance_delete', array('id' => $acte_de_naissance->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
