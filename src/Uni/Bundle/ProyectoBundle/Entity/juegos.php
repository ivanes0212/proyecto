<?php

namespace Uni\Bundle\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * juegos
 */
class juegos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tituloJue;

    /**
     * @var string
     */
    private $descJue;

    /**
     * @var string
     */
    private $compJue;

    /**
     * @var string
     */
    private $fotoJue;


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
     * Set tituloJue
     *
     * @param string $tituloJue
     * @return juegos
     */
    public function setTituloJue($tituloJue)
    {
        $this->tituloJue = $tituloJue;

        return $this;
    }

    /**
     * Get tituloJue
     *
     * @return string 
     */
    public function getTituloJue()
    {
        return $this->tituloJue;
    }

    /**
     * Set descJue
     *
     * @param string $descJue
     * @return juegos
     */
    public function setDescJue($descJue)
    {
        $this->descJue = $descJue;

        return $this;
    }

    /**
     * Get descJue
     *
     * @return string 
     */
    public function getDescJue()
    {
        return $this->descJue;
    }

    /**
     * Set compJue
     *
     * @param string $compJue
     * @return juegos
     */
    public function setCompJue($compJue)
    {
        $this->compJue = $compJue;

        return $this;
    }

    /**
     * Get compJue
     *
     * @return string 
     */
    public function getCompJue()
    {
        return $this->compJue;
    }

    /**
     * Set fotoJue
     *
     * @param string $fotoJue
     * @return juegos
     */
    public function setFotoJue($fotoJue)
    {
        $this->fotoJue = $fotoJue;

        return $this;
    }

    /**
     * Get fotoJue
     *
     * @return string 
     */
    public function getFotoJue()
    {
        return $this->fotoJue;
    }
    
          /**
* @ORM\ManyToOne(targetEntity="categorias", inversedBy="catjues", cascade={"remove"})
*/

private $juecat;

      /**
* @ORM\ManyToMany(targetEntity="plataforma", mappedBy="platjue")
*/

private $jueplat;

public function __construct() {
$this->jueplat = new ArrayCollection();
$this->juenots = new ArrayCollection();
$this->juecat = new ArrayCollection();
}
      /**
* @ORM\OneToMany(targetEntity="noticias", mappedBy="notjue", cascade={"remove"})
*/

private $juenots;

public function __toString() {
     return $this->tituloJue;}

}
