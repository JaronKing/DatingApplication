<?php

namespace Dating\AdminBundle\Entity;

/**
 * Profile
 */
class Profile
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $birthday;

    /**
     * @var integer
     */
    private $age;

    /**
     * @var string
     */
    private $height;

    /**
     * @var string
     */
    private $summary;

    /**
     * @var string
     */
    private $pictures;


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
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return Profile
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Profile
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set height
     *
     * @param string $height
     *
     * @return Profile
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return Profile
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set pictures
     *
     * @param string $pictures
     *
     * @return Profile
     */
    public function setPictures($pictures)
    {
        $this->pictures = $pictures;

        return $this;
    }

    /**
     * Get pictures
     *
     * @return string
     */
    public function getPictures()
    {
        return $this->pictures;
    }
}

