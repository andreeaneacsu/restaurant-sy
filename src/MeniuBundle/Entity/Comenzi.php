<?php

namespace MeniuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comenzi
 */
class Comenzi
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dataComanda;

    /**
     * @var string
     */
    private $numeCumparator;

    /**
     * @var string
     */
    private $adresaLivrare;

    /**
     * @var string
     */
    private $oras;

    /**
     * @var string
     */
    private $telefon;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $totalPlata;

    /**
     * @var string
     */
    private $tocken;

    /**
     * @var string
     */
    private $stare;


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
     * Set dataComanda
     *
     * @param \DateTime $dataComanda
     * @return Comenzi
     */
    public function setDataComanda($dataComanda)
    {
        $this->dataComanda = $dataComanda;

        return $this;
    }

    /**
     * Get dataComanda
     *
     * @return \DateTime 
     */
    public function getDataComanda()
    {
        return $this->dataComanda;
    }

    /**
     * Set numeCumparator
     *
     * @param string $numeCumparator
     * @return Comenzi
     */
    public function setNumeCumparator($numeCumparator)
    {
        $this->numeCumparator = $numeCumparator;

        return $this;
    }

    /**
     * Get numeCumparator
     *
     * @return string 
     */
    public function getNumeCumparator()
    {
        return $this->numeCumparator;
    }

    /**
     * Set adresaLivrare
     *
     * @param string $adresaLivrare
     * @return Comenzi
     */
    public function setAdresaLivrare($adresaLivrare)
    {
        $this->adresaLivrare = $adresaLivrare;

        return $this;
    }

    /**
     * Get adresaLivrare
     *
     * @return string 
     */
    public function getAdresaLivrare()
    {
        return $this->adresaLivrare;
    }

    /**
     * Set oras
     *
     * @param string $oras
     * @return Comenzi
     */
    public function setOras($oras)
    {
        $this->oras = $oras;

        return $this;
    }

    /**
     * Get oras
     *
     * @return string 
     */
    public function getOras()
    {
        return $this->oras;
    }

    /**
     * Set telefon
     *
     * @param string $telefon
     * @return Comenzi
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string 
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Comenzi
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set totalPlata
     *
     * @param string $totalPlata
     * @return Comenzi
     */
    public function setTotalPlata($totalPlata)
    {
        $this->totalPlata = $totalPlata;

        return $this;
    }

    /**
     * Get totalPlata
     *
     * @return string 
     */
    public function getTotalPlata()
    {
        return $this->totalPlata;
    }

    /**
     * Set tocken
     *
     * @param string $tocken
     * @return Comenzi
     */
    public function setTocken($tocken)
    {
        $this->tocken = $tocken;

        return $this;
    }

    /**
     * Get tocken
     *
     * @return string 
     */
    public function getTocken()
    {
        return $this->tocken;
    }

    /**
     * Set stare
     *
     * @param string $stare
     * @return Comenzi
     */
    public function setStare($stare)
    {
        $this->stare = $stare;

        return $this;
    }

    /**
     * Get stare
     *
     * @return string 
     */
    public function getStare()
    {
        return $this->stare;
    }
}
