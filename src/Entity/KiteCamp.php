<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KiteCampRepository")
 */
class KiteCamp
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
    private $intitule;

    /**
     * @ORM\Column(type="text")
     */
    private $GrandTitre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $GrandTitreEn;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionEn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="text")
     */
    private $galerie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image2;

    /**
     * @ORM\Column(type="text")
     */
    private $ssTitre2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ssTitre2En;

    /**
     * @ORM\Column(type="text")
     */
    private $ssText2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ssText2En;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image3;

    /**
     * @ORM\Column(type="text")
     */
    private $ssTitre3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ssTitre3En;

    /**
     * @ORM\Column(type="text")
     */
    private $galerie2;

    /**
     * @ORM\Column(type="text")
     */
    private $textInfo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $textInfoEn;

    /**
     * @ORM\Column(type="text")
     */
    private $enumeration;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $enumerationEn;

    /**
     * @ORM\Column(type="text")
     */
    private $guidePratiqueDestination;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $guidePratiqueDestinationEn;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $textEn;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $googleMap;

    /**
     * @ORM\Column(type="text")
     */
    private $niveauText;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $niveauTextEn;

    /**
     * @ORM\Column(type="text")
     */
    private $locationText;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $locationTextEn;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getGrandTitre(): ?string
    {
        return $this->GrandTitre;
    }

    public function setGrandTitre(string $GrandTitre): self
    {
        $this->GrandTitre = $GrandTitre;

        return $this;
    }

    public function getGrandTitreEn(): ?string
    {
        return $this->GrandTitreEn;
    }

    public function setGrandTitreEn(?string $GrandTitreEn): self
    {
        $this->GrandTitreEn = $GrandTitreEn;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescriptionEn(): ?string
    {
        return $this->descriptionEn;
    }

    public function setDescriptionEn(?string $descriptionEn): self
    {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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

    public function setImage2(?string $image2): self
    {
        $this->image2 = $image2;

        return $this;
    }

    public function getSsTitre2(): ?string
    {
        return $this->ssTitre2;
    }

    public function setSsTitre2(string $ssTitre2): self
    {
        $this->ssTitre2 = $ssTitre2;

        return $this;
    }

    public function getSsTitre2En(): ?string
    {
        return $this->ssTitre2En;
    }

    public function setSsTitre2En(?string $ssTitre2En): self
    {
        $this->ssTitre2En = $ssTitre2En;

        return $this;
    }

    public function getSsText2(): ?string
    {
        return $this->ssText2;
    }

    public function setSsText2(string $ssText2): self
    {
        $this->ssText2 = $ssText2;

        return $this;
    }

    public function getSsText2En(): ?string
    {
        return $this->ssText2En;
    }

    public function setSsText2En(?string $ssText2En): self
    {
        $this->ssText2En = $ssText2En;

        return $this;
    }

    public function getImage3(): ?string
    {
        return $this->image3;
    }

    public function setImage3(?string $image3): self
    {
        $this->image3 = $image3;

        return $this;
    }

    public function getSsTitre3(): ?string
    {
        return $this->ssTitre3;
    }

    public function setSsTitre3(string $ssTitre3): self
    {
        $this->ssTitre3 = $ssTitre3;

        return $this;
    }

    public function getSsTitre3En(): ?string
    {
        return $this->ssTitre3En;
    }

    public function setSsTitre3En(?string $ssTitre3En): self
    {
        $this->ssTitre3En = $ssTitre3En;

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

    public function getTextInfo(): ?string
    {
        return $this->textInfo;
    }

    public function setTextInfo(string $textInfo): self
    {
        $this->textInfo = $textInfo;

        return $this;
    }

    public function getTextInfoEn(): ?string
    {
        return $this->textInfoEn;
    }

    public function setTextInfoEn(?string $textInfoEn): self
    {
        $this->textInfoEn = $textInfoEn;

        return $this;
    }

    public function getEnumeration(): ?string
    {
        return $this->enumeration;
    }

    public function setEnumeration(string $enumeration): self
    {
        $this->enumeration = $enumeration;

        return $this;
    }

    public function getEnumerationEn(): ?string
    {
        return $this->enumerationEn;
    }

    public function setEnumerationEn(?string $enumerationEn): self
    {
        $this->enumerationEn = $enumerationEn;

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

    public function getGuidePratiqueDestinationEn(): ?string
    {
        return $this->guidePratiqueDestinationEn;
    }

    public function setGuidePratiqueDestinationEn(?string $guidePratiqueDestinationEn): self
    {
        $this->guidePratiqueDestinationEn = $guidePratiqueDestinationEn;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getTextEn(): ?string
    {
        return $this->textEn;
    }

    public function setTextEn(?string $textEn): self
    {
        $this->textEn = $textEn;

        return $this;
    }

    public function getGoogleMap(): ?string
    {
        return $this->googleMap;
    }

    public function setGoogleMap(string $googleMap): self
    {
        $this->googleMap = $googleMap;

        return $this;
    }

    public function getNiveauText(): ?string
    {
        return $this->niveauText;
    }

    public function setNiveauText(string $niveauText): self
    {
        $this->niveauText = $niveauText;

        return $this;
    }

    public function getNiveauTextEn(): ?string
    {
        return $this->niveauTextEn;
    }

    public function setNiveauTextEn(?string $niveauTextEn): self
    {
        $this->niveauTextEn = $niveauTextEn;

        return $this;
    }

    public function getLocationText(): ?string
    {
        return $this->locationText;
    }

    public function setLocationText(string $locationText): self
    {
        $this->locationText = $locationText;

        return $this;
    }

    public function getLocationTextEn(): ?string
    {
        return $this->locationTextEn;
    }

    public function setLocationTextEn(?string $locationTextEn): self
    {
        $this->locationTextEn = $locationTextEn;

        return $this;
    }
}
