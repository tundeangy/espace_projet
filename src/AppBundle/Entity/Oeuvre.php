<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oeuvre
 *
 * @ORM\Table(name="oeuvre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OeuvreRepository")
 */
class Oeuvre
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
     * @ORM\Column(name="codeOeuvre", type="string", length=255)
     */
    private $codeOeuvre;

    /**
     * @var string
     *
     * @ORM\Column(name="nomOeuvre", type="string", length=255)
     */
    private $nomOeuvre;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAuteur", type="string", length=255)
     */
    private $nomAuteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;




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
     * Set codeOeuvre
     *
     * @param string $codeOeuvre
     *
     * @return Oeuvre
     */
    public function setCodeOeuvre($codeOeuvre)
    {
        $this->codeOeuvre = $codeOeuvre;

        return $this;
    }

    /**
     * Get codeOeuvre
     *
     * @return string
     */
    public function getCodeOeuvre()
    {
        return $this->codeOeuvre;
    }

    /**
     * Set nomOeuvre
     *
     * @param string $nomOeuvre
     *
     * @return Oeuvre
     */
    public function setNomOeuvre($nomOeuvre)
    {
        $this->nomOeuvre = $nomOeuvre;

        return $this;
    }

    /**
     * Get nomOeuvre
     *
     * @return string
     */
    public function getNomOeuvre()
    {
        return $this->nomOeuvre;
    }

    /**
     * Set nomAuteur
     *
     * @param string $nomAuteur
     *
     * @return Oeuvre
     */
    public function setNomAuteur($nomAuteur)
    {
        $this->nomAuteur = $nomAuteur;

        return $this;
    }

    /**
     * Get nomAuteur
     *
     * @return string
     */
    public function getNomAuteur()
    {
        return $this->nomAuteur;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Oeuvre
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}
