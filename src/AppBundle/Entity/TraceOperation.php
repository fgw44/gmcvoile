<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TraceOperation
 *
 * @ORM\Table(name="trace_operation", indexes={@ORM\Index(name="fk_trace_operation_saison", columns={"trc_sai_annee"})})
 * @ORM\Entity
 */
class TraceOperation
{
    /**
     * @var string
     *
     * @ORM\Column(name="trc_lib_ope", type="string", length=2000, nullable=false)
     */
    private $trcLibOpe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="trc_date_heure", type="datetime", nullable=false)
     */
    private $trcDateHeure;

    /**
     * @var string
     *
     * @ORM\Column(name="trc_operateur", type="string", length=150, nullable=false)
     */
    private $trcOperateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="trc_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $trcId;

    /**
     * @var \AppBundle\Entity\Saison
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Saison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trc_sai_annee", referencedColumnName="sai_annee")
     * })
     */
    private $trcSaiAnnee;



    /**
     * Set trcLibOpe
     *
     * @param string $trcLibOpe
     *
     * @return TraceOperation
     */
    public function setTrcLibOpe($trcLibOpe)
    {
        $this->trcLibOpe = $trcLibOpe;

        return $this;
    }

    /**
     * Get trcLibOpe
     *
     * @return string
     */
    public function getTrcLibOpe()
    {
        return $this->trcLibOpe;
    }

    /**
     * Set trcDateHeure
     *
     * @param \DateTime $trcDateHeure
     *
     * @return TraceOperation
     */
    public function setTrcDateHeure($trcDateHeure)
    {
        $this->trcDateHeure = $trcDateHeure;

        return $this;
    }

    /**
     * Get trcDateHeure
     *
     * @return \DateTime
     */
    public function getTrcDateHeure()
    {
        return $this->trcDateHeure;
    }

    /**
     * Set trcOperateur
     *
     * @param string $trcOperateur
     *
     * @return TraceOperation
     */
    public function setTrcOperateur($trcOperateur)
    {
        $this->trcOperateur = $trcOperateur;

        return $this;
    }

    /**
     * Get trcOperateur
     *
     * @return string
     */
    public function getTrcOperateur()
    {
        return $this->trcOperateur;
    }

    /**
     * Set trcId
     *
     * @param integer $trcId
     *
     * @return TraceOperation
     */
    public function setTrcId($trcId)
    {
        $this->trcId = $trcId;

        return $this;
    }

    /**
     * Get trcId
     *
     * @return integer
     */
    public function getTrcId()
    {
        return $this->trcId;
    }

    /**
     * Set trcSaiAnnee
     *
     * @param \AppBundle\Entity\Saison $trcSaiAnnee
     *
     * @return TraceOperation
     */
    public function setTrcSaiAnnee(\AppBundle\Entity\Saison $trcSaiAnnee)
    {
        $this->trcSaiAnnee = $trcSaiAnnee;

        return $this;
    }

    /**
     * Get trcSaiAnnee
     *
     * @return \AppBundle\Entity\Saison
     */
    public function getTrcSaiAnnee()
    {
        return $this->trcSaiAnnee;
    }
}
