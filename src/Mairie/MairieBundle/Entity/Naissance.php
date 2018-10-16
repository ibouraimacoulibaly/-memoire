<?php

namespace Mairie\MairieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Naissance
 *
 * @ORM\Table(name="naissance")
 * @ORM\Entity(repositoryClass="Mairie\MairieBundle\Repository\NaissanceRepository")
 */
class Naissance
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_registre", type="integer", unique=true)
     */
    private $numeroRegistre;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=255)
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=255)
     */
    private $commune;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_civil", type="string", length=255)
     */
    private $etatCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="date_naissance", type="datetime")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_naissance", type="string", length=255)
     */
    private $lieuNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_pere", type="string", length=255)
     */
    private $prenomPere;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_mere", type="string", length=255)
     */
    private $prenomMere;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_mere", type="string", length=255)
     */
    private $nomMere;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomSO", type="string", length=255)
     */
    private $prenomSO;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSO", type="string", length=255)
     */
    private $nomSO;


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
     * Set nom.
     *
     * @param string $nom
     *
     * @return Naissance
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Naissance
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set numeroRegistre.
     *
     * @param int $numeroRegistre
     *
     * @return Naissance
     */
    public function setNumeroRegistre($numeroRegistre)
    {
        $this->numeroRegistre = $numeroRegistre;

        return $this;
    }

    /**
     * Get numeroRegistre.
     *
     * @return int
     */
    public function getNumeroRegistre()
    {
        return $this->numeroRegistre;
    }

    /**
     * Set region.
     *
     * @param string $region
     *
     * @return Naissance
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set departement.
     *
     * @param string $departement
     *
     * @return Naissance
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement.
     *
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set commune.
     *
     * @param string $commune
     *
     * @return Naissance
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune.
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set etatCivil.
     *
     * @param string $etatCivil
     *
     * @return Naissance
     */
    public function setEtatCivil($etatCivil)
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    /**
     * Get etatCivil.
     *
     * @return string
     */
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }

    /**
     * Set dateNaissance.
     *
     * @param string $dateNaissance
     *
     * @return Naissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance.
     *
     * @return string
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set lieuNaissance.
     *
     * @param string $lieuNaissance
     *
     * @return Naissance
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    /**
     * Get lieuNaissance.
     *
     * @return string
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * Set prenomPere.
     *
     * @param string $prenomPere
     *
     * @return Naissance
     */
    public function setPrenomPere($prenomPere)
    {
        $this->prenomPere = $prenomPere;

        return $this;
    }

    /**
     * Get prenomPere.
     *
     * @return string
     */
    public function getPrenomPere()
    {
        return $this->prenomPere;
    }

    /**
     * Set prenomMere.
     *
     * @param string $prenomMere
     *
     * @return Naissance
     */
    public function setPrenomMere($prenomMere)
    {
        $this->prenomMere = $prenomMere;

        return $this;
    }

    /**
     * Get prenomMere.
     *
     * @return string
     */
    public function getPrenomMere()
    {
        return $this->prenomMere;
    }

    /**
     * Set nomMere.
     *
     * @param string $nomMere
     *
     * @return Naissance
     */
    public function setNomMere($nomMere)
    {
        $this->nomMere = $nomMere;

        return $this;
    }

    /**
     * Get nomMere.
     *
     * @return string
     */
    public function getNomMere()
    {
        return $this->nomMere;
    }

    /**
     * Set prenomSO.
     *
     * @param string $prenomSO
     *
     * @return Naissance
     */
    public function setPrenomSO($prenomSO)
    {
        $this->prenomSO = $prenomSO;

        return $this;
    }

    /**
     * Get prenomSO.
     *
     * @return string
     */
    public function getPrenomSO()
    {
        return $this->prenomSO;
    }

    /**
     * Set nomSO.
     *
     * @param string $nomSO
     *
     * @return Naissance
     */
    public function setNomSO($nomSO)
    {
        $this->nomSO = $nomSO;

        return $this;
    }

    /**
     * Get nomSO.
     *
     * @return string
     */
    public function getNomSO()
    {
        return $this->nomSO;
    }
}
