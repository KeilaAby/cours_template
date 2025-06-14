<?php

namespace App\Entity;

use App\Repository\TrainningRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrainningRepository::class)]
class Trainning
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $peridod_start = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $period_end = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(nullable: true)]
    private ?int $nb_seats = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $filigrane = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $updated_at = null;

    #[ORM\Column(nullable: true)]
    private ?int $actif = null;

    #[ORM\Column(nullable: true)]
    private ?int $is_suppr = null;

    #[ORM\Column(nullable: true)]
    private ?int $status_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPeridodStart(): ?\DateTime
    {
        return $this->peridod_start;
    }

    public function setPeridodStart(?\DateTime $peridod_start): static
    {
        $this->peridod_start = $peridod_start;

        return $this;
    }

    public function getPeriodEnd(): ?\DateTime
    {
        return $this->period_end;
    }

    public function setPeriodEnd(?\DateTime $period_end): static
    {
        $this->period_end = $period_end;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getNbSeats(): ?int
    {
        return $this->nb_seats;
    }

    public function setNbSeats(?int $nb_seats): static
    {
        $this->nb_seats = $nb_seats;

        return $this;
    }

    public function getFiligrane(): ?string
    {
        return $this->filigrane;
    }

    public function setFiligrane(?string $filigrane): static
    {
        $this->filigrane = $filigrane;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTime $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTime $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getActif(): ?int
    {
        return $this->actif;
    }

    public function setActif(?int $actif): static
    {
        $this->actif = $actif;

        return $this;
    }

    public function getIsSuppr(): ?int
    {
        return $this->is_suppr;
    }

    public function setIsSuppr(?int $is_suppr): static
    {
        $this->is_suppr = $is_suppr;

        return $this;
    }

    public function getStatusId(): ?int
    {
        return $this->status_id;
    }

    public function setStatusId(?int $status_id): static
    {
        $this->status_id = $status_id;

        return $this;
    }
}
