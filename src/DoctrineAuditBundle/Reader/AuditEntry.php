<?php

namespace DH\DoctrineAuditBundle\Reader;

use JMS\Serializer\Annotation as Serializer;
use Nette\Utils\Json;

class AuditEntry
{
    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\Groups({"get_log"})
     */
    protected $id;

    /**
     * @var int|null
     *
     * @Serializer\Type("int")
     * @Serializer\Groups({"get_log"})
     */
    protected $documentId;

    /**
     * @var int|null
     *
     * @Serializer\Type("int")
     * @Serializer\Groups({"get_log"})
     */
    protected $revisionId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\Groups({"get_log"})
     */
    protected $type;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\Groups({"get_log"})
     */
    protected $object_id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\Groups({"get_log"})
     */
    protected $diffs;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\Groups({"get_log"})
     */
    protected $blame_id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\Groups({"get_log"})
     */
    protected $blame_user_firewall;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\Groups({"get_log"})
     */
    protected $ip;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\Groups({"get_log"})
     */
    protected $created_at;

    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    /**
     * Get the value of id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }

    /**
     * @return int
     */
    public function getRevisionId(): ?int
    {
        return $this->revisionId;
    }

    /**
     * Get the value of type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Get the value of object_id.
     *
     * @return string
     */
    public function getObjectId(): string
    {
        return $this->object_id;
    }

    /**
     * Get the value of blame_id.
     *
     * @return null|int|string
     */
    public function getUserId()
    {
        return $this->blame_id;
    }

    /**
     * @return null|string
     */
    public function getUserFirewall(): ?string
    {
        return $this->blame_user_firewall;
    }

    /**
     * Get the value of ip.
     *
     * @return string
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * Get the value of created_at.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * Get the value of created_at.
     *
     * @return array
     */
    public function getDiffs(): ?array
    {
        return Json::decode($this->diffs, Json::FORCE_ARRAY);
    }
}
