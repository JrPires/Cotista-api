<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 28/05/2018
 * Time: 14:39
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\CandidatoType;

class CandidatoController extends Controller
{
    /**
     * @Route("/candidato/candidato")
     * @return Response
     */
    public function candidatoAction(Request $request)
    {
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
    public function listarAction(){

    }
}