<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commune
 *
 * @ORM\Table(name="commune", indexes={@ORM\Index(name="idx_com_code_postal", columns={"com_code_postal"})})
 * @ORM\Entity
 */
class Commune
{
    /**
     * @var string
     *
     * @ORM\Column(name="com_nom", type="string", length=30, nullable=false)
     */
    private $comNom;

    /**
     * @var string
     *
     * @ORM\Column(name="com_code_postal", type="string", length=5, nullable=false)
     */
    private $comCodePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="com_dpt", type="string", length=30, nullable=false)
     */
    private $comDpt;

    /**
     * @var string
     *
     * @ORM\Column(name="com_code_insee", type="string", length=5)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comCodeInsee;



    /**
     * Set comNom
     *
     * @param string $comNom
     *
     * @return Commune
     */
    public function setComNom($comNom)
    {
        $this->comNom = $comNom;

        return $this;
    }

    /**
     * Get comNom
     *
     * @return string
     */
    public function getComNom()
    {
        return $this->comNom;
    }

    /**
     * Set comCodePostal
     *
     * @param string $comCodePostal
     *
     * @return Commune
     */
    public function setComCodePostal($comCodePostal)
    {
        $this->comCodePostal = $comCodePostal;

        return $this;
    }

    /**
     * Get comCodePostal
     *
     * @return string
     */
    public function getComCodePostal()
    {
        return $this->comCodePostal;
    }

    /**
     * Set comDpt
     *
     * @param string $comDpt
     *
     * @return Commune
     */
    public function setComDpt($comDpt)
    {
        $this->comDpt = $comDpt;

        return $this;
    }

    /**
     * Get comDpt
     *
     * @return string
     */
    public function getComDpt()
    {
        return $this->comDpt;
    }

    /**
     * Get comCodeInsee
     *
     * @return string
     */
    public function getComCodeInsee()
    {
        return $this->comCodeInsee;
    }
}
