<?php

namespace App\Entity;

use App\Repository\SuiteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SuiteRepository::class)]
class Suite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $img_path = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $prix = null;

    #[ORM\Column(length: 2000, nullable: true)]
    private ?string $img_list = null;

    #[ORM\ManyToOne(inversedBy: 'suites')]
    private ?Etablissement $hotel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getImgPath(): ?string
    {
        return $this->img_path;
    }

    public function setImgPath(string $img_path): self
    {
        $this->img_path = $img_path;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImgList(): ?string
    {
        return $this->img_list;
    }

    public function setImgList(?string $img_list): self
    {
        $this->img_list = $img_list;

        return $this;
    }

    public function getHotel(): ?Etablissement
    {
        return $this->hotel;
    }

    public function setHotel(?Etablissement $hotel): self
    {
        $this->hotel = $hotel;

        return $this;
    }
}
