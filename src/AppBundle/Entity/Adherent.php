<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adherent
 *
 * @ORM\Table(name="adherent", uniqueConstraints={@ORM\UniqueConstraint(name="idx_web_username", columns={"adh_web_username"})}, indexes={@ORM\Index(name="fk_adherent_pays", columns={"adh_pay_code"}), @ORM\Index(name="fk_adherent_niveau", columns={"adh_niv_code"}), @ORM\Index(name="idx_is_supprime", columns={"adh_is_supprime"})})
 * @ORM\Entity(repositoryClass="AppBundle\Entity\AdherentRepository")
 */
class Adherent
{
    /**
     * @var string
     *
     * @ORM\Column(name="adh_nom", type="string", length=50, nullable=true)
     */
    private $adhNom;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_prenom", type="string", length=30, nullable=true)
     */
    private $adhPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_code_sexe", type="string", length=1, nullable=false)
     */
    private $adhCodeSexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="adh_datnai", type="date", nullable=true)
     */
    private $adhDatnai;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_profession", type="string", length=50, nullable=true)
     */
    private $adhProfession;

    /**
     * @var boolean
     *
     * @ORM\Column(name="adh_volent", type="boolean", nullable=true)
     */
    private $adhVolent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="adh_volperm", type="boolean", nullable=true)
     */
    private $adhVolperm;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_connupar", type="string", length=50, nullable=true)
     */
    private $adhConnupar;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_urg_nom", type="string", length=50, nullable=true)
     */
    private $adhUrgNom;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_urg_prenom", type="string", length=30, nullable=true)
     */
    private $adhUrgPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_urg_tel", type="string", length=15, nullable=true)
     */
    private $adhUrgTel;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_adresse1", type="string", length=50, nullable=true)
     */
    private $adhAdresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_adresse2", type="string", length=50, nullable=true)
     */
    private $adhAdresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_cp", type="string", length=10, nullable=true)
     */
    private $adhCp;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_ville", type="string", length=50, nullable=true)
     */
    private $adhVille;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_tel_fixe", type="string", length=15, nullable=true)
     */
    private $adhTelFixe;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_tel_port", type="string", length=15, nullable=true)
     */
    private $adhTelPort;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_email", type="string", length=80, nullable=true)
     */
    private $adhEmail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="adh_optout", type="boolean", nullable=true)
     */
    private $adhOptout;

    /**
     * @var boolean
     *
     * @ORM\Column(name="adh_ischef", type="boolean", nullable=false)
     */
    private $adhIschef = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="adh_uti_crea", type="string", length=150, nullable=false)
     */
    private $adhUtiCrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="adh_dat_crea", type="datetime", nullable=false)
     */
    private $adhDatCrea;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_uti_modi", type="string", length=150, nullable=true)
     */
    private $adhUtiModi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="adh_dat_modi", type="datetime", nullable=true)
     */
    private $adhDatModi;

    /**
     * @var string
     *
     * @ORM\Column(name="adh_web_username", type="string", length=150, nullable=true)
     */
    private $adhWebUsername;

    /**
     * @var boolean
     *
     * @ORM\Column(name="adh_is_supprime", type="boolean", nullable=true)
     */
    private $adhIsSupprime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="adh_motif_suppr", type="string", length=100, nullable=true)
     */
    private $adhMotifSuppr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="adh_isactif", type="boolean", nullable=false)
     */
    private $adhIsactif = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="adh_iscodir", type="boolean", nullable=false)
     */
    private $adhIscodir = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="adh_num", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $adhNum;

    /**
     * @var \AppBundle\Entity\Niveau
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adh_niv_code", referencedColumnName="niv_code")
     * })
     */
    private $adhNivCode;

    /**
     * @var \AppBundle\Entity\Pays
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adh_pay_code", referencedColumnName="pay_code")
     * })
     */
    private $adhPayCode;

    /**
     * Constructor
     */
    public function __construct()
    {
    
    }


    /**
     * Set adhNom
     *
     * @param string $adhNom
     *
     * @return Adherent
     */
    public function setAdhNom($adhNom)
    {
        $this->adhNom = $adhNom;

        return $this;
    }

    /**
     * Get adhNom
     *
     * @return string
     */
    public function getAdhNom()
    {
        return $this->adhNom;
    }

    /**
     * Set adhPrenom
     *
     * @param string $adhPrenom
     *
     * @return Adherent
     */
    public function setAdhPrenom($adhPrenom)
    {
        $this->adhPrenom = $adhPrenom;

        return $this;
    }

    /**
     * Get adhPrenom
     *
     * @return string
     */
    public function getAdhPrenom()
    {
        return $this->adhPrenom;
    }

    /**
     * Set adhCodeSexe
     *
     * @param string $adhCodeSexe
     *
     * @return Adherent
     */
    public function setAdhCodeSexe($adhCodeSexe)
    {
        $this->adhCodeSexe = $adhCodeSexe;

        return $this;
    }

    /**
     * Get adhCodeSexe
     *
     * @return string
     */
    public function getAdhCodeSexe()
    {
        return $this->adhCodeSexe;
    }

    /**
     * Set adhDatnai
     *
     * @param \DateTime $adhDatnai
     *
     * @return Adherent
     */
    public function setAdhDatnai($adhDatnai)
    {
        $this->adhDatnai = $adhDatnai;

        return $this;
    }

    /**
     * Get adhDatnai
     *
     * @return \DateTime
     */
    public function getAdhDatnai()
    {
        return $this->adhDatnai;
    }

    /**
     * Set adhProfession
     *
     * @param string $adhProfession
     *
     * @return Adherent
     */
    public function setAdhProfession($adhProfession)
    {
        $this->adhProfession = $adhProfession;

        return $this;
    }

    /**
     * Get adhProfession
     *
     * @return string
     */
    public function getAdhProfession()
    {
        return $this->adhProfession;
    }

    /**
     * Set adhVolent
     *
     * @param boolean $adhVolent
     *
     * @return Adherent
     */
    public function setAdhVolent($adhVolent)
    {
        $this->adhVolent = $adhVolent;

        return $this;
    }

    /**
     * Get adhVolent
     *
     * @return boolean
     */
    public function getAdhVolent()
    {
        return $this->adhVolent;
    }

    /**
     * Set adhVolperm
     *
     * @param boolean $adhVolperm
     *
     * @return Adherent
     */
    public function setAdhVolperm($adhVolperm)
    {
        $this->adhVolperm = $adhVolperm;

        return $this;
    }

    /**
     * Get adhVolperm
     *
     * @return boolean
     */
    public function getAdhVolperm()
    {
        return $this->adhVolperm;
    }

    /**
     * Set adhConnupar
     *
     * @param string $adhConnupar
     *
     * @return Adherent
     */
    public function setAdhConnupar($adhConnupar)
    {
        $this->adhConnupar = $adhConnupar;

        return $this;
    }

    /**
     * Get adhConnupar
     *
     * @return string
     */
    public function getAdhConnupar()
    {
        return $this->adhConnupar;
    }

    /**
     * Set adhUrgNom
     *
     * @param string $adhUrgNom
     *
     * @return Adherent
     */
    public function setAdhUrgNom($adhUrgNom)
    {
        $this->adhUrgNom = $adhUrgNom;

        return $this;
    }

    /**
     * Get adhUrgNom
     *
     * @return string
     */
    public function getAdhUrgNom()
    {
        return $this->adhUrgNom;
    }

    /**
     * Set adhUrgPrenom
     *
     * @param string $adhUrgPrenom
     *
     * @return Adherent
     */
    public function setAdhUrgPrenom($adhUrgPrenom)
    {
        $this->adhUrgPrenom = $adhUrgPrenom;

        return $this;
    }

    /**
     * Get adhUrgPrenom
     *
     * @return string
     */
    public function getAdhUrgPrenom()
    {
        return $this->adhUrgPrenom;
    }

    /**
     * Set adhUrgTel
     *
     * @param string $adhUrgTel
     *
     * @return Adherent
     */
    public function setAdhUrgTel($adhUrgTel)
    {
        $this->adhUrgTel = $adhUrgTel;

        return $this;
    }

    /**
     * Get adhUrgTel
     *
     * @return string
     */
    public function getAdhUrgTel()
    {
        return $this->adhUrgTel;
    }

    /**
     * Set adhAdresse1
     *
     * @param string $adhAdresse1
     *
     * @return Adherent
     */
    public function setAdhAdresse1($adhAdresse1)
    {
        $this->adhAdresse1 = $adhAdresse1;

        return $this;
    }

    /**
     * Get adhAdresse1
     *
     * @return string
     */
    public function getAdhAdresse1()
    {
        return $this->adhAdresse1;
    }

    /**
     * Set adhAdresse2
     *
     * @param string $adhAdresse2
     *
     * @return Adherent
     */
    public function setAdhAdresse2($adhAdresse2)
    {
        $this->adhAdresse2 = $adhAdresse2;

        return $this;
    }

    /**
     * Get adhAdresse2
     *
     * @return string
     */
    public function getAdhAdresse2()
    {
        return $this->adhAdresse2;
    }

    /**
     * Set adhCp
     *
     * @param string $adhCp
     *
     * @return Adherent
     */
    public function setAdhCp($adhCp)
    {
        $this->adhCp = $adhCp;

        return $this;
    }

    /**
     * Get adhCp
     *
     * @return string
     */
    public function getAdhCp()
    {
        return $this->adhCp;
    }

    /**
     * Set adhVille
     *
     * @param string $adhVille
     *
     * @return Adherent
     */
    public function setAdhVille($adhVille)
    {
        $this->adhVille = $adhVille;

        return $this;
    }

    /**
     * Get adhVille
     *
     * @return string
     */
    public function getAdhVille()
    {
        return $this->adhVille;
    }

    /**
     * Set adhTelFixe
     *
     * @param string $adhTelFixe
     *
     * @return Adherent
     */
    public function setAdhTelFixe($adhTelFixe)
    {
        $this->adhTelFixe = $adhTelFixe;

        return $this;
    }

    /**
     * Get adhTelFixe
     *
     * @return string
     */
    public function getAdhTelFixe()
    {
        return $this->adhTelFixe;
    }

    /**
     * Set adhTelPort
     *
     * @param string $adhTelPort
     *
     * @return Adherent
     */
    public function setAdhTelPort($adhTelPort)
    {
        $this->adhTelPort = $adhTelPort;

        return $this;
    }

    /**
     * Get adhTelPort
     *
     * @return string
     */
    public function getAdhTelPort()
    {
        return $this->adhTelPort;
    }

    /**
     * Set adhEmail
     *
     * @param string $adhEmail
     *
     * @return Adherent
     */
    public function setAdhEmail($adhEmail)
    {
        $this->adhEmail = $adhEmail;

        return $this;
    }

    /**
     * Get adhEmail
     *
     * @return string
     */
    public function getAdhEmail()
    {
        return $this->adhEmail;
    }

    /**
     * Set adhOptout
     *
     * @param boolean $adhOptout
     *
     * @return Adherent
     */
    public function setAdhOptout($adhOptout)
    {
        $this->adhOptout = $adhOptout;

        return $this;
    }

    /**
     * Get adhOptout
     *
     * @return boolean
     */
    public function getAdhOptout()
    {
        return $this->adhOptout;
    }

    /**
     * Set adhIschef
     *
     * @param boolean $adhIschef
     *
     * @return Adherent
     */
    public function setAdhIschef($adhIschef)
    {
        $this->adhIschef = $adhIschef;

        return $this;
    }

    /**
     * Get adhIschef
     *
     * @return boolean
     */
    public function getAdhIschef()
    {
        return $this->adhIschef;
    }

    /**
     * Set adhUtiCrea
     *
     * @param string $adhUtiCrea
     *
     * @return Adherent
     */
    public function setAdhUtiCrea($adhUtiCrea)
    {
        $this->adhUtiCrea = $adhUtiCrea;

        return $this;
    }

    /**
     * Get adhUtiCrea
     *
     * @return string
     */
    public function getAdhUtiCrea()
    {
        return $this->adhUtiCrea;
    }

    /**
     * Set adhDatCrea
     *
     * @param \DateTime $adhDatCrea
     *
     * @return Adherent
     */
    public function setAdhDatCrea($adhDatCrea)
    {
        $this->adhDatCrea = $adhDatCrea;

        return $this;
    }

    /**
     * Get adhDatCrea
     *
     * @return \DateTime
     */
    public function getAdhDatCrea()
    {
        return $this->adhDatCrea;
    }

    /**
     * Set adhUtiModi
     *
     * @param string $adhUtiModi
     *
     * @return Adherent
     */
    public function setAdhUtiModi($adhUtiModi)
    {
        $this->adhUtiModi = $adhUtiModi;

        return $this;
    }

    /**
     * Get adhUtiModi
     *
     * @return string
     */
    public function getAdhUtiModi()
    {
        return $this->adhUtiModi;
    }

    /**
     * Set adhDatModi
     *
     * @param \DateTime $adhDatModi
     *
     * @return Adherent
     */
    public function setAdhDatModi($adhDatModi)
    {
        $this->adhDatModi = $adhDatModi;

        return $this;
    }

    /**
     * Get adhDatModi
     *
     * @return \DateTime
     */
    public function getAdhDatModi()
    {
        return $this->adhDatModi;
    }

    /**
     * Set adhWebUsername
     *
     * @param string $adhWebUsername
     *
     * @return Adherent
     */
    public function setAdhWebUsername($adhWebUsername)
    {
        $this->adhWebUsername = $adhWebUsername;

        return $this;
    }

    /**
     * Get adhWebUsername
     *
     * @return string
     */
    public function getAdhWebUsername()
    {
        return $this->adhWebUsername;
    }

    /**
     * Set adhIsSupprime
     *
     * @param boolean $adhIsSupprime
     *
     * @return Adherent
     */
    public function setAdhIsSupprime($adhIsSupprime)
    {
        $this->adhIsSupprime = $adhIsSupprime;

        return $this;
    }

    /**
     * Get adhIsSupprime
     *
     * @return boolean
     */
    public function getAdhIsSupprime()
    {
        return $this->adhIsSupprime;
    }

    /**
     * Set adhMotifSuppr
     *
     * @param string $adhMotifSuppr
     *
     * @return Adherent
     */
    public function setAdhMotifSuppr($adhMotifSuppr)
    {
        $this->adhMotifSuppr = $adhMotifSuppr;

        return $this;
    }

    /**
     * Get adhMotifSuppr
     *
     * @return string
     */
    public function getAdhMotifSuppr()
    {
        return $this->adhMotifSuppr;
    }

    /**
     * Set adhIsactif
     *
     * @param boolean $adhIsactif
     *
     * @return Adherent
     */
    public function setAdhIsactif($adhIsactif)
    {
        $this->adhIsactif = $adhIsactif;

        return $this;
    }

    /**
     * Get adhIsactif
     *
     * @return boolean
     */
    public function getAdhIsactif()
    {
        return $this->adhIsactif;
    }

    /**
     * Set adhIscodir
     *
     * @param boolean $adhIscodir
     *
     * @return Adherent
     */
    public function setAdhIscodir($adhIscodir)
    {
        $this->adhIscodir = $adhIscodir;

        return $this;
    }

    /**
     * Get adhIscodir
     *
     * @return boolean
     */
    public function getAdhIscodir()
    {
        return $this->adhIscodir;
    }

    /**
     * Get adhNum
     *
     * @return integer
     */
    public function getAdhNum()
    {
        return $this->adhNum;
    }

    /**
     * Set adhNivCode
     *
     * @param \AppBundle\Entity\Niveau $adhNivCode
     *
     * @return Adherent
     */
    public function setAdhNivCode(\AppBundle\Entity\Niveau $adhNivCode = null)
    {
        $this->adhNivCode = $adhNivCode;

        return $this;
    }

    /**
     * Get adhNivCode
     *
     * @return \AppBundle\Entity\Niveau
     */
    public function getAdhNivCode()
    {
        return $this->adhNivCode;
    }

    /**
     * Set adhPayCode
     *
     * @param \AppBundle\Entity\Pays $adhPayCode
     *
     * @return Adherent
     */
    public function setAdhPayCode(\AppBundle\Entity\Pays $adhPayCode = null)
    {
        $this->adhPayCode = $adhPayCode;

        return $this;
    }

    /**
     * Get adhPayCode
     *
     * @return \AppBundle\Entity\Pays
     */
    public function getAdhPayCode()
    {
        return $this->adhPayCode;
    }

}
