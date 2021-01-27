<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 * @Vich\Uploadable()
 */
class Article
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
    private $Denomination;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="integer")
     */
    private $Prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Disponibilite;

    /**
     * @ORM\OneToMany(targetEntity=LigneCommande::class, mappedBy="article")
     */
    private $Relation;

    /**
     * @ORM\ManyToOne(targetEntity=Option::class, inversedBy="Relation")
     */
    private $Options;

    /**
     * @ORM\ManyToOne(targetEntity=Genres::class, inversedBy="Relation")
     */
    private $genres;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="Relation")
     */
    private $categories;

    /**
     * @ORM\ManyToOne(targetEntity=Forme::class, inversedBy="Relation")
     */
    private $forme;

    /**
     * @ORM\ManyToOne(targetEntity=Couleurs::class, inversedBy="Relation")
     */
    private $couleurs;

    /**
     * @ORM\ManyToOne(targetEntity=Marques::class, inversedBy="Relation")
     */
    private $marques;

    /**
     * @ORM\ManyToOne(targetEntity=Matieres::class, inversedBy="Relation")
     */
    private $matieres;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @var File|null
     * @Assert\Image(mimeTypes={"image/jpeg", "image/jpg", "image/png"})
     * @Vich\UploadableField(mapping="upload", fileNameProperty="image")
     *
     */
    private $imageFile;

    public function __construct()
    {
        $this->Relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDenomination(): ?string
    {
        return $this->Denomination;
    }

    public function setDenomination(string $Denomination): self
    {
        $this->Denomination = $Denomination;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getDisponibilite(): ?string
    {
        return $this->Disponibilite;
    }

    public function setDisponibilite(string $Disponibilite): self
    {
        $this->Disponibilite = $Disponibilite;

        return $this;
    }

    /**
     * @return Collection|LigneCommande[]
     */
    public function getRelation(): Collection
    {
        return $this->Relation;
    }

    public function addRelation(LigneCommande $relation): self
    {
        if (!$this->Relation->contains($relation)) {
            $this->Relation[] = $relation;
            $relation->setArticle($this);
        }

        return $this;
    }

    public function removeRelation(LigneCommande $relation): self
    {
        if ($this->Relation->removeElement($relation)) {
            // set the owning side to null (unless already changed)
            if ($relation->getArticle() === $this) {
                $relation->setArticle(null);
            }
        }

        return $this;
    }

    public function getOptions(): ?Option
    {
        return $this->Options;
    }

    public function setOptions(?Option $Options): self
    {
        $this->Options = $Options;

        return $this;
    }

    public function getGenres(): ?Genres
    {
        return $this->genres;
    }

    public function setGenres(?Genres $genres): self
    {
        $this->genres = $genres;

        return $this;
    }

    public function getCategories(): ?Categories
    {
        return $this->categories;
    }

    public function setCategories(?Categories $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getForme(): ?Forme
    {
        return $this->forme;
    }

    public function setForme(?Forme $forme): self
    {
        $this->forme = $forme;

        return $this;
    }

    public function getCouleurs(): ?Couleurs
    {
        return $this->couleurs;
    }

    public function setCouleurs(?Couleurs $couleurs): self
    {
        $this->couleurs = $couleurs;

        return $this;
    }

    public function getMarques(): ?Marques
    {
        return $this->marques;
    }

    public function setMarques(?Marques $marques): self
    {
        $this->marques = $marques;

        return $this;
    }

    public function getMatieres(): ?Matieres
    {
        return $this->matieres;
    }

    public function setMatieres(?Matieres $matieres): self
    {
        $this->matieres = $matieres;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }


    public function setImage(?string $image)
    {
        $this->image = $image;
        return $this;
    }


    /**
     * @ORM\Column(type="datetime")
     * @var null|DateTime
     */
    private $updated_at;


    public function getImageFile()
    {
        return $this->imageFile;
    }



    public function setImageFile( ?File $imageFile ): void {
        $this->imageFile = $imageFile;
        if($this->imageFile instanceof UploadedFile){
            $this->updated_at = new \DateTime('now');
        }
        //return $this;
    }

    public function getUploadedAt(): ?\DateTimeInterface
    {
        return $this->uploaded_at;
    }

    public function setUploadedAt(\DateTimeInterface $uploaded_at): self
    {
        $this->uploaded_at = $uploaded_at;

        return $this;
    }
}

