<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EvenementRepository")
 */
class Evenement
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
     * @var string
     *
     * @ORM\Column(name="titreEvenenement", type="string", length=255)
     */
    private $titreEvenenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEvenement", type="datetime")
     */
    private $dateEvenement;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeEvenement", type="integer")
     */
    private $dureeEvenement;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeEvenement")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $typeEvenement;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ModaliteAccesEvenement")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $modaliteAccesEvenement;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Salle")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $salle;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Oeuvre")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $oeuvre;

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
     * Set titreEvenenement
     *
     * @param string $titreEvenenement
     *
     * @return Evenement
     */
    public function setTitreEvenenement($titreEvenenement)
    {
        $this->titreEvenenement = $titreEvenenement;

        return $this;
    }

    /**
     * Get titreEvenenement
     *
     * @return string
     */
    public function getTitreEvenenement()
    {
        return $this->titreEvenenement;
    }

    /**
     * Set dateEvenement
     *
     * @param \DateTime $dateEvenement
     *
     * @return Evenement
     */
    public function setDateEvenement($dateEvenement)
    {
        $this->dateEvenement = $dateEvenement;

        return $this;
    }

    /**
     * Get dateEvenement
     *
     * @return \DateTime
     */
    public function getDateEvenement()
    {
        return $this->dateEvenement;
    }

    /**
     * Set dureeEvenement
     *
     * @param integer $dureeEvenement
     *
     * @return Evenement
     */
    public function setDureeEvenement($dureeEvenement)
    {
        $this->dureeEvenement = $dureeEvenement;

        return $this;
    }

    /**
     * Get dureeEvenement
     *
     * @return integer
     */
    public function getDureeEvenement()
    {
        return $this->dureeEvenement;
    }

    /**
     * Set typeEvenement
     *
     * @param \AppBundle\Entity\TypeEvenement $typeEvenement
     *
     * @return Evenement
     */
    public function setTypeEvenement(\AppBundle\Entity\TypeEvenement $typeEvenement)
    {
        $this->typeEvenement = $typeEvenement;

        return $this;
    }

    /**
     * Get typeEvenement
     *
     * @return \AppBundle\Entity\TypeEvenement
     */
    public function getTypeEvenement()
    {
        return $this->typeEvenement;
    }

    /**
     * Set modaliteAccesEvenement
     *
     * @param \AppBundle\Entity\ModaliteAccesEvenement $modaliteAccesEvenement
     *
     * @return Evenement
     */
    public function setModaliteAccesEvenement(\AppBundle\Entity\ModaliteAccesEvenement $modaliteAccesEvenement)
    {
        $this->modaliteAccesEvenement = $modaliteAccesEvenement;

        return $this;
    }

    /**
     * Get modaliteAccesEvenement
     *
     * @return \AppBundle\Entity\ModaliteAccesEvenement
     */
    public function getModaliteAccesEvenement()
    {
        return $this->modaliteAccesEvenement;
    }

    /**
     * Set salle
     *
     * @param \AppBundle\Entity\Salle $salle
     *
     * @return Evenement
     */
    public function setSalle(\AppBundle\Entity\Salle $salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \AppBundle\Entity\Salle
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set oeuvre
     *
     * @param \AppBundle\Entity\Oeuvre $oeuvre
     *
     * @return Evenement
     */
    public function setOeuvre(\AppBundle\Entity\Oeuvre $oeuvre)
    {
        $this->oeuvre = $oeuvre;

        return $this;
    }

    /**
     * Get oeuvre
     *
     * @return \AppBundle\Entity\Oeuvre
     */
    public function getOeuvre()
    {
        return $this->oeuvre;
    }
}
