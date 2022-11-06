<?php

namespace Src\Services;

use Exception;
use Src\Interfaces\PropertyContainerInterface;

/**
 * Class PropertyContainer
 * 
 * @package \Src
 */
class PropertyContainer implements PropertyContainerInterface
{
    /**
     * @var array $propertyContainer
     */
    protected array $propertyContainer = [];

    /**
     * Set a property
     * 
     * @param mixed $name
     * @param mixed $value
     * 
     * @return void
     */
    public function setProperty(mixed $name, mixed $value): void
    {
        $this->propertyContainer[$name] = $value;
    }

    /**
     * Update a property
     * 
     * @param mixed $name
     * @param mixed $value
     * 
     * @return void
     * 
     * @throws Exception
     */
    public function updateProperty(mixed $name, mixed $value): void
    {
        if(! key_exists($name, $this->propertyContainer)) {
            throw new Exception("Property [$name] not found");
        }

        $this->propertyContainer[$name] = $value;
    }

    /**
     * Get a property
     * 
     * @param mixed $name
     * 
     * @return mixed
     */
    public function getProperty(mixed $name): mixed
    {
        if(key_exists($name, $this->propertyContainer)) {
            return $this->propertyContainer[$name];
        }

        return null;
    }

    /**
     * Delete a property
     * 
     * @param mixed $name
     * 
     * @return void
     */
    public function deleteProperty(mixed $name): void
    {
        unset($this->propertyContainer[$name]);
    }
}