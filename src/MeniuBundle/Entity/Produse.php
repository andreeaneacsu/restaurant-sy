<?php

namespace MeniuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produse
 */
class Produse
{
    /**
     * @var integer
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     */
    private $nume;

    /**
     * @var integer
     */
    private $categorie;

    /**
     * @var string
     */
    private $pret1;

    /**
     * @var string
     */
    private $pret2;

    /**
     * @var string
     */
    private $pret3;

    /**
     * @var string
     */
    private $pret4;

    /**
     * @var string
     */
    private $pret5;


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
     * @return Produse
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
     * Set categorie
     *
     * @param integer $categorie
     * @return Produse
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return integer 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set pret1
     *
     * @param string $pret1
     * @return Produse
     */
    public function setPret1($pret1)
    {
        $this->pret1 = $pret1;

        return $this;
    }

    /**
     * Get pret1
     *
     * @return string 
     */
    public function getPret1()
    {
        return $this->pret1;
    }

    /**
     * Set pret2
     *
     * @param string $pret2
     * @return Produse
     */
    public function setPret2($pret2)
    {
        $this->pret2 = $pret2;

        return $this;
    }

    /**
     * Get pret2
     *
     * @return string 
     */
    public function getPret2()
    {
        return $this->pret2;
    }

    /**
     * Set pret3
     *
     * @param string $pret3
     * @return Produse
     */
    public function setPret3($pret3)
    {
        $this->pret3 = $pret3;

        return $this;
    }

    /**
     * Get pret3
     *
     * @return string 
     */
    public function getPret3()
    {
        return $this->pret3;
    }

    /**
     * Set pret4
     *
     * @param string $pret4
     * @return Produse
     */
    public function setPret4($pret4)
    {
        $this->pret4 = $pret4;

        return $this;
    }

    /**
     * Get pret4
     *
     * @return string 
     */
    public function getPret4()
    {
        return $this->pret4;
    }

    /**
     * Set pret5
     *
     * @param string $pret5
     * @return Produse
     */
    public function setPret5($pret5)
    {
        $this->pret5 = $pret5;

        return $this;
    }

    /**
     * Get pret5
     *
     * @return string 
     */
    public function getPret5()
    {
        return $this->pret5;
    }
    /**
     * @var string
     */
    private $descriere;


    /**
     * Set descriere
     *
     * @param string $descriere
     * @return Produse
     */
    public function setDescriere($descriere)
    {
        $this->descriere = $descriere;

        return $this;
    }

    /**
     * Get descriere
     *
     * @return string 
     */
    public function getDescriere()
    {
        return $this->descriere;
    }
    /**
     * @var string
     */
    private $pret;

    /**
     * @var string
     */
    private $masura;

    /**
     * @var string
     */
    private $um;


    /**
     * Set pret
     *
     * @param string $pret
     * @return Produse
     */
    public function setPret($pret)
    {
        $this->pret = $pret;

        return $this;
    }

    /**
     * Get pret
     *
     * @return string 
     */
    public function getPret()
    {
        return $this->pret;
    }

    /**
     * Set masura
     *
     * @param string $masura
     * @return Produse
     */
    public function setMasura($masura)
    {
        $this->masura = $masura;

        return $this;
    }

    /**
     * Get masura
     *
     * @return string 
     */
    public function getMasura()
    {
        return $this->masura;
    }

    /**
     * Set um
     *
     * @param string $um
     * @return Produse
     */
    public function setUm($um)
    {
        $this->um = $um;

        return $this;
    }

    /**
     * Get um
     *
     * @return string 
     */
    public function getUm()
    {
        return $this->um;
    }
    /**
     * @var integer
     */
    private $categorie_id;

    /**
     * @var \MeniuBundle\Entity\Categori
     */
    private $category;


    /**
     * Set categorie_id
     *
     * @param integer $categorieId
     * @return Produse
     */
    public function setCategorieId($categorieId)
    {
        $this->categorie_id = $categorieId;

        return $this;
    }

    /**
     * Get categorie_id
     *
     * @return integer 
     */
    public function getCategorieId()
    {
        return $this->categorie_id;
    }

    /**
     * Set category
     *
     * @param \MeniuBundle\Entity\Categori $category
     * @return Produse
     */
    public function setCategory(\MeniuBundle\Entity\Categori $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \MeniuBundle\Entity\Categori 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var \MeniuBundle\Entity\Categori
     */
    private $categori;


    /**
     * Set categori
     *
     * @param \MeniuBundle\Entity\Categori $categori
     * @return Produse
     */
    public function setCategori(\MeniuBundle\Entity\Categori $categori = null)
    {
        $this->categori = $categori;

        return $this;
    }

    /**
     * Get categori
     *
     * @return \MeniuBundle\Entity\Categori 
     */
    public function getCategori()
    {
        return $this->categori;
    }
}
