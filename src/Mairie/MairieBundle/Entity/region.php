<?php

namespace Mairie\MairieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity(repositoryClass="Mairie\MairieBundle\Repository\regionRepository")
 */
class region
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_region", type="string", length=255)
     */
    private $nomRegion;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomRegion.
     *
     * @param string $nomRegion
     *
     * @return region
     */
    public function setNomRegion($nomRegion)
    {
        $this->nomRegion = $nomRegion;

        return $this;
    }

    /**
     * Get nomRegion.
     *
     * @return string
     */
    public function getNomRegion()
    {
        return $this->nomRegion;
    }
}
