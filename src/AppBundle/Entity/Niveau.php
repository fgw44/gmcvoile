<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau
 *
 * @ORM\Table(name="niveau", uniqueConstraints={@ORM\UniqueConstraint(name="idx_niv_ordre", columns={"niv_ordre"})})
 * @ORM\Entity
 */
class Niveau
{
    /**
     * @var string
     *
     * @ORM\Column(name="niv_libelle", type="string", length=30, nullable=false)
     */
    private $nivLibelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="niv_ordre", type="smallint", nullable=false)
     */
    private $nivOrdre;

    /**
     * @var string
     *
     * @ORM\Column(name="niv_code", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nivCode;



    /**
     * Set nivLibelle
     *
     * @param string $nivLibelle
     *
     * @return Niveau
     */
    public function setNivLibelle($nivLibelle)
    {
        $this->nivLibelle = $nivLibelle;

        return $this;
    }

    /**
     * Get nivLibelle
     *
     * @return string
     */
    public function getNivLibelle()
    {
        return $this->nivLibelle;
    }

    /**
     * Set nivOrdre
     *
     * @param integer $nivOrdre
     *
     * @return Niveau
     */
    public function setNivOrdre($nivOrdre)
    {
        $this->nivOrdre = $nivOrdre;

        return $this;
    }

    /**
     * Get nivOrdre
     *
     * @return integer
     */
    public function getNivOrdre()
    {
        return $this->nivOrdre;
    }

    /**
     * Get nivCode
     *
     * @return string
     */
    public function getNivCode()
    {
        return $this->nivCode;
    }
}
