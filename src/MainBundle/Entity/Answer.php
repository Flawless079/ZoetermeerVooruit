<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table(name="answer")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\AnswerRepository")
 */
class Answer
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
     * @var int
     *
     * @ORM\Column(name="userId", type="integer")
     */
    private $userId;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\User")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     */
    private $usIs;

    /**
     * @var int
     *
     * @ORM\Column(name="choiceId", type="integer")
     */
    private $choiceId;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Answer
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set choiceId
     *
     * @param integer $choiceId
     *
     * @return Answer
     */
    public function setChoiceId($choiceId)
    {
        $this->choiceId = $choiceId;

        return $this;
    }

    /**
     * Get choiceId
     *
     * @return int
     */
    public function getChoiceId()
    {
        return $this->choiceId;
    }

    /**
     * Set usIs
     *
     * @param \MainBundle\Entity\User $usIs
     *
     * @return Answer
     */
    public function setUsIs(\MainBundle\Entity\User $usIs = null)
    {
        $this->usIs = $usIs;

        return $this;
    }

    /**
     * Get usIs
     *
     * @return \MainBundle\Entity\User
     */
    public function getUsIs()
    {
        return $this->usIs;
    }
}
