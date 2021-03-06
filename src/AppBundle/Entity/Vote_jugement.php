<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote_jugement
 *
 * @ORM\Table(name="vote_jugement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\vote_jugementRepository")
 */
class vote_jugement
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
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification", type="datetime")
     */
    private $dateModification;

    /**
     * @var int
     *
     * @ORM\Column(name="id_membre", type="integer", nullable=true)
     */
    private $idMembre;

    /**
     * @var int
     *
     * @ORM\Column(name="id_jugement", type="integer", nullable=true)
     */
    private $idJugement;


    /**
     * @var enum
     *
     * @ORM\Column(name="vote", type="string", length=256)
     */
    private $vote;

    /**
     * @ORM\ManyToOne(targetEntity="Membre", inversedBy="vote_jugements")
     * @ORM\JoinColumn(name="membre_id", referencedColumnName="id")
     */
    private $membre;

    /**
     * @ORM\ManyToOne(targetEntity="Jugement", inversedBy="vote_jugements")
     * @ORM\JoinColumn(name="jugement_id", referencedColumnName="id")
     */
    private $jugement;

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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return vote_jugement
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

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     *
     * @return vote_jugement
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * Set idMembre
     *
     * @param integer $idMembre
     *
     * @return vote_jugement
     */
    public function setIdMembre($idMembre)
    {
        $this->idMembre = $idMembre;

        return $this;
    }

    /**
     * Get idMembre
     *
     * @return int
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * Set idJugement
     *
     * @param integer $idJugement
     *
     * @return vote_jugement
     */
    public function setIdJugement($idJugement)
    {
        $this->idJugement = $idJugement;

        return $this;
    }

    /**
     * Get idJugement
     *
     * @return int
     */
    public function getIdJugement()
    {
        return $this->idJugement;
    }

    /**
     * @return mixed
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * @param mixed $vote
     */
    public function setVote($vote)
    {
        $this->vote = $vote;
    }

    /**
     * @return mixed
     */
    public function getMembre()
    {
        return $this->membre;
    }

    /**
     * @param mixed $membre
     */
    public function setMembre($membre)
    {
        $this->membre = $membre;
    }

    /**
     * @return mixed
     */
    public function getJugement()
    {
        return $this->jugement;
    }

    /**
     * @param mixed $jugement
     */
    public function setJugement($jugement)
    {
        $this->jugement = $jugement;
    }


}
