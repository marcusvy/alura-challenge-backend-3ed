<?php

namespace App\Entity;

use App\Repository\TransactionFileRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

#[ORM\Entity(repositoryClass: TransactionFileRepository::class)]
class TransactionFile
{
    use TimestampableEntity;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;
    
    // #[ORM\Id]
    // #[ORM\Column(type: "uuid", unique: true)]
    // #[ORM\GeneratedValue(strategy: "CUSTOM")]
    // #[ORM\CustomIdGenerator(class: "doctrine.uuid_generator")]
    // private $id;

    #[ORM\Column(type: 'string', length: 200)]
    private $hash = 'n';

    #[ORM\Column(type: 'string', length: 100)]
    private $document;

    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();
        $this->updatedAt = new DateTimeImmutable();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUuid()
    {
        return $this->uuid;
    }

    public function setUuid($uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function setDocument(string $document): self
    {
        $this->document = $document;

        return $this;
    }
}
