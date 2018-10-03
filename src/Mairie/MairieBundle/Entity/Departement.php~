<?php

namespace Mairie\MairieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="Mairie\MairieBundle\Repository\DepartementRepository")
 */
class Departement
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
     * @ORM\Column(name="nom_departement", type="string", length=255)
     */
    private $nomDepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse_departement", type="string", length=255)
     */
    private $addresseDepartement;


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
     * Set nomDepartement.
     *
     * @param string $nomDepartement
     *
     * @return Departement
     */
    public function setNomDepartement($nomDepartement)
    {
        $this->nomDepartement = $nomDepartement;

        return $this;
    }

    /**
     * Get nomDepartement.
     *
     * @return string
     */
    public function getNomDepartement()
    {
        return $this->nomDepartement;
    }

    /**
     * Set addresseDepartement.
     *
     * @param string $addresseDepartement
     *
     * @return Departement
     */
    public function setAddresseDepartement($addresseDepartement)
    {
        $this->addresseDepartement = $addresseDepartement;

        return $this;
    }

    /**
     * Get addresseDepartement.
     *
     * @return string
     */
    public function getAddresseDepartement()
    {
        return $this->addresseDepartement;
    }
}
