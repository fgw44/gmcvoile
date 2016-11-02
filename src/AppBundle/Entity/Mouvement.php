<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mouvement
 *
 * @ORM\Table(name="mouvement", indexes={@ORM\Index(name="fk_mouvement_compte", columns={"mvt_cpt_num"}), @ORM\Index(name="fk_mouvement_adherent", columns={"mvt_adh_num"})})
 * @ORM\Entity
 */
class Mouvement
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mvt_date", type="date", nullable=false)
     */
    private $mvtDate;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_mt_debit", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mvtMtDebit;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_mt_credit", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $mvtMtCredit;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_motif", type="string", length=100, nullable=true)
     */
    private $mvtMotif;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_uti_crea", type="string", length=150, nullable=false)
     */
    private $mvtUtiCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mvt_dat_crea", type="datetime", nullable=false)
     */
    private $mvtDatCrea;

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mvtId;

    /**
     * @var \AppBundle\Entity\Adherent
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Adherent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mvt_adh_num", referencedColumnName="adh_num")
     * })
     */
    private $mvtAdhNum;

    /**
     * @var \AppBundle\Entity\Compte
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mvt_cpt_num", referencedColumnName="cpt_num")
     * })
     */
    private $mvtCptNum;



    /**
     * Set mvtDate
     *
     * @param \DateTime $mvtDate
     *
     * @return Mouvement
     */
    public function setMvtDate($mvtDate)
    {
        $this->mvtDate = $mvtDate;

        return $this;
    }

    /**
     * Get mvtDate
     *
     * @return \DateTime
     */
    public function getMvtDate()
    {
        return $this->mvtDate;
    }

    /**
     * Set mvtMtDebit
     *
     * @param string $mvtMtDebit
     *
     * @return Mouvement
     */
    public function setMvtMtDebit($mvtMtDebit)
    {
        $this->mvtMtDebit = $mvtMtDebit;

        return $this;
    }

    /**
     * Get mvtMtDebit
     *
     * @return string
     */
    public function getMvtMtDebit()
    {
        return $this->mvtMtDebit;
    }

    /**
     * Set mvtMtCredit
     *
     * @param string $mvtMtCredit
     *
     * @return Mouvement
     */
    public function setMvtMtCredit($mvtMtCredit)
    {
        $this->mvtMtCredit = $mvtMtCredit;

        return $this;
    }

    /**
     * Get mvtMtCredit
     *
     * @return string
     */
    public function getMvtMtCredit()
    {
        return $this->mvtMtCredit;
    }

    /**
     * Set mvtMotif
     *
     * @param string $mvtMotif
     *
     * @return Mouvement
     */
    public function setMvtMotif($mvtMotif)
    {
        $this->mvtMotif = $mvtMotif;

        return $this;
    }

    /**
     * Get mvtMotif
     *
     * @return string
     */
    public function getMvtMotif()
    {
        return $this->mvtMotif;
    }

    /**
     * Set mvtUtiCrea
     *
     * @param string $mvtUtiCrea
     *
     * @return Mouvement
     */
    public function setMvtUtiCrea($mvtUtiCrea)
    {
        $this->mvtUtiCrea = $mvtUtiCrea;

        return $this;
    }

    /**
     * Get mvtUtiCrea
     *
     * @return string
     */
    public function getMvtUtiCrea()
    {
        return $this->mvtUtiCrea;
    }

    /**
     * Set mvtDatCrea
     *
     * @param \DateTime $mvtDatCrea
     *
     * @return Mouvement
     */
    public function setMvtDatCrea($mvtDatCrea)
    {
        $this->mvtDatCrea = $mvtDatCrea;

        return $this;
    }

    /**
     * Get mvtDatCrea
     *
     * @return \DateTime
     */
    public function getMvtDatCrea()
    {
        return $this->mvtDatCrea;
    }

    /**
     * Get mvtId
     *
     * @return integer
     */
    public function getMvtId()
    {
        return $this->mvtId;
    }

    /**
     * Set mvtAdhNum
     *
     * @param \AppBundle\Entity\Adherent $mvtAdhNum
     *
     * @return Mouvement
     */
    public function setMvtAdhNum(\AppBundle\Entity\Adherent $mvtAdhNum = null)
    {
        $this->mvtAdhNum = $mvtAdhNum;

        return $this;
    }

    /**
     * Get mvtAdhNum
     *
     * @return \AppBundle\Entity\Adherent
     */
    public function getMvtAdhNum()
    {
        return $this->mvtAdhNum;
    }

    /**
     * Set mvtCptNum
     *
     * @param \AppBundle\Entity\Compte $mvtCptNum
     *
     * @return Mouvement
     */
    public function setMvtCptNum(\AppBundle\Entity\Compte $mvtCptNum = null)
    {
        $this->mvtCptNum = $mvtCptNum;

        return $this;
    }

    /**
     * Get mvtCptNum
     *
     * @return \AppBundle\Entity\Compte
     */
    public function getMvtCptNum()
    {
        return $this->mvtCptNum;
    }
}
