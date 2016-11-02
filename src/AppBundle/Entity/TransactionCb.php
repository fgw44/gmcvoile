<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransactionCb
 *
 * @ORM\Table(name="transaction_cb", indexes={@ORM\Index(name="fk_transaction_cb_panier1", columns={"tcb_pan_id"})})
 * @ORM\Entity
 */
class TransactionCb
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tcb_dat_crea", type="datetime", nullable=false)
     */
    private $tcbDatCrea = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="tcb_annee", type="smallint", nullable=false)
     */
    private $tcbAnnee;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcb_trans_id", type="integer", nullable=false)
     */
    private $tcbTransId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcb_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tcbId;

    /**
     * @var \AppBundle\Entity\Panier
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Panier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tcb_pan_id", referencedColumnName="pan_id")
     * })
     */
    private $tcbPan;



    /**
     * Set tcbDatCrea
     *
     * @param \DateTime $tcbDatCrea
     *
     * @return TransactionCb
     */
    public function setTcbDatCrea($tcbDatCrea)
    {
        $this->tcbDatCrea = $tcbDatCrea;

        return $this;
    }

    /**
     * Get tcbDatCrea
     *
     * @return \DateTime
     */
    public function getTcbDatCrea()
    {
        return $this->tcbDatCrea;
    }

    /**
     * Set tcbAnnee
     *
     * @param integer $tcbAnnee
     *
     * @return TransactionCb
     */
    public function setTcbAnnee($tcbAnnee)
    {
        $this->tcbAnnee = $tcbAnnee;

        return $this;
    }

    /**
     * Get tcbAnnee
     *
     * @return integer
     */
    public function getTcbAnnee()
    {
        return $this->tcbAnnee;
    }

    /**
     * Set tcbTransId
     *
     * @param integer $tcbTransId
     *
     * @return TransactionCb
     */
    public function setTcbTransId($tcbTransId)
    {
        $this->tcbTransId = $tcbTransId;

        return $this;
    }

    /**
     * Get tcbTransId
     *
     * @return integer
     */
    public function getTcbTransId()
    {
        return $this->tcbTransId;
    }

    /**
     * Get tcbId
     *
     * @return integer
     */
    public function getTcbId()
    {
        return $this->tcbId;
    }

    /**
     * Set tcbPan
     *
     * @param \AppBundle\Entity\Panier $tcbPan
     *
     * @return TransactionCb
     */
    public function setTcbPan(\AppBundle\Entity\Panier $tcbPan = null)
    {
        $this->tcbPan = $tcbPan;

        return $this;
    }

    /**
     * Get tcbPan
     *
     * @return \AppBundle\Entity\Panier
     */
    public function getTcbPan()
    {
        return $this->tcbPan;
    }
}
