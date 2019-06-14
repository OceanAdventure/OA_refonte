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
     * @ORM\Column(type="text")
     */
    private $titre1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre1En;

    /**
     * @ORM\Column(type="text")
     */
    private $miniDescription;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $miniDescriptionEn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image1;

    /**
     * @ORM\Column(type="text")
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $sstitre2En;

    /**
     * @ORM\Column(type="text")
     */
    private $sstext2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sstext2En;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image3;

    /**
     * @ORM\Column(type="text")
     */
    private $sstitre3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sstitre3En;

    /**
     * @ORM\Column(type="text")
     */
    private $sstext3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sstext3En;

    /**
     * @ORM\Column(type="text")
     */
    private $galerie2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $prestation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $prestationEn;

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
     * @ORM\Column(type="text", nullable=true)
     */
    private $texteInfo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texteInfoEn;

    /**
     * @ORM\Column(type="text", nullable=true)
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
    private $horsSaisonTextEn;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $saisonText;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $saisonTextEn;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre1Es;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre1It;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $miniDescriptionEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $miniDescriptionIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sstitre2Es;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sstitre2It;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sstext2Es;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sstext2It;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sstitre3Es;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sstitre3It;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sstext3Es;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sstext3It;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $prestationEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $prestationIt;

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
    private $texteInfoEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texteInfoIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $horsSaisonTextEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $horsSaisonTextIt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $saisonTextEs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $saisonTextIt;

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

    public function getTitre1En(): ?string
    {
        return $this->titre1En;
    }

    public function setTitre1En(?string $titre1En): self
    {
        $this->titre1En = $titre1En;

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

    public function getMiniDescriptionEn(): ?string
    {
        return $this->miniDescriptionEn;
    }

    public function setMiniDescriptionEn(?string $miniDescriptionEn): self
    {
        $this->miniDescriptionEn = $miniDescriptionEn;

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

    public function getSstitre2En(): ?string
    {
        return $this->sstitre2En;
    }

    public function setSstitre2En(?string $sstitre2En): self
    {
        $this->sstitre2En = $sstitre2En;

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

    public function getSstext2En(): ?string
    {
        return $this->sstext2En;
    }

    public function setSstext2En(?string $sstext2En): self
    {
        $this->sstext2En = $sstext2En;

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

    public function getSstitre3En(): ?string
    {
        return $this->sstitre3En;
    }

    public function setSstitre3En(?string $sstitre3En): self
    {
        $this->sstitre3En = $sstitre3En;

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

    public function getSstext3En(): ?string
    {
        return $this->sstext3En;
    }

    public function setSstext3En(?string $sstext3En): self
    {
        $this->sstext3En = $sstext3En;

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

    public function getPrestationEn(): ?string
    {
        return $this->prestationEn;
    }

    public function setPrestationEn(?string $prestationEn): self
    {
        $this->prestationEn = $prestationEn;

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

    public function getTexteInfo(): ?string
    {
        return $this->texteInfo;
    }

    public function setTexteInfo(?string $texteInfo): self
    {
        $this->texteInfo = $texteInfo;

        return $this;
    }

    public function getTexteInfoEn(): ?string
    {
        return $this->texteInfoEn;
    }

    public function setTexteInfoEn(?string $texteInfoEn): self
    {
        $this->texteInfoEn = $texteInfoEn;

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

    public function getHorsSaisonTextEn(): ?string
    {
        return $this->horsSaisonTextEn;
    }

    public function setHorsSaisonTextEn(?string $horsSaisonTextEn): self
    {
        $this->horsSaisonTextEn = $horsSaisonTextEn;

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

    public function getSaisonTextEn(): ?string
    {
        return $this->saisonTextEn;
    }

    public function setSaisonTextEn(?string $saisonTextEn): self
    {
        $this->saisonTextEn = $saisonTextEn;

        return $this;
    }

    public function getTitre1Es(): ?string
    {
        return $this->titre1Es;
    }

    public function setTitre1Es(?string $titre1Es): self
    {
        $this->titre1Es = $titre1Es;

        return $this;
    }

    public function getTitre1It(): ?string
    {
        return $this->titre1It;
    }

    public function setTitre1It(?string $titre1It): self
    {
        $this->titre1It = $titre1It;

        return $this;
    }

    public function getMiniDescriptionEs(): ?string
    {
        return $this->miniDescriptionEs;
    }

    public function setMiniDescriptionEs(?string $miniDescriptionEs): self
    {
        $this->miniDescriptionEs = $miniDescriptionEs;

        return $this;
    }

    public function getMiniDescriptionIt(): ?string
    {
        return $this->miniDescriptionIt;
    }

    public function setMiniDescriptionIt(?string $miniDescriptionIt): self
    {
        $this->miniDescriptionIt = $miniDescriptionIt;

        return $this;
    }

    public function getSstitre2Es(): ?string
    {
        return $this->sstitre2Es;
    }

    public function setSstitre2Es(?string $sstitre2Es): self
    {
        $this->sstitre2Es = $sstitre2Es;

        return $this;
    }

    public function getSstitre2It(): ?string
    {
        return $this->sstitre2It;
    }

    public function setSstitre2It(?string $sstitre2It): self
    {
        $this->sstitre2It = $sstitre2It;

        return $this;
    }

    public function getSstext2Es(): ?string
    {
        return $this->sstext2Es;
    }

    public function setSstext2Es(?string $sstext2Es): self
    {
        $this->sstext2Es = $sstext2Es;

        return $this;
    }

    public function getSstext2It(): ?string
    {
        return $this->sstext2It;
    }

    public function setSstext2It(?string $sstext2It): self
    {
        $this->sstext2It = $sstext2It;

        return $this;
    }

    public function getSstitre3Es(): ?string
    {
        return $this->sstitre3Es;
    }

    public function setSstitre3Es(?string $sstitre3Es): self
    {
        $this->sstitre3Es = $sstitre3Es;

        return $this;
    }

    public function getSstitre3It(): ?string
    {
        return $this->sstitre3It;
    }

    public function setSstitre3It(?string $sstitre3It): self
    {
        $this->sstitre3It = $sstitre3It;

        return $this;
    }

    public function getSstext3Es(): ?string
    {
        return $this->sstext3Es;
    }

    public function setSstext3Es(?string $sstext3Es): self
    {
        $this->sstext3Es = $sstext3Es;

        return $this;
    }

    public function getSstext3It(): ?string
    {
        return $this->sstext3It;
    }

    public function setSstext3It(?string $sstext3It): self
    {
        $this->sstext3It = $sstext3It;

        return $this;
    }

    public function getPrestationEs(): ?string
    {
        return $this->prestationEs;
    }

    public function setPrestationEs(?string $prestationEs): self
    {
        $this->prestationEs = $prestationEs;

        return $this;
    }

    public function getPrestationIt(): ?string
    {
        return $this->prestationIt;
    }

    public function setPrestationIt(?string $prestationIt): self
    {
        $this->prestationIt = $prestationIt;

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

    public function getTexteInfoEs(): ?string
    {
        return $this->texteInfoEs;
    }

    public function setTexteInfoEs(?string $texteInfoEs): self
    {
        $this->texteInfoEs = $texteInfoEs;

        return $this;
    }

    public function getTexteInfoIt(): ?string
    {
        return $this->texteInfoIt;
    }

    public function setTexteInfoIt(?string $texteInfoIt): self
    {
        $this->texteInfoIt = $texteInfoIt;

        return $this;
    }

    public function getHorsSaisonTextEs(): ?string
    {
        return $this->horsSaisonTextEs;
    }

    public function setHorsSaisonTextEs(?string $horsSaisonTextEs): self
    {
        $this->horsSaisonTextEs = $horsSaisonTextEs;

        return $this;
    }

    public function getHorsSaisonTextIt(): ?string
    {
        return $this->horsSaisonTextIt;
    }

    public function setHorsSaisonTextIt(?string $horsSaisonTextIt): self
    {
        $this->horsSaisonTextIt = $horsSaisonTextIt;

        return $this;
    }

    public function getSaisonTextEs(): ?string
    {
        return $this->saisonTextEs;
    }

    public function setSaisonTextEs(?string $saisonTextEs): self
    {
        $this->saisonTextEs = $saisonTextEs;

        return $this;
    }

    public function getSaisonTextIt(): ?string
    {
        return $this->saisonTextIt;
    }

    public function setSaisonTextIt(?string $saisonTextIt): self
    {
        $this->saisonTextIt = $saisonTextIt;

        return $this;
    }

}
