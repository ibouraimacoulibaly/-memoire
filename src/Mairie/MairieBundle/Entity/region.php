<?php

namespace Mairie\MairieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     
     * @ORM\OneToMany(targetEntity="Etat_civil", mappedBy="region")
     */
    private $etatCivil;

    public function __construct()
    {
        $this->etat_civil = new ArrayCollection();
    }

  

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
    

    /**
     * Add etatCivil.
     *
     * @param \Mairie\MairieBundle\Entity\Etat_civil $etatCivil
     *
     * @return region
     */
    public function addEtatCivil(\Mairie\MairieBundle\Entity\Etat_civil $etatCivil)
    {
        $this->etatCivil[] = $etatCivil;

        return $this;
    }

    /**
     * Remove etatCivil.
     *
     * @param \Mairie\MairieBundle\Entity\Etat_civil $etatCivil
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeEtatCivil(\Mairie\MairieBundle\Entity\Etat_civil $etatCivil)
    {
        return $this->etatCivil->removeElement($etatCivil);
    }

    /**
     * Get etatCivil.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }
}
