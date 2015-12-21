<?php

namespace Tawsella\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="user_credentials")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;  
    
    /**
     * @ORM\OneToOne(targetEntity="Tawsella\CoreBundle\Entity\AccountInfo", mappedBy="user", cascade={"persist", "merge"})
     **/
    protected $accountInfo;    
     

    public function __construct()
    {
        parent::__construct();
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
     * Set accountInfo
     *
     * @param \Tawsella\CoreBundle\Entity\AccountInfo $accountInfo
     * @return User
     */
    public function setAccountInfo(\Tawsella\CoreBundle\Entity\AccountInfo $accountInfo = null)
    {
        $this->accountInfo = $accountInfo;

        return $this;
    }

    /**
     * Get accountInfo
     *
     * @return \Tawsella\CoreBundle\Entity\AccountInfo 
     */
    public function getAccountInfo()
    {
        return $this->accountInfo;
    }
}
