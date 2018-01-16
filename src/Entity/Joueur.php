<?php

//@var Joueur $idJoueur
//     *
//     * @ORM\ManyToOne(targetEntity="Joueur")
//     * @ORM\JoinColumns({
//     * @ORM\JoinColumn(name="idJoueur", referencedColumnName="idJoueur")
//     * })

namespace MemoryKermit\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="joueur")
 */


class Joueur{
    
    /**
     * @ORM\ID
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(name="idJoueur",type="integer")
     */
    private $idJoueur;
    /**
     * @ORM\Column(name="pseudo",type="string")
     */
    private $pseudo;
    
    public function Joueur($unId,$unPseudo)
    {
        $this->idJoueur = $unId;
        $this->pseudo = $unPseudo;
    }
    public function getIdJoueur()
    {
        return $this->idJoueur;
    }
    public function setIdJoueur($idJoueur)
    {
        $this->idJoueur = $idJoueur;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }
     
}
