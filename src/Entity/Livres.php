<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Livres
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
   private string $Titre;
   /**
     * @ORM\Column(type="string")
     */
   private string $Resume;
   /**
     * @ORM\Column(type="int")
     */
   private int $ISBN_num;
   /**
     * @ORM\Column(type="int")
     */
   private int $note;
   /**
     * @ORM\ManyToOne(targetEntity="Auteur")
     * @ORM\JoinColumn(name="Auteur", referencedColumnName="id")
     */
   private Auteur $Auteur;
   /**
     * @ORM\ManyToOne(targetEntity="Editeur")
     * @ORM\JoinColumn(name="Editeur", referencedColumnName="id")
     */
   private Editeur $Editeur;

public function __construct(int $id, string $titre, int $ISBN_num, int $note, string $Resume, Auteur $Auteur, Editeur $Editeur)
{
    $this->id = $id;
    $this->titre = $titre;
    $this->ISBN_num = $ISBN_num;
    $this->note = $note;
    $this->Resume = $Resume;
    $this->Auteur = $Auteur;
    $this->Editeur = $Editeur;
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
    * Get the value of Titre
    *
    * @return string
    */
   public function getTitre(): string
   {
      return $this->Titre;
   }

   /**
    * Set the value of Titre
    *
    * @param string $Titre
    *
    * @return self
    */
   public function setTitre(string $Titre): self
   {
      $this->Titre = $Titre;

      return $this;
   }

   /**
    * Get the value of ISBN_num
    *
    * @return int
    */
   public function getISBNNum(): int
   {
      return $this->ISBN_num;
   }

   /**
    * Set the value of ISBN_num
    *
    * @param int $ISBN_num
    *
    * @return self
    */
   public function setISBNNum(int $ISBN_num): self
   {
      $this->ISBN_num = $ISBN_num;

      return $this;
   }

   /**
    * Get the value of note
    *
    * @return int
    */
   public function getNote(): int
   {
      return $this->note;
   }

   /**
    * Set the value of note
    *
    * @param int $note
    *
    * @return self
    */
   public function setNote(int $note): self
   {
      $this->note = $note;

      return $this;
   }

   /**
    * Get the value of Resume
    *
    * @return string
    */
   public function getResume(): string
   {
      return $this->Resume;
   }

   /**
    * Set the value of Resume
    *
    * @param string $Resume
    *
    * @return self
    */
   public function setResume(string $Resume): self
   {
      $this->Resume = $Resume;

      return $this;
   }

   /**
    * Get the value of Auteur
    *
    * @return Auteur
    */
   public function getAuteur(): Auteur
   {
      return $this->Auteur;
   }

   /**
    * Set the value of Auteur
    *
    * @param Auteur $Auteur
    *
    * @return self
    */
   public function setAuteur(Auteur $Auteur): self
   {
      $this->Auteur = $Auteur;

      return $this;
   }

   /**
    * Get the value of Editeur
    *
    * @return Editeur
    */
   public function getEditeur(): Editeur
   {
      return $this->Editeur;
   }

   /**
    * Set the value of Editeur
    *
    * @param Editeur $Editeur
    *
    * @return self
    */
   public function setEditeur(Editeur $Editeur): self
   {
      $this->Editeur = $Editeur;

      return $this;
   }
}