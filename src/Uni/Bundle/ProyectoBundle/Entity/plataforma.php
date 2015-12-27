<?php

namespace Uni\Bundle\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * plataforma
 */
class plataforma
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombrePlat;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombrePlat
     *
     * @param string $nombrePlat
     * @return plataforma
     */
    public function setNombrePlat($nombrePlat)
    {
        $this->nombrePlat = $nombrePlat;

        return $this;
    }

    /**
     * Get nombrePlat
     *
     * @return string 
     */
    public function getNombrePlat()
    {
        return $this->nombrePlat;
    }
    
          /**
* @ORM\ManyToMany(targetEntity="juegos", mappedBy="jueplat")
*/

private $platjue;

public function __construct() {
$this->platjue = new ArrayCollection();
}

public function __toString() {
     return $this->nombrePlat;}
}
