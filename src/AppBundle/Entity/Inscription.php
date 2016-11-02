<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription", indexes={@ORM\Index(name="fk_inscription_adherent", columns={"ins_adh_num"}), @ORM\Index(name="fk_inscription_stage", columns={"ins_sta_id"}), @ORM\Index(name="fk_inscription_etat_inscription1", columns={"ins_eta_code"})})
 * @ORM\Entity
 */
class Inscription
{
    /**
     * @var string
     *
     * @ORM\Column(name="ins_mt_av_remise", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $insMtAvRemise;

    /**
     * @var string
     *
     * @ORM\Column(name="ins_tx_remise", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $insTxRemise;

    /**
     * @var string
     *
     * @ORM\Column(name="ins_mt_remise", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $insMtRemise;

    /**
     * @var string
     *
     * @ORM\Column(name="ins_motifs_remise", type="string", length=255, nullable=false)
     */
    private $insMotifsRemise;

    /**
     * @var string
     *
     * @ORM\Column(name="ins_mt_ap_remise", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $insMtApRemise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ins_is_force", type="boolean", nullable=true)
     */
    private $insIsForce = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ins_mt_avoir", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $insMtAvoir = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="ins_mt_regle", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $insMtRegle = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ins_is_regle", type="boolean", nullable=false)
     */
    private $insIsRegle = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ins_commentaire", type="string", length=50, nullable=true)
     */
    private $insCommentaire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ins_is_retard_reglement", type="boolean", nullable=false)
     */
    private $insIsRetardReglement = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ins_dat_dern_relance", type="datetime", nullable=true)
     */
    private $insDatDernRelance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ins_is_relance_ebq_env", type="boolean", nullable=true)
     */
    private $insIsRelanceEbqEnv = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ins_is_inscription_chef", type="boolean", nullable=true)
     */
    private $insIsInscriptionChef = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ins_is_annule", type="boolean", nullable=true)
     */
    private $insIsAnnule = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ins_uti_crea", type="string", length=150, nullable=false)
     */
    private $insUtiCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ins_dat_crea", type="datetime", nullable=false)
     */
    private $insDatCrea;

    /**
     * @var string
     *
     * @ORM\Column(name="ins_uti_modi", type="string", length=150, nullable=true)
     */
    private $insUtiModi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ins_dat_modi", type="datetime", nullable=true)
     */
    private $insDatModi;

    /**
     * @var \AppBundle\Entity\Adherent
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Adherent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ins_adh_num", referencedColumnName="adh_num")
     * })
     */
    private $insAdhNum;

    /**
     * @var \AppBundle\Entity\Stage
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Stage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ins_sta_id", referencedColumnName="sta_id")
     * })
     */
    private $insSta;

    /**
     * @var \AppBundle\Entity\EtatInscription
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\EtatInscription")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ins_eta_code", referencedColumnName="eta_code")
     * })
     */
    private $insEtaCode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Panier", mappedBy="paninsInsAdhNum")
     */
    private $paninsPan;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->paninsPan = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set insMtAvRemise
     *
     * @param string $insMtAvRemise
     *
     * @return Inscription
     */
    public function setInsMtAvRemise($insMtAvRemise)
    {
        $this->insMtAvRemise = $insMtAvRemise;

        return $this;
    }

    /**
     * Get insMtAvRemise
     *
     * @return string
     */
    public function getInsMtAvRemise()
    {
        return $this->insMtAvRemise;
    }

    /**
     * Set insTxRemise
     *
     * @param string $insTxRemise
     *
     * @return Inscription
     */
    public function setInsTxRemise($insTxRemise)
    {
        $this->insTxRemise = $insTxRemise;

        return $this;
    }

    /**
     * Get insTxRemise
     *
     * @return string
     */
    public function getInsTxRemise()
    {
        return $this->insTxRemise;
    }

    /**
     * Set insMtRemise
     *
     * @param string $insMtRemise
     *
     * @return Inscription
     */
    public function setInsMtRemise($insMtRemise)
    {
        $this->insMtRemise = $insMtRemise;

        return $this;
    }

    /**
     * Get insMtRemise
     *
     * @return string
     */
    public function getInsMtRemise()
    {
        return $this->insMtRemise;
    }

    /**
     * Set insMotifsRemise
     *
     * @param string $insMotifsRemise
     *
     * @return Inscription
     */
    public function setInsMotifsRemise($insMotifsRemise)
    {
        $this->insMotifsRemise = $insMotifsRemise;

        return $this;
    }

    /**
     * Get insMotifsRemise
     *
     * @return string
     */
    public function getInsMotifsRemise()
    {
        return $this->insMotifsRemise;
    }

    /**
     * Set insMtApRemise
     *
     * @param string $insMtApRemise
     *
     * @return Inscription
     */
    public function setInsMtApRemise($insMtApRemise)
    {
        $this->insMtApRemise = $insMtApRemise;

        return $this;
    }

    /**
     * Get insMtApRemise
     *
     * @return string
     */
    public function getInsMtApRemise()
    {
        return $this->insMtApRemise;
    }

    /**
     * Set insIsForce
     *
     * @param boolean $insIsForce
     *
     * @return Inscription
     */
    public function setInsIsForce($insIsForce)
    {
        $this->insIsForce = $insIsForce;

        return $this;
    }

    /**
     * Get insIsForce
     *
     * @return boolean
     */
    public function getInsIsForce()
    {
        return $this->insIsForce;
    }

    /**
     * Set insMtAvoir
     *
     * @param string $insMtAvoir
     *
     * @return Inscription
     */
    public function setInsMtAvoir($insMtAvoir)
    {
        $this->insMtAvoir = $insMtAvoir;

        return $this;
    }

    /**
     * Get insMtAvoir
     *
     * @return string
     */
    public function getInsMtAvoir()
    {
        return $this->insMtAvoir;
    }

    /**
     * Set insMtRegle
     *
     * @param string $insMtRegle
     *
     * @return Inscription
     */
    public function setInsMtRegle($insMtRegle)
    {
        $this->insMtRegle = $insMtRegle;

        return $this;
    }

    /**
     * Get insMtRegle
     *
     * @return string
     */
    public function getInsMtRegle()
    {
        return $this->insMtRegle;
    }

    /**
     * Set insIsRegle
     *
     * @param boolean $insIsRegle
     *
     * @return Inscription
     */
    public function setInsIsRegle($insIsRegle)
    {
        $this->insIsRegle = $insIsRegle;

        return $this;
    }

    /**
     * Get insIsRegle
     *
     * @return boolean
     */
    public function getInsIsRegle()
    {
        return $this->insIsRegle;
    }

    /**
     * Set insCommentaire
     *
     * @param string $insCommentaire
     *
     * @return Inscription
     */
    public function setInsCommentaire($insCommentaire)
    {
        $this->insCommentaire = $insCommentaire;

        return $this;
    }

    /**
     * Get insCommentaire
     *
     * @return string
     */
    public function getInsCommentaire()
    {
        return $this->insCommentaire;
    }

    /**
     * Set insIsRetardReglement
     *
     * @param boolean $insIsRetardReglement
     *
     * @return Inscription
     */
    public function setInsIsRetardReglement($insIsRetardReglement)
    {
        $this->insIsRetardReglement = $insIsRetardReglement;

        return $this;
    }

    /**
     * Get insIsRetardReglement
     *
     * @return boolean
     */
    public function getInsIsRetardReglement()
    {
        return $this->insIsRetardReglement;
    }

    /**
     * Set insDatDernRelance
     *
     * @param \DateTime $insDatDernRelance
     *
     * @return Inscription
     */
    public function setInsDatDernRelance($insDatDernRelance)
    {
        $this->insDatDernRelance = $insDatDernRelance;

        return $this;
    }

    /**
     * Get insDatDernRelance
     *
     * @return \DateTime
     */
    public function getInsDatDernRelance()
    {
        return $this->insDatDernRelance;
    }

    /**
     * Set insIsRelanceEbqEnv
     *
     * @param boolean $insIsRelanceEbqEnv
     *
     * @return Inscription
     */
    public function setInsIsRelanceEbqEnv($insIsRelanceEbqEnv)
    {
        $this->insIsRelanceEbqEnv = $insIsRelanceEbqEnv;

        return $this;
    }

    /**
     * Get insIsRelanceEbqEnv
     *
     * @return boolean
     */
    public function getInsIsRelanceEbqEnv()
    {
        return $this->insIsRelanceEbqEnv;
    }

    /**
     * Set insIsInscriptionChef
     *
     * @param boolean $insIsInscriptionChef
     *
     * @return Inscription
     */
    public function setInsIsInscriptionChef($insIsInscriptionChef)
    {
        $this->insIsInscriptionChef = $insIsInscriptionChef;

        return $this;
    }

    /**
     * Get insIsInscriptionChef
     *
     * @return boolean
     */
    public function getInsIsInscriptionChef()
    {
        return $this->insIsInscriptionChef;
    }

    /**
     * Set insIsAnnule
     *
     * @param boolean $insIsAnnule
     *
     * @return Inscription
     */
    public function setInsIsAnnule($insIsAnnule)
    {
        $this->insIsAnnule = $insIsAnnule;

        return $this;
    }

    /**
     * Get insIsAnnule
     *
     * @return boolean
     */
    public function getInsIsAnnule()
    {
        return $this->insIsAnnule;
    }

    /**
     * Set insUtiCrea
     *
     * @param string $insUtiCrea
     *
     * @return Inscription
     */
    public function setInsUtiCrea($insUtiCrea)
    {
        $this->insUtiCrea = $insUtiCrea;

        return $this;
    }

    /**
     * Get insUtiCrea
     *
     * @return string
     */
    public function getInsUtiCrea()
    {
        return $this->insUtiCrea;
    }

    /**
     * Set insDatCrea
     *
     * @param \DateTime $insDatCrea
     *
     * @return Inscription
     */
    public function setInsDatCrea($insDatCrea)
    {
        $this->insDatCrea = $insDatCrea;

        return $this;
    }

    /**
     * Get insDatCrea
     *
     * @return \DateTime
     */
    public function getInsDatCrea()
    {
        return $this->insDatCrea;
    }

    /**
     * Set insUtiModi
     *
     * @param string $insUtiModi
     *
     * @return Inscription
     */
    public function setInsUtiModi($insUtiModi)
    {
        $this->insUtiModi = $insUtiModi;

        return $this;
    }

    /**
     * Get insUtiModi
     *
     * @return string
     */
    public function getInsUtiModi()
    {
        return $this->insUtiModi;
    }

    /**
     * Set insDatModi
     *
     * @param \DateTime $insDatModi
     *
     * @return Inscription
     */
    public function setInsDatModi($insDatModi)
    {
        $this->insDatModi = $insDatModi;

        return $this;
    }

    /**
     * Get insDatModi
     *
     * @return \DateTime
     */
    public function getInsDatModi()
    {
        return $this->insDatModi;
    }

    /**
     * Set insAdhNum
     *
     * @param \AppBundle\Entity\Adherent $insAdhNum
     *
     * @return Inscription
     */
    public function setInsAdhNum(\AppBundle\Entity\Adherent $insAdhNum)
    {
        $this->insAdhNum = $insAdhNum;

        return $this;
    }

    /**
     * Get insAdhNum
     *
     * @return \AppBundle\Entity\Adherent
     */
    public function getInsAdhNum()
    {
        return $this->insAdhNum;
    }

    /**
     * Set insSta
     *
     * @param \AppBundle\Entity\Stage $insSta
     *
     * @return Inscription
     */
    public function setInsSta(\AppBundle\Entity\Stage $insSta)
    {
        $this->insSta = $insSta;

        return $this;
    }

    /**
     * Get insSta
     *
     * @return \AppBundle\Entity\Stage
     */
    public function getInsSta()
    {
        return $this->insSta;
    }

    /**
     * Set insEtaCode
     *
     * @param \AppBundle\Entity\EtatInscription $insEtaCode
     *
     * @return Inscription
     */
    public function setInsEtaCode(\AppBundle\Entity\EtatInscription $insEtaCode = null)
    {
        $this->insEtaCode = $insEtaCode;

        return $this;
    }

    /**
     * Get insEtaCode
     *
     * @return \AppBundle\Entity\EtatInscription
     */
    public function getInsEtaCode()
    {
        return $this->insEtaCode;
    }

    /**
     * Add paninsPan
     *
     * @param \AppBundle\Entity\Panier $paninsPan
     *
     * @return Inscription
     */
    public function addPaninsPan(\AppBundle\Entity\Panier $paninsPan)
    {
        $this->paninsPan[] = $paninsPan;

        return $this;
    }

    /**
     * Remove paninsPan
     *
     * @param \AppBundle\Entity\Panier $paninsPan
     */
    public function removePaninsPan(\AppBundle\Entity\Panier $paninsPan)
    {
        $this->paninsPan->removeElement($paninsPan);
    }

    /**
     * Get paninsPan
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPaninsPan()
    {
        return $this->paninsPan;
    }
}
