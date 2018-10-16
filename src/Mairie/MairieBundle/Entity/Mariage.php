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
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;
    /**
     * @var integer
     *
     * @ORM\Column(name="numero_registre", type="integer", unique=true)
     */
    private $numero_resgistre;

    /**
     * @var string
     *
     * @ORM\Column(name="proffession_epoux", type="string", length=255)
     */
    private $proffessoinEpoux;

    /**
     * @var string
     *
     * @ORM\Column(name="proffession_epouse", type="string", length=255)
     */
    private $proffessoinEpouse;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_et_prenoms_mere", type="string", length=255)
     */
    private $nomEtPrenomsMere;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_et_prenoms_pere", type="string", length=255)
     */
    private $nomEtPrenomsPere;

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
     * @ORM\Column(name="nomO", type="string", length=255)
     */
    private $nomO;

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
     * @ORM\Column(name="date_declaration", type="string", length=255)
     */
    private $dateDeclaration;

     /**
     * @var string
     *
     * @ORM\Column(name="situation_matrimondiale", type="string", length=255)
     */
    private $situationMatrimondiale;

    /**
     * @var string
     *
     * @ORM\Column(name="regime_matrimondiale", type="string", length=255)
     */
    private $regimeMatrimondiale;

    

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

    /**
     * Set region.
     *
     * @param string $region
     *
     * @return Mariage
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
     * Set numeroResgistre.
     *
     * @param int $numeroResgistre
     *
     * @return Mariage
     */
    public function setNumeroResgistre($numeroResgistre)
    {
        $this->numero_resgistre = $numeroResgistre;

        return $this;
    }

    /**
     * Get numeroResgistre.
     *
     * @return int
     */
    public function getNumeroResgistre()
    {
        return $this->numero_resgistre;
    }

    /**
     * Set proffessoinEpoux.
     *
     * @param string $proffessoinEpoux
     *
     * @return Mariage
     */
    public function setProffessoinEpoux($proffessoinEpoux)
    {
        $this->proffessoinEpoux = $proffessoinEpoux;

        return $this;
    }

    /**
     * Get proffessoinEpoux.
     *
     * @return string
     */
    public function getProffessoinEpoux()
    {
        return $this->proffessoinEpoux;
    }

    /**
     * Set proffessoinEpouse.
     *
     * @param string $proffessoinEpouse
     *
     * @return Mariage
     */
    public function setProffessoinEpouse($proffessoinEpouse)
    {
        $this->proffessoinEpouse = $proffessoinEpouse;

        return $this;
    }

    /**
     * Get proffessoinEpouse.
     *
     * @return string
     */
    public function getProffessoinEpouse()
    {
        return $this->proffessoinEpouse;
    }

    /**
     * Set nomEtPrenomsMere.
     *
     * @param string $nomEtPrenomsMere
     *
     * @return Mariage
     */
    public function setNomEtPrenomsMere($nomEtPrenomsMere)
    {
        $this->nomEtPrenomsMere = $nomEtPrenomsMere;

        return $this;
    }

    /**
     * Get nomEtPrenomsMere.
     *
     * @return string
     */
    public function getNomEtPrenomsMere()
    {
        return $this->nomEtPrenomsMere;
    }

    /**
     * Set nomEtPrenomsPere.
     *
     * @param string $nomEtPrenomsPere
     *
     * @return Mariage
     */
    public function setNomEtPrenomsPere($nomEtPrenomsPere)
    {
        $this->nomEtPrenomsPere = $nomEtPrenomsPere;

        return $this;
    }

    /**
     * Get nomEtPrenomsPere.
     *
     * @return string
     */
    public function getNomEtPrenomsPere()
    {
        return $this->nomEtPrenomsPere;
    }

    /**
     * Set departement.
     *
     * @param string $departement
     *
     * @return Mariage
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
     * @return Mariage
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
     * Set nomO.
     *
     * @param string $nomO
     *
     * @return Mariage
     */
    public function setNomO($nomO)
    {
        $this->nomO = $nomO;

        return $this;
    }

    /**
     * Get nomO.
     *
     * @return string
     */
    public function getNomO()
    {
        return $this->nomO;
    }

    /**
     * Set dateDeclaration.
     *
     * @param string $dateDeclaration
     *
     * @return Mariage
     */
    public function setDateDeclaration($dateDeclaration)
    {
        $this->dateDeclaration = $dateDeclaration;

        return $this;
    }

    /**
     * Get dateDeclaration.
     *
     * @return string
     */
    public function getDateDeclaration()
    {
        return $this->dateDeclaration;
    }

    /**
     * Set situationMatrimondiale.
     *
     * @param string $situationMatrimondiale
     *
     * @return Mariage
     */
    public function setSituationMatrimondiale($situationMatrimondiale)
    {
        $this->situationMatrimondiale = $situationMatrimondiale;

        return $this;
    }

    /**
     * Get situationMatrimondiale.
     *
     * @return string
     */
    public function getSituationMatrimondiale()
    {
        return $this->situationMatrimondiale;
    }

    /**
     * Set regimeMatrimondiale.
     *
     * @param string $regimeMatrimondiale
     *
     * @return Mariage
     */
    public function setRegimeMatrimondiale($regimeMatrimondiale)
    {
        $this->regimeMatrimondiale = $regimeMatrimondiale;

        return $this;
    }

    /**
     * Get regimeMatrimondiale.
     *
     * @return string
     */
    public function getRegimeMatrimondiale()
    {
        return $this->regimeMatrimondiale;
    }
}
