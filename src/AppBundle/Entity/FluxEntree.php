<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FluxEntree
 *
 * @ORM\Table(name="flux_entree")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FluxEntreeRepository")
 */
class FluxEntree extends Flux
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateEntree;

    /**
     * @var string
     *
     * @ORM\Column(name="typeAcquisition", type="string", nullable=false,length=255)
     */
    private $typeAcquisition;

    /**
     * @var integer
     *
     * @ORM\Column(name="dureeSejour", type="integer", nullable=true)
     */
    private $dureeSejour;



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
     * Set dateEntree
     *
     * @param \DateTime $dateEntree
     *
     * @return FluxEntree
     */
    public function setDateEntree($dateEntree)
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    /**
     * Get dateEntree
     *
     * @return \DateTime
     */
    public function getDateEntree()
    {
        return $this->dateEntree;
    }

    /**
     * Set typeAcquisition
     *
     * @param string $typeAcquisition
     *
     * @return FluxEntree
     */
    public function setTypeAcquisition($typeAcquisition)
    {
        $this->typeAcquisition = $typeAcquisition;

        return $this;
    }

    /**
     * Get typeAcquisition
     *
     * @return string
     */
    public function getTypeAcquisition()
    {
        return $this->typeAcquisition;
    }

    /**
     * Set dureeSejour
     *
     * @param integer $dureeSejour
     *
     * @return FluxEntree
     */
    public function setDureeSejour($dureeSejour)
    {
        $this->dureeSejour = $dureeSejour;

        return $this;
    }

    /**
     * Get dureeSejour
     *
     * @return integer
     */
    public function getDureeSejour()
    {
        return $this->dureeSejour;
    }
}
