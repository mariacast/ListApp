<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Listapp;
use AppBundle\Entity\Categoria;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
/**
 * Listapp controller.
 *
 * @Route("listapp")
 */
class ListappController extends Controller
{
    /**
     * Lists all listapp for categories entities.
     *
     * @Route("/viwCat", name="viwCat")
     *  @Method({"GET", "POST"})
     */
    public function viwCatAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $categoria = $em->getRepository('AppBundle:Categoria')->findBy(array(), array('nombre' => 'ASC'));
      $permisos= explode(";",$request->getSession()->get('permisos'));
      $permisosComp = ($request->getSession()->get('permisos'));
      $ids=($request->getSession()->get('username'));
      foreach ($permisos as $per) {
          $po = explode("_", $per);
          if (in_array('Modificar',$po) || in_array('Ver',$po) || in_array('Administrador',$permisos))
          {
              $listapps = $em->getRepository('AppBundle:Listapp')->findBy(array(), array('nombre' => 'ASC'));
              return $this->render('listapp/showCat.html.twig', array(
                  'listapps' => $listapps,
                  'perms' => $permisos,
                  'categ' => $po,
                  'ids' => $ids,
                  'categorias' => $categoria,
              ));
            }
            else {
              return $this->redirectToRoute('user_index');
            }
      }


    }

    /**
     * Finds and displays a listapp entity.
     *
     * @Route("/AppCat", name="AppCat")
     * @Method({"GET", "POST"})
     */
     public function AppCatAction(Request $request)
     {
       $em = $this->getDoctrine()->getManager();
       $NomCategoria = $request->request->get("Category");
       $cat = $em->getRepository('AppBundle:Categoria')->findOneByNombre($request->request->get("Category"));
       $permisos= explode(";",$request->getSession()->get('permisos'));
       $permisosComp = ($request->getSession()->get('permisos'));
       foreach ($permisos as $per) {
           $po = explode("_", $per);
           if (in_array('Modificar',$po) || in_array('Ver',$po) || in_array('Administrador',$permisos))
           {
               $listapps = $em->getRepository('AppBundle:Listapp')->findByCategoria(
               array($cat),
               array('nombre'=> 'ASC'));

               return $this->render('listapp/index.html.twig', array(
                   'listapps' => $listapps,
                   'perms' => $permisos,
                   'categ' => $NomCategoria,
                   'got' => $cat,
               ));
             }
             else {
               return $this->redirectToRoute('user_index');
             }
       }
     }
    /**
     * Lists all listapp entities.
     *
     * @Route("/", name="listapp_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
      $permisos= explode(";",$request->getSession()->get('permisos'));
      $permisosComp = ($request->getSession()->get('permisos'));
      foreach ($permisos as $per) {
          $po = explode("_", $per);
          if (in_array('Modificar',$po) || in_array('Ver',$po) || in_array('Administrador',$permisos))
          {

              $em = $this->getDoctrine()->getManager();

              $listapps = $em->getRepository('AppBundle:Listapp')->findBy(array(), array('nombre' => 'ASC'));
              return $this->render('listapp/index.html.twig', array(
                  'listapps' => $listapps,
                  'perms' => $permisos,
              ));
            }
            else {
              return $this->redirectToRoute('user_index');
            }
      }


    }

    /**
     * Creates a new listapp entity.
     *
     * @Route("/new", name="listapp_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
      $permisos=explode(';',$request->getSession()->get('permisos'));

      foreach ($permisos as $per) {
          $po = explode("_", $per);
          if (in_array('Modificar',$po) ||  in_array('Administrador',$permisos))
          {

            $listapp = new Listapp();
            $form = $this->createForm('AppBundle\Form\ListappType', $listapp);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($listapp);
                $em->flush($listapp);

                return $this->redirectToRoute('listapp_show', array('id' => $listapp->getId()));
            }
            $em = $this->getDoctrine()->getManager();
            $categorias = $em->getRepository('AppBundle:Categoria')->findBy(array(), array('nombre' => 'ASC'));
            return $this->render('listapp/new.html.twig', array(
                'listapp' => $listapp,
                'categorias' => $categorias,
                'base1' => $this->container->getParameter('BASE1'),
                'rutaAj' => $this->container->getParameter('rutaAj'),
                'form' => $form->createView(),
            ));
        }
        else {
          return $this->redirectToRoute('user_index');
        }
      }
    }
    /**
     * Creates a new listapp entity.
     *
     * @Route("/createlist", name="listapp_create")
     * @Method({"POST"})
     */
     public function createlistAction(Request $request)
     {
       $permisos=explode(';',$request->getSession()->get('permisos'));

       foreach ($permisos as $per) {
           $po = explode("_", $per);
           if (in_array('Modificar',$po) || in_array('Administrador',$permisos))
           {

                $em = $this->getDoctrine()->getManager();
                $categoria = $em->getRepository("AppBundle:Categoria")->findOneById($request->request->get("categoria"));

                $archivo = $request->request->get("arch");
                $file_name = $request->request->get("name_file");
                if ($file_name == ""){
                  $listapp = new Listapp();
                  $listapp->setNombre($request->request->get("text-nombre"));
                  $listapp->setUrl($request->request->get("text-url"));
                  $listapp->setData($request->request->get("text-data"));
                  $listapp->setAdjunto($file_name);
                  $listapp->setCategoria($categoria);

                  $em->persist($listapp);
                  $em->flush();
                  return $this->redirectToRoute('viwCat');
                }
                  else {
                    $ruta = $this->container->getParameter('ruta');
                    $file_save = fopen($ruta.$file_name, 'a');
                    #$file_save = fopen($ruta.$file_extension, 'a');
                    #$ruta_file = ($ruta.$file_extension);
                    $pos = strpos($archivo, ',');
                    $ar = substr($archivo,$pos+1);
                    $dec =  base64_decode($ar);
                    fwrite ($file_save, $dec);
                    fclose ($file_save);

                    $listapp = new Listapp();
                    $listapp->setNombre($request->request->get("text-nombre"));
                    $listapp->setUrl($request->request->get("text-url"));
                    $listapp->setData($request->request->get("text-data"));
                    $listapp->setAdjunto($file_name);
                    $listapp->setCategoria($categoria);

                    $em->persist($listapp);
                    $em->flush();
                    return $this->redirectToRoute('viwCat');
                  }
            }
            else {
              return $this->redirectToRoute('user_index');
            }
        }
     }

    /**
     * Finds and displays a listapp entity.
     *
     * @Route("/{id}", name="listapp_show")
     * @Method("GET")
     */
    public function showAction(Request $request, Listapp $listapp)
    {

      $em = $this->getDoctrine()->getManager();
      $permisos=explode(';',$request->getSession()->get('permisos'));

      foreach ($permisos as $per) {
          $po = explode("_", $per);
          if (in_array('Modificar',$po) || in_array('Ver',$po) || in_array('Administrador',$permisos))
          {
              $deleteForm = $this->createDeleteForm($listapp);

              return $this->render('listapp/show.html.twig', array(
                  'listapp' => $listapp,
                  'perms' => $permisos,
                  'delete_form' => $deleteForm->createView(),
              ));
          }
          else {
            return $this->redirectToRoute('user_index');
          }
        }
    }
    /**
     * cargar archivo adjunto
     *
     * @Route("/file_adjunto", name="file_adjunto")
     * @Method({"GET","POST"})
     */
    public function file_adjuntoAction(Request $request)
    {

        $filename= $request->request->get("file_name");
        $ruta = $this->container->getParameter('ruta');
        $complet_file = ($ruta.$filename);

        $response = new Response();

        // Set headers
        $response->headers->set('Cache-Control', 'private');
        $response->headers->set('Content-type', mime_content_type($complet_file));
        $response->headers->set('Content-Disposition', 'attachment; filename="' . basename($complet_file) . '";');
        $response->headers->set('Content-length', filesize($complet_file));

        // Send headers before outputting anything
        $response->sendHeaders();

        $response->setContent(file_get_contents($complet_file));

        return $response;


    }
    /**
     * Displays a form to edit an existing listapp entity.
     *
     * @Route("/subir", name="listapp_subir")
     * @Method({"GET","POST"})
     */
    public function subirAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $permisos=explode(';',$request->getSession()->get('permisos'));
      $action=$_POST['action'];
      $upName=$_POST['upName'];
      $upName = str_replace('"',"",$upName);
      //$upName = strstr('.',$upName);
 	    if($action=="save"){

         	$upData=$_POST['upData'];
          $cont = substr_count($upData, ',');
          if ($cont > 0){
            $pos = strpos($upData, ',');
            $upData = substr($upData,$pos+1);
          }

          $file_save = fopen('/tmp/'.$upName, 'a');
          fwrite ($file_save, $upData);
          fclose ($file_save);
          $response = new Response(json_encode($upName));
          $response->headers->set('Content-Type', 'application/json');

          return $response;
      }
    else{

      $ruta = $this->container->getParameter('ruta');

      $file_save = file_get_contents('/tmp/'.$upName);
      $dec = base64_decode($file_save);
      $file2 = fopen($ruta.$upName, 'a');
      fwrite ($file2, $dec);
      fclose ($file2);
      unlink('/tmp/'.$upName);
      $response = new Response(json_encode($upName));
      $response->headers->set('Content-Type', 'application/json');

      return $response;
    }
    }
    /**
     * Displays a form to edit an existing listapp entity.
     *
     * @Route("/{id}/edit", name="listapp_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Listapp $listapp)
    {
      $em = $this->getDoctrine()->getManager();
      $permisos=explode(';',$request->getSession()->get('permisos'));
      $categorias = $em->getRepository('AppBundle:Categoria')->findBy(array(), array('nombre' => 'ASC'));
      foreach ($permisos as $per) {
          $po = explode("_", $per);
          if (in_array('Modificar',$po) || in_array('Ver',$po) || in_array('Administrador',$permisos))
          {
            $deleteForm = $this->createDeleteForm($listapp);

            return $this->render('listapp/edit.html.twig', array(
                'listapp' => $listapp,
                'categorias' => $categorias,
                'base1' => $this->container->getParameter('BASE1'),
                'rutaAj' => $this->container->getParameter('rutaAj'),
                'delete_form' => $deleteForm->createView(),
            ));
          }
          else {
            return $this->redirectToRoute('user_index');

          }

        }
    }

    /**
     * Update a user entity.
     *
     * @Route("/{id}/update", name="listapp_update")
     * @Method("POST")
     */
    public function updateAction(Request $request,  Listapp $listapp)
    {
      $permisos=explode(';',$request->getSession()->get('permisos'));
      foreach ($permisos as $per) {
          $po = explode("_", $per);
          if (in_array('Modificar',$po) || in_array('Administrador',$permisos))
          {
              $em = $this->getDoctrine()->getManager();

              $file_name = $request->request->get("name_file");
              $categoria = $em->getRepository("AppBundle:Categoria")->findOneById($request->request->get("categoria"));
              $listapp->setNombre($request->request->get("text-nombre"));
              $listapp->setUrl($request->request->get("text-url"));
              $listapp->setData($request->request->get("text-data"));
              $listapp->setAdjunto($file_name);
              $listapp->setCategoria($categoria);


              $em->persist($listapp);
              $em->flush();
              return $this->redirectToRoute('viwCat');

          }
          else {
            return $this->redirectToRoute('user_index');
          }
        }

    }
    /**
     * Deletes a listapp entity.
     *
     * @Route("/{id}", name="listapp_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Listapp $listapp)
    {
      $permisos=explode(';',$request->getSession()->get('permisos'));
      foreach ($permisos as $per) {
          $po = explode("_", $per);
          if (in_array('Modificar',$po) || in_array('Administrador',$permisos))
          {
              $form = $this->createDeleteForm($listapp);
              $form->handleRequest($request);

              if ($form->isSubmitted() && $form->isValid()) {
                  $em = $this->getDoctrine()->getManager();
                  $em->remove($listapp);
                  $em->flush($listapp);
              }

              return $this->redirectToRoute('viwCat');
            }
            else {
              return $this->redirectToRoute('user_index');
            }
        }
    }

    /**
     * Creates a form to delete a listapp entity.
     *
     * @param Listapp $listapp The listapp entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Listapp $listapp)
    {

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('listapp_delete', array('id' => $listapp->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
