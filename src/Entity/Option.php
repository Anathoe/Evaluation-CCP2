<?php

namespace App\Entity;

use App\Repository\OptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OptionRepository::class)
 * @ORM\Table(name="`option`")
 */
class Option
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
    private $Options;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="Options")
     */
    private $Relation;

    public function __construct()
    {
        $this->Relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOptions(): ?string
    {
        return $this->Options;
    }

    public function setOptions(string $Options): self
    {
        $this->Options = $Options;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getRelation(): Collection
    {
        return $this->Relation;
    }

    public function addRelation(Article $relation): self
    {
        if (!$this->Relation->contains($relation)) {
            $this->Relation[] = $relation;
            $relation->setOptions($this);
        }

        return $this;
    }

    public function removeRelation(Article $relation): self
    {
        if ($this->Relation->removeElement($relation)) {
            // set the owning side to null (unless already changed)
            if ($relation->getOptions() === $this) {
                $relation->setOptions(null);
            }
        }

        return $this;
    }
}
