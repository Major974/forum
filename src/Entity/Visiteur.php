<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Visiteur extends Personne
{
    /**
     * @ORM\Column(type="string")
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private string $visiteur_num;

    public function __construct(string $visiteur_num, int $id, string $nom, string $prenom, string $mdp, string $email)
   {
       $this->visiteur_num = $visiteur_num;
       parent::__construct($id,$nom,$prenom,$mdp,$email);
   }


    /**
     * Set the value of visiteur_num
     *
     * @param string $visiteur_num
     *
     * @return self
     */
    public function setVisiteurNum(string $visiteur_num): self
    {
        $this->visiteur_num = $visiteur_num;

        return $this;
    }

    /**
     * Get the value of visiteur_num
     *
     * @return string
     */
    public function getVisiteurNum(): string
    {
        return $this->visiteur_num;
    }
}