<?php

namespace BinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * abscense
 *
 * @ORM\Table(name="abscense")
 * @ORM\Entity(repositoryClass="BinBundle\Repository\abscenseRepository")
 */
class abscense
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
     * @ORM\Column(name="pupl", type="string", length=255)
     */
    private $pupl;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr", type="integer")
     */
    private $nbr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;
    /**
     *
     * @ORM\ManyToOne(targetEntity="notification")
     * @ORM\JoinColumn(name="notification_id",referencedColumnName="id")
     */

private $notification;

    /**
     * @return mixed
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param mixed $notification
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;
    }



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
     * Set pupl
     *
     * @param string $pupl
     *
     * @return abscense
     */
    public function setPupl($pupl)
    {
        $this->pupl = $pupl;

        return $this;
    }

    /**
     * Get pupl
     *
     * @return string
     */
    public function getPupl()
    {
        return $this->pupl;
    }

    /**
     * Set nbr
     *
     * @param integer $nbr
     *
     * @return abscense
     */
    public function setNbr($nbr)
    {
        $this->nbr = $nbr;

        return $this;
    }

    /**
     * Get nbr
     *
     * @return int
     */
    public function getNbr()
    {
        return $this->nbr;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return abscense
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return abscense
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }
}

