<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 08/06/2018
 * Time: 16:58
 */

namespace Domain\Service;


interface UsuarioServiceInterface
{
    /**
     * @param Usuario $usuario
     * @return void
     */
    public function salvar(Usuario $usuario);

    /**
     * @return array
     */
    public function listarTudo();

}