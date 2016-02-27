<?php

namespace WebService\Bundle\MoteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MobileUser
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WebService\Bundle\MoteurBundle\Entity\MobileUserRepository")
 */
class MobileUser
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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneid", type="string", length=255)
     */
    private $phoneid;

    /**
     * @var string
     *
     * @ORM\Column(name="gcmid", type="string", length=255)
     */
    private $gcmid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnregistrement", type="datetime")
     */
    private $dateEnregistrement;


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
     * Set email
     *
     * @param string $email
     * @return MobileUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phoneid
     *
     * @param string $phoneid
     * @return MobileUser
     */
    public function setPhoneid($phoneid)
    {
        $this->phoneid = $phoneid;

        return $this;
    }

    /**
     * Get phoneid
     *
     * @return string 
     */
    public function getPhoneid()
    {
        return $this->phoneid;
    }

    /**
     * Set gcmid
     *
     * @param string $gcmid
     * @return MobileUser
     */
    public function setGcmid($gcmid)
    {
        $this->gcmid = $gcmid;

        return $this;
    }

    /**
     * Get gcmid
     *
     * @return string 
     */
    public function getGcmid()
    {
        return $this->gcmid;
    }

    /**
     * Set dateEnregistrement
     *
     * @param \DateTime $dateEnregistrement
     * @return MobileUser
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return \DateTime 
     */
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }
}
