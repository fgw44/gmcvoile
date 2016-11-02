<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table(name="stage", uniqueConstraints={@ORM\UniqueConstraint(name="ui_stage_annee_code", columns={"sta_sai_annee", "sta_code"})}, indexes={@ORM\Index(name="fk_stage_saison", columns={"sta_sai_annee"}), @ORM\Index(name="fk_stage_adherent", columns={"sta_adh_num_chef"}), @ORM\Index(name="fk_stage_bateau", columns={"sta_bat_id"}), @ORM\Index(name="fk_stage_port", columns={"sta_por_code_dep"}), @ORM\Index(name="fk_stage_port1", columns={"sta_por_code_arr"}), @ORM\Index(name="fk_stage_adherent1_idx", columns={"sta_secu_adh_num"})})
 * @ORM\Entity
 */
class Stage
{
    /**
     * @var string
     *
     * @ORM\Column(name="sta_code", type="string", length=15, nullable=true)
     */
    private $staCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sta_datdeb", type="date", nullable=false)
     */
    private $staDatdeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sta_datfin", type="date", nullable=false)
     */
    private $staDatfin;

    /**
     * @var integer
     *
     * @ORM\Column(name="sta_nb_jours", type="smallint", nullable=false)
     */
    private $staNbJours = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sta_tarif_stagiaire", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $staTarifStagiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="sta_tarif_chef", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $staTarifChef = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sta_nb_places", type="boolean", nullable=false)
     */
    private $staNbPlaces;

    /**
     * @var string
     *
     * @ORM\Column(name="sta_desc", type="string", length=500, nullable=true)
     */
    private $staDesc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sta_isvisible", type="boolean", nullable=true)
     */
    private $staIsvisible = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sta_is_annule", type="boolean", nullable=true)
     */
    private $staIsAnnule = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sta_dat_dern_env_liste", type="datetime", nullable=true)
     */
    private $staDatDernEnvListe;

    /**
     * @var integer
     *
     * @ORM\Column(name="sta_stat_pre_ins", type="smallint", nullable=true)
     */
    private $staStatPreIns = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sta_stat_non_paye", type="smallint", nullable=true)
     */
    private $staStatNonPaye = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sta_stat_acompte", type="smallint", nullable=true)
     */
    private $staStatAcompte = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sta_stat_paye", type="smallint", nullable=true)
     */
    private $staStatPaye = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sta_stat_dispo", type="smallint", nullable=true)
     */
    private $staStatDispo;

    /**
     * @var integer
     *
     * @ORM\Column(name="sta_stat_bloque", type="smallint", nullable=true)
     */
    private $staStatBloque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sta_stat_dat_blocage", type="date", nullable=true)
     */
    private $staStatDatBlocage;

    /**
     * @var string
     *
     * @ORM\Column(name="sta_stat_motif_blocage", type="string", length=100, nullable=true)
     */
    private $staStatMotifBlocage;

    /**
     * @var string
     *
     * @ORM\Column(name="sta_uti_crea", type="string", length=150, nullable=false)
     */
    private $staUtiCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sta_dat_crea", type="datetime", nullable=false)
     */
    private $staDatCrea;

    /**
     * @var string
     *
     * @ORM\Column(name="sta_uti_modi", type="string", length=150, nullable=true)
     */
    private $staUtiModi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sta_dat_modi", type="datetime", nullable=true)
     */
    private $staDatModi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sta_secu_active", type="boolean", nullable=false)
     */
    private $staSecuActive = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sta_chefs_only", type="boolean", nullable=false)
     */
    private $staChefsOnly = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sta_actifs_only", type="boolean", nullable=false)
     */
    private $staActifsOnly = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sta_sans_remise", type="boolean", nullable=false)
     */
    private $staSansRemise = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sta_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $staId;

    /**
     * @var \AppBundle\Entity\Adherent
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Adherent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sta_adh_num_chef", referencedColumnName="adh_num")
     * })
     */
    private $staAdhNumChef;

    /**
     * @var \AppBundle\Entity\Adherent
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Adherent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sta_secu_adh_num", referencedColumnName="adh_num")
     * })
     */
    private $staSecuAdhNum;

    /**
     * @var \AppBundle\Entity\Bateau
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Bateau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sta_bat_id", referencedColumnName="bat_id")
     * })
     */
    private $staBat;

    /**
     * @var \AppBundle\Entity\Port
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Port")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sta_por_code_dep", referencedColumnName="por_code")
     * })
     */
    private $staPorCodeDep;

    /**
     * @var \AppBundle\Entity\Port
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Port")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sta_por_code_arr", referencedColumnName="por_code")
     * })
     */
    private $staPorCodeArr;

    /**
     * @var \AppBundle\Entity\Saison
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Saison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sta_sai_annee", referencedColumnName="sai_annee")
     * })
     */
    private $staSaiAnnee;



    /**
     * Set staCode
     *
     * @param string $staCode
     *
     * @return Stage
     */
    public function setStaCode($staCode)
    {
        $this->staCode = $staCode;

        return $this;
    }

    /**
     * Get staCode
     *
     * @return string
     */
    public function getStaCode()
    {
        return $this->staCode;
    }

    /**
     * Set staDatdeb
     *
     * @param \DateTime $staDatdeb
     *
     * @return Stage
     */
    public function setStaDatdeb($staDatdeb)
    {
        $this->staDatdeb = $staDatdeb;

        return $this;
    }

    /**
     * Get staDatdeb
     *
     * @return \DateTime
     */
    public function getStaDatdeb()
    {
        return $this->staDatdeb;
    }

    /**
     * Set staDatfin
     *
     * @param \DateTime $staDatfin
     *
     * @return Stage
     */
    public function setStaDatfin($staDatfin)
    {
        $this->staDatfin = $staDatfin;

        return $this;
    }

    /**
     * Get staDatfin
     *
     * @return \DateTime
     */
    public function getStaDatfin()
    {
        return $this->staDatfin;
    }

    /**
     * Set staNbJours
     *
     * @param integer $staNbJours
     *
     * @return Stage
     */
    public function setStaNbJours($staNbJours)
    {
        $this->staNbJours = $staNbJours;

        return $this;
    }

    /**
     * Get staNbJours
     *
     * @return integer
     */
    public function getStaNbJours()
    {
        return $this->staNbJours;
    }

    /**
     * Set staTarifStagiaire
     *
     * @param string $staTarifStagiaire
     *
     * @return Stage
     */
    public function setStaTarifStagiaire($staTarifStagiaire)
    {
        $this->staTarifStagiaire = $staTarifStagiaire;

        return $this;
    }

    /**
     * Get staTarifStagiaire
     *
     * @return string
     */
    public function getStaTarifStagiaire()
    {
        return $this->staTarifStagiaire;
    }

    /**
     * Set staTarifChef
     *
     * @param string $staTarifChef
     *
     * @return Stage
     */
    public function setStaTarifChef($staTarifChef)
    {
        $this->staTarifChef = $staTarifChef;

        return $this;
    }

    /**
     * Get staTarifChef
     *
     * @return string
     */
    public function getStaTarifChef()
    {
        return $this->staTarifChef;
    }

    /**
     * Set staNbPlaces
     *
     * @param boolean $staNbPlaces
     *
     * @return Stage
     */
    public function setStaNbPlaces($staNbPlaces)
    {
        $this->staNbPlaces = $staNbPlaces;

        return $this;
    }

    /**
     * Get staNbPlaces
     *
     * @return boolean
     */
    public function getStaNbPlaces()
    {
        return $this->staNbPlaces;
    }

    /**
     * Set staDesc
     *
     * @param string $staDesc
     *
     * @return Stage
     */
    public function setStaDesc($staDesc)
    {
        $this->staDesc = $staDesc;

        return $this;
    }

    /**
     * Get staDesc
     *
     * @return string
     */
    public function getStaDesc()
    {
        return $this->staDesc;
    }

    /**
     * Set staIsvisible
     *
     * @param boolean $staIsvisible
     *
     * @return Stage
     */
    public function setStaIsvisible($staIsvisible)
    {
        $this->staIsvisible = $staIsvisible;

        return $this;
    }

    /**
     * Get staIsvisible
     *
     * @return boolean
     */
    public function getStaIsvisible()
    {
        return $this->staIsvisible;
    }

    /**
     * Set staIsAnnule
     *
     * @param boolean $staIsAnnule
     *
     * @return Stage
     */
    public function setStaIsAnnule($staIsAnnule)
    {
        $this->staIsAnnule = $staIsAnnule;

        return $this;
    }

    /**
     * Get staIsAnnule
     *
     * @return boolean
     */
    public function getStaIsAnnule()
    {
        return $this->staIsAnnule;
    }

    /**
     * Set staDatDernEnvListe
     *
     * @param \DateTime $staDatDernEnvListe
     *
     * @return Stage
     */
    public function setStaDatDernEnvListe($staDatDernEnvListe)
    {
        $this->staDatDernEnvListe = $staDatDernEnvListe;

        return $this;
    }

    /**
     * Get staDatDernEnvListe
     *
     * @return \DateTime
     */
    public function getStaDatDernEnvListe()
    {
        return $this->staDatDernEnvListe;
    }

    /**
     * Set staStatPreIns
     *
     * @param integer $staStatPreIns
     *
     * @return Stage
     */
    public function setStaStatPreIns($staStatPreIns)
    {
        $this->staStatPreIns = $staStatPreIns;

        return $this;
    }

    /**
     * Get staStatPreIns
     *
     * @return integer
     */
    public function getStaStatPreIns()
    {
        return $this->staStatPreIns;
    }

    /**
     * Set staStatNonPaye
     *
     * @param integer $staStatNonPaye
     *
     * @return Stage
     */
    public function setStaStatNonPaye($staStatNonPaye)
    {
        $this->staStatNonPaye = $staStatNonPaye;

        return $this;
    }

    /**
     * Get staStatNonPaye
     *
     * @return integer
     */
    public function getStaStatNonPaye()
    {
        return $this->staStatNonPaye;
    }

    /**
     * Set staStatAcompte
     *
     * @param integer $staStatAcompte
     *
     * @return Stage
     */
    public function setStaStatAcompte($staStatAcompte)
    {
        $this->staStatAcompte = $staStatAcompte;

        return $this;
    }

    /**
     * Get staStatAcompte
     *
     * @return integer
     */
    public function getStaStatAcompte()
    {
        return $this->staStatAcompte;
    }

    /**
     * Set staStatPaye
     *
     * @param integer $staStatPaye
     *
     * @return Stage
     */
    public function setStaStatPaye($staStatPaye)
    {
        $this->staStatPaye = $staStatPaye;

        return $this;
    }

    /**
     * Get staStatPaye
     *
     * @return integer
     */
    public function getStaStatPaye()
    {
        return $this->staStatPaye;
    }

    /**
     * Set staStatDispo
     *
     * @param integer $staStatDispo
     *
     * @return Stage
     */
    public function setStaStatDispo($staStatDispo)
    {
        $this->staStatDispo = $staStatDispo;

        return $this;
    }

    /**
     * Get staStatDispo
     *
     * @return integer
     */
    public function getStaStatDispo()
    {
        return $this->staStatDispo;
    }

    /**
     * Set staStatBloque
     *
     * @param integer $staStatBloque
     *
     * @return Stage
     */
    public function setStaStatBloque($staStatBloque)
    {
        $this->staStatBloque = $staStatBloque;

        return $this;
    }

    /**
     * Get staStatBloque
     *
     * @return integer
     */
    public function getStaStatBloque()
    {
        return $this->staStatBloque;
    }

    /**
     * Set staStatDatBlocage
     *
     * @param \DateTime $staStatDatBlocage
     *
     * @return Stage
     */
    public function setStaStatDatBlocage($staStatDatBlocage)
    {
        $this->staStatDatBlocage = $staStatDatBlocage;

        return $this;
    }

    /**
     * Get staStatDatBlocage
     *
     * @return \DateTime
     */
    public function getStaStatDatBlocage()
    {
        return $this->staStatDatBlocage;
    }

    /**
     * Set staStatMotifBlocage
     *
     * @param string $staStatMotifBlocage
     *
     * @return Stage
     */
    public function setStaStatMotifBlocage($staStatMotifBlocage)
    {
        $this->staStatMotifBlocage = $staStatMotifBlocage;

        return $this;
    }

    /**
     * Get staStatMotifBlocage
     *
     * @return string
     */
    public function getStaStatMotifBlocage()
    {
        return $this->staStatMotifBlocage;
    }

    /**
     * Set staUtiCrea
     *
     * @param string $staUtiCrea
     *
     * @return Stage
     */
    public function setStaUtiCrea($staUtiCrea)
    {
        $this->staUtiCrea = $staUtiCrea;

        return $this;
    }

    /**
     * Get staUtiCrea
     *
     * @return string
     */
    public function getStaUtiCrea()
    {
        return $this->staUtiCrea;
    }

    /**
     * Set staDatCrea
     *
     * @param \DateTime $staDatCrea
     *
     * @return Stage
     */
    public function setStaDatCrea($staDatCrea)
    {
        $this->staDatCrea = $staDatCrea;

        return $this;
    }

    /**
     * Get staDatCrea
     *
     * @return \DateTime
     */
    public function getStaDatCrea()
    {
        return $this->staDatCrea;
    }

    /**
     * Set staUtiModi
     *
     * @param string $staUtiModi
     *
     * @return Stage
     */
    public function setStaUtiModi($staUtiModi)
    {
        $this->staUtiModi = $staUtiModi;

        return $this;
    }

    /**
     * Get staUtiModi
     *
     * @return string
     */
    public function getStaUtiModi()
    {
        return $this->staUtiModi;
    }

    /**
     * Set staDatModi
     *
     * @param \DateTime $staDatModi
     *
     * @return Stage
     */
    public function setStaDatModi($staDatModi)
    {
        $this->staDatModi = $staDatModi;

        return $this;
    }

    /**
     * Get staDatModi
     *
     * @return \DateTime
     */
    public function getStaDatModi()
    {
        return $this->staDatModi;
    }

    /**
     * Set staSecuActive
     *
     * @param boolean $staSecuActive
     *
     * @return Stage
     */
    public function setStaSecuActive($staSecuActive)
    {
        $this->staSecuActive = $staSecuActive;

        return $this;
    }

    /**
     * Get staSecuActive
     *
     * @return boolean
     */
    public function getStaSecuActive()
    {
        return $this->staSecuActive;
    }

    /**
     * Set staChefsOnly
     *
     * @param boolean $staChefsOnly
     *
     * @return Stage
     */
    public function setStaChefsOnly($staChefsOnly)
    {
        $this->staChefsOnly = $staChefsOnly;

        return $this;
    }

    /**
     * Get staChefsOnly
     *
     * @return boolean
     */
    public function getStaChefsOnly()
    {
        return $this->staChefsOnly;
    }

    /**
     * Set staActifsOnly
     *
     * @param boolean $staActifsOnly
     *
     * @return Stage
     */
    public function setStaActifsOnly($staActifsOnly)
    {
        $this->staActifsOnly = $staActifsOnly;

        return $this;
    }

    /**
     * Get staActifsOnly
     *
     * @return boolean
     */
    public function getStaActifsOnly()
    {
        return $this->staActifsOnly;
    }

    /**
     * Set staSansRemise
     *
     * @param boolean $staSansRemise
     *
     * @return Stage
     */
    public function setStaSansRemise($staSansRemise)
    {
        $this->staSansRemise = $staSansRemise;

        return $this;
    }

    /**
     * Get staSansRemise
     *
     * @return boolean
     */
    public function getStaSansRemise()
    {
        return $this->staSansRemise;
    }

    /**
     * Get staId
     *
     * @return integer
     */
    public function getStaId()
    {
        return $this->staId;
    }

    /**
     * Set staAdhNumChef
     *
     * @param \AppBundle\Entity\Adherent $staAdhNumChef
     *
     * @return Stage
     */
    public function setStaAdhNumChef(\AppBundle\Entity\Adherent $staAdhNumChef = null)
    {
        $this->staAdhNumChef = $staAdhNumChef;

        return $this;
    }

    /**
     * Get staAdhNumChef
     *
     * @return \AppBundle\Entity\Adherent
     */
    public function getStaAdhNumChef()
    {
        return $this->staAdhNumChef;
    }

    /**
     * Set staSecuAdhNum
     *
     * @param \AppBundle\Entity\Adherent $staSecuAdhNum
     *
     * @return Stage
     */
    public function setStaSecuAdhNum(\AppBundle\Entity\Adherent $staSecuAdhNum = null)
    {
        $this->staSecuAdhNum = $staSecuAdhNum;

        return $this;
    }

    /**
     * Get staSecuAdhNum
     *
     * @return \AppBundle\Entity\Adherent
     */
    public function getStaSecuAdhNum()
    {
        return $this->staSecuAdhNum;
    }

    /**
     * Set staBat
     *
     * @param \AppBundle\Entity\Bateau $staBat
     *
     * @return Stage
     */
    public function setStaBat(\AppBundle\Entity\Bateau $staBat = null)
    {
        $this->staBat = $staBat;

        return $this;
    }

    /**
     * Get staBat
     *
     * @return \AppBundle\Entity\Bateau
     */
    public function getStaBat()
    {
        return $this->staBat;
    }

    /**
     * Set staPorCodeDep
     *
     * @param \AppBundle\Entity\Port $staPorCodeDep
     *
     * @return Stage
     */
    public function setStaPorCodeDep(\AppBundle\Entity\Port $staPorCodeDep = null)
    {
        $this->staPorCodeDep = $staPorCodeDep;

        return $this;
    }

    /**
     * Get staPorCodeDep
     *
     * @return \AppBundle\Entity\Port
     */
    public function getStaPorCodeDep()
    {
        return $this->staPorCodeDep;
    }

    /**
     * Set staPorCodeArr
     *
     * @param \AppBundle\Entity\Port $staPorCodeArr
     *
     * @return Stage
     */
    public function setStaPorCodeArr(\AppBundle\Entity\Port $staPorCodeArr = null)
    {
        $this->staPorCodeArr = $staPorCodeArr;

        return $this;
    }

    /**
     * Get staPorCodeArr
     *
     * @return \AppBundle\Entity\Port
     */
    public function getStaPorCodeArr()
    {
        return $this->staPorCodeArr;
    }

    /**
     * Set staSaiAnnee
     *
     * @param \AppBundle\Entity\Saison $staSaiAnnee
     *
     * @return Stage
     */
    public function setStaSaiAnnee(\AppBundle\Entity\Saison $staSaiAnnee = null)
    {
        $this->staSaiAnnee = $staSaiAnnee;

        return $this;
    }

    /**
     * Get staSaiAnnee
     *
     * @return \AppBundle\Entity\Saison
     */
    public function getStaSaiAnnee()
    {
        return $this->staSaiAnnee;
    }
}
