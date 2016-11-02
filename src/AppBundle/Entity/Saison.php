<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity
 */
class Saison
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="sai_isactive", type="boolean", nullable=false)
     */
    private $saiIsactive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sai_annee", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $saiAnnee;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Adherent", inversedBy="licSaiAnnee")
     * @ORM\JoinTable(name="licence",
     *   joinColumns={
     *     @ORM\JoinColumn(name="lic_sai_annee", referencedColumnName="sai_annee")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="lic_adh_num", referencedColumnName="adh_num")
     *   }
     * )
     */
    private $licAdhNum;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\TypeAdhesion", mappedBy="mtaSaiAnnee")
     */
    private $mtaTyaCode;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->licAdhNum = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mtaTyaCode = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set saiIsactive
     *
     * @param boolean $saiIsactive
     *
     * @return Saison
     */
    public function setSaiIsactive($saiIsactive)
    {
        $this->saiIsactive = $saiIsactive;

        return $this;
    }

    /**
     * Get saiIsactive
     *
     * @return boolean
     */
    public function getSaiIsactive()
    {
        return $this->saiIsactive;
    }

    /**
     * Get saiAnnee
     *
     * @return integer
     */
    public function getSaiAnnee()
    {
        return $this->saiAnnee;
    }

    /**
     * Add licAdhNum
     *
     * @param \AppBundle\Entity\Adherent $licAdhNum
     *
     * @return Saison
     */
    public function addLicAdhNum(\AppBundle\Entity\Adherent $licAdhNum)
    {
        $this->licAdhNum[] = $licAdhNum;

        return $this;
    }

    /**
     * Remove licAdhNum
     *
     * @param \AppBundle\Entity\Adherent $licAdhNum
     */
    public function removeLicAdhNum(\AppBundle\Entity\Adherent $licAdhNum)
    {
        $this->licAdhNum->removeElement($licAdhNum);
    }

    /**
     * Get licAdhNum
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLicAdhNum()
    {
        return $this->licAdhNum;
    }

    /**
     * Add mtaTyaCode
     *
     * @param \AppBundle\Entity\TypeAdhesion $mtaTyaCode
     *
     * @return Saison
     */
    public function addMtaTyaCode(\AppBundle\Entity\TypeAdhesion $mtaTyaCode)
    {
        $this->mtaTyaCode[] = $mtaTyaCode;

        return $this;
    }

    /**
     * Remove mtaTyaCode
     *
     * @param \AppBundle\Entity\TypeAdhesion $mtaTyaCode
     */
    public function removeMtaTyaCode(\AppBundle\Entity\TypeAdhesion $mtaTyaCode)
    {
        $this->mtaTyaCode->removeElement($mtaTyaCode);
    }

    /**
     * Get mtaTyaCode
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMtaTyaCode()
    {
        return $this->mtaTyaCode;
    }
}
