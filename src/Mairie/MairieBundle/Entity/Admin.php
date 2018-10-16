<?php

namespace Mairie\MairieBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\EncoderAwareInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Mairie\MairieBundle\Entity\Admin;


use Scheb\TwoFactorBundle\Model\Google\TwoFactorInterface;
use R\U2FTwoFactorBundle\Model\U2F\TwoFactorInterface as U2FTwoFactorInterface;



/**
 * Admin
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="Mairie\MairieBundle\Repository\AdminRepository")
 * 
 * @ORM\Entity
 * @UniqueEntity("username")
 */

class Admin implements UserInterface
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true , nullable=true)
     *
     *  @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text", nullable=true)
     * @Assert\Length(min=5)
     */
    private $password;
    

    /**
     * @var string
     *
     * @ORM\Column(name="code_etat_civil", type="string", length=255, nullable=true)
     * 
     */
    private $codeEtatCivil;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $role;

  
   

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
     * @return Admin
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Admin
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Admin
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Admin
     */
   

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set codeEtatCivil
     *
     * @param string $codeEtatCivil
     *
     * @return Admin
     */
    public function setCodeEtatCivil($codeEtatCivil)
    {
        $this->codeEtatCivil = $codeEtatCivil;

        return $this;
    }

    /**
     * Get codeEtatCivil
     *
     * @return string
     */
    public function getCodeEtatCivil()
    {
        return $this->codeEtatCivil;
    }
    public function eraseCredentials(){

    }
    
   public function getSalt(){

   }
   public function getRole()
   {
       return $this->role;
   }

   public function setRole($role = null)
   {
       $this->role = $role;
   }

   public function getRoles()
   {
       return [$this->getRole()];
   }
   
    

    /**
     * Set sexe.
     *
     * @param string $sexe
     *
     * @return Admin
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
     * Set password.
     *
     * @param string $password
     *
     * @return Admin
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
