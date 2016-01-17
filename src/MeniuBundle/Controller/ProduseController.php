<?php

namespace MeniuBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MeniuBundle\Entity\Produse;
use MeniuBundle\Form\ProduseType;

/**
 * Produse controller.
 *
 */
class ProduseController extends Controller
{

    /**
     * Lists all Produse entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MeniuBundle:Produse')->findBy(array(), array('categorie'=>'ASC'));

        return $this->render('MeniuBundle:Produse:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Lists all Produse entities.
     *
     */
        public function categorieAction($categ)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MeniuBundle:Produse')->findBy(array('categorie'=>$categ), array('categorie'=>'ASC'));

        return $this->render('MeniuBundle:Produse:index.html.twig', array(
            'entities' => $entities,
        ));
    }
	
    /**
     * Creates a new Produse entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Produse();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('produse_show', array('id' => $entity->getId())));
        }

        return $this->render('MeniuBundle:Produse:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Produse entity.
     *
     * @param Produse $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Produse $entity)
    {
        $form = $this->createForm(new ProduseType(), $entity, array(
            'action' => $this->generateUrl('produse_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Produse entity.
     *
     */
    public function newAction()
    {
        $entity = new Produse();
        $form   = $this->createCreateForm($entity);

        return $this->render('MeniuBundle:Produse:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Produse entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MeniuBundle:Produse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produse entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MeniuBundle:Produse:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Produse entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MeniuBundle:Produse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produse entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MeniuBundle:Produse:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Produse entity.
    *
    * @param Produse $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Produse $entity)
    {
        $form = $this->createForm(new ProduseType(), $entity, array(
            'action' => $this->generateUrl('produse_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Produse entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MeniuBundle:Produse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produse entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('produse_edit', array('id' => $id)));
        }

        return $this->render('MeniuBundle:Produse:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Produse entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MeniuBundle:Produse')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Produse entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('produse'));
    }

    /**
     * Creates a form to delete a Produse entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('produse_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
