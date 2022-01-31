<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Auteur extends Personne
{
    /**
     * @ORM\Column(type="string")
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private string $Auteur_num;

   public function __construct(string $Auteur_num, int $id, string $nom, string $prenom, string $mdp, string $email)
   {
       $this->Auteur_num = $Auteur_num;
       parent::__construct($id,$nom,$prenom,$mdp,$email);
   }

    /**
     * Get the value of Auteur_num
     *
     * @return string
     */
    public function getAuteurNum(): string
    {
        return $this->Auteur_num;
    }

    /**
     * Set the value of Auteur_num
     *
     * @param string $Auteur_num
     *
     * @return self
     */
    public function setAuteurNum(string $Auteur_num): self
    {
        $this->Auteur_num = $Auteur_num;

        return $this;
    }
}