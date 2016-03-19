<?php

namespace EasyFastBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="EasyFastBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @ORM\Column(name="departure_address", type="string", length=255)
     */
    private $departureAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="arrival_address", type="string", length=255)
     */
    private $arrivalAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="departure_date", type="datetime")
     */
    private $departureDate;

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
     * Set departureAdress
     *
     * @param string $departureAdress
     *
     * @return Reservation
     */
    public function setDepartureAdress($departureAdress)
    {
        $this->departureAdress = $departureAdress;

        return $this;
    }

    /**
     * Get departureAdress
     *
     * @return string
     */
    public function getDepartureAdress()
    {
        return $this->departureAdress;
    }

    /**
     * Set arrivalAdress
     *
     * @param string $arrivalAdress
     *
     * @return Reservation
     */
    public function setArrivalAdress($arrivalAdress)
    {
        $this->arrivalAdress = $arrivalAdress;

        return $this;
    }

    /**
     * Get arrivalAdress
     *
     * @return string
     */
    public function getArrivalAdress()
    {
        return $this->arrivalAdress;
    }

    /**
     * Set departureDate
     *
     * @param \DateTime $departureDate
     *
     * @return Reservation
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Get departureDate
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }
}

