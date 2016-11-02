<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var string
     *
     * @ORM\Column(name="pay_libelle", type="string", length=50, nullable=false)
     */
    private $payLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="pay_code", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $payCode;



    /**
     * Set payLibelle
     *
     * @param string $payLibelle
     *
     * @return Pays
     */
    public function setPayLibelle($payLibelle)
    {
        $this->payLibelle = $payLibelle;

        return $this;
    }

    /**
     * Get payLibelle
     *
     * @return string
     */
    public function getPayLibelle()
    {
        return $this->payLibelle;
    }

    /**
     * Get payCode
     *
     * @return string
     */
    public function getPayCode()
    {
        return $this->payCode;
    }
}
