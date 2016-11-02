<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avoir
 *
 * @ORM\Table(name="avoir", indexes={@ORM\Index(name="fk_avoir_adherent1", columns={"avr_adh_num"})})
 * @ORM\Entity
 */
class Avoir
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="avr_date", type="date", nullable=false)
     */
    private $avrDate;

    /**
     * @var string
     *
     * @ORM\Column(name="avr_montant", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $avrMontant;

    /**
     * @var string
     *
     * @ORM\Column(name="avr_solde", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $avrSolde;

    /**
     * @var string
     *
     * @ORM\Column(name="avr_motif", type="string", length=100, nullable=true)
     */
    private $avrMotif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="avr_dat_limite", type="datetime", nullable=true)
     */
    private $avrDatLimite;

    /**
     * @var string
     *
     * @ORM\Column(name="avr_uti_crea", type="string", length=150, nullable=false)
     */
    private $avrUtiCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="avr_dat_crea", type="datetime", nullable=false)
     */
    private $avrDatCrea;

    /**
     * @var string
     *
     * @ORM\Column(name="avr_uti_modi", type="string", length=150, nullable=true)
     */
    private $avrUtiModi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="avr_dat_modi", type="datetime", nullable=true)
     */
    private $avrDatModi;

    /**
     * @var integer
     *
     * @ORM\Column(name="avr_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $avrId;

    /**
     * @var \AppBundle\Entity\Adherent
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Adherent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="avr_adh_num", referencedColumnName="adh_num")
     * })
     */
    private $avrAdhNum;



    /**
     * Set avrDate
     *
     * @param \DateTime $avrDate
     *
     * @return Avoir
     */
    public function setAvrDate($avrDate)
    {
        $this->avrDate = $avrDate;

        return $this;
    }

    /**
     * Get avrDate
     *
     * @return \DateTime
     */
    public function getAvrDate()
    {
        return $this->avrDate;
    }

    /**
     * Set avrMontant
     *
     * @param string $avrMontant
     *
     * @return Avoir
     */
    public function setAvrMontant($avrMontant)
    {
        $this->avrMontant = $avrMontant;

        return $this;
    }

    /**
     * Get avrMontant
     *
     * @return string
     */
    public function getAvrMontant()
    {
        return $this->avrMontant;
    }

    /**
     * Set avrSolde
     *
     * @param string $avrSolde
     *
     * @return Avoir
     */
    public function setAvrSolde($avrSolde)
    {
        $this->avrSolde = $avrSolde;

        return $this;
    }

    /**
     * Get avrSolde
     *
     * @return string
     */
    public function getAvrSolde()
    {
        return $this->avrSolde;
    }

    /**
     * Set avrMotif
     *
     * @param string $avrMotif
     *
     * @return Avoir
     */
    public function setAvrMotif($avrMotif)
    {
        $this->avrMotif = $avrMotif;

        return $this;
    }

    /**
     * Get avrMotif
     *
     * @return string
     */
    public function getAvrMotif()
    {
        return $this->avrMotif;
    }

    /**
     * Set avrDatLimite
     *
     * @param \DateTime $avrDatLimite
     *
     * @return Avoir
     */
    public function setAvrDatLimite($avrDatLimite)
    {
        $this->avrDatLimite = $avrDatLimite;

        return $this;
    }

    /**
     * Get avrDatLimite
     *
     * @return \DateTime
     */
    public function getAvrDatLimite()
    {
        return $this->avrDatLimite;
    }

    /**
     * Set avrUtiCrea
     *
     * @param string $avrUtiCrea
     *
     * @return Avoir
     */
    public function setAvrUtiCrea($avrUtiCrea)
    {
        $this->avrUtiCrea = $avrUtiCrea;

        return $this;
    }

    /**
     * Get avrUtiCrea
     *
     * @return string
     */
    public function getAvrUtiCrea()
    {
        return $this->avrUtiCrea;
    }

    /**
     * Set avrDatCrea
     *
     * @param \DateTime $avrDatCrea
     *
     * @return Avoir
     */
    public function setAvrDatCrea($avrDatCrea)
    {
        $this->avrDatCrea = $avrDatCrea;

        return $this;
    }

    /**
     * Get avrDatCrea
     *
     * @return \DateTime
     */
    public function getAvrDatCrea()
    {
        return $this->avrDatCrea;
    }

    /**
     * Set avrUtiModi
     *
     * @param string $avrUtiModi
     *
     * @return Avoir
     */
    public function setAvrUtiModi($avrUtiModi)
    {
        $this->avrUtiModi = $avrUtiModi;

        return $this;
    }

    /**
     * Get avrUtiModi
     *
     * @return string
     */
    public function getAvrUtiModi()
    {
        return $this->avrUtiModi;
    }

    /**
     * Set avrDatModi
     *
     * @param \DateTime $avrDatModi
     *
     * @return Avoir
     */
    public function setAvrDatModi($avrDatModi)
    {
        $this->avrDatModi = $avrDatModi;

        return $this;
    }

    /**
     * Get avrDatModi
     *
     * @return \DateTime
     */
    public function getAvrDatModi()
    {
        return $this->avrDatModi;
    }

    /**
     * Get avrId
     *
     * @return integer
     */
    public function getAvrId()
    {
        return $this->avrId;
    }

    /**
     * Set avrAdhNum
     *
     * @param \AppBundle\Entity\Adherent $avrAdhNum
     *
     * @return Avoir
     */
    public function setAvrAdhNum(\AppBundle\Entity\Adherent $avrAdhNum = null)
    {
        $this->avrAdhNum = $avrAdhNum;

        return $this;
    }

    /**
     * Get avrAdhNum
     *
     * @return \AppBundle\Entity\Adherent
     */
    public function getAvrAdhNum()
    {
        return $this->avrAdhNum;
    }
}
