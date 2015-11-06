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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $likes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $myLikes;


    /**
     * Add like
     *
     * @param \Dating\UserBundle\Entity\User $like
     *
     * @return User
     */
    public function addLike(\Dating\UserBundle\Entity\User $like)
    {
        $this->likes[] = $like;

        return $this;
    }

    /**
     * Remove like
     *
     * @param \Dating\UserBundle\Entity\User $like
     */
    public function removeLike(\Dating\UserBundle\Entity\User $like)
    {
        $this->likes->removeElement($like);
    }

    /**
     * Get likes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Add myLike
     *
     * @param \Dating\UserBundle\Entity\User $myLike
     *
     * @return User
     */
    public function addMyLike(\Dating\UserBundle\Entity\User $myLike)
    {
        $this->myLikes[] = $myLike;

        return $this;
    }

    /**
     * Remove myLike
     *
     * @param \Dating\UserBundle\Entity\User $myLike
     */
    public function removeMyLike(\Dating\UserBundle\Entity\User $myLike)
    {
        $this->myLikes->removeElement($myLike);
    }

    /**
     * Get myLikes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMyLikes()
    {
        return $this->myLikes;
    }
}
