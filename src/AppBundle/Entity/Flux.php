<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flux
 *
 * @ORM\Table(name="flux")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FluxRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"fluxentree" = "FluxEntree", "fluxsortie"="FluxSortie"})
 */
abstract class Flux
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Oeuvre")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $oeuvre;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $auteur;




    

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
     * Set oeuvre
     *
     * @param \AppBundle\Entity\Oeuvre $oeuvre
     *
     * @return Flux
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

    /**
     * Set auteur
     *
     * @param \UserBundle\Entity\User $auteur
     *
     * @return Flux
     */
    public function setAuteur(\UserBundle\Entity\User $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \UserBundle\Entity\User
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}
