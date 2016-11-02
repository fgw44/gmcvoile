<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Param
 *
 * @ORM\Table(name="param")
 * @ORM\Entity
 */
class Param
{
    /**
     * @var string
     *
     * @ORM\Column(name="par_val", type="string", length=100, nullable=true)
     */
    private $parVal;

    /**
     * @var string
     *
     * @ORM\Column(name="par_key", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $parKey;



    /**
     * Set parVal
     *
     * @param string $parVal
     *
     * @return Param
     */
    public function setParVal($parVal)
    {
        $this->parVal = $parVal;

        return $this;
    }

    /**
     * Get parVal
     *
     * @return string
     */
    public function getParVal()
    {
        return $this->parVal;
    }

    /**
     * Get parKey
     *
     * @return string
     */
    public function getParKey()
    {
        return $this->parKey;
    }
}
