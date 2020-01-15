<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodeQr
 *
 * @ORM\Table(name="code_qr")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CodeQrRepository")
 */
class CodeQr
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateGeneration", type="datetime")
     */
    private $dateGeneration;


    /**
     * @var string
     *
     * @ORM\Column(name="codeQr", type="string", length=150)
     */
    private $codeQr;

    /**
     * @var string
     *
     * @ORM\Column(name="codeQrEncode", type="string", length=150,nullable=true)
     */
    private $codeQrEncode;

    /**
     * @var bool
     *
     * @ORM\Column(name="estUtilise", type="boolean")
     */
    private $estUtilise;



    /**
     * @var string
     *
     * @ORM\Column(name="logo_url", type="string", length=255, nullable=true)
     */
    private $logoUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="logo_url_absolue", type="string", length=255, nullable=true)
     */
    private $logoUrlAbsolue;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Evenement")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $evenement;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Visiteur")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $visiteur;







    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateGeneration
     *
     * @param \DateTime $dateGeneration
     *
     * @return CodeQr
     */
    public function setDateGeneration($dateGeneration)
    {
        $this->dateGeneration = $dateGeneration;

        return $this;
    }

    /**
     * Get dateGeneration
     *
     * @return \DateTime
     */
    public function getDateGeneration()
    {
        return $this->dateGeneration;
    }

    /**
     * Set codeQr
     *
     * @param string $codeQr
     *
     * @return CodeQr
     */
    public function setCodeQr($codeQr)
    {
        $this->codeQr = $codeQr;

        return $this;
    }

    /**
     * Get codeQr
     *
     * @return string
     */
    public function getCodeQr()
    {
        return $this->codeQr;
    }

    /**
     * Set codeQrEncode
     *
     * @param string $codeQrEncode
     *
     * @return CodeQr
     */
    public function setCodeQrEncode($codeQrEncode)
    {
        $this->codeQrEncode = $codeQrEncode;

        return $this;
    }

    /**
     * Get codeQrEncode
     *
     * @return string
     */
    public function getCodeQrEncode()
    {
        return $this->codeQrEncode;
    }

    /**
     * Set estUtilise
     *
     * @param boolean $estUtilise
     *
     * @return CodeQr
     */
    public function setEstUtilise($estUtilise)
    {
        $this->estUtilise = $estUtilise;

        return $this;
    }

    /**
     * Get estUtilise
     *
     * @return boolean
     */
    public function getEstUtilise()
    {
        return $this->estUtilise;
    }

    /**
     * Set logoUrl
     *
     * @param string $logoUrl
     *
     * @return CodeQr
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;

        return $this;
    }

    /**
     * Get logoUrl
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Set logoUrlAbsolue
     *
     * @param string $logoUrlAbsolue
     *
     * @return CodeQr
     */
    public function setLogoUrlAbsolue($logoUrlAbsolue)
    {
        $this->logoUrlAbsolue = $logoUrlAbsolue;

        return $this;
    }

    /**
     * Get logoUrlAbsolue
     *
     * @return string
     */
    public function getLogoUrlAbsolue()
    {
        return $this->logoUrlAbsolue;
    }

    /**
     * Set evenement
     *
     * @param \AppBundle\Entity\Evenement $evenement
     *
     * @return CodeQr
     */
    public function setEvenement(\AppBundle\Entity\Evenement $evenement)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return \AppBundle\Entity\Evenement
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * Set visiteur
     *
     * @param \AppBundle\Entity\Visiteur $visiteur
     *
     * @return CodeQr
     */
    public function setVisiteur(\AppBundle\Entity\Visiteur $visiteur)
    {
        $this->visiteur = $visiteur;

        return $this;
    }

    /**
     * Get visiteur
     *
     * @return \AppBundle\Entity\Visiteur
     */
    public function getVisiteur()
    {
        return $this->visiteur;
    }
}
