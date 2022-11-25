<?php

namespace App\Entity;

use App\Repository\RestaurateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestaurateurRepository::class)]
class Restaurateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomres = null;

    #[ORM\Column]
    private ?int $numtel = null;

    #[ORM\Column(length: 255)]
    private ?string $emailres = null;

    #[ORM\Column(length: 255)]
    private ?string $mdpres = null;

    #[ORM\Column]
    private ?int $codetva = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column]
    private ?int $cin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomres(): ?string
    {
        return $this->nomres;
    }

    public function setNomres(string $nomres): self
    {
        $this->nomres = $nomres;

        return $this;
    }

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(int $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getEmailres(): ?string
    {
        return $this->emailres;
    }

    public function setEmailres(string $emailres): self
    {
        $this->emailres = $emailres;

        return $this;
    }

    public function getMdpres(): ?string
    {
        return $this->mdpres;
    }

    public function setMdpres(string $mdpres): self
    {
        $this->mdpres = $mdpres;

        return $this;
    }

    public function getCodetva(): ?int
    {
        return $this->codetva;
    }

    public function setCodetva(int $codetva): self
    {
        $this->codetva = $codetva;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): self
    {
        $this->cin = $cin;

        return $this;
    }
}
