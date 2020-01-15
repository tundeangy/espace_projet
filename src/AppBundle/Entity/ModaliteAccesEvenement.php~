<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModaliteAccesEvenement
 *
 * @ORM\Table(name="modalite_acces_evenement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModaliteAccesEvenementRepository")
 */
class ModaliteAccesEvenement
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
     * @ORM\Column(name="codeModaliteAccesEvenement", type="string", length=255)
     */
    private $codeModaliteAccesEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleModaliteAccesEvenement", type="string", length=255)
     */
    private $libelleModaliteAccesEvenement;


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
     * Set codeModaliteAccesEvenement
     *
     * @param string $codeModaliteAccesEvenement
     *
     * @return ModaliteAccesEvenement
     */
    public function setCodeModaliteAccesEvenement($codeModaliteAccesEvenement)
    {
        $this->codeModaliteAccesEvenement = $codeModaliteAccesEvenement;

        return $this;
    }

    /**
     * Get codeModaliteAccesEvenement
     *
     * @return string
     */
    public function getCodeModaliteAccesEvenement()
    {
        return $this->codeModaliteAccesEvenement;
    }

    /**
     * Set libelleModaliteAccesEvenement
     *
     * @param string $libelleModaliteAccesEvenement
     *
     * @return ModaliteAccesEvenement
     */
    public function setLibelleModaliteAccesEvenement($libelleModaliteAccesEvenement)
    {
        $this->libelleModaliteAccesEvenement = $libelleModaliteAccesEvenement;

        return $this;
    }

    /**
     * Get libelleModaliteAccesEvenement
     *
     * @return string
     */
    public function getLibelleModaliteAccesEvenement()
    {
        return $this->libelleModaliteAccesEvenement;
    }
}
