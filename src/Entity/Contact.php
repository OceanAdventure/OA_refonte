<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\Common\Collections\Collection;

use Symfony\Component\Validator\Constraint as Assert;


class Contact {

    
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100) 
     */
    private $prenom;
    
     /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100) 
     */
    private $nom;
    
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Regex(
     * pattern="/[0-9]{10}/") 
     */
    private $telephone;
    
   /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Email() 
     */
    private $mail;
    
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=150) 
     */
    private $sujet;
    
    
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=10) 
     */
    private $message;


    
    /**
     * Get the value of prenom
     *
     * @return  string
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param  string  $prenom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string  $nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get pattern="/[0-9]{10}/")
     *
     * @return  string
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set pattern="/[0-9]{10}/")
     *
     * @param  string  $telephone  pattern="/[0-9]{10}/")
     *
     * @return  self
     */ 
    public function setTelephone(string $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of mail
     *
     * @return  string
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @param  string  $mail
     *
     * @return  self
     */ 
    public function setMail(string $mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of sujet
     *
     * @return  string
     */ 
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set the value of sujet
     *
     * @param  string  $sujet
     *
     * @return  self
     */ 
    public function setSujet(string $sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get the value of message
     *
     * @return  string
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @param  string  $message
     *
     * @return  self
     */ 
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }
}