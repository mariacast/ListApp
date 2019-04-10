<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $session=$request->getSession();
        $session->invalidate();
        return $this->render('default/login.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $session=$request->getSession();
        $session->invalidate();
        $usuario = $request->request->get('username');
        $password = hash("sha512",$request->request->get('password'));

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:User')->findOneBy( array('username'=>$usuario, 'password'=>$password));
        if ($user)
        {

          $session->set('permisos',$user->getPermisos());
          $session->set('nombre',$user->getNombre());
          $session->set('id',$user->getId());

          return $this->redirectToRoute('user_index');
        }
        else
        {
          $this->addFlash('notice',"Contraseña Incorrecta");
          return $this->render('default/login.html.twig', array('alert'=>'Contraseña Incorrecta'));

        }

    }
}
