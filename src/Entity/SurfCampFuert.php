<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SurfCampFuertRepository")
 */
class SurfCampFuert
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $grandTitre;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $grandTitreEn;

    /**
     * @ORM\Column(type="text")
     */
    private $titreAccroche;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titreAccrocheEn;

    /**
     * @ORM\Column(type="text")
     */
    private $paragraphe1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $paragraphe1En;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $grandTitreEs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $grandTitreIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titreAccrocheEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titreAccrocheIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $paragraphe1Es;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $paragraphe1It;

    

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

    public function getTitreAccroche(): ?string
    {
        return $this->titreAccroche;
    }

    public function setTitreAccroche(string $titreAccroche): self
    {
        $this->titreAccroche = $titreAccroche;

        return $this;
    }

    public function getTitreAccrocheEn(): ?string
    {
        return $this->titreAccrocheEn;
    }

    public function setTitreAccrocheEn(?string $titreAccrocheEn): self
    {
        $this->titreAccrocheEn = $titreAccrocheEn;

        return $this;
    }

    public function getParagraphe1(): ?string
    {
        return $this->paragraphe1;
    }

    public function setParagraphe1(string $paragraphe1): self
    {
        $this->paragraphe1 = $paragraphe1;

        return $this;
    }

    public function getParagraphe1En(): ?string
    {
        return $this->paragraphe1En;
    }

    public function setParagraphe1En(?string $paragraphe1En): self
    {
        $this->paragraphe1En = $paragraphe1En;

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

    public function getTitreAccrocheEs(): ?string
    {
        return $this->titreAccrocheEs;
    }

    public function setTitreAccrocheEs(?string $titreAccrocheEs): self
    {
        $this->titreAccrocheEs = $titreAccrocheEs;

        return $this;
    }

    public function getTitreAccrocheIt(): ?string
    {
        return $this->titreAccrocheIt;
    }

    public function setTitreAccrocheIt(?string $titreAccrocheIt): self
    {
        $this->titreAccrocheIt = $titreAccrocheIt;

        return $this;
    }

    public function getParagraphe1Es(): ?string
    {
        return $this->paragraphe1Es;
    }

    public function setParagraphe1Es(?string $paragraphe1Es): self
    {
        $this->paragraphe1Es = $paragraphe1Es;

        return $this;
    }

    public function getParagraphe1It(): ?string
    {
        return $this->paragraphe1It;
    }

    public function setParagraphe1It(?string $paragraphe1It): self
    {
        $this->paragraphe1It = $paragraphe1It;

        return $this;
    }

}
