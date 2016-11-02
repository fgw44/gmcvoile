<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VadsResult
 *
 * @ORM\Table(name="vads_result")
 * @ORM\Entity
 */
class VadsResult
{
    /**
     * @var string
     *
     * @ORM\Column(name="vre_libelle", type="string", length=75, nullable=false)
     */
    private $vreLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="vre_result", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vreResult;



    /**
     * Set vreLibelle
     *
     * @param string $vreLibelle
     *
     * @return VadsResult
     */
    public function setVreLibelle($vreLibelle)
    {
        $this->vreLibelle = $vreLibelle;

        return $this;
    }

    /**
     * Get vreLibelle
     *
     * @return string
     */
    public function getVreLibelle()
    {
        return $this->vreLibelle;
    }

    /**
     * Get vreResult
     *
     * @return string
     */
    public function getVreResult()
    {
        return $this->vreResult;
    }
}
