<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 08/06/2018
 * Time: 13:38
 */

namespace Domain\Repository;


use Domain\Model\Usuario;

interface UsuarioRepositoryInterface
{

    /**
     * @param Usuario $usuario
     * @return mixed
     */
    public function salvar(Usuario $usuario);
}