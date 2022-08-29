<?php

namespace App\Entity;

use App\Repository\UpdateTimeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UpdateTimeRepository::class)]
class UpdateTime
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $updated_time = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $created_time = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUpdatedTime(): ?\DateTimeInterface
    {
        return $this->updated_time;
    }

    public function setUpdatedTime(\DateTimeInterface $updated_time): self
    {
        $this->updated_time = $updated_time;

        return $this;
    }

    public function getCreatedTime(): ?\DateTimeInterface
    {
        return $this->created_time;
    }

    public function setCreatedTime(\DateTimeInterface $created_time): self
    {
        $this->created_time = $created_time;

        return $this;
    }
}
