<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compte
 *
 * @ORM\Table(name="compte")
 * @ORM\Entity
 */
class Compte
{
    /**
     * @var string
     *
     * @ORM\Column(name="cpt_libelle", type="string", length=45, nullable=false)
     */
    private $cptLibelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpt_num", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cptNum;



    /**
     * Set cptLibelle
     *
     * @param string $cptLibelle
     *
     * @return Compte
     */
    public function setCptLibelle($cptLibelle)
    {
        $this->cptLibelle = $cptLibelle;

        return $this;
    }

    /**
     * Get cptLibelle
     *
     * @return string
     */
    public function getCptLibelle()
    {
        return $this->cptLibelle;
    }

    /**
     * Get cptNum
     *
     * @return integer
     */
    public function getCptNum()
    {
        return $this->cptNum;
    }
}
