<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 08/06/2018
 * Time: 13:34
 */

namespace Infrastructure\Persistence\Doctrine;


use Doctrine\ORM\EntityRepository;
use Domain\Model\Usuario;
use Domain\Repository\UsuarioRepositoryInterface;

class UsuarioRepository extends EntityRepository implements UsuarioRepositoryInterface
{
    /**
     * @param Usuario $usuario
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function salvar(Usuario $usuario){

        $this->getEntityManager()->persist($usuario);
        $this->getEntityManager()->flush();
    }

}