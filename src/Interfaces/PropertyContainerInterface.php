<?php

namespace Src\Interfaces;

/**
 * Interface PropertyContainerInterface
 * 
 * @package \Src\Interfaces
 */
interface PropertyContainerInterface
{
    /**
     * Set a property
     * 
     * @param mixed $name
     * @param mixed $value
     * 
     * @return void
     */
    public function setProperty(mixed $name, mixed $value): void;

    /**
     * Update a property
     * 
     * @param mixed $name
     * @param mixed $value
     * 
     * @return void
     */
    public function updateProperty(mixed $name, mixed $value): void;

    /**
     * Get a property
     * 
     * @param mixed $name
     * 
     * @return mixed
     */
    public function getProperty(mixed $name): mixed;

    /**
     * Delete a property
     * 
     * @param mixed $name
     * 
     * @return void
     */
    public function deleteProperty(mixed $name): void;
}