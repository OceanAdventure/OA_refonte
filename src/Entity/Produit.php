<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre_principal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre_secondaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $condition_reglement;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_cours;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $descrition;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destination;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sport;

    /**
     * @ORM\Column(type="boolean")
     */
    private $particulier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(?string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getTitrePrincipal(): ?string
    {
        return $this->titre_principal;
    }

    public function setTitrePrincipal(string $titre_principal): self
    {
        $this->titre_principal = $titre_principal;

        return $this;
    }

    public function getTitreSecondaire(): ?string
    {
        return $this->titre_secondaire;
    }

    public function setTitreSecondaire(string $titre_secondaire): self
    {
        $this->titre_secondaire = $titre_secondaire;

        return $this;
    }

    public function getConditionReglement(): ?string
    {
        return $this->condition_reglement;
    }

    public function setConditionReglement(string $condition_reglement): self
    {
        $this->condition_reglement = $condition_reglement;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNbCours(): ?int
    {
        return $this->nb_cours;
    }

    public function setNbCours(int $nb_cours): self
    {
        $this->nb_cours = $nb_cours;

        return $this;
    }

    public function getDescrition(): ?string
    {
        return $this->descrition;
    }

    public function setDescrition(string $descrition): self
    {
        $this->descrition = $descrition;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getSport(): ?string
    {
        return $this->sport;
    }

    public function setSport(string $sport): self
    {
        $this->sport = $sport;

        return $this;
    }

    public function getParticulier(): ?bool
    {
        return $this->particulier;
    }

    public function setParticulier(bool $particulier): self
    {
        $this->particulier = $particulier;

        return $this;
    }
}
