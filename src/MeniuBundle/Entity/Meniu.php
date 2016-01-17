<?php

namespace MeniuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meniu
 */
class Meniu
{
    /**
     * @var integer
     */
    private $idMeniu;

    /**
     * @var \MeniuBundle\Entity\Produse
     */
    private $ciorba;

    /**
     * @var \MeniuBundle\Entity\Produse
     */
    private $felul2;

    /**
     * @var \MeniuBundle\Entity\Produse
     */
    private $garnitura;

    /**
     * @var \MeniuBundle\Entity\Produse
     */
    private $salata;

    /**
     * @var \MeniuBundle\Entity\Produse
     */
    private $desert;


    /**
     * Get idMeniu
     *
     * @return integer 
     */
    public function getIdMeniu()
    {
        return $this->idMeniu;
    }

    /**
     * Set ciorba
     *
     * @param \MeniuBundle\Entity\Produse $ciorba
     * @return Meniu
     */
    public function setCiorba(\MeniuBundle\Entity\Produse $ciorba = null)
    {
        $this->ciorba = $ciorba;

        return $this;
    }

    /**
     * Get ciorba
     *
     * @return \MeniuBundle\Entity\Produse 
     */
    public function getCiorba()
    {
        return $this->ciorba;
    }

    /**
     * Set felul2
     *
     * @param \MeniuBundle\Entity\Produse $felul2
     * @return Meniu
     */
    public function setFelul2(\MeniuBundle\Entity\Produse $felul2 = null)
    {
        $this->felul2 = $felul2;

        return $this;
    }

    /**
     * Get felul2
     *
     * @return \MeniuBundle\Entity\Produse 
     */
    public function getFelul2()
    {
        return $this->felul2;
    }

    /**
     * Set garnitura
     *
     * @param \MeniuBundle\Entity\Produse $garnitura
     * @return Meniu
     */
    public function setGarnitura(\MeniuBundle\Entity\Produse $garnitura = null)
    {
        $this->garnitura = $garnitura;

        return $this;
    }

    /**
     * Get garnitura
     *
     * @return \MeniuBundle\Entity\Produse 
     */
    public function getGarnitura()
    {
        return $this->garnitura;
    }

    /**
     * Set salata
     *
     * @param \MeniuBundle\Entity\Produse $salata
     * @return Meniu
     */
    public function setSalata(\MeniuBundle\Entity\Produse $salata = null)
    {
        $this->salata = $salata;

        return $this;
    }

    /**
     * Get salata
     *
     * @return \MeniuBundle\Entity\Produse 
     */
    public function getSalata()
    {
        return $this->salata;
    }

    /**
     * Set desert
     *
     * @param \MeniuBundle\Entity\Produse $desert
     * @return Meniu
     */
    public function setDesert(\MeniuBundle\Entity\Produse $desert = null)
    {
        $this->desert = $desert;

        return $this;
    }

    /**
     * Get desert
     *
     * @return \MeniuBundle\Entity\Produse 
     */
    public function getDesert()
    {
        return $this->desert;
    }
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
