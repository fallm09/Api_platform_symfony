<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OperationsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=OperationsRepository::class)
 */
class Operations
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numoperation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeoperation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $montantoperation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $agence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateoper;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumoperation(): ?string
    {
        return $this->numoperation;
    }

    public function setNumoperation(string $numoperation): self
    {
        $this->numoperation = $numoperation;

        return $this;
    }

    public function getTypeoperation(): ?string
    {
        return $this->typeoperation;
    }

    public function setTypeoperation(string $typeoperation): self
    {
        $this->typeoperation = $typeoperation;

        return $this;
    }

    public function getMontantoperation(): ?string
    {
        return $this->montantoperation;
    }

    public function setMontantoperation(string $montantoperation): self
    {
        $this->montantoperation = $montantoperation;

        return $this;
    }

    public function getAgence(): ?string
    {
        return $this->agence;
    }

    public function setAgence(string $agence): self
    {
        $this->agence = $agence;

        return $this;
    }

    public function getDateoper(): ?string
    {
        return $this->dateoper;
    }

    public function setDateoper(string $dateoper): self
    {
        $this->dateoper = $dateoper;

        return $this;
    }
}
