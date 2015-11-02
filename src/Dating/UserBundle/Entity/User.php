<?php

namespace Dating\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
     * @var \Dating\AdminBundle\Entity\Profile
     */
    private $profile;


    /**
     * Set profile
     *
     * @param \Dating\AdminBundle\Entity\Profile $profile
     *
     * @return User
     */
    public function setProfile(\Dating\AdminBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \Dating\AdminBundle\Entity\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
