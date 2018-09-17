<?php

namespace Mairie\MairieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat_civil
 *
 * @ORM\Table(name="etat_civil")
 * @ORM\Entity(repositoryClass="Mairie\MairieBundle\Repository\Etat_civilRepository")
 */
class Etat_civil
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
     * @ORM\Column(name="addresse_etat_civil", type="string", length=255)
     */
    private $addresseEtatCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Etat_civil
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }


    /**
     * Set addresseEtatCivil
     *
     * @param string $addresseEtatCivil
     *
     * @return Etat_civil
     */
    public function setAddresseEtatCivil($addresseEtatCivil)
    {
        $this->addresseEtatCivil = $addresseEtatCivil;

        return $this;
    }

    /**
     * Get addresseEtatCivil
     *
     * @return string
     */
    public function getAddresseEtatCivil()
    {
        return $this->addresseEtatCivil;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Etat_civil
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Etat_civil
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}

