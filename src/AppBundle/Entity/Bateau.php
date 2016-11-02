<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bateau
 *
 * @ORM\Table(name="bateau")
 * @ORM\Entity
 */
class Bateau
{
    /**
     * @var string
     *
     * @ORM\Column(name="bat_code", type="string", length=5, nullable=false)
     */
    private $batCode;

    /**
     * @var string
     *
     * @ORM\Column(name="bat_nom", type="string", length=30, nullable=false)
     */
    private $batNom;

    /**
     * @var string
     *
     * @ORM\Column(name="bat_type_ct", type="string", length=15, nullable=false)
     */
    private $batTypeCt;

    /**
     * @var string
     *
     * @ORM\Column(name="bat_type_lg", type="string", length=30, nullable=false)
     */
    private $batTypeLg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bat_dat_construction", type="date", nullable=true)
     */
    private $batDatConstruction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bat_dat_achat", type="date", nullable=true)
     */
    private $batDatAchat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bat_dat_vente", type="date", nullable=true)
     */
    private $batDatVente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bat_islocation", type="boolean", nullable=true)
     */
    private $batIslocation = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="bat_isactif", type="boolean", nullable=true)
     */
    private $batIsactif = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="bat_uti_crea", type="string", length=150, nullable=false)
     */
    private $batUtiCrea = 'fwilliams';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bat_dat_crea", type="datetime", nullable=false)
     */
    private $batDatCrea = '2011-01-01 12:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="bat_uti_modi", type="string", length=150, nullable=true)
     */
    private $batUtiModi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bat_dat_modi", type="datetime", nullable=true)
     */
    private $batDatModi;

    /**
     * @var integer
     *
     * @ORM\Column(name="bat_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $batId;



    /**
     * Set batCode
     *
     * @param string $batCode
     *
     * @return Bateau
     */
    public function setBatCode($batCode)
    {
        $this->batCode = $batCode;

        return $this;
    }

    /**
     * Get batCode
     *
     * @return string
     */
    public function getBatCode()
    {
        return $this->batCode;
    }

    /**
     * Set batNom
     *
     * @param string $batNom
     *
     * @return Bateau
     */
    public function setBatNom($batNom)
    {
        $this->batNom = $batNom;

        return $this;
    }

    /**
     * Get batNom
     *
     * @return string
     */
    public function getBatNom()
    {
        return $this->batNom;
    }

    /**
     * Set batTypeCt
     *
     * @param string $batTypeCt
     *
     * @return Bateau
     */
    public function setBatTypeCt($batTypeCt)
    {
        $this->batTypeCt = $batTypeCt;

        return $this;
    }

    /**
     * Get batTypeCt
     *
     * @return string
     */
    public function getBatTypeCt()
    {
        return $this->batTypeCt;
    }

    /**
     * Set batTypeLg
     *
     * @param string $batTypeLg
     *
     * @return Bateau
     */
    public function setBatTypeLg($batTypeLg)
    {
        $this->batTypeLg = $batTypeLg;

        return $this;
    }

    /**
     * Get batTypeLg
     *
     * @return string
     */
    public function getBatTypeLg()
    {
        return $this->batTypeLg;
    }

    /**
     * Set batDatConstruction
     *
     * @param \DateTime $batDatConstruction
     *
     * @return Bateau
     */
    public function setBatDatConstruction($batDatConstruction)
    {
        $this->batDatConstruction = $batDatConstruction;

        return $this;
    }

    /**
     * Get batDatConstruction
     *
     * @return \DateTime
     */
    public function getBatDatConstruction()
    {
        return $this->batDatConstruction;
    }

    /**
     * Set batDatAchat
     *
     * @param \DateTime $batDatAchat
     *
     * @return Bateau
     */
    public function setBatDatAchat($batDatAchat)
    {
        $this->batDatAchat = $batDatAchat;

        return $this;
    }

    /**
     * Get batDatAchat
     *
     * @return \DateTime
     */
    public function getBatDatAchat()
    {
        return $this->batDatAchat;
    }

    /**
     * Set batDatVente
     *
     * @param \DateTime $batDatVente
     *
     * @return Bateau
     */
    public function setBatDatVente($batDatVente)
    {
        $this->batDatVente = $batDatVente;

        return $this;
    }

    /**
     * Get batDatVente
     *
     * @return \DateTime
     */
    public function getBatDatVente()
    {
        return $this->batDatVente;
    }

    /**
     * Set batIslocation
     *
     * @param boolean $batIslocation
     *
     * @return Bateau
     */
    public function setBatIslocation($batIslocation)
    {
        $this->batIslocation = $batIslocation;

        return $this;
    }

    /**
     * Get batIslocation
     *
     * @return boolean
     */
    public function getBatIslocation()
    {
        return $this->batIslocation;
    }

    /**
     * Set batIsactif
     *
     * @param boolean $batIsactif
     *
     * @return Bateau
     */
    public function setBatIsactif($batIsactif)
    {
        $this->batIsactif = $batIsactif;

        return $this;
    }

    /**
     * Get batIsactif
     *
     * @return boolean
     */
    public function getBatIsactif()
    {
        return $this->batIsactif;
    }

    /**
     * Set batUtiCrea
     *
     * @param string $batUtiCrea
     *
     * @return Bateau
     */
    public function setBatUtiCrea($batUtiCrea)
    {
        $this->batUtiCrea = $batUtiCrea;

        return $this;
    }

    /**
     * Get batUtiCrea
     *
     * @return string
     */
    public function getBatUtiCrea()
    {
        return $this->batUtiCrea;
    }

    /**
     * Set batDatCrea
     *
     * @param \DateTime $batDatCrea
     *
     * @return Bateau
     */
    public function setBatDatCrea($batDatCrea)
    {
        $this->batDatCrea = $batDatCrea;

        return $this;
    }

    /**
     * Get batDatCrea
     *
     * @return \DateTime
     */
    public function getBatDatCrea()
    {
        return $this->batDatCrea;
    }

    /**
     * Set batUtiModi
     *
     * @param string $batUtiModi
     *
     * @return Bateau
     */
    public function setBatUtiModi($batUtiModi)
    {
        $this->batUtiModi = $batUtiModi;

        return $this;
    }

    /**
     * Get batUtiModi
     *
     * @return string
     */
    public function getBatUtiModi()
    {
        return $this->batUtiModi;
    }

    /**
     * Set batDatModi
     *
     * @param \DateTime $batDatModi
     *
     * @return Bateau
     */
    public function setBatDatModi($batDatModi)
    {
        $this->batDatModi = $batDatModi;

        return $this;
    }

    /**
     * Get batDatModi
     *
     * @return \DateTime
     */
    public function getBatDatModi()
    {
        return $this->batDatModi;
    }

    /**
     * Get batId
     *
     * @return integer
     */
    public function getBatId()
    {
        return $this->batId;
    }
}
