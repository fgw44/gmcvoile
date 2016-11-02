<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Port
 *
 * @ORM\Table(name="port")
 * @ORM\Entity
 */
class Port
{
    /**
     * @var string
     *
     * @ORM\Column(name="por_nom_ct", type="string", length=15, nullable=false)
     */
    private $porNomCt;

    /**
     * @var string
     *
     * @ORM\Column(name="por_nom_lg", type="string", length=30, nullable=false)
     */
    private $porNomLg;

    /**
     * @var string
     *
     * @ORM\Column(name="por_map_url", type="string", length=500, nullable=true)
     */
    private $porMapUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="por_code", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $porCode;



    /**
     * Set porNomCt
     *
     * @param string $porNomCt
     *
     * @return Port
     */
    public function setPorNomCt($porNomCt)
    {
        $this->porNomCt = $porNomCt;

        return $this;
    }

    /**
     * Get porNomCt
     *
     * @return string
     */
    public function getPorNomCt()
    {
        return $this->porNomCt;
    }

    /**
     * Set porNomLg
     *
     * @param string $porNomLg
     *
     * @return Port
     */
    public function setPorNomLg($porNomLg)
    {
        $this->porNomLg = $porNomLg;

        return $this;
    }

    /**
     * Get porNomLg
     *
     * @return string
     */
    public function getPorNomLg()
    {
        return $this->porNomLg;
    }

    /**
     * Set porMapUrl
     *
     * @param string $porMapUrl
     *
     * @return Port
     */
    public function setPorMapUrl($porMapUrl)
    {
        $this->porMapUrl = $porMapUrl;

        return $this;
    }

    /**
     * Get porMapUrl
     *
     * @return string
     */
    public function getPorMapUrl()
    {
        return $this->porMapUrl;
    }

    /**
     * Get porCode
     *
     * @return string
     */
    public function getPorCode()
    {
        return $this->porCode;
    }
}
