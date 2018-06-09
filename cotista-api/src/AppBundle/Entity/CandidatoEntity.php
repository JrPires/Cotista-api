<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatoEntity
 *
 * @ORM\Table(name="candidato_entity")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CandidatoEntityRepository")
 */
class CandidatoEntity
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
     * @var int
     *
     * @ORM\Column(name="cpf", type="integer")
     */
    private $cpf;

    /**
     * @var bool
     *
     * @ORM\Column(name="cotista", type="boolean")
     */
    private $cotista;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=255)
     */
    private $telefone;

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
     * @var string
     *
     * @ORM\Column(name="comprovacaoInstituicao", type="string", length=255)
     */
    private $comprovacaoInstituicao;

    /**
     * @var string
     *
     * @ORM\Column(name="declaracaoRenda", type="string", length=255)
     */
    private $declaracaoRenda;


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
     * Set cpf
     *
     * @param integer $cpf
     *
     * @return CanditadoEntity
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return int
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set cotista
     *
     * @param boolean $cotista
     *
     * @return CanditadoEntity
     */
    public function setCotista($cotista)
    {
        $this->cotista = $cotista;

        return $this;
    }

    /**
     * Get cotista
     *
     * @return bool
     */
    public function getCotista()
    {
        return $this->cotista;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     *
     * @return CanditadoEntity
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set escolaridade
     *
     * @param string $escolaridade
     *
     * @return CanditadoEntity
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
     * @return CanditadoEntity
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
     * @return CanditadoEntity
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
     * @return CanditadoEntity
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

    /**
     * Set comprovacaoInstituicao
     *
     * @param string $comprovacaoInstituicao
     *
     * @return CanditadoEntity
     */
    public function setComprovacaoInstituicao($comprovacaoInstituicao)
    {
        $this->comprovacaoInstituicao = $comprovacaoInstituicao;

        return $this;
    }

    /**
     * Get comprovacaoInstituicao
     *
     * @return string
     */
    public function getComprovacaoInstituicao()
    {
        return $this->comprovacaoInstituicao;
    }

    /**
     * Set declaracaoRenda
     *
     * @param string $declaracaoRenda
     *
     * @return CanditadoEntity
     */
    public function setDeclaracaoRenda($declaracaoRenda)
    {
        $this->declaracaoRenda = $declaracaoRenda;

        return $this;
    }

    /**
     * Get declaracaoRenda
     *
     * @return string
     */
    public function getDeclaracaoRenda()
    {
        return $this->declaracaoRenda;
    }
}

