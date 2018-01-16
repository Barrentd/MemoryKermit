<?php

//@var Image $idImage
//     *
//     * @ORM\ManyToOne(targetEntity="Image")
//     * @ORM\JoinColumns({
//     *  @ORM\JoinColumn(name="idImage", referencedColumnName="idImage")
//     * })

namespace MemoryKermit\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="image")
 */

class Image{
     /**
     * @ORM\ID
     * @ORM\Column(type="integer")
     */
    private $idImage;
    /**
     * @ORM\Column(name="chemin",type="string")
     */
    private $lienImage;
    
    public function Image ($unId,$unLien)
    {
        $this->idImage = $unId;
        $this->lienImage = $unLien;
    }
    public function getIdImage()
    {
        return $this->idImage;
    }
    public function getLienImage()
    {
        return $this->lienImage;
    }
     
}
