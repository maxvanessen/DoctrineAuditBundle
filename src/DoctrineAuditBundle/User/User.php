<?php

namespace DH\DoctrineAuditBundle\User;

class User implements UserInterface
{
    /**
     * @var null|string
     */
    protected $id;

    /**
     * @var null|string
     */
    protected $username;

    public function __construct(?string $id = null, ?string $username = null)
    {
        $this->id = $id;
        $this->username = $username;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }
}
