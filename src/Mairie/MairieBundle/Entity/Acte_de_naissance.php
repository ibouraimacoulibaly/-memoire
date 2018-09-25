<?php

namespace Mairie\MairieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acte_de_naissance
 *
 * @ORM\Table(name="acte_de_naissance")
 * @ORM\Entity(repositoryClass="Mairie\MairieBundle\Repository\Acte_de_naissanceRepository")
 */
class Acte_de_naissance
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
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var \DateTime
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
     * @ORM\Column(name="nom_pere", type="string", length=255)
     */
    private $nomPere;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_mere", type="string", length=255)
     */
    private $nomMere;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_mere", type="string", length=255)
     */
    private $prenomMere;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_so", type="string", length=255)
     */
    private $prenomSo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_so", type="string", length=255)
     */
    private $nomSo;


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
     * @return Acte_de_naissance
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
     * @return Acte_de_naissance
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
     * Set sexe.
     *
     * @param string $sexe
     *
     * @return Acte_de_naissance
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe.
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set dateNaissance.
     *
     * @param \DateTime $dateNaissance
     *
     * @return Acte_de_naissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance.
     *
     * @return \DateTime
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
     * @return Acte_de_naissance
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
     * Set region.
     *
     * @param string $region
     *
     * @return Acte_de_naissance
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
     * @return Acte_de_naissance
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
     * @return Acte_de_naissance
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
     * Set nomPere.
     *
     * @param string $nomPere
     *
     * @return Acte_de_naissance
     */
    public function setNomPere($nomPere)
    {
        $this->nomPere = $nomPere;

        return $this;
    }

    /**
     * Get nomPere.
     *
     * @return string
     */
    public function getNomPere()
    {
        return $this->nomPere;
    }

    /**
     * Set nomMere.
     *
     * @param string $nomMere
     *
     * @return Acte_de_naissance
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
     * Set prenomMere.
     *
     * @param string $prenomMere
     *
     * @return Acte_de_naissance
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
     * Set prenomSo.
     *
     * @param string $prenomSo
     *
     * @return Acte_de_naissance
     */
    public function setPrenomSo($prenomSo)
    {
        $this->prenomSo = $prenomSo;

        return $this;
    }

    /**
     * Get prenomSo.
     *
     * @return string
     */
    public function getPrenomSo()
    {
        return $this->prenomSo;
    }

    /**
     * Set nomSo.
     *
     * @param string $nomSo
     *
     * @return Acte_de_naissance
     */
    public function setNomSo($nomSo)
    {
        $this->nomSo = $nomSo;

        return $this;
    }

    /**
     * Get nomSo.
     *
     * @return string
     */
    public function getNomSo()
    {
        return $this->nomSo;
    }
}
