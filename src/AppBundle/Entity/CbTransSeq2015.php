<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CbTransSeq2015
 *
 * @ORM\Table(name="cb_trans_seq_2015", uniqueConstraints={@ORM\UniqueConstraint(name="tsq_tstamp_UNIQUE", columns={"tsq_tstamp"})})
 * @ORM\Entity
 */
class CbTransSeq2015
{
    /**
     * @var string
     *
     * @ORM\Column(name="tsq_tstamp", type="string", length=17, nullable=false)
     */
    private $tsqTstamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="tsq_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tsqId;



    /**
     * Set tsqTstamp
     *
     * @param string $tsqTstamp
     *
     * @return CbTransSeq2015
     */
    public function setTsqTstamp($tsqTstamp)
    {
        $this->tsqTstamp = $tsqTstamp;

        return $this;
    }

    /**
     * Get tsqTstamp
     *
     * @return string
     */
    public function getTsqTstamp()
    {
        return $this->tsqTstamp;
    }

    /**
     * Get tsqId
     *
     * @return integer
     */
    public function getTsqId()
    {
        return $this->tsqId;
    }
}
