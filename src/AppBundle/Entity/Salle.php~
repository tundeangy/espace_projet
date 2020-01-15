<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SalleRepository")
 */
class Salle
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
     * @ORM\Column(name="codeSalle", type="string", length=255)
     */
    private $codeSalle;

    /**
     * @var int
     *
     * @ORM\Column(name="nombrePlaces", type="integer")
     */
    private $nombrePlaces;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSalle", type="string", length=255)
     */
    private $nomSalle;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codeSalle
     *
     * @param string $codeSalle
     *
     * @return Salle
     */
    public function setCodeSalle($codeSalle)
    {
        $this->codeSalle = $codeSalle;

        return $this;
    }

    /**
     * Get codeSalle
     *
     * @return string
     */
    public function getCodeSalle()
    {
        return $this->codeSalle;
    }

    /**
     * Set nombrePlaces
     *
     * @param integer $nombrePlaces
     *
     * @return Salle
     */
    public function setNombrePlaces($nombrePlaces)
    {
        $this->nombrePlaces = $nombrePlaces;

        return $this;
    }

    /**
     * Get nombrePlaces
     *
     * @return int
     */
    public function getNombrePlaces()
    {
        return $this->nombrePlaces;
    }

    /**
     * Set nomSalle
     *
     * @param string $nomSalle
     *
     * @return Salle
     */
    public function setNomSalle($nomSalle)
    {
        $this->nomSalle = $nomSalle;

        return $this;
    }

    /**
     * Get nomSalle
     *
     * @return string
     */
    public function getNomSalle()
    {
        return $this->nomSalle;
    }
}
