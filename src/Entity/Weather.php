<?php

namespace App\Entity;

use App\Repository\WeatherRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WeatherRepository::class)]
class Weather
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'weather')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $location = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    private ?string $celsius = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 2, scale: '0')]
    private ?string $air_pollution = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    private ?string $rainfall = null;

    #[ORM\Column(length: 30)]
    private ?string $cloud_cover = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    private ?string $wind = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: '0')]
    private ?string $atmospheric_pressure = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getCelsius(): ?string
    {
        return $this->celsius;
    }

    public function setCelsius(string $celsius): static
    {
        $this->celsius = $celsius;

        return $this;
    }

    public function getAirPollution(): ?string
    {
        return $this->air_pollution;
    }

    public function setAirPollution(string $air_pollution): static
    {
        $this->air_pollution = $air_pollution;

        return $this;
    }

    public function getRainfall(): ?string
    {
        return $this->rainfall;
    }

    public function setRainfall(string $rainfall): static
    {
        $this->rainfall = $rainfall;

        return $this;
    }

    public function getCloudCover(): ?string
    {
        return $this->cloud_cover;
    }

    public function setCloudCover(string $cloud_cover): static
    {
        $this->cloud_cover = $cloud_cover;

        return $this;
    }

    public function getWind(): ?string
    {
        return $this->wind;
    }

    public function setWind(string $wind): static
    {
        $this->wind = $wind;

        return $this;
    }

    public function getAtmosphericPressure(): ?string
    {
        return $this->atmospheric_pressure;
    }

    public function setAtmosphericPressure(string $atmospheric_pressure): static
    {
        $this->atmospheric_pressure = $atmospheric_pressure;

        return $this;
    }
}
