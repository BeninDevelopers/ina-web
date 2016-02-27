<?php

namespace WebService\Bundle\MoteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatCourantZone
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WebService\Bundle\MoteurBundle\Entity\EtatCourantZoneRepository")
 */
class EtatCourantZone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\ManyToOne(targetEntity="WebService\Bundle\MoteurBundle\Entity\MobileUser")
     */

    private $mobileUserId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMiseAJour", type="datetime")
     */
    private $dateMiseAJour;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;


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
     * Set dateMiseAJour
     *
     * @param \DateTime $dateMiseAJour
     * @return EtatCourantZone
     */
    public function setDateMiseAJour($dateMiseAJour)
    {
        $this->dateMiseAJour = $dateMiseAJour;

        return $this;
    }

    /**
     * Get dateMiseAJour
     *
     * @return \DateTime 
     */
    public function getDateMiseAJour()
    {
        return $this->dateMiseAJour;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return EtatCourantZone
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return EtatCourantZone
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return EtatCourantZone
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set mobileUserId
     *
     * @param \WebService\Bundle\MoteurBundle\Entity\MobileUser $mobileUserId
     * @return EtatCourantZone
     */
    public function setMobileUserId(\WebService\Bundle\MoteurBundle\Entity\MobileUser $mobileUserId = null)
    {
        $this->mobileUserId = $mobileUserId;

        return $this;
    }

    /**
     * Get mobileUserId
     *
     * @return \WebService\Bundle\MoteurBundle\Entity\MobileUser 
     */
    public function getMobileUserId()
    {
        return $this->mobileUserId;
    }
}
