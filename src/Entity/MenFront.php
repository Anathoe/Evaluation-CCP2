<?php

namespace App\Entity;

use App\Repository\MenFrontRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MenFrontRepository::class)
 */
class MenFront
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
