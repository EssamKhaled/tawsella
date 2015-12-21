<?php

namespace Tawsella\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="offer_ride")
 */
class OfferRide
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Ride Type cannot be empty")
     * @ORM\Column(name="ride_type", type="string", length=255, nullable=false)
     */
    protected $rideType;
    
    /**
     * @var string
     *
     * @Assert\NotBlank(message="Ride From cannot be empty")
     * @ORM\Column(name="ride_from", type="string", length=255, nullable=false)
     */
    
    /**
     * @ORM\OneToOne(targetEntity="City", cascade={"persist"})
     * @ORM\JoinColumn(name="ride_from", referencedColumnName="id")
     */        
    protected $rideFrom;    
        
    /**
     * @ORM\OneToOne(targetEntity="City", cascade={"persist"})
     * @ORM\JoinColumn(name="ride_to", referencedColumnName="id")
     */        
    protected $rideTo;    
    
    /**
     * @var array
     *
     * @ORM\Column(name="stop_over", type="string", length=255, nullable=true)
     */
    protected $stopOver;
    
    /**
     * @var datetime
     *
     * @Assert\NotBlank(message="Departure Date cannot be empty")
     * @ORM\Column(name="departure_date", type="string", length=255, nullable=false)
     */
    protected $departureDate; 
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="return_date", type="string", length=255, nullable=true)
     */
    protected $returnDate;     
    
    /**
     * @var integer
     *
     * @Assert\NotBlank(message="Price cannot be empty")
     * @ORM\Column(name="price", type="integer", length=4, nullable=false)
     */
    protected $price;
    
    /**
     * @var integer
     *
     * @Assert\NotBlank(message="Available Seats cannot be empty")
     * @ORM\Column(name="available_seats", type="integer", length=1, nullable=false)
     */
    protected $availableSeats;    
    
    /**
     * @var string
     *
     * @ORM\Column(name="women_only", type="boolean", length=2, nullable=true)
     */
    protected $womenOnly = false;    

    /**
     * @var text
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    protected $notes;
    
    /**
     * @var string
     *
     * @ORM\Column(name="active", type="boolean", length=2, nullable=true)
     */
    protected $active = true;  
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    protected $updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    protected $created;
    
    /**
     * @var Tawsella\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Tawsella\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;
    
    /**
     * @ORM\PrePersist
     */
    public function setCreatedTimeStamp()
    {
        if($this->getCreated() == null)
        {
            $this->setCreated(new \DateTime(date('Y-m-d H:i:s')));
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedTimeStamp()
    {
        $this->setUpdated(new \DateTime(date('Y-m-d H:i:s')));
    }

  

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
     * Set rideType
     *
     * @param string $rideType
     * @return OfferRide
     */
    public function setRideType($rideType)
    {
        $this->rideType = $rideType;

        return $this;
    }

    /**
     * Get rideType
     *
     * @return string 
     */
    public function getRideType()
    {
        return $this->rideType;
    }

    /**
     * Set stopOver
     *
     * @param string $stopOver
     * @return OfferRide
     */
    public function setStopOver($stopOver)
    {
        $this->stopOver = $stopOver;

        return $this;
    }

    /**
     * Get stopOver
     *
     * @return string 
     */
    public function getStopOver()
    {
        return $this->stopOver;
    }

    /**
     * Set departureDate
     *
     * @param string $departureDate
     * @return OfferRide
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Get departureDate
     *
     * @return string 
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Set returnDate
     *
     * @param string $returnDate
     * @return OfferRide
     */
    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    /**
     * Get returnDate
     *
     * @return string 
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return OfferRide
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set availableSeats
     *
     * @param integer $availableSeats
     * @return OfferRide
     */
    public function setAvailableSeats($availableSeats)
    {
        $this->availableSeats = $availableSeats;

        return $this;
    }

    /**
     * Get availableSeats
     *
     * @return integer 
     */
    public function getAvailableSeats()
    {
        return $this->availableSeats;
    }

    /**
     * Set womenOnly
     *
     * @param boolean $womenOnly
     * @return OfferRide
     */
    public function setWomenOnly($womenOnly)
    {
        $this->womenOnly = $womenOnly;

        return $this;
    }

    /**
     * Get womenOnly
     *
     * @return boolean 
     */
    public function getWomenOnly()
    {
        return $this->womenOnly;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return OfferRide
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return OfferRide
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return OfferRide
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return OfferRide
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set rideFrom
     *
     * @param \Tawsella\CoreBundle\Entity\City $rideFrom
     * @return OfferRide
     */
    public function setRideFrom(\Tawsella\CoreBundle\Entity\City $rideFrom = null)
    {
        $this->rideFrom = $rideFrom;

        return $this;
    }

    /**
     * Get rideFrom
     *
     * @return \Tawsella\CoreBundle\Entity\City 
     */
    public function getRideFrom()
    {
        return $this->rideFrom;
    }

    /**
     * Set rideTo
     *
     * @param \Tawsella\CoreBundle\Entity\City $rideTo
     * @return OfferRide
     */
    public function setRideTo(\Tawsella\CoreBundle\Entity\City $rideTo = null)
    {
        $this->rideTo = $rideTo;

        return $this;
    }

    /**
     * Get rideTo
     *
     * @return \Tawsella\CoreBundle\Entity\City 
     */
    public function getRideTo()
    {
        return $this->rideTo;
    }

    /**
     * Set user
     *
     * @param \Tawsella\UserBundle\Entity\User $user
     * @return OfferRide
     */
    public function setUser(\Tawsella\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Tawsella\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
