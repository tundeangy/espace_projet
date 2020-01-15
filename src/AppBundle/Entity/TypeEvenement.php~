<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEvenement
 *
 * @ORM\Table(name="type_evenement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeEvenementRepository")
 */
class TypeEvenement
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
     * @ORM\Column(name="codeTypeEvenement", type="string", length=255)
     */
    private $codeTypeEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleTypeEvenement", type="string", length=255)
     */
    private $libelleTypeEvenement;


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
     * Set codeTypeEvenement
     *
     * @param string $codeTypeEvenement
     *
     * @return TypeEvenement
     */
    public function setCodeTypeEvenement($codeTypeEvenement)
    {
        $this->codeTypeEvenement = $codeTypeEvenement;

        return $this;
    }

    /**
     * Get codeTypeEvenement
     *
     * @return string
     */
    public function getCodeTypeEvenement()
    {
        return $this->codeTypeEvenement;
    }

    /**
     * Set libelleTypeEvenement
     *
     * @param string $libelleTypeEvenement
     *
     * @return TypeEvenement
     */
    public function setLibelleTypeEvenement($libelleTypeEvenement)
    {
        $this->libelleTypeEvenement = $libelleTypeEvenement;

        return $this;
    }

    /**
     * Get libelleTypeEvenement
     *
     * @return string
     */
    public function getLibelleTypeEvenement()
    {
        return $this->libelleTypeEvenement;
    }
}
