<?php

namespace Dating\AdminBundle\Entity;

/**
 * Survey
 */
class Survey
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $questions;

    /**
     * @var string
     */
    private $createdBy;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var string
     */
    private $outcomes;

    /**
     * @var string
     */
    private $scores;

    /**
     * @var string
     */
    private $submittedBy;


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
     * Set title
     *
     * @param string $title
     *
     * @return Survey
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Survey
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Survey
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set questions
     *
     * @param string $questions
     *
     * @return Survey
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;

        return $this;
    }

    /**
     * Get questions
     *
     * @return string
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return Survey
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Survey
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set outcomes
     *
     * @param string $outcomes
     *
     * @return Survey
     */
    public function setOutcomes($outcomes)
    {
        $this->outcomes = $outcomes;

        return $this;
    }

    /**
     * Get outcomes
     *
     * @return string
     */
    public function getOutcomes()
    {
        return $this->outcomes;
    }

    /**
     * Set scores
     *
     * @param string $scores
     *
     * @return Survey
     */
    public function setScores($scores)
    {
        $this->scores = $scores;

        return $this;
    }

    /**
     * Get scores
     *
     * @return string
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * Set submittedBy
     *
     * @param string $submittedBy
     *
     * @return Survey
     */
    public function setSubmittedBy($submittedBy)
    {
        $this->submittedBy = $submittedBy;

        return $this;
    }

    /**
     * Get submittedBy
     *
     * @return string
     */
    public function getSubmittedBy()
    {
        return $this->submittedBy;
    }
}
