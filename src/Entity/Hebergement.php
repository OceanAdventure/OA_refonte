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
     * @ORM\Column(type="string", length=255)
     */
    private $situation;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionSsTitre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image1;

    /**
     * @ORM\Column(type="text")
     */
    private $ssText;

    /**
     * @ORM\Column(type="text")
     */
    private $typeDeChambre;

    /**
     * @ORM\Column(type="text")
     */
    private $galerie;

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

    public function getTypeDeChambre(): ?string
    {
        return $this->typeDeChambre;
    }

    public function setTypeDeChambre(string $typeDeChambre): self
    {
        $this->typeDeChambre = $typeDeChambre;

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
}
