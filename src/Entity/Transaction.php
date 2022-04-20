<?php

namespace App\Entity;

use App\Repository\TransactionRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
#[ORM\Table(name: '`transaction`')]
class Transaction
{

    use TimestampableEntity;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $origin_bank;

    #[ORM\Column(type: 'string', length: 100)]
    private $origin_agency;

    #[ORM\Column(type: 'string', length: 100)]
    private $origin_account;

    #[ORM\Column(type: 'string', length: 100)]
    private $destiny_bank;

    #[ORM\Column(type: 'string', length: 100)]
    private $destiny_agency;

    #[ORM\Column(type: 'string', length: 100)]
    private $destiny_account;

    #[ORM\Column(type: 'string', length: 100)]
    private $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOriginBank(): ?string
    {
        return $this->origin_bank;
    }

    public function setOriginBank(string $origin_bank): self
    {
        $this->origin_bank = $origin_bank;

        return $this;
    }

    public function getOriginAgency(): ?string
    {
        return $this->origin_agency;
    }

    public function setOriginAgency(string $origin_agency): self
    {
        $this->origin_agency = $origin_agency;

        return $this;
    }

    public function getOriginAccount(): ?string
    {
        return $this->origin_account;
    }

    public function setOriginAccount(string $origin_account): self
    {
        $this->origin_account = $origin_account;

        return $this;
    }

    public function getDestinyBank(): ?string
    {
        return $this->destiny_bank;
    }

    public function setDestinyBank(string $destiny_bank): self
    {
        $this->destiny_bank = $destiny_bank;

        return $this;
    }

    public function getDestinyAgency(): ?string
    {
        return $this->destiny_agency;
    }

    public function setDestinyAgency(string $destiny_agency): self
    {
        $this->destiny_agency = $destiny_agency;

        return $this;
    }

    public function getDestinyAccount(): ?string
    {
        return $this->destiny_account;
    }

    public function setDestinyAccount(string $destiny_account): self
    {
        $this->destiny_account = $destiny_account;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
