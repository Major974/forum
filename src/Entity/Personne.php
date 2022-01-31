<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Personne
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
   private int $id;
   /**
     * @ORM\Column(type="string")
     */
   private string $nom;
   /**
     * @ORM\Column(type="string")
     */
   private string $prenom;
   /**
     * @ORM\Column(type="string")
     */
   private string $mdp;
   /**
     * @ORM\Column(type="string")
     */
   private string $email;

   Public function __construct(int $id, string $nom, string $prenom, string $mdp, string $email)
   {
       $this->id = $id;
       $this->nom = $nom;
       $this->prenom = $prenom;
       $this->mdp = $mdp;
       $this->email = $email;
   }

   /**
    * Get the value of id
    *
    * @return int
    */
   public function getId(): int
   {
      return $this->id;
   }

   /**
    * Set the value of id
    *
    * @param int $id
    *
    * @return self
    */
   public function setId(int $id): self
   {
      $this->id = $id;

      return $this;
   }

   /**
    * Get the value of nom
    *
    * @return string
    */
   public function getNom(): string
   {
      return $this->nom;
   }

   /**
    * Set the value of nom
    *
    * @param string $nom
    *
    * @return self
    */
   public function setNom(string $nom): self
   {
      $this->nom = $nom;

      return $this;
   }

   /**
    * Get the value of prenom
    *
    * @return string
    */
   public function getPrenom(): string
   {
      return $this->prenom;
   }

   /**
    * Set the value of prenom
    *
    * @param string $prenom
    *
    * @return self
    */
   public function setPrenom(string $prenom): self
   {
      $this->prenom = $prenom;

      return $this;
   }

   /**
    * Get the value of mdp
    *
    * @return string
    */
   public function getMdp(): string
   {
      return $this->mdp;
   }

   /**
    * Set the value of mdp
    *
    * @param string $mdp
    *
    * @return self
    */
   public function setMdp(string $mdp): self
   {
      $this->mdp = $mdp;

      return $this;
   }

   /**
    * Get the value of email
    *
    * @return string
    */
   public function getEmail(): string
   {
      return $this->email;
   }

   /**
    * Set the value of email
    *
    * @param string $email
    *
    * @return self
    */
   public function setEmail(string $email): self
   {
      $this->email = $email;

      return $this;
   }
}