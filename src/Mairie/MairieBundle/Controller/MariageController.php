<?php

namespace Mairie\MairieBundle\Controller;

use Mairie\MairieBundle\Entity\Mariage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Mariage controller.
 *
 * @Route("mariage")
 */
class MariageController extends Controller
{
    /**
     * Lists all mariage entities.
     *
     * @Route("/", name="mariage_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $mariages = $em->getRepository('MairieMairieBundle:Mariage')->findAll();

        return $this->render('mariage/index.html.twig', array(
            'mariages' => $mariages,
        ));
    }

    /**
     * Creates a new mariage entity.
     *
     * @Route("/new", name="mariage_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $mariage = new Mariage();
        $form = $this->createForm('Mairie\MairieBundle\Form\MariageType', $mariage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mariage);
            $em->flush();

            return $this->redirectToRoute('mariage_show', array('id' => $mariage->getId()));
        }

        return $this->render('mariage/new.html.twig', array(
            'mariage' => $mariage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a mariage entity.
     *
     * @Route("/{id}", name="mariage_show")
     * @Method("GET")
     */
    public function showAction(Mariage $mariage)
    {
        $deleteForm = $this->createDeleteForm($mariage);

        return $this->render('mariage/show.html.twig', array(
            'mariage' => $mariage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing mariage entity.
     *
     * @Route("/{id}/edit", name="mariage_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Mariage $mariage)
    {
        $deleteForm = $this->createDeleteForm($mariage);
        $editForm = $this->createForm('Mairie\MairieBundle\Form\MariageType', $mariage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mariage_edit', array('id' => $mariage->getId()));
        }

        return $this->render('mariage/edit.html.twig', array(
            'mariage' => $mariage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a mariage entity.
     *
     * @Route("/{id}", name="mariage_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Mariage $mariage)
    {
        $form = $this->createDeleteForm($mariage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mariage);
            $em->flush();
        }

        return $this->redirectToRoute('mariage_index');
    }

    /**
     * Creates a form to delete a mariage entity.
     *
     * @param Mariage $mariage The mariage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Mariage $mariage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mariage_delete', array('id' => $mariage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
