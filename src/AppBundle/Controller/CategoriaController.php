<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categoria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Categorium controller.
 *
 * @Route("categoria")
 */
class CategoriaController extends Controller
{
    /**
     * Lists all categorium entities.
     *
     * @Route("/", name="categoria_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
      $permisos=explode(';',$request->getSession()->get('permisos'));
      if (in_array('Licitaciones',$permisos) || in_array('Administrador',$permisos))
      {
          $em = $this->getDoctrine()->getManager();

          $categorias = $em->getRepository('AppBundle:Categoria')->findBy(array(), array('nombre' => 'ASC'));

          return $this->render('categoria/index.html.twig', array(
              'categorias' => $categorias,
          ));
        }
        else {
          return $this->redirectToRoute('user_index');
        }
      }

    /**
     * Creates a new categorium entity.
     *
     * @Route("/new", name="categoria_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request )
    {
      $permisos=explode(';',$request->getSession()->get('permisos'));
      if (in_array('Licitaciones',$permisos) || in_array('Administrador',$permisos))
      {
          $categorium = new Categoria();
          $form = $this->createForm('AppBundle\Form\CategoriaType', $categorium);
          $form->handleRequest($request);

          if ($form->isSubmitted() && $form->isValid()) {
              $em = $this->getDoctrine()->getManager();
              $em->persist($categorium);
              $em->flush($categorium);

              return $this->redirectToRoute('categoria_show', array('id' => $categorium->getId()));
          }

          return $this->render('categoria/new.html.twig', array(
              'categorium' => $categorium,
              'form' => $form->createView(),
          ));
        }
        else {
          return $this->redirectToRoute('user_index');
        }
    }

    /**
     * Finds and displays a categorium entity.
     *
     * @Route("/{id}", name="categoria_show")
     * @Method("GET")
     */
    public function showAction(Request $request, Categoria $categorium)
    {
      $permisos=explode(';',$request->getSession()->get('permisos'));
      if (in_array('Licitaciones',$permisos) || in_array('Administrador',$permisos))
      {
          $deleteForm = $this->createDeleteForm($categorium);

          return $this->render('categoria/show.html.twig', array(
              'categorium' => $categorium,
              'delete_form' => $deleteForm->createView(),
          ));
      }
      else {
        return $this->redirectToRoute('user_index');
      }
    }

    /**
     * Displays a form to edit an existing categorium entity.
     *
     * @Route("/{id}/edit", name="categoria_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Categoria $categorium)
    {
      $permisos=explode(';',$request->getSession()->get('permisos'));
      if (in_array('Licitaciones',$permisos) || in_array('Administrador',$permisos))
      {
          $deleteForm = $this->createDeleteForm($categorium);
          $editForm = $this->createForm('AppBundle\Form\CategoriaType', $categorium);
          $editForm->handleRequest($request);

          if ($editForm->isSubmitted() && $editForm->isValid()) {
              $this->getDoctrine()->getManager()->flush();

              return $this->redirectToRoute('categoria_edit', array('id' => $categorium->getId()));
          }

          return $this->render('categoria/edit.html.twig', array(
              'categorium' => $categorium,
              'edit_form' => $editForm->createView(),
              'delete_form' => $deleteForm->createView(),
          ));
      }
      else {
        return $this->redirectToRoute('user_index');
      }
    }

    /**
     * Deletes a categorium entity.
     *
     * @Route("/{id}", name="categoria_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Categoria $categorium)
    {
      $permisos=explode(';',$request->getSession()->get('permisos'));
      if (in_array('Licitaciones',$permisos) || in_array('Administrador',$permisos))
      {
          $form = $this->createDeleteForm($categorium);
          $form->handleRequest($request);

          if ($form->isSubmitted() && $form->isValid()) {
              $em = $this->getDoctrine()->getManager();
              $em->remove($categorium);
              $em->flush($categorium);
          }

          return $this->redirectToRoute('categoria_index');
      }
      else {
        return $this->redirectToRoute('user_index');
      }
    }

    /**
     * Creates a form to delete a categorium entity.
     *
     * @param Categoria $categorium The categorium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Categoria $categorium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoria_delete', array('id' => $categorium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
