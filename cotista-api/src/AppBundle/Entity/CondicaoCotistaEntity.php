<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CondicaoCotistaEntity
 *
 * @ORM\Table(name="condicao_cotista_entity")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CondicaoCotistaEntityRepository")
 */
class CondicaoCotistaEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="escolaridade", type="string", length=255)
     */
    private $escolaridade;

    /**
     * @var float
     *
     * @ORM\Column(name="renda", type="float")
     */
    private $renda;

    /**
     * @var string
     *
     * @ORM\Column(name="etnia", type="string", length=255)
     */
    private $etnia;

    /**
     * @var string
     *
     * @ORM\Column(name="raca", type="string", length=255)
     */
    private $raca;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set escolaridade
     *
     * @param string $escolaridade
     *
     * @return CondicaoCotistaEntity
     */
    public function setEscolaridade($escolaridade)
    {
        $this->escolaridade = $escolaridade;

        return $this;
    }

    /**
     * Get escolaridade
     *
     * @return string
     */
    public function getEscolaridade()
    {
        return $this->escolaridade;
    }

    /**
     * Set renda
     *
     * @param float $renda
     *
     * @return CondicaoCotistaEntity
     */
    public function setRenda($renda)
    {
        $this->renda = $renda;

        return $this;
    }

    /**
     * Get renda
     *
     * @return float
     */
    public function getRenda()
    {
        return $this->renda;
    }

    /**
     * Set etnia
     *
     * @param string $etnia
     *
     * @return CondicaoCotistaEntity
     */
    public function setEtnia($etnia)
    {
        $this->etnia = $etnia;

        return $this;
    }

    /**
     * Get etnia
     *
     * @return string
     */
    public function getEtnia()
    {
        return $this->etnia;
    }

    /**
     * Set raca
     *
     * @param string $raca
     *
     * @return CondicaoCotistaEntity
     */
    public function setRaca($raca)
    {
        $this->raca = $raca;

        return $this;
    }

    /**
     * Get raca
     *
     * @return string
     */
    public function getRaca()
    {
        return $this->raca;
    }
}

