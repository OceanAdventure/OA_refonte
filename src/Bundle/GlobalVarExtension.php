<?php

namespace App\Bundle;

use App\Entity\SurfCamp;
use App\Entity\SurfCampFuert;
use App\Entity\Hebergement;
use App\Entity\KiteCamp;

use Doctrine\ORM\EntityManagerInterface;

class GlobalVarExtension extends \Twig\Extension\AbstractExtension implements \Twig\Extension\GlobalsInterface
{
    /**
     * Entity Manager
     * 
     * @var Doctrine\ORM\EntityManager
     */
    protected $em;

    public function __construct(EntityManagerInterface $em){
        $this->em = $em;
    }

    public function getGlobals()
    {
        return [
            'surf_camps' => $this->em->getRepository(SurfCamp::class)->findAll(),
            'surf_camp_fuerts' => $this->em->getRepository(SurfCampFuert::class)->findAll(),
            'hebergements' => $this->em->getRepository(Hebergement::class)->findAll(),
            'kite_camps' => $this->em->getRepository(KiteCamp::class)->findAll(),
        ];
    }
}