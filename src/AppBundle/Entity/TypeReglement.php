<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeReglement
 *
 * @ORM\Table(name="type_reglement")
 * @ORM\Entity
 */
class TypeReglement
{
    /**
     * @var string
     *
     * @ORM\Column(name="tyr_libelle", type="string", length=15, nullable=true)
     */
    private $tyrLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="tyr_code", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tyrCode;



    /**
     * Set tyrLibelle
     *
     * @param string $tyrLibelle
     *
     * @return TypeReglement
     */
    public function setTyrLibelle($tyrLibelle)
    {
        $this->tyrLibelle = $tyrLibelle;

        return $this;
    }

    /**
     * Get tyrLibelle
     *
     * @return string
     */
    public function getTyrLibelle()
    {
        return $this->tyrLibelle;
    }

    /**
     * Get tyrCode
     *
     * @return string
     */
    public function getTyrCode()
    {
        return $this->tyrCode;
    }
}
