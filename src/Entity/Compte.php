<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CompteRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;


/**
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 * @ApiResource()
 * @ApiFilter(SearchFilter::class, properties={"accountnumber": "exact"})
 */
   class Compte
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
    private $accountnumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clerib;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeCompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $solde;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccountnumber(): ?string
    {
        return $this->accountnumber;
    }

    public function setAccountnumber(string $accountnumber): self
    {
        $this->accountnumber = $accountnumber;

        return $this;
    }

    public function getClerib(): ?string
    {
        return $this->clerib;
    }

    public function setClerib(string $clerib): self
    {
        $this->clerib = $clerib;

        return $this;
    }

    public function getTypeCompte(): ?string
    {
        return $this->typeCompte;
    }

    public function setTypeCompte(string $typeCompte): self
    {
        $this->typeCompte = $typeCompte;

        return $this;
    }

    public function getSolde(): ?string
    {
        return $this->solde;
    }

    public function setSolde(string $solde): self
    {
        $this->solde = $solde;

        return $this;
    }
}
