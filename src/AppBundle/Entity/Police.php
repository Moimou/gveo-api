<?php

namespace AppBundle\Entity;
use AppBundle\Form\PoliceType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Police
 *
 * @ORM\Table(name="police")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PoliceRepository")
 */
class Police implements InfoInterface
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
     * @ORM\Column(name="dateSave", type="string", length=255)
     */
    private $dateSave;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="date")
     */
    private $startDate;
   /**
     * @var string
     *
     * @ORM\Column(name="cout", type="integer")
     */
    private $cout;
    /**
     * @var string
     *
     * @ORM\Column(name="endDate", type="string", length=255)
     */
    private $endDate;

    /**
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @var Vehicule
     */
    private $vehicule;
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
     * Set dateSave
     *
     * @param string $dateSave
     * @return Police
     */
    public function setDateSave($dateSave)
    {
        $this->dateSave = $dateSave;

        return $this;
    }

    /**
     * Get dateSave
     *
     * @return string 
     */
    public function getDateSave()
    {
        return $this->dateSave;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Police
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param string $endDate
     * @return Police
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }
    /**
     * Set cout
     *
     * @param string $cout
     * @return Reparation
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return string 
     */
    public function getCout()
    {
        return $this->cout;
    }
    /**
     * Get endDate
     *
     * @return string 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set vehicule
     *
     * @param \AppBundle\Entity\Vehicule $vehicule
     * @return Police
     */
    public function setVehicule(\AppBundle\Entity\Vehicule $vehicule = null)
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    /**
     * Get vehicule
     *
     * @return \AppBundle\Entity\Vehicule 
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

                  /**
     * Get virifiedAt
     *
     * @return class 
     */
    public function getClassType()
    {
        return PoliceType::class;
    }
}
