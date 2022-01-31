<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Editeur extends Personne
{
    /**
     * @ORM\Column(type="string")
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private string $Editeur_num;

    public function __construct(string $Editeur_num, int $id, string $nom, string $prenom, string $mdp, string $email)
   {
       $this->Editeur_num = $Editeur_num;
       parent::__construct($id,$nom,$prenom,$mdp,$email);
   }

    /**
     * Get the value of Editeur_num
     *
     * @return string
     */
    public function getEditeurNum(): string
    {
        return $this->Editeur_num;
    }

    /**
     * Set the value of Editeur_num
     *
     * @param string $Editeur_num
     *
     * @return self
     */
    public function setEditeurNum(string $Editeur_num): self
    {
        $this->Editeur_num = $Editeur_num;

        return $this;
    }
}