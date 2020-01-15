<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FluxSortie
 *
 * @ORM\Table(name="flux_sortie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FluxSortieRepository")
 */
class FluxSortie extends Flux
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", nullable=false,length=255)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonSortie", type="string", nullable=false,length=255)
     */
    private $raisonSortie;

    /**
     * @var integer
     *
     * @ORM\Column(name="dureePret", type="integer", nullable=true)
     */
    private $dureePret;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantVente", type="integer", nullable=true)
     */
    private $montantVente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSortie", type="datetime",nullable=false)
     */
    private $dateSortie;






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
     * Set destination
     *
     * @param string $destination
     *
     * @return FluxSortie
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set raisonSortie
     *
     * @param string $raisonSortie
     *
     * @return FluxSortie
     */
    public function setRaisonSortie($raisonSortie)
    {
        $this->raisonSortie = $raisonSortie;

        return $this;
    }

    /**
     * Get raisonSortie
     *
     * @return string
     */
    public function getRaisonSortie()
    {
        return $this->raisonSortie;
    }

    /**
     * Set dureePret
     *
     * @param integer $dureePret
     *
     * @return FluxSortie
     */
    public function setDureePret($dureePret)
    {
        $this->dureePret = $dureePret;

        return $this;
    }

    /**
     * Get dureePret
     *
     * @return integer
     */
    public function getDureePret()
    {
        return $this->dureePret;
    }

    /**
     * Set montantVente
     *
     * @param integer $montantVente
     *
     * @return FluxSortie
     */
    public function setMontantVente($montantVente)
    {
        $this->montantVente = $montantVente;

        return $this;
    }

    /**
     * Get montantVente
     *
     * @return integer
     */
    public function getMontantVente()
    {
        return $this->montantVente;
    }

    /**
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     *
     * @return FluxSortie
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \DateTime
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }
}
