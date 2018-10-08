<?php

namespace Mairie\MairieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commune
 *
 * @ORM\Table(name="commune")
 * @ORM\Entity(repositoryClass="Mairie\MairieBundle\Repository\communeRepository")
 */
class commune
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
     * @ORM\Column(name="nom_commune", type="string", length=255)
     */
    private $nomCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse_commune", type="string", length=255)
     */
    private $addresseCommune;


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
     * Set nomCommune.
     *
     * @param string $nomCommune
     *
     * @return commune
     */
    public function setNomCommune($nomCommune)
    {
        $this->nomCommune = $nomCommune;

        return $this;
    }

    /**
     * Get nomCommune.
     *
     * @return string
     */
    public function getNomCommune()
    {
        return $this->nomCommune;
    }

    /**
     * Set addresseCommune.
     *
     * @param string $addresseCommune
     *
     * @return commune
     */
    public function setAddresseCommune($addresseCommune)
    {
        $this->addresseCommune = $addresseCommune;

        return $this;
    }

    /**
     * Get addresseCommune.
     *
     * @return string
     */
    public function getAddresseCommune()
    {
        return $this->addresseCommune;
    }
}
