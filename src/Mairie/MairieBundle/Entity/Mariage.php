<?php

namespace Mairie\MairieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mariage
 *
 * @ORM\Table(name="mariage")
 * @ORM\Entity(repositoryClass="Mairie\MairieBundle\Repository\MariageRepository")
 */
class Mariage
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
     * @ORM\Column(name="nom_epoux", type="string", length=255)
     */
    private $nomEpoux;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_epoux", type="string", length=255)
     */
    private $prenomEpoux;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance_epoux", type="datetime")
     */
    private $dateNaissanceEpoux;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_naissance_epoux", type="string", length=255)
     */
    private $lieuNaissanceEpoux;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse_epoux", type="string", length=255)
     */
    private $addresseEpoux;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_epouse", type="string", length=255)
     */
    private $nomEpouse;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_epouse", type="string", length=255)
     */
    private $prenomEpouse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance_epouse", type="datetime")
     */
    private $dateNaissanceEpouse;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_naissance_epouse", type="string", length=255)
     */
    private $lieuNaissanceEpouse;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse_epouse", type="string", length=255)
     */
    private $addresseEpouse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mariage", type="datetime")
     */
    private $dateMariage;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_mariage", type="string", length=255)
     */
    private $lieuMariage;


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
     * Set nomEpoux.
     *
     * @param string $nomEpoux
     *
     * @return Mariage
     */
    public function setNomEpoux($nomEpoux)
    {
        $this->nomEpoux = $nomEpoux;

        return $this;
    }

    /**
     * Get nomEpoux.
     *
     * @return string
     */
    public function getNomEpoux()
    {
        return $this->nomEpoux;
    }

    /**
     * Set prenomEpoux.
     *
     * @param string $prenomEpoux
     *
     * @return Mariage
     */
    public function setPrenomEpoux($prenomEpoux)
    {
        $this->prenomEpoux = $prenomEpoux;

        return $this;
    }

    /**
     * Get prenomEpoux.
     *
     * @return string
     */
    public function getPrenomEpoux()
    {
        return $this->prenomEpoux;
    }

    /**
     * Set dateNaissanceEpoux.
     *
     * @param \DateTime $dateNaissanceEpoux
     *
     * @return Mariage
     */
    public function setDateNaissanceEpoux($dateNaissanceEpoux)
    {
        $this->dateNaissanceEpoux = $dateNaissanceEpoux;

        return $this;
    }

    /**
     * Get dateNaissanceEpoux.
     *
     * @return \DateTime
     */
    public function getDateNaissanceEpoux()
    {
        return $this->dateNaissanceEpoux;
    }

    /**
     * Set lieuNaissanceEpoux.
     *
     * @param string $lieuNaissanceEpoux
     *
     * @return Mariage
     */
    public function setLieuNaissanceEpoux($lieuNaissanceEpoux)
    {
        $this->lieuNaissanceEpoux = $lieuNaissanceEpoux;

        return $this;
    }

    /**
     * Get lieuNaissanceEpoux.
     *
     * @return string
     */
    public function getLieuNaissanceEpoux()
    {
        return $this->lieuNaissanceEpoux;
    }

    /**
     * Set addresseEpoux.
     *
     * @param string $addresseEpoux
     *
     * @return Mariage
     */
    public function setAddresseEpoux($addresseEpoux)
    {
        $this->addresseEpoux = $addresseEpoux;

        return $this;
    }

    /**
     * Get addresseEpoux.
     *
     * @return string
     */
    public function getAddresseEpoux()
    {
        return $this->addresseEpoux;
    }

    /**
     * Set nomEpouse.
     *
     * @param string $nomEpouse
     *
     * @return Mariage
     */
    public function setNomEpouse($nomEpouse)
    {
        $this->nomEpouse = $nomEpouse;

        return $this;
    }

    /**
     * Get nomEpouse.
     *
     * @return string
     */
    public function getNomEpouse()
    {
        return $this->nomEpouse;
    }

    /**
     * Set prenomEpouse.
     *
     * @param string $prenomEpouse
     *
     * @return Mariage
     */
    public function setPrenomEpouse($prenomEpouse)
    {
        $this->prenomEpouse = $prenomEpouse;

        return $this;
    }

    /**
     * Get prenomEpouse.
     *
     * @return string
     */
    public function getPrenomEpouse()
    {
        return $this->prenomEpouse;
    }

    /**
     * Set dateNaissanceEpouse.
     *
     * @param \DateTime $dateNaissanceEpouse
     *
     * @return Mariage
     */
    public function setDateNaissanceEpouse($dateNaissanceEpouse)
    {
        $this->dateNaissanceEpouse = $dateNaissanceEpouse;

        return $this;
    }

    /**
     * Get dateNaissanceEpouse.
     *
     * @return \DateTime
     */
    public function getDateNaissanceEpouse()
    {
        return $this->dateNaissanceEpouse;
    }

    /**
     * Set lieuNaissanceEpouse.
     *
     * @param string $lieuNaissanceEpouse
     *
     * @return Mariage
     */
    public function setLieuNaissanceEpouse($lieuNaissanceEpouse)
    {
        $this->lieuNaissanceEpouse = $lieuNaissanceEpouse;

        return $this;
    }

    /**
     * Get lieuNaissanceEpouse.
     *
     * @return string
     */
    public function getLieuNaissanceEpouse()
    {
        return $this->lieuNaissanceEpouse;
    }

    /**
     * Set addresseEpouse.
     *
     * @param string $addresseEpouse
     *
     * @return Mariage
     */
    public function setAddresseEpouse($addresseEpouse)
    {
        $this->addresseEpouse = $addresseEpouse;

        return $this;
    }

    /**
     * Get addresseEpouse.
     *
     * @return string
     */
    public function getAddresseEpouse()
    {
        return $this->addresseEpouse;
    }

    /**
     * Set dateMariage.
     *
     * @param \DateTime $dateMariage
     *
     * @return Mariage
     */
    public function setDateMariage($dateMariage)
    {
        $this->dateMariage = $dateMariage;

        return $this;
    }

    /**
     * Get dateMariage.
     *
     * @return \DateTime
     */
    public function getDateMariage()
    {
        return $this->dateMariage;
    }

    /**
     * Set lieuMariage.
     *
     * @param string $lieuMariage
     *
     * @return Mariage
     */
    public function setLieuMariage($lieuMariage)
    {
        $this->lieuMariage = $lieuMariage;

        return $this;
    }

    /**
     * Get lieuMariage.
     *
     * @return string
     */
    public function getLieuMariage()
    {
        return $this->lieuMariage;
    }
}
