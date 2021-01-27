<?php

namespace App\Entity;

use App\Repository\WomenFrontRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WomenFrontRepository::class)
 */
class WomenFront
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    
    public function getId(): ?int
    {
        return $this->id;
    }

    
}
