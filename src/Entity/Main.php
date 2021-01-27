<?php

namespace App\Entity;

use App\Repository\MainRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MainRepository::class)
 */
class Main
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Explore;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $VisuelIntro;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $WomenVisuel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MenVisuel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExplore(): ?string
    {
        return $this->Explore;
    }

    public function setExplore(string $Explore): self
    {
        $this->Explore = $Explore;

        return $this;
    }

    public function getVisuelIntro(): ?string
    {
        return $this->VisuelIntro;
    }

    public function setVisuelIntro(string $VisuelIntro): self
    {
        $this->VisuelIntro = $VisuelIntro;

        return $this;
    }

    public function getWomenVisuel(): ?string
    {
        return $this->WomenVisuel;
    }

    public function setWomenVisuel(string $WomenVisuel): self
    {
        $this->WomenVisuel = $WomenVisuel;

        return $this;
    }

    public function getMenVisuel(): ?string
    {
        return $this->MenVisuel;
    }

    public function setMenVisuel(string $MenVisuel): self
    {
        $this->MenVisuel = $MenVisuel;

        return $this;
    }
}
