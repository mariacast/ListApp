<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Listapp;
use AppBundle\Entity\Categoria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\HttpResponse;


/**
 * User controller.
 *
 * @Route("user")
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
      $permisos=explode(';',$request->getSession()->get('permisos'));
        if (in_array('Administrador',$permisos))
        {
          $em = $this->getDoctrine()->getManager();

          $users = $em->getRepository('AppBundle:User')->findBy(array(), array('nombre' => 'ASC'));
          return $this->render('user/index.html.twig', array(
              'users' => $users,
          ));
        }
        else
        {
          $em = $this->getDoctrine()->getManager();

          $listapps = $em->getRepository('AppBundle:Listapp')->findAll();
          return $this->redirectToRoute('viwCat', array(
              'listapps' => $listapps,
          ));
        }


    }
    /**
     * Lists all user entities.
     *
     * @Route("/{id}/data_pass", name="data_pass")
     * @Method({"POST","GET"})
     */
    public function data_passAction(Request $request, User $user)
    {
      $em = $this->getDoctrine()->getManager();
      $password = hash("sha512",$request->request->get('password_actual'));
      $passant =  $user->getPassword();
      if ($password == $passant)
      {
        if ($request->request->get("password_new")==$request->request->get("confirmacion"))
        {
          $user->setPassword(hash('sha512',$request->request->get("password_new")));
          $em = $this->getDoctrine()->getManager();
          $em->persist($user);
          $em->flush();
          return $this->redirectToRoute('login');
        }
        else{

          $this->addFlash('notice',"password no coinciden");
          return $this->redirectToRoute('user_index', array('alert'=>'Password no coinciden'));
        }
      }
      else{
        $this->addFlash('notice',"Contraseña Actual Incorrecta");
        return $this->redirectToRoute('user_index', array('alert'=>'Contraseña Actual Incorrecta'));
      }

#        $user->setNombre($request->request->get("nombre"));
#        $user->setUsername($request->request->get("username"));
#        $user->setPassword($request->request->get("password"));
#        $user->setPermisos($request->request->get("permisos"));

    }
    /**
     * Creates a new user entity.
     *
     * @Route("/new/{alert}", name="user_new")
     * @Method({"GET"})
     */
    public function newAction(Request $request, $alert=null)
    {
      $em = $this->getDoctrine()->getManager();
      $categorias = $em->getRepository('AppBundle:Categoria')->findAll();
      $permisos=explode(';',$request->getSession()->get('permisos'));
        if (in_array('Administrador',$permisos))
        {
          $em = $this->getDoctrine()->getManager();
          if ($alert != null )
          {
              return $this->render('user/new.html.twig', array('alert'=>$alert));
          }
          else
          {

            return $this->render('user/new.html.twig', array(
              'categorias' => $categorias,
            ));
          }
        }
        else {
          return $this->redirectToRoute('user_index');
        }
    }


    /**
     * Creates a new user entity.
     *
     * @Route("/create", name="user_create")
     * @Method({"POST"})
     */
     public function createAction(Request $request)
     {
       $permisos=explode(';',$request->getSession()->get('permisos'));
         if (in_array('Administrador',$permisos))
         {
            if ($request->request->get("password")==$request->request->get("confirmacion"))
            {
              $user = new User();
              $user->setNombre($request->request->get("nombre"));
              $user->setUsername($request->request->get("username"));
              $user->setPassword(hash('sha512',$request->request->get("password")));
              $user->setPermisos($request->request->get("permisos"));

              $em = $this->getDoctrine()->getManager();
              $em->persist($user);
              $em->flush();
              return $this->redirectToRoute('user_index');

            }
            else
            {
              $this->addFlash('notice',"password no coinciden");
              return $this->redirectToRoute('user_new', array('alert'=>'Password no coinciden'));
            }
          }
          else {
            return $this->redirectToRoute('user_index');
          }

     }




    /**
     * Finds and displays a user entity.
     *
     * @Route("/{id}", name="user_show")
     * @Method("GET")
     */
    public function showAction(Request $request, User $user)
    {
      $permisos=explode(';',$request->getSession()->get('permisos'));
        if (in_array('Administrador',$permisos))
        {
          $deleteForm = $this->createDeleteForm($user);

          return $this->render('user/show.html.twig', array(
              'user' => $user,
              'delete_form' => $deleteForm->createView(),
          ));
        }
        else {
          return $this->redirectToRoute('user_index');
        }
    }


    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET"})
     */
    public function editAction(Request $request, User $user)
    {
      $em = $this->getDoctrine()->getManager();
      $categorias = $em->getRepository('AppBundle:Categoria')->findAll();
      $permisos=explode(';',$request->getSession()->get('permisos'));
      if (in_array('Administrador',$permisos))
      {
          return $this->render('user/edit.html.twig', array(
              'user' => $user,
              'categorias' => $categorias,

        ));
      }
      else {
        return $this->redirectToRoute('user_index');
      }
    }


    /**
     * Update a user entity.
     *
     * @Route("/{id}/update", name="user_update")
     * @Method("POST")
     */
    public function updateAction(Request $request, User $user)
    {
      $permisos=explode(';',$request->getSession()->get('permisos'));
      if (in_array('Administrador',$permisos))
      {
          if ($request->request->get("cambioP")== "no")
          {
            $user->setNombre($request->request->get("nombre"));
            $user->setUsername($request->request->get("username"));
            $user->setPermisos($request->request->get("permisos"));

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('user_index');
          }
          else {
            if ($request->request->get("password")==$request->request->get("confirmacion"))
            {
              $user->setNombre($request->request->get("nombre"));
              $user->setUsername($request->request->get("username"));
              $user->setPassword(hash('sha512',$request->request->get("password")));
              $user->setPermisos($request->request->get("permisos"));

              $em = $this->getDoctrine()->getManager();
              $em->persist($user);
              $em->flush();
              return $this->redirectToRoute('user_index');

            }
            else
            {
              $this->addFlash('notice',"password no coinciden");
              return $this->redirectToRoute('user_edit', array('id'=>$user->getId()));
            }
          }

      }
      else {
        return $this->redirectToRoute('user_index');
      }

    }

    /**
     * Deletes a user entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user)
    {
      $permisos=explode(';',$request->getSession()->get('permisos'));
      if (in_array('Administrador',$permisos))
      {
          $form = $this->createDeleteForm($user);
          $form->handleRequest($request);

          if ($form->isSubmitted() && $form->isValid()) {
              $em = $this->getDoctrine()->getManager();
              $em->remove($user);
              $em->flush($user);
          }

          return $this->redirectToRoute('user_index');

      }
      else {
        return $this->redirectToRoute('user_index');
      }
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;

    }
}
