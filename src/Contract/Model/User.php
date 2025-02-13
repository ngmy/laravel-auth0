<?php

declare(strict_types=1);

namespace Auth0\Laravel\Contract\Model;

use JsonSerializable;

interface User extends JsonSerializable
{
    /**
     * @param array $attributes attributes representing the user data
     */
    public function __construct(array $attributes = []);

    /**
     * Dynamically retrieve attributes on the model.
     *
     * @param string $key
     */
    public function __get(string $key): mixed;

    /**
     * Dynamically set attributes on the model.
     *
     * @param mixed  $value
     * @param string $key
     */
    public function __set(string $key, $value): void;

    /**
     * Fill the model with an array of attributes.
     *
     * @param array $attributes
     */
    public function fill(array $attributes): self;

    /**
     * Get an attribute from the model.
     *
     * @param null|mixed $default
     * @param string     $key
     */
    public function getAttribute(string $key, $default = null): mixed;

    /**
     * Set a given attribute on the model.
     *
     * @param mixed  $value
     * @param string $key
     */
    public function setAttribute(string $key, mixed $value): self;
}
