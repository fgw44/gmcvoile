<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglement
 *
 * @ORM\Table(name="reglement", indexes={@ORM\Index(name="fk_reglement_adherent", columns={"reg_adh_num"}), @ORM\Index(name="fk_reglement_type_reglement", columns={"reg_tyr_code"}), @ORM\Index(name="fk_reglement_panier1", columns={"reg_pan_id"})})
 * @ORM\Entity
 */
class Reglement
{
    /**
     * @var string
     *
     * @ORM\Column(name="reg_montant", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $regMontant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reg_date", type="date", nullable=false)
     */
    private $regDate;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_commentaire", type="string", length=200, nullable=true)
     */
    private $regCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_trans_id", type="string", length=20, nullable=true)
     */
    private $regTransId;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_trans_date_cb", type="string", length=14, nullable=true)
     */
    private $regTransDateCb;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_num_cb", type="string", length=45, nullable=true)
     */
    private $regNumCb;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_mois_exp_cb", type="string", length=2, nullable=true)
     */
    private $regMoisExpCb;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_annee_exp_cb", type="string", length=4, nullable=true)
     */
    private $regAnneeExpCb;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_num_autor_cb", type="string", length=6, nullable=true)
     */
    private $regNumAutorCb;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_mode_autor_cb", type="string", length=4, nullable=true)
     */
    private $regModeAutorCb;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_garantie_cb", type="string", length=5, nullable=true)
     */
    private $regGarantieCb;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_certificat_cb", type="string", length=40, nullable=true)
     */
    private $regCertificatCb;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_pays_cb", type="string", length=3, nullable=true)
     */
    private $regPaysCb;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_num_chq", type="string", length=20, nullable=true)
     */
    private $regNumChq;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_code_banque", type="string", length=4, nullable=true)
     */
    private $regCodeBanque;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_uti_crea", type="string", length=150, nullable=false)
     */
    private $regUtiCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reg_dat_crea", type="datetime", nullable=false)
     */
    private $regDatCrea;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_uti_modi", type="string", length=150, nullable=true)
     */
    private $regUtiModi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reg_dat_modi", type="datetime", nullable=true)
     */
    private $regDatModi;

    /**
     * @var integer
     *
     * @ORM\Column(name="reg_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $regId;

    /**
     * @var \AppBundle\Entity\Adherent
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Adherent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reg_adh_num", referencedColumnName="adh_num")
     * })
     */
    private $regAdhNum;

    /**
     * @var \AppBundle\Entity\Panier
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Panier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reg_pan_id", referencedColumnName="pan_id")
     * })
     */
    private $regPan;

    /**
     * @var \AppBundle\Entity\TypeReglement
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeReglement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reg_tyr_code", referencedColumnName="tyr_code")
     * })
     */
    private $regTyrCode;



    /**
     * Set regMontant
     *
     * @param string $regMontant
     *
     * @return Reglement
     */
    public function setRegMontant($regMontant)
    {
        $this->regMontant = $regMontant;

        return $this;
    }

    /**
     * Get regMontant
     *
     * @return string
     */
    public function getRegMontant()
    {
        return $this->regMontant;
    }

    /**
     * Set regDate
     *
     * @param \DateTime $regDate
     *
     * @return Reglement
     */
    public function setRegDate($regDate)
    {
        $this->regDate = $regDate;

        return $this;
    }

    /**
     * Get regDate
     *
     * @return \DateTime
     */
    public function getRegDate()
    {
        return $this->regDate;
    }

    /**
     * Set regCommentaire
     *
     * @param string $regCommentaire
     *
     * @return Reglement
     */
    public function setRegCommentaire($regCommentaire)
    {
        $this->regCommentaire = $regCommentaire;

        return $this;
    }

    /**
     * Get regCommentaire
     *
     * @return string
     */
    public function getRegCommentaire()
    {
        return $this->regCommentaire;
    }

    /**
     * Set regTransId
     *
     * @param string $regTransId
     *
     * @return Reglement
     */
    public function setRegTransId($regTransId)
    {
        $this->regTransId = $regTransId;

        return $this;
    }

    /**
     * Get regTransId
     *
     * @return string
     */
    public function getRegTransId()
    {
        return $this->regTransId;
    }

    /**
     * Set regTransDateCb
     *
     * @param string $regTransDateCb
     *
     * @return Reglement
     */
    public function setRegTransDateCb($regTransDateCb)
    {
        $this->regTransDateCb = $regTransDateCb;

        return $this;
    }

    /**
     * Get regTransDateCb
     *
     * @return string
     */
    public function getRegTransDateCb()
    {
        return $this->regTransDateCb;
    }

    /**
     * Set regNumCb
     *
     * @param string $regNumCb
     *
     * @return Reglement
     */
    public function setRegNumCb($regNumCb)
    {
        $this->regNumCb = $regNumCb;

        return $this;
    }

    /**
     * Get regNumCb
     *
     * @return string
     */
    public function getRegNumCb()
    {
        return $this->regNumCb;
    }

    /**
     * Set regMoisExpCb
     *
     * @param string $regMoisExpCb
     *
     * @return Reglement
     */
    public function setRegMoisExpCb($regMoisExpCb)
    {
        $this->regMoisExpCb = $regMoisExpCb;

        return $this;
    }

    /**
     * Get regMoisExpCb
     *
     * @return string
     */
    public function getRegMoisExpCb()
    {
        return $this->regMoisExpCb;
    }

    /**
     * Set regAnneeExpCb
     *
     * @param string $regAnneeExpCb
     *
     * @return Reglement
     */
    public function setRegAnneeExpCb($regAnneeExpCb)
    {
        $this->regAnneeExpCb = $regAnneeExpCb;

        return $this;
    }

    /**
     * Get regAnneeExpCb
     *
     * @return string
     */
    public function getRegAnneeExpCb()
    {
        return $this->regAnneeExpCb;
    }

    /**
     * Set regNumAutorCb
     *
     * @param string $regNumAutorCb
     *
     * @return Reglement
     */
    public function setRegNumAutorCb($regNumAutorCb)
    {
        $this->regNumAutorCb = $regNumAutorCb;

        return $this;
    }

    /**
     * Get regNumAutorCb
     *
     * @return string
     */
    public function getRegNumAutorCb()
    {
        return $this->regNumAutorCb;
    }

    /**
     * Set regModeAutorCb
     *
     * @param string $regModeAutorCb
     *
     * @return Reglement
     */
    public function setRegModeAutorCb($regModeAutorCb)
    {
        $this->regModeAutorCb = $regModeAutorCb;

        return $this;
    }

    /**
     * Get regModeAutorCb
     *
     * @return string
     */
    public function getRegModeAutorCb()
    {
        return $this->regModeAutorCb;
    }

    /**
     * Set regGarantieCb
     *
     * @param string $regGarantieCb
     *
     * @return Reglement
     */
    public function setRegGarantieCb($regGarantieCb)
    {
        $this->regGarantieCb = $regGarantieCb;

        return $this;
    }

    /**
     * Get regGarantieCb
     *
     * @return string
     */
    public function getRegGarantieCb()
    {
        return $this->regGarantieCb;
    }

    /**
     * Set regCertificatCb
     *
     * @param string $regCertificatCb
     *
     * @return Reglement
     */
    public function setRegCertificatCb($regCertificatCb)
    {
        $this->regCertificatCb = $regCertificatCb;

        return $this;
    }

    /**
     * Get regCertificatCb
     *
     * @return string
     */
    public function getRegCertificatCb()
    {
        return $this->regCertificatCb;
    }

    /**
     * Set regPaysCb
     *
     * @param string $regPaysCb
     *
     * @return Reglement
     */
    public function setRegPaysCb($regPaysCb)
    {
        $this->regPaysCb = $regPaysCb;

        return $this;
    }

    /**
     * Get regPaysCb
     *
     * @return string
     */
    public function getRegPaysCb()
    {
        return $this->regPaysCb;
    }

    /**
     * Set regNumChq
     *
     * @param string $regNumChq
     *
     * @return Reglement
     */
    public function setRegNumChq($regNumChq)
    {
        $this->regNumChq = $regNumChq;

        return $this;
    }

    /**
     * Get regNumChq
     *
     * @return string
     */
    public function getRegNumChq()
    {
        return $this->regNumChq;
    }

    /**
     * Set regCodeBanque
     *
     * @param string $regCodeBanque
     *
     * @return Reglement
     */
    public function setRegCodeBanque($regCodeBanque)
    {
        $this->regCodeBanque = $regCodeBanque;

        return $this;
    }

    /**
     * Get regCodeBanque
     *
     * @return string
     */
    public function getRegCodeBanque()
    {
        return $this->regCodeBanque;
    }

    /**
     * Set regUtiCrea
     *
     * @param string $regUtiCrea
     *
     * @return Reglement
     */
    public function setRegUtiCrea($regUtiCrea)
    {
        $this->regUtiCrea = $regUtiCrea;

        return $this;
    }

    /**
     * Get regUtiCrea
     *
     * @return string
     */
    public function getRegUtiCrea()
    {
        return $this->regUtiCrea;
    }

    /**
     * Set regDatCrea
     *
     * @param \DateTime $regDatCrea
     *
     * @return Reglement
     */
    public function setRegDatCrea($regDatCrea)
    {
        $this->regDatCrea = $regDatCrea;

        return $this;
    }

    /**
     * Get regDatCrea
     *
     * @return \DateTime
     */
    public function getRegDatCrea()
    {
        return $this->regDatCrea;
    }

    /**
     * Set regUtiModi
     *
     * @param string $regUtiModi
     *
     * @return Reglement
     */
    public function setRegUtiModi($regUtiModi)
    {
        $this->regUtiModi = $regUtiModi;

        return $this;
    }

    /**
     * Get regUtiModi
     *
     * @return string
     */
    public function getRegUtiModi()
    {
        return $this->regUtiModi;
    }

    /**
     * Set regDatModi
     *
     * @param \DateTime $regDatModi
     *
     * @return Reglement
     */
    public function setRegDatModi($regDatModi)
    {
        $this->regDatModi = $regDatModi;

        return $this;
    }

    /**
     * Get regDatModi
     *
     * @return \DateTime
     */
    public function getRegDatModi()
    {
        return $this->regDatModi;
    }

    /**
     * Get regId
     *
     * @return integer
     */
    public function getRegId()
    {
        return $this->regId;
    }

    /**
     * Set regAdhNum
     *
     * @param \AppBundle\Entity\Adherent $regAdhNum
     *
     * @return Reglement
     */
    public function setRegAdhNum(\AppBundle\Entity\Adherent $regAdhNum = null)
    {
        $this->regAdhNum = $regAdhNum;

        return $this;
    }

    /**
     * Get regAdhNum
     *
     * @return \AppBundle\Entity\Adherent
     */
    public function getRegAdhNum()
    {
        return $this->regAdhNum;
    }

    /**
     * Set regPan
     *
     * @param \AppBundle\Entity\Panier $regPan
     *
     * @return Reglement
     */
    public function setRegPan(\AppBundle\Entity\Panier $regPan = null)
    {
        $this->regPan = $regPan;

        return $this;
    }

    /**
     * Get regPan
     *
     * @return \AppBundle\Entity\Panier
     */
    public function getRegPan()
    {
        return $this->regPan;
    }

    /**
     * Set regTyrCode
     *
     * @param \AppBundle\Entity\TypeReglement $regTyrCode
     *
     * @return Reglement
     */
    public function setRegTyrCode(\AppBundle\Entity\TypeReglement $regTyrCode = null)
    {
        $this->regTyrCode = $regTyrCode;

        return $this;
    }

    /**
     * Get regTyrCode
     *
     * @return \AppBundle\Entity\TypeReglement
     */
    public function getRegTyrCode()
    {
        return $this->regTyrCode;
    }
}
