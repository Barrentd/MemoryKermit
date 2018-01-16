<?php

//@var Partie $idPartie
//     *
//     * @ORM\ManyToOne(targetEntity="Partie")
//     * @ORM\JoinColumns({
//     *  @ORM\JoinColumn(name="idPartie", referencedColumnName="idPartie")
//     * })

namespace MemoryKermit\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="partie")
 */


class Partie{
    
     /**
     * @ORM\ID
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(name="idPartie",type="integer")
     */
    private $idPartie;
    /**
     * @ORM\Column(name="nbCoups",type="integer")
     */
    private $nbCoups;
    /**
     * @ORM\Column(name="idJoueur",type="integer")
     */
    private $idJoueur;
    
    public function Partie($unId,$nbCoups,$idJoueur)
    {
        $this->idPartie = $unId;
        $this->nbCoups = $nbCoups;
        $this->idJoueur = $idJoueur;
    }
    public function getIdPartie()
    {
        return $this->idPartie;
    }
    public function setIdPartie($idPartie)
    {
        $this->idPartie = $idPartie;
    }
    public function getNbCoups()
    {
        return $this->nbCoups;
    }
    public function setNbcoups($nbcoups)
    {
        $this->nbCoups = $nbcoups;
    }
     public function getIdJoueur()
    {
        return $this->idJoueur;
    }
    public function setIdJoueur($idJoueur)
    {
        $this->idJoueur = $idJoueur;
    }
     
}
