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
     * @ORM\Column(type="string", length=255)
     */
    private $titreAccroche;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $paragraphe1;

    

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

    public function getTitreAccroche(): ?string
    {
        return $this->titreAccroche;
    }

    public function setTitreAccroche(string $titreAccroche): self
    {
        $this->titreAccroche = $titreAccroche;

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

}
