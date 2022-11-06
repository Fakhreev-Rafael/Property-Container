<?php

namespace Src\Models;

use Src\Services\PropertyContainer;

/**
 * Class Post
 * 
 * @package \Src\Models
 */
class Post extends PropertyContainer
{
    /**
     * @var string $title
     */
    protected string $title;

    /**
     * @var string $created_at
     */
    protected string $created_at;

    /**
     * Set a title
     * 
     * @param string $title
     * 
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Get a title
     * 
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set a data of created at
     * 
     * @param string $created_at
     * 
     * @return void
     */
    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * Get a data of created at
     * 
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }
}