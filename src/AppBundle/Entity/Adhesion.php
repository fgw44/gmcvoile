<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adhesion
 *
 * @ORM\Table(name="adhesion", indexes={@ORM\Index(name="fk_adhesion_saison", columns={"ads_sai_annee"}), @ORM\Index(name="fk_adhesion_adherent", columns={"ads_adh_num"}), @ORM\Index(name="fk_adhesion_type_adhesion", columns={"ads_tya_code"})})
 * @ORM\Entity
 */
class Adhesion
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ads_date", type="date", nullable=false)
     */
    private $adsDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ads_mt_avoir", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $adsMtAvoir;

    /**
     * @var string
     *
     * @ORM\Column(name="ads_mt_regle", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $adsMtRegle = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ads_is_regle", type="boolean", nullable=false)
     */
    private $adsIsRegle = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ads_is_retard_reglement", type="boolean", nullable=false)
     */
    private $adsIsRetardReglement = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ads_is_annee_suivante", type="boolean", nullable=false)
     */
    private $adsIsAnneeSuivante = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ads_uti_crea", type="string", length=150, nullable=false)
     */
    private $adsUtiCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ads_dat_crea", type="datetime", nullable=false)
     */
    private $adsDatCrea;

    /**
     * @var string
     *
     * @ORM\Column(name="ads_uti_modi", type="string", length=150, nullable=true)
     */
    private $adsUtiModi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ads_dat_modi", type="datetime", nullable=true)
     */
    private $adsDatModi;

    /**
     * @var \AppBundle\Entity\Adherent
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Adherent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ads_adh_num", referencedColumnName="adh_num")
     * })
     */
    private $adsAdhNum;

    /**
     * @var \AppBundle\Entity\Saison
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Saison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ads_sai_annee", referencedColumnName="sai_annee")
     * })
     */
    private $adsSaiAnnee;

    /**
     * @var \AppBundle\Entity\TypeAdhesion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeAdhesion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ads_tya_code", referencedColumnName="tya_code")
     * })
     */
    private $adsTyaCode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Panier", mappedBy="panadsAdsSaiAnnee")
     */
    private $panadsPan;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->panadsPan = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set adsDate
     *
     * @param \DateTime $adsDate
     *
     * @return Adhesion
     */
    public function setAdsDate($adsDate)
    {
        $this->adsDate = $adsDate;

        return $this;
    }

    /**
     * Get adsDate
     *
     * @return \DateTime
     */
    public function getAdsDate()
    {
        return $this->adsDate;
    }

    /**
     * Set adsMtAvoir
     *
     * @param string $adsMtAvoir
     *
     * @return Adhesion
     */
    public function setAdsMtAvoir($adsMtAvoir)
    {
        $this->adsMtAvoir = $adsMtAvoir;

        return $this;
    }

    /**
     * Get adsMtAvoir
     *
     * @return string
     */
    public function getAdsMtAvoir()
    {
        return $this->adsMtAvoir;
    }

    /**
     * Set adsMtRegle
     *
     * @param string $adsMtRegle
     *
     * @return Adhesion
     */
    public function setAdsMtRegle($adsMtRegle)
    {
        $this->adsMtRegle = $adsMtRegle;

        return $this;
    }

    /**
     * Get adsMtRegle
     *
     * @return string
     */
    public function getAdsMtRegle()
    {
        return $this->adsMtRegle;
    }

    /**
     * Set adsIsRegle
     *
     * @param boolean $adsIsRegle
     *
     * @return Adhesion
     */
    public function setAdsIsRegle($adsIsRegle)
    {
        $this->adsIsRegle = $adsIsRegle;

        return $this;
    }

    /**
     * Get adsIsRegle
     *
     * @return boolean
     */
    public function getAdsIsRegle()
    {
        return $this->adsIsRegle;
    }

    /**
     * Set adsIsRetardReglement
     *
     * @param boolean $adsIsRetardReglement
     *
     * @return Adhesion
     */
    public function setAdsIsRetardReglement($adsIsRetardReglement)
    {
        $this->adsIsRetardReglement = $adsIsRetardReglement;

        return $this;
    }

    /**
     * Get adsIsRetardReglement
     *
     * @return boolean
     */
    public function getAdsIsRetardReglement()
    {
        return $this->adsIsRetardReglement;
    }

    /**
     * Set adsIsAnneeSuivante
     *
     * @param boolean $adsIsAnneeSuivante
     *
     * @return Adhesion
     */
    public function setAdsIsAnneeSuivante($adsIsAnneeSuivante)
    {
        $this->adsIsAnneeSuivante = $adsIsAnneeSuivante;

        return $this;
    }

    /**
     * Get adsIsAnneeSuivante
     *
     * @return boolean
     */
    public function getAdsIsAnneeSuivante()
    {
        return $this->adsIsAnneeSuivante;
    }

    /**
     * Set adsUtiCrea
     *
     * @param string $adsUtiCrea
     *
     * @return Adhesion
     */
    public function setAdsUtiCrea($adsUtiCrea)
    {
        $this->adsUtiCrea = $adsUtiCrea;

        return $this;
    }

    /**
     * Get adsUtiCrea
     *
     * @return string
     */
    public function getAdsUtiCrea()
    {
        return $this->adsUtiCrea;
    }

    /**
     * Set adsDatCrea
     *
     * @param \DateTime $adsDatCrea
     *
     * @return Adhesion
     */
    public function setAdsDatCrea($adsDatCrea)
    {
        $this->adsDatCrea = $adsDatCrea;

        return $this;
    }

    /**
     * Get adsDatCrea
     *
     * @return \DateTime
     */
    public function getAdsDatCrea()
    {
        return $this->adsDatCrea;
    }

    /**
     * Set adsUtiModi
     *
     * @param string $adsUtiModi
     *
     * @return Adhesion
     */
    public function setAdsUtiModi($adsUtiModi)
    {
        $this->adsUtiModi = $adsUtiModi;

        return $this;
    }

    /**
     * Get adsUtiModi
     *
     * @return string
     */
    public function getAdsUtiModi()
    {
        return $this->adsUtiModi;
    }

    /**
     * Set adsDatModi
     *
     * @param \DateTime $adsDatModi
     *
     * @return Adhesion
     */
    public function setAdsDatModi($adsDatModi)
    {
        $this->adsDatModi = $adsDatModi;

        return $this;
    }

    /**
     * Get adsDatModi
     *
     * @return \DateTime
     */
    public function getAdsDatModi()
    {
        return $this->adsDatModi;
    }

    /**
     * Set adsAdhNum
     *
     * @param \AppBundle\Entity\Adherent $adsAdhNum
     *
     * @return Adhesion
     */
    public function setAdsAdhNum(\AppBundle\Entity\Adherent $adsAdhNum)
    {
        $this->adsAdhNum = $adsAdhNum;

        return $this;
    }

    /**
     * Get adsAdhNum
     *
     * @return \AppBundle\Entity\Adherent
     */
    public function getAdsAdhNum()
    {
        return $this->adsAdhNum;
    }

    /**
     * Set adsSaiAnnee
     *
     * @param \AppBundle\Entity\Saison $adsSaiAnnee
     *
     * @return Adhesion
     */
    public function setAdsSaiAnnee(\AppBundle\Entity\Saison $adsSaiAnnee)
    {
        $this->adsSaiAnnee = $adsSaiAnnee;

        return $this;
    }

    /**
     * Get adsSaiAnnee
     *
     * @return \AppBundle\Entity\Saison
     */
    public function getAdsSaiAnnee()
    {
        return $this->adsSaiAnnee;
    }

    /**
     * Set adsTyaCode
     *
     * @param \AppBundle\Entity\TypeAdhesion $adsTyaCode
     *
     * @return Adhesion
     */
    public function setAdsTyaCode(\AppBundle\Entity\TypeAdhesion $adsTyaCode = null)
    {
        $this->adsTyaCode = $adsTyaCode;

        return $this;
    }

    /**
     * Get adsTyaCode
     *
     * @return \AppBundle\Entity\TypeAdhesion
     */
    public function getAdsTyaCode()
    {
        return $this->adsTyaCode;
    }

    /**
     * Add panadsPan
     *
     * @param \AppBundle\Entity\Panier $panadsPan
     *
     * @return Adhesion
     */
    public function addPanadsPan(\AppBundle\Entity\Panier $panadsPan)
    {
        $this->panadsPan[] = $panadsPan;

        return $this;
    }

    /**
     * Remove panadsPan
     *
     * @param \AppBundle\Entity\Panier $panadsPan
     */
    public function removePanadsPan(\AppBundle\Entity\Panier $panadsPan)
    {
        $this->panadsPan->removeElement($panadsPan);
    }

    /**
     * Get panadsPan
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPanadsPan()
    {
        return $this->panadsPan;
    }
}
