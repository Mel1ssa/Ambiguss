<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Glose_mot_ambigu
 *
 * @ORM\Table(name="glose_mot_ambigu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Glose_mot_ambiguRepository")
 */
class Glose_mot_ambigu
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
     * @ORM\ManyToOne(targetEntity="Mot_ambigu", inversedBy="glose_mots_ambigus")
     * @ORM\JoinColumn(name="mot_ambigu_id", referencedColumnName="id")
     */
    private $motAmbigu;


    /**
     * @ORM\ManyToOne(targetEntity="glose", inversedBy="glose_mots_ambigus")
     * @ORM\JoinColumn(name="glose_id", referencedColumnName="id")
     */
    private $glose;

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
     * @return int
     */
    public function getIdGlose()
    {
        return $this->idGlose;
    }

    /**
     * @param int $idGlose
     */
    public function setIdGlose($idGlose)
    {
        $this->idGlose = $idGlose;
    }

    /**
     * @return int
     */
    public function getIdMotAmbigu()
    {
        return $this->idMotAmbigu;
    }

    /**
     * @param int $idMotAmbigu
     */
    public function setIdMotAmbigu($idMotAmbigu)
    {
        $this->idMotAmbigu = $idMotAmbigu;
    }

    /**
     * @return mixed
     */
    public function getMotAmbigu()
    {
        return $this->motAmbigu;
    }

    /**
     * @param mixed $motAmbigu
     */
    public function setMotAmbigu($motAmbigu)
    {
        $this->motAmbigu = $motAmbigu;
    }

    /**
     * @return mixed
     */
    public function getGlose()
    {
        return $this->glose;
    }

    /**
     * @param mixed $glose
     */
    public function setGlose($glose)
    {
        $this->glose = $glose;
    }


}
