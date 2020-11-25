<?php


namespace Scrum\Domain\Models\UserStories;


/**
 * Class UserStory
 * @package nrslib\ScrumDomain\Models\UserStories
 */
class UserStory
{
    /** @var UserStoryId */
    private $id;
    /** @var string */
    private $story;
    /** @var string|null */
    private $demo;
    /** @var int|null */
    private $estimate;
    /** @var int|null */
    private $seq;

    /**
     * UserStory constructor.
     * @param UserStoryId $id
     * @param string $story
     * @param string|null $demo
     * @param int|null $estimate
     * @param int|null $seq
     */
    public function __construct(UserStoryId $id, string $story, string $demo = null, int $estimate = null, int $seq = null)
    {
        $this->id = $id;
        $this->story = $story;
        $this->demo = $demo;
        $this->estimate = $estimate;
        $this->seq = $seq;
    }

    /**
     * @return UserStoryId
     */
    public function getId(): UserStoryId
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getStory(): string
    {
        return $this->story;
    }

    /**
     * @return string|null
     */
    public function getDemo(): ?string
    {
        return $this->demo;
    }

    /**
     * @return int|null
     */
    public function getEstimate(): ?int
    {
        return $this->estimate;
    }

    /**
     * @return int|null
     */
    public function getSeq(): ?int
    {
        return $this->seq;
    }
}