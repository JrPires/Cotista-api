<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 28/05/2018
 * Time: 15:22
 */

namespace AppBundle\Service;


use Domain\Service\UsuarioServiceInterface;

class UsuarioService implements UsuarioServiceInterface
{
    /**
     * @var
     */
    private $usuarioRepository;

    /**
     * OportunidadeService constructor.
     * @param UsuarioRepositoryInterface $usuarioRepository
     */
    public function __construct(UsuarioRepositoryInterface $usuarioRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
    }

    /**
     * @param Usuario $usuario
     */
    // public function salvar(Usuario $usuario)
    //{

     //  $this->usuarioRepository->salvar($usuario);
     //}



    /**
     * @return array
     */
    public function listarTudo()
    {
        return $this->usuarioRepository->findAll();
    }
}