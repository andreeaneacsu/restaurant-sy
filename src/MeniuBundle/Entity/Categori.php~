<?php

namespace MeniuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categori
 */
class Categori
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nume;

    /**
     * @var string
     */
    private $poza;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $produse;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produse = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nume
     *
     * @param string $nume
     * @return Categori
     */
    public function setNume($nume)
    {
        $this->nume = $nume;

        return $this;
    }

    /**
     * Get nume
     *
     * @return string 
     */
    public function getNume()
    {
        return $this->nume;
    }

    /**
     * Set poza
     *
     * @param string $poza
     * @return Categori
     */
    public function setPoza($poza)
    {
        $this->poza = $poza;

        return $this;
    }

    /**
     * Get poza
     *
     * @return string 
     */
    public function getPoza()
    {
        return $this->poza;
    }

    /**
     * Add produse
     *
     * @param \MeniuBundle\Entity\Produse $produse
     * @return Categori
     */
    public function addProduse(\MeniuBundle\Entity\Produse $produse)
    {
        $this->produse[] = $produse;

        return $this;
    }

    /**
     * Remove produse
     *
     * @param \MeniuBundle\Entity\Produse $produse
     */
    public function removeProduse(\MeniuBundle\Entity\Produse $produse)
    {
        $this->produse->removeElement($produse);
    }

    /**
     * Get produse
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduse()
    {
        return $this->produse;
    }
}
