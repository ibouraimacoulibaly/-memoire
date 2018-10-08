<?php

namespace Mairie\MairieBundle\Controller;

use Mairie\MairieBundle\Entity\Etat_civil;
use Mairie\MairieBundle\Entity\region;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EntityType;

/**
 * Etat_civil controller.
 *
 * @Route("etat_civil")
 */
class Etat_civilController extends Controller
{
    /**
     * Lists all etat_civil entities.
     *
     * @Route("/", name="etat_civil_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $etat_civils = $em->getRepository('MairieMairieBundle:Etat_civil')->findAll();

        return $this->render('etat_civil/index.html.twig', array(
            'etat_civils' => $etat_civils,
        ));
    }

    /**
     * Creates a new etat_civil entity.
     *
     * @Route("/new", name="etat_civil_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $etat_civil = new Etat_civil();
        $form = $this->createForm('Mairie\MairieBundle\Form\Etat_civilType', $etat_civil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etat_civil);
            $em->flush();

            return $this->redirectToRoute('etat_civil_show', array('id' => $etat_civil->getId()));
        }

        return $this->render('etat_civil/new.html.twig', array(
            'etat_civil' => $etat_civil,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a etat_civil entity.
     *
     * @Route("/{id}", name="etat_civil_show")
     * @Method("GET")
     */
    public function showAction(Etat_civil $etat_civil)
    {
        $deleteForm = $this->createDeleteForm($etat_civil);

        return $this->render('etat_civil/show.html.twig', array(
            'etat_civil' => $etat_civil,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing etat_civil entity.
     *
     * @Route("/{id}/edit", name="etat_civil_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Etat_civil $etat_civil)
    {
        $deleteForm = $this->createDeleteForm($etat_civil);
        $editForm = $this->createForm('Mairie\MairieBundle\Form\Etat_civilType', $etat_civil);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('etat_civil_edit', array('id' => $etat_civil->getId()));
        }

        return $this->render('etat_civil/edit.html.twig', array(
            'etat_civil' => $etat_civil,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a etat_civil entity.
     *
     * @Route("/{id}", name="etat_civil_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Etat_civil $etat_civil)
    {
        $form = $this->createDeleteForm($etat_civil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etat_civil);
            $em->flush();
        }

        return $this->redirectToRoute('etat_civil_index');
    }

    /**
     * Creates a form to delete a etat_civil entity.
     *
     * @param Etat_civil $etat_civil The etat_civil entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Etat_civil $etat_civil)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etat_civil_delete', array('id' => $etat_civil->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
