<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 28/05/2018
 * Time: 14:36
 */

namespace AppBundle\Controller;




use AppBundle\Form\UsuarioType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class UsuarioController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        $usuario = $this->getDoctrine()
            ->getRepository('AppBundle:Usuario')
            ->findAll();

        $usuario = $this->get('jms_serializer')->serialize($usuario, 'json');

        return new Response($usuario);
    }

    /**
     * @Route("/usuario/salvar")
     * @param Request $request
     * @return Response
     */
    public function salvarAction(Request $request){


        $serializerService = $this->get('infra.serializer.service');
        $usuarioService = $this->get('app.usuario.service');

        try{
            $usuario = $serializerService->converter($request->getContent(), \Usuario::class);
            $usuarioService->salvar($usuario);
        }
        catch (\Exception $exception){
            return Response($exception->getMessage(), 400);
        }
        return new Response("Operação Concluida com Sucesso !!");


    }

    /**
     * @Route("/create")
     * @return Response
     */
    public function createAction(Request $request)
    {

        $form = $this->createForm(UsuarioType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $usuario = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($usuario);
            $entityManager->flush();

            return $this->redirect('/candidato');
        }

         return $this->render('usuario/create.html.twig', ['form' => $form->createView()]);
    }



}