<?php

namespace Mairie\MairieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deces
 *
 * @ORM\Table(name="deces")
 * @ORM\Entity(repositoryClass="Mairie\MairieBundle\Repository\DecesRepository")
 */
class Deces
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
     * @ORM\Column(name="nom_deces", type="string", length=255)
     */
    private $nomDeces;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_deces", type="string", length=255)
     */
    private $prenomDeces;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_deces", type="string", length=255)
     */
    private $lieuDeces;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deces", type="datetime")
     */
    private $dateDeces;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;


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
     * Set nomDeces.
     *
     * @param string $nomDeces
     *
     * @return Deces
     */
    public function setNomDeces($nomDeces)
    {
        $this->nomDeces = $nomDeces;

        return $this;
    }

    /**
     * Get nomDeces.
     *
     * @return string
     */
    public function getNomDeces()
    {
        return $this->nomDeces;
    }

    /**
     * Set prenomDeces.
     *
     * @param string $prenomDeces
     *
     * @return Deces
     */
    public function setPrenomDeces($prenomDeces)
    {
        $this->prenomDeces = $prenomDeces;

        return $this;
    }

    /**
     * Get prenomDeces.
     *
     * @return string
     */
    public function getPrenomDeces()
    {
        return $this->prenomDeces;
    }

    /**
     * Set lieuDeces.
     *
     * @param string $lieuDeces
     *
     * @return Deces
     */
    public function setLieuDeces($lieuDeces)
    {
        $this->lieuDeces = $lieuDeces;

        return $this;
    }

    /**
     * Get lieuDeces.
     *
     * @return string
     */
    public function getLieuDeces()
    {
        return $this->lieuDeces;
    }

    /**
     * Set dateDeces.
     *
     * @param \DateTime $dateDeces
     *
     * @return Deces
     */
    public function setDateDeces($dateDeces)
    {
        $this->dateDeces = $dateDeces;

        return $this;
    }

    /**
     * Get dateDeces.
     *
     * @return \DateTime
     */
    public function getDateDeces()
    {
        return $this->dateDeces;
    }

    /**
     * Set age.
     *
     * @param int $age
     *
     * @return Deces
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age.
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }
}
