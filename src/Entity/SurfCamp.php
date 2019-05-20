<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SurfCampRepository")
 */
class SurfCamp
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
    private $destination;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre1;

    /**
     * @ORM\Column(type="text")
     */
    private $miniDescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $galerie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image2;

    /**
     * @ORM\Column(type="text")
     */
    private $sstitre2;

    /**
     * @ORM\Column(type="text")
     */
    private $sstext2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image3;

    /**
     * @ORM\Column(type="text")
     */
    private $sstitre3;

    /**
     * @ORM\Column(type="text")
     */
    private $sstext3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $galerie2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prestation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $enumeration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $guidePratiqueDestination;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texteInfo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $googleMap;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tarif;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $horsSaisonText;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $saisonText;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTitre1(): ?string
    {
        return $this->titre1;
    }

    public function setTitre1(string $titre1): self
    {
        $this->titre1 = $titre1;

        return $this;
    }

    public function getMiniDescription(): ?string
    {
        return $this->miniDescription;
    }

    public function setMiniDescription(string $miniDescription): self
    {
        $this->miniDescription = $miniDescription;

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

    public function getGalerie(): ?string
    {
        return $this->galerie;
    }

    public function setGalerie(string $galerie): self
    {
        $this->galerie = $galerie;

        return $this;
    }

    public function getImage2(): ?string
    {
        return $this->image2;
    }

    public function setImage2(string $image2): self
    {
        $this->image2 = $image2;

        return $this;
    }

    public function getSstitre2(): ?string
    {
        return $this->sstitre2;
    }

    public function setSstitre2(string $sstitre2): self
    {
        $this->sstitre2 = $sstitre2;

        return $this;
    }

    public function getSstext2(): ?string
    {
        return $this->sstext2;
    }

    public function setSstext2(string $sstext2): self
    {
        $this->sstext2 = $sstext2;

        return $this;
    }

    public function getImage3(): ?string
    {
        return $this->image3;
    }

    public function setImage3(string $image3): self
    {
        $this->image3 = $image3;

        return $this;
    }

    public function getSstitre3(): ?string
    {
        return $this->sstitre3;
    }

    public function setSstitre3(string $sstitre3): self
    {
        $this->sstitre3 = $sstitre3;

        return $this;
    }

    public function getSstext3(): ?string
    {
        return $this->sstext3;
    }

    public function setSstext3(string $sstext3): self
    {
        $this->sstext3 = $sstext3;

        return $this;
    }

    public function getGalerie2(): ?string
    {
        return $this->galerie2;
    }

    public function setGalerie2(string $galerie2): self
    {
        $this->galerie2 = $galerie2;

        return $this;
    }

    public function getPrestation(): ?string
    {
        return $this->prestation;
    }

    public function setPrestation(?string $prestation): self
    {
        $this->prestation = $prestation;

        return $this;
    }

    public function getEnumeration(): ?string
    {
        return $this->enumeration;
    }

    public function setEnumeration(?string $enumeration): self
    {
        $this->enumeration = $enumeration;

        return $this;
    }

    public function getGuidePratiqueDestination(): ?string
    {
        return $this->guidePratiqueDestination;
    }

    public function setGuidePratiqueDestination(string $guidePratiqueDestination): self
    {
        $this->guidePratiqueDestination = $guidePratiqueDestination;

        return $this;
    }

    public function getTexteInfo(): ?string
    {
        return $this->texteInfo;
    }

    public function setTexteInfo(?string $texteInfo): self
    {
        $this->texteInfo = $texteInfo;

        return $this;
    }

    public function getGoogleMap(): ?string
    {
        return $this->googleMap;
    }

    public function setGoogleMap(?string $googleMap): self
    {
        $this->googleMap = $googleMap;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(?string $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getHorsSaisonText(): ?string
    {
        return $this->horsSaisonText;
    }

    public function setHorsSaisonText(?string $horsSaisonText): self
    {
        $this->horsSaisonText = $horsSaisonText;

        return $this;
    }

    public function getSaisonText(): ?string
    {
        return $this->saisonText;
    }

    public function setSaisonText(?string $saisonText): self
    {
        $this->saisonText = $saisonText;

        return $this;
    }
}
