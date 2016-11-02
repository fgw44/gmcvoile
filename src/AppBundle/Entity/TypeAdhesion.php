<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAdhesion
 *
 * @ORM\Table(name="type_adhesion")
 * @ORM\Entity
 */
class TypeAdhesion
{
    /**
     * @var string
     *
     * @ORM\Column(name="tya_libelle", type="string", length=100, nullable=false)
     */
    private $tyaLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="tya_code", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tyaCode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Saison", inversedBy="mtaTyaCode")
     * @ORM\JoinTable(name="montant_adhesion",
     *   joinColumns={
     *     @ORM\JoinColumn(name="mta_tya_code", referencedColumnName="tya_code")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="mta_sai_annee", referencedColumnName="sai_annee")
     *   }
     * )
     */
    private $mtaSaiAnnee;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mtaSaiAnnee = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set tyaLibelle
     *
     * @param string $tyaLibelle
     *
     * @return TypeAdhesion
     */
    public function setTyaLibelle($tyaLibelle)
    {
        $this->tyaLibelle = $tyaLibelle;

        return $this;
    }

    /**
     * Get tyaLibelle
     *
     * @return string
     */
    public function getTyaLibelle()
    {
        return $this->tyaLibelle;
    }

    /**
     * Get tyaCode
     *
     * @return string
     */
    public function getTyaCode()
    {
        return $this->tyaCode;
    }

    /**
     * Add mtaSaiAnnee
     *
     * @param \AppBundle\Entity\Saison $mtaSaiAnnee
     *
     * @return TypeAdhesion
     */
    public function addMtaSaiAnnee(\AppBundle\Entity\Saison $mtaSaiAnnee)
    {
        $this->mtaSaiAnnee[] = $mtaSaiAnnee;

        return $this;
    }

    /**
     * Remove mtaSaiAnnee
     *
     * @param \AppBundle\Entity\Saison $mtaSaiAnnee
     */
    public function removeMtaSaiAnnee(\AppBundle\Entity\Saison $mtaSaiAnnee)
    {
        $this->mtaSaiAnnee->removeElement($mtaSaiAnnee);
    }

    /**
     * Get mtaSaiAnnee
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMtaSaiAnnee()
    {
        return $this->mtaSaiAnnee;
    }
}
