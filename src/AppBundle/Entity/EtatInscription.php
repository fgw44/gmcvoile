<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatInscription
 *
 * @ORM\Table(name="etat_inscription")
 * @ORM\Entity
 */
class EtatInscription
{
    /**
     * @var string
     *
     * @ORM\Column(name="eta_libelle", type="string", length=45, nullable=true)
     */
    private $etaLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="eta_code", type="string", length=1)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $etaCode;



    /**
     * Set etaLibelle
     *
     * @param string $etaLibelle
     *
     * @return EtatInscription
     */
    public function setEtaLibelle($etaLibelle)
    {
        $this->etaLibelle = $etaLibelle;

        return $this;
    }

    /**
     * Get etaLibelle
     *
     * @return string
     */
    public function getEtaLibelle()
    {
        return $this->etaLibelle;
    }

    /**
     * Get etaCode
     *
     * @return string
     */
    public function getEtaCode()
    {
        return $this->etaCode;
    }
}
