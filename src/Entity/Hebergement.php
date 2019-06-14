<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HebergementRepository")
 */
class Hebergement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $grandTitre;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $grandTitreEn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $situation;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionSsTitre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionSsTitreEn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image1;

    /**
     * @ORM\Column(type="text")
     */
    private $ssText;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ssTextEn;

    /**
     * @ORM\Column(type="text")
     */
    private $typeDeChambre;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $typeDeChambreEn;

    /**
     * @ORM\Column(type="text")
     */
    private $galerie;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $grandTitreEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $grandTitreIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionSsTitreEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionSsTitreIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $typeDeChambreEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $typeDeChambreIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ssTextEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ssTextIt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrandTitre(): ?string
    {
        return $this->grandTitre;
    }

    public function setGrandTitre(string $grandTitre): self
    {
        $this->grandTitre = $grandTitre;

        return $this;
    }

    public function getGrandTitreEn(): ?string
    {
        return $this->grandTitreEn;
    }

    public function setGrandTitreEn(?string $grandTitreEn): self
    {
        $this->grandTitreEn = $grandTitreEn;

        return $this;
    }

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(string $situation): self
    {
        $this->situation = $situation;

        return $this;
    }

    public function getDescriptionSsTitre(): ?string
    {
        return $this->descriptionSsTitre;
    }

    public function setDescriptionSsTitre(string $descriptionSsTitre): self
    {
        $this->descriptionSsTitre = $descriptionSsTitre;

        return $this;
    }

    public function getDescriptionSsTitreEn(): ?string
    {
        return $this->descriptionSsTitreEn;
    }

    public function setDescriptionSsTitreEn(?string $descriptionSsTitreEn): self
    {
        $this->descriptionSsTitreEn = $descriptionSsTitreEn;

        return $this;
    }

    public function getImage1(): ?string
    {
        return $this->image1;
    }

    public function setImage1(string $image1): self
    {
        $this->image1 = $image1;

        return $this;
    }

    public function getSsText(): ?string
    {
        return $this->ssText;
    }

    public function setSsText(string $ssText): self
    {
        $this->ssText = $ssText;

        return $this;
    }

    public function getSsTextEn(): ?string
    {
        return $this->ssTextEn;
    }

    public function setSsTextEn(?string $ssTextEn): self
    {
        $this->ssTextEn = $ssTextEn;

        return $this;
    }

    public function getTypeDeChambre(): ?string
    {
        return $this->typeDeChambre;
    }

    public function setTypeDeChambre(string $typeDeChambre): self
    {
        $this->typeDeChambre = $typeDeChambre;

        return $this;
    }

    public function getTypeDeChambreEn(): ?string
    {
        return $this->typeDeChambreEn;
    }

    public function setTypeDeChambreEn(?string $typeDeChambreEn): self
    {
        $this->typeDeChambreEn = $typeDeChambreEn;

        return $this;
    }

    public function getGalerie(): ?string
    {
        return $this->galerie;
    }

    public function setGalerie(string $galerie): self
    {
        $this->galerie = $galerie;

        return $this;
    }

    public function getGrandTitreEs(): ?string
    {
        return $this->grandTitreEs;
    }

    public function setGrandTitreEs(?string $grandTitreEs): self
    {
        $this->grandTitreEs = $grandTitreEs;

        return $this;
    }

    public function getGrandTitreIt(): ?string
    {
        return $this->grandTitreIt;
    }

    public function setGrandTitreIt(?string $grandTitreIt): self
    {
        $this->grandTitreIt = $grandTitreIt;

        return $this;
    }

    public function getDescriptionSsTitreEs(): ?string
    {
        return $this->descriptionSsTitreEs;
    }

    public function setDescriptionSsTitreEs(?string $descriptionSsTitreEs): self
    {
        $this->descriptionSsTitreEs = $descriptionSsTitreEs;

        return $this;
    }

    public function getDescriptionSsTitreIt(): ?string
    {
        return $this->descriptionSsTitreIt;
    }

    public function setDescriptionSsTitreIt(?string $descriptionSsTitreIt): self
    {
        $this->descriptionSsTitreIt = $descriptionSsTitreIt;

        return $this;
    }

    public function getTypeDeChambreEs(): ?string
    {
        return $this->typeDeChambreEs;
    }

    public function setTypeDeChambreEs(?string $typeDeChambreEs): self
    {
        $this->typeDeChambreEs = $typeDeChambreEs;

        return $this;
    }

    public function getTypeDeChambreIt(): ?string
    {
        return $this->typeDeChambreIt;
    }

    public function setTypeDeChambreIt(?string $typeDeChambreIt): self
    {
        $this->typeDeChambreIt = $typeDeChambreIt;

        return $this;
    }

    public function getSsTextEs(): ?string
    {
        return $this->ssTextEs;
    }

    public function setSsTextEs(?string $ssTextEs): self
    {
        $this->ssTextEs = $ssTextEs;

        return $this;
    }

    public function getSsTextIt(): ?string
    {
        return $this->ssTextIt;
    }

    public function setSsTextIt(?string $ssTextIt): self
    {
        $this->ssTextIt = $ssTextIt;

        return $this;
    }
}
