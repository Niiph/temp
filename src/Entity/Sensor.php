<?php

namespace App\Entity;

use App\Repository\SensorRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=SensorRepository::class)
 * @ApiResource()
 */
class Sensor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $pin;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="sensors", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $temperature;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $humidity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPin(): ?int
    {
        return $this->pin;
    }

    public function setPin(int $pin): self
    {
        $this->pin = $pin;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getTemperature(): ?bool
    {
        return $this->temperature;
    }

    public function setTemperature(?bool $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getHumidity(): ?bool
    {
        return $this->humidity;
    }

    public function setHumidity(?bool $humidity): self
    {
        $this->humidity = $humidity;

        return $this;
    }
}
