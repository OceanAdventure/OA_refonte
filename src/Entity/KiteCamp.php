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

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $GrandTitreEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $GrandTitreIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ssTitre2Es;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ssTitre2It;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ssText2Es;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ssText2It;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ssTitre3Es;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ssTitre3It;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $textInfoEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $textInfoIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $enumerationEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $enumerationIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $guidePratiqueDestinationEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $guidePratiqueDestinationIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $textEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $textIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $niveauTextEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $niveauTextIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $locationTextEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $locationTextIt;

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

    public function getGrandTitreEs(): ?string
    {
        return $this->GrandTitreEs;
    }

    public function setGrandTitreEs(?string $GrandTitreEs): self
    {
        $this->GrandTitreEs = $GrandTitreEs;

        return $this;
    }

    public function getGrandTitreIt(): ?string
    {
        return $this->GrandTitreIt;
    }

    public function setGrandTitreIt(?string $GrandTitreIt): self
    {
        $this->GrandTitreIt = $GrandTitreIt;

        return $this;
    }

    public function getDescriptionEs(): ?string
    {
        return $this->descriptionEs;
    }

    public function setDescriptionEs(?string $descriptionEs): self
    {
        $this->descriptionEs = $descriptionEs;

        return $this;
    }

    public function getDescriptionIt(): ?string
    {
        return $this->descriptionIt;
    }

    public function setDescriptionIt(?string $descriptionIt): self
    {
        $this->descriptionIt = $descriptionIt;

        return $this;
    }

    public function getSsTitre2Es(): ?string
    {
        return $this->ssTitre2Es;
    }

    public function setSsTitre2Es(?string $ssTitre2Es): self
    {
        $this->ssTitre2Es = $ssTitre2Es;

        return $this;
    }

    public function getSsTitre2It(): ?string
    {
        return $this->ssTitre2It;
    }

    public function setSsTitre2It(?string $ssTitre2It): self
    {
        $this->ssTitre2It = $ssTitre2It;

        return $this;
    }

    public function getSsText2Es(): ?string
    {
        return $this->ssText2Es;
    }

    public function setSsText2Es(?string $ssText2Es): self
    {
        $this->ssText2Es = $ssText2Es;

        return $this;
    }

    public function getSsText2It(): ?string
    {
        return $this->ssText2It;
    }

    public function setSsText2It(?string $ssText2It): self
    {
        $this->ssText2It = $ssText2It;

        return $this;
    }

    public function getSsTitre3Es(): ?string
    {
        return $this->ssTitre3Es;
    }

    public function setSsTitre3Es(?string $ssTitre3Es): self
    {
        $this->ssTitre3Es = $ssTitre3Es;

        return $this;
    }

    public function getSsTitre3It(): ?string
    {
        return $this->ssTitre3It;
    }

    public function setSsTitre3It(?string $ssTitre3It): self
    {
        $this->ssTitre3It = $ssTitre3It;

        return $this;
    }

    public function getTextInfoEs(): ?string
    {
        return $this->textInfoEs;
    }

    public function setTextInfoEs(?string $textInfoEs): self
    {
        $this->textInfoEs = $textInfoEs;

        return $this;
    }

    public function getTextInfoIt(): ?string
    {
        return $this->textInfoIt;
    }

    public function setTextInfoIt(?string $textInfoIt): self
    {
        $this->textInfoIt = $textInfoIt;

        return $this;
    }

    public function getEnumerationEs(): ?string
    {
        return $this->enumerationEs;
    }

    public function setEnumerationEs(?string $enumerationEs): self
    {
        $this->enumerationEs = $enumerationEs;

        return $this;
    }

    public function getEnumerationIt(): ?string
    {
        return $this->enumerationIt;
    }

    public function setEnumerationIt(?string $enumerationIt): self
    {
        $this->enumerationIt = $enumerationIt;

        return $this;
    }

    public function getGuidePratiqueDestinationEs(): ?string
    {
        return $this->guidePratiqueDestinationEs;
    }

    public function setGuidePratiqueDestinationEs(?string $guidePratiqueDestinationEs): self
    {
        $this->guidePratiqueDestinationEs = $guidePratiqueDestinationEs;

        return $this;
    }

    public function getGuidePratiqueDestinationIt(): ?string
    {
        return $this->guidePratiqueDestinationIt;
    }

    public function setGuidePratiqueDestinationIt(?string $guidePratiqueDestinationIt): self
    {
        $this->guidePratiqueDestinationIt = $guidePratiqueDestinationIt;

        return $this;
    }

    public function getTextEs(): ?string
    {
        return $this->textEs;
    }

    public function setTextEs(?string $textEs): self
    {
        $this->textEs = $textEs;

        return $this;
    }

    public function getTextIt(): ?string
    {
        return $this->textIt;
    }

    public function setTextIt(?string $textIt): self
    {
        $this->textIt = $textIt;

        return $this;
    }

    public function getNiveauTextEs(): ?string
    {
        return $this->niveauTextEs;
    }

    public function setNiveauTextEs(?string $niveauTextEs): self
    {
        $this->niveauTextEs = $niveauTextEs;

        return $this;
    }

    public function getNiveauTextIt(): ?string
    {
        return $this->niveauTextIt;
    }

    public function setNiveauTextIt(?string $niveauTextIt): self
    {
        $this->niveauTextIt = $niveauTextIt;

        return $this;
    }

    public function getLocationTextEs(): ?string
    {
        return $this->locationTextEs;
    }

    public function setLocationTextEs(?string $locationTextEs): self
    {
        $this->locationTextEs = $locationTextEs;

        return $this;
    }

    public function getLocationTextIt(): ?string
    {
        return $this->locationTextIt;
    }

    public function setLocationTextIt(?string $locationTextIt): self
    {
        $this->locationTextIt = $locationTextIt;

        return $this;
    }
}
