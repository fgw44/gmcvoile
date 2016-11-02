<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier", indexes={@ORM\Index(name="fk_panier_adherent", columns={"pan_adh_num"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var string
     *
     * @ORM\Column(name="pan_ref", type="string", length=20, nullable=false)
     */
    private $panRef;

    /**
     * @var string
     *
     * @ORM\Column(name="pan_etat_paiement", type="string", length=1, nullable=false)
     */
    private $panEtatPaiement = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="pan_tyr_code", type="string", length=3, nullable=true)
     */
    private $panTyrCode;

    /**
     * @var string
     *
     * @ORM\Column(name="pan_modalite", type="string", length=2, nullable=true)
     */
    private $panModalite;

    /**
     * @var string
     *
     * @ORM\Column(name="pan_echeances", type="string", length=21, nullable=true)
     */
    private $panEcheances;

    /**
     * @var string
     *
     * @ORM\Column(name="pan_uti_crea", type="string", length=150, nullable=false)
     */
    private $panUtiCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pan_dat_crea", type="datetime", nullable=false)
     */
    private $panDatCrea;

    /**
     * @var string
     *
     * @ORM\Column(name="pan_uti_modi", type="string", length=150, nullable=true)
     */
    private $panUtiModi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pan_dat_modi", type="datetime", nullable=true)
     */
    private $panDatModi;

    /**
     * @var integer
     *
     * @ORM\Column(name="pan_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $panId;

    /**
     * @var \AppBundle\Entity\Adherent
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Adherent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pan_adh_num", referencedColumnName="adh_num")
     * })
     */
    private $panAdhNum;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Adhesion", inversedBy="panadsPan")
     * @ORM\JoinTable(name="panads",
     *   joinColumns={
     *     @ORM\JoinColumn(name="panads_pan_id", referencedColumnName="pan_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="panads_ads_sai_annee", referencedColumnName="ads_sai_annee"),
     *     @ORM\JoinColumn(name="panads_ads_adh_num", referencedColumnName="ads_adh_num")
     *   }
     * )
     */
    private $panadsAdsSaiAnnee;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Inscription", inversedBy="paninsPan")
     * @ORM\JoinTable(name="panins",
     *   joinColumns={
     *     @ORM\JoinColumn(name="panins_pan_id", referencedColumnName="pan_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="panins_ins_adh_num", referencedColumnName="ins_adh_num"),
     *     @ORM\JoinColumn(name="panins_ins_sta_id", referencedColumnName="ins_sta_id")
     *   }
     * )
     */
    private $paninsInsAdhNum;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Licence", inversedBy="panlicPan")
     * @ORM\JoinTable(name="panlic",
     *   joinColumns={
     *     @ORM\JoinColumn(name="panlic_pan_id", referencedColumnName="pan_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="panlic_lic_sai_annee", referencedColumnName="lic_sai_annee"),
     *     @ORM\JoinColumn(name="panlic_lic_adh_num", referencedColumnName="lic_adh_num")
     *   }
     * )
     */
    private $panlicLicSaiAnnee;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->panadsAdsSaiAnnee = new \Doctrine\Common\Collections\ArrayCollection();
        $this->paninsInsAdhNum = new \Doctrine\Common\Collections\ArrayCollection();
        $this->panlicLicSaiAnnee = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set panRef
     *
     * @param string $panRef
     *
     * @return Panier
     */
    public function setPanRef($panRef)
    {
        $this->panRef = $panRef;

        return $this;
    }

    /**
     * Get panRef
     *
     * @return string
     */
    public function getPanRef()
    {
        return $this->panRef;
    }

    /**
     * Set panEtatPaiement
     *
     * @param string $panEtatPaiement
     *
     * @return Panier
     */
    public function setPanEtatPaiement($panEtatPaiement)
    {
        $this->panEtatPaiement = $panEtatPaiement;

        return $this;
    }

    /**
     * Get panEtatPaiement
     *
     * @return string
     */
    public function getPanEtatPaiement()
    {
        return $this->panEtatPaiement;
    }

    /**
     * Set panTyrCode
     *
     * @param string $panTyrCode
     *
     * @return Panier
     */
    public function setPanTyrCode($panTyrCode)
    {
        $this->panTyrCode = $panTyrCode;

        return $this;
    }

    /**
     * Get panTyrCode
     *
     * @return string
     */
    public function getPanTyrCode()
    {
        return $this->panTyrCode;
    }

    /**
     * Set panModalite
     *
     * @param string $panModalite
     *
     * @return Panier
     */
    public function setPanModalite($panModalite)
    {
        $this->panModalite = $panModalite;

        return $this;
    }

    /**
     * Get panModalite
     *
     * @return string
     */
    public function getPanModalite()
    {
        return $this->panModalite;
    }

    /**
     * Set panEcheances
     *
     * @param string $panEcheances
     *
     * @return Panier
     */
    public function setPanEcheances($panEcheances)
    {
        $this->panEcheances = $panEcheances;

        return $this;
    }

    /**
     * Get panEcheances
     *
     * @return string
     */
    public function getPanEcheances()
    {
        return $this->panEcheances;
    }

    /**
     * Set panUtiCrea
     *
     * @param string $panUtiCrea
     *
     * @return Panier
     */
    public function setPanUtiCrea($panUtiCrea)
    {
        $this->panUtiCrea = $panUtiCrea;

        return $this;
    }

    /**
     * Get panUtiCrea
     *
     * @return string
     */
    public function getPanUtiCrea()
    {
        return $this->panUtiCrea;
    }

    /**
     * Set panDatCrea
     *
     * @param \DateTime $panDatCrea
     *
     * @return Panier
     */
    public function setPanDatCrea($panDatCrea)
    {
        $this->panDatCrea = $panDatCrea;

        return $this;
    }

    /**
     * Get panDatCrea
     *
     * @return \DateTime
     */
    public function getPanDatCrea()
    {
        return $this->panDatCrea;
    }

    /**
     * Set panUtiModi
     *
     * @param string $panUtiModi
     *
     * @return Panier
     */
    public function setPanUtiModi($panUtiModi)
    {
        $this->panUtiModi = $panUtiModi;

        return $this;
    }

    /**
     * Get panUtiModi
     *
     * @return string
     */
    public function getPanUtiModi()
    {
        return $this->panUtiModi;
    }

    /**
     * Set panDatModi
     *
     * @param \DateTime $panDatModi
     *
     * @return Panier
     */
    public function setPanDatModi($panDatModi)
    {
        $this->panDatModi = $panDatModi;

        return $this;
    }

    /**
     * Get panDatModi
     *
     * @return \DateTime
     */
    public function getPanDatModi()
    {
        return $this->panDatModi;
    }

    /**
     * Get panId
     *
     * @return integer
     */
    public function getPanId()
    {
        return $this->panId;
    }

    /**
     * Set panAdhNum
     *
     * @param \AppBundle\Entity\Adherent $panAdhNum
     *
     * @return Panier
     */
    public function setPanAdhNum(\AppBundle\Entity\Adherent $panAdhNum = null)
    {
        $this->panAdhNum = $panAdhNum;

        return $this;
    }

    /**
     * Get panAdhNum
     *
     * @return \AppBundle\Entity\Adherent
     */
    public function getPanAdhNum()
    {
        return $this->panAdhNum;
    }

    /**
     * Add panadsAdsSaiAnnee
     *
     * @param \AppBundle\Entity\Adhesion $panadsAdsSaiAnnee
     *
     * @return Panier
     */
    public function addPanadsAdsSaiAnnee(\AppBundle\Entity\Adhesion $panadsAdsSaiAnnee)
    {
        $this->panadsAdsSaiAnnee[] = $panadsAdsSaiAnnee;

        return $this;
    }

    /**
     * Remove panadsAdsSaiAnnee
     *
     * @param \AppBundle\Entity\Adhesion $panadsAdsSaiAnnee
     */
    public function removePanadsAdsSaiAnnee(\AppBundle\Entity\Adhesion $panadsAdsSaiAnnee)
    {
        $this->panadsAdsSaiAnnee->removeElement($panadsAdsSaiAnnee);
    }

    /**
     * Get panadsAdsSaiAnnee
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPanadsAdsSaiAnnee()
    {
        return $this->panadsAdsSaiAnnee;
    }

    /**
     * Add paninsInsAdhNum
     *
     * @param \AppBundle\Entity\Inscription $paninsInsAdhNum
     *
     * @return Panier
     */
    public function addPaninsInsAdhNum(\AppBundle\Entity\Inscription $paninsInsAdhNum)
    {
        $this->paninsInsAdhNum[] = $paninsInsAdhNum;

        return $this;
    }

    /**
     * Remove paninsInsAdhNum
     *
     * @param \AppBundle\Entity\Inscription $paninsInsAdhNum
     */
    public function removePaninsInsAdhNum(\AppBundle\Entity\Inscription $paninsInsAdhNum)
    {
        $this->paninsInsAdhNum->removeElement($paninsInsAdhNum);
    }

    /**
     * Get paninsInsAdhNum
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPaninsInsAdhNum()
    {
        return $this->paninsInsAdhNum;
    }

    /**
     * Add panlicLicSaiAnnee
     *
     * @param \AppBundle\Entity\Licence $panlicLicSaiAnnee
     *
     * @return Panier
     */
    public function addPanlicLicSaiAnnee(\AppBundle\Entity\Licence $panlicLicSaiAnnee)
    {
        $this->panlicLicSaiAnnee[] = $panlicLicSaiAnnee;

        return $this;
    }

    /**
     * Remove panlicLicSaiAnnee
     *
     * @param \AppBundle\Entity\Licence $panlicLicSaiAnnee
     */
    public function removePanlicLicSaiAnnee(\AppBundle\Entity\Licence $panlicLicSaiAnnee)
    {
        $this->panlicLicSaiAnnee->removeElement($panlicLicSaiAnnee);
    }

    /**
     * Get panlicLicSaiAnnee
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPanlicLicSaiAnnee()
    {
        return $this->panlicLicSaiAnnee;
    }
}
