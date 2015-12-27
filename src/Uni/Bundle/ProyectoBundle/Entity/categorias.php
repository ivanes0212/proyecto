<?php

namespace Uni\Bundle\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * categorias
 */
class categorias
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreCat;

    /**
     * @var string
     */
    private $descCat;


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
     * Set nombreCat
     *
     * @param string $nombreCat
     * @return categorias
     */
    public function setNombreCat($nombreCat)
    {
        $this->nombreCat = $nombreCat;

        return $this;
    }

    /**
     * Get nombreCat
     *
     * @return string 
     */
    public function getNombreCat()
    {
        return $this->nombreCat;
    }

    /**
     * Set descCat
     *
     * @param string $descCat
     * @return categorias
     */
    public function setDescCat($descCat)
    {
        $this->descCat = $descCat;

        return $this;
    }

    /**
     * Get descCat
     *
     * @return string 
     */
    public function getDescCat()
    {
        return $this->descCat;
    }
    
          /**
* @ORM\OneToMany(targetEntity="juegos", mappedBy="juecat", cascade={"remove"})
*/

private $catjues;

public function __construct() {
$this->catjues = new ArrayCollection();
}

public function __toString() {
     return $this->nombreCat;}
}
