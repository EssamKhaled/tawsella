<?php

namespace Tawsella\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="account_info")
 */
class AccountInfo
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
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    protected $firstName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    protected $lastName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="date_of_birth", type="string", length=255, nullable=true)
     */
    protected $dateOfBirth;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="rate", type="integer", length=1, nullable=true)
     */
    protected $rate; 
    
    /**
     * @var string
     *
     * @ORM\Column(name="car_type", type="string", length=255, nullable=true)
     */
    protected $carType;
    
    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255, nullable=true)
     */
    protected $mobile;  
    
    /**
     * @var string
     *
     * @ORM\Column(name="facebook_url", type="string", length=255, nullable=true)
     */
    protected $facebookUrl;  
    
    /**
     * @var string
     *
     * @ORM\Column(name="twitter_url", type="string", length=255, nullable=true)
     */
    protected $twitterUrl;      

    /**
     * @var string
     *
     * @ORM\Column(name="google_plus_url", type="string", length=255, nullable=true)
     */
    protected $googlePlusUrl; 
    
    /**
     * @var string
     *
     * @ORM\Column(name="music", type="boolean", length=255, nullable=true)
     */
    protected $music = false;
    
    /**
     * @var string
     *
     * @ORM\Column(name="pets", type="boolean", length=255, nullable=true)
     */
    protected $pets = false; 
    
    /**
     * @var string
     *
     * @ORM\Column(name="smoking", type="boolean", length=255, nullable=true)
     */
    protected $smoking = false;     
    
    /**
     * @var string
     *
     * @Assert\Image(
     *     maxSize = "20000k",
     *     mimeTypes = {"image/gif", "image/jpeg", "image/png"},
     *     mimeTypesMessage = "Please upload a valid picture"
     * )
     * @Assert\Regex(
     *     pattern="/[a-zA-Z0-9]+/",
     *     match=true,
     *     message="Special characters are not allowed"
     * )
     *
     * @ORM\Column(name="image", type="string", length=45, nullable=true)
     */    
    protected $image; 
    
    /**
     * @ORM\OneToOne(targetEntity="Tawsella\UserBundle\Entity\User", inversedBy="user", cascade={"persist"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/        
    protected $user;    


    
    //=================================================================================//      
    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return  '/web/uploads/'.$this->getUploadDir();
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/uploads/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'account_info/';
    }
    
    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getImage()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        $pictureName = uniqid().'.'.$this->getImage()->guessExtension();
        $this->getImage()->move(
            $this->getUploadRootDir(),
            $pictureName
        );

        // set the path property to the filename where you've saved the file
        $this->path = $this->getImage()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->image = $pictureName;
    } 
    
    public function deleteImage($image){
        unlink($this->getUploadRootDir().$image);
    }
    //=================================================================================//  
    

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
     * Set firstName
     *
     * @param string $firstName
     * @return AccountInfo
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return AccountInfo
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set dateOfBirth
     *
     * @return AccountInfo
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return dateOfBirth 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     * @return AccountInfo
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set carType
     *
     * @param string $carType
     * @return AccountInfo
     */
    public function setCarType($carType)
    {
        $this->carType = $carType;

        return $this;
    }

    /**
     * Get carType
     *
     * @return string 
     */
    public function getCarType()
    {
        return $this->carType;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return AccountInfo
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set facebookUrl
     *
     * @param string $facebookUrl
     * @return AccountInfo
     */
    public function setFacebookUrl($facebookUrl)
    {
        $this->facebookUrl = $facebookUrl;

        return $this;
    }

    /**
     * Get facebookUrl
     *
     * @return string 
     */
    public function getFacebookUrl()
    {
        return $this->facebookUrl;
    }

    /**
     * Set twitterUrl
     *
     * @param string $twitterUrl
     * @return AccountInfo
     */
    public function setTwitterUrl($twitterUrl)
    {
        $this->twitterUrl = $twitterUrl;

        return $this;
    }

    /**
     * Get twitterUrl
     *
     * @return string 
     */
    public function getTwitterUrl()
    {
        return $this->twitterUrl;
    }

    /**
     * Set googlePlusUrl
     *
     * @param string $googlePlusUrl
     * @return AccountInfo
     */
    public function setGooglePlusUrl($googlePlusUrl)
    {
        $this->googlePlusUrl = $googlePlusUrl;

        return $this;
    }

    /**
     * Get googlePlusUrl
     *
     * @return string 
     */
    public function getGooglePlusUrl()
    {
        return $this->googlePlusUrl;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return AccountInfo
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set user
     *
     * @param \Tawsella\UserBundle\Entity\User $user
     * @return AccountInfo
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

    /**
     * Set music
     *
     * @param boolean $music
     * @return AccountInfo
     */
    public function setMusic($music)
    {
        $this->music = $music;

        return $this;
    }

    /**
     * Get music
     *
     * @return boolean 
     */
    public function getMusic()
    {
        return $this->music;
    }

    /**
     * Set pets
     *
     * @param boolean $pets
     * @return AccountInfo
     */
    public function setPets($pets)
    {
        $this->pets = $pets;

        return $this;
    }

    /**
     * Get pets
     *
     * @return boolean 
     */
    public function getPets()
    {
        return $this->pets;
    }

    /**
     * Set smoking
     *
     * @param boolean $smoking
     * @return AccountInfo
     */
    public function setSmoking($smoking)
    {
        $this->smoking = $smoking;

        return $this;
    }

    /**
     * Get smoking
     *
     * @return boolean 
     */
    public function getSmoking()
    {
        return $this->smoking;
    }
}
