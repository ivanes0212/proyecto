<?php

namespace Uni\Bundle\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * noticias
 */
class noticias
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tituloNot;

    /**
     * @var string
     */
    private $textoNot;

    /**
     * @var \DateTime
     */
    private $fechaNot;

    /**
     * @var string
     */
    private $fotoNot;


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
     * Set tituloNot
     *
     * @param string $tituloNot
     * @return noticias
     */
    public function setTituloNot($tituloNot)
    {
        $this->tituloNot = $tituloNot;

        return $this;
    }

    /**
     * Get tituloNot
     *
     * @return string 
     */
    public function getTituloNot()
    {
        return $this->tituloNot;
    }

    /**
     * Set textoNot
     *
     * @param string $textoNot
     * @return noticias
     */
    public function setTextoNot($textoNot)
    {
        $this->textoNot = $textoNot;

        return $this;
    }

    /**
     * Get textoNot
     *
     * @return string 
     */
    public function getTextoNot()
    {
        return $this->textoNot;
    }

    /**
     * Set fechaNot
     *
     * @param \DateTime $fechaNot
     * @return noticias
     */
    public function setFechaNot($fechaNot)
    {
        $this->fechaNot = $fechaNot;

        return $this;
    }

    /**
     * Get fechaNot
     *
     * @return \DateTime 
     */
    public function getFechaNot()
    {
        return $this->fechaNot;
    }

    /**
     * Set fotoNot
     *
     * @param string $fotoNot
     * @return noticias
     */
    public function setFotoNot($fotoNot)
    {
        $this->fotoNot = $fotoNot;

        return $this;
    }

    /**
     * Get fotoNot
     *
     * @return string 
     */
    public function getFotoNot()
    {
        return $this->fotoNot;
    }
    
          /**
* @ORM\ManyToOne(targetEntity="juegos", inversedBy="juenots", cascade={"remove"})
*/

private $notjue;

public function __construct() {
$this->notjue = new ArrayCollection();
}

public function __toString() {
     return $this->tituloNot;}
}
