<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $DateCommande;

    /**
     * @ORM\Column(type="integer")
     */
    private $FraisLivraison;

    /**
     * @ORM\Column(type="integer")
     */
    private $PrixTotal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TypePaiement;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="Relation")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=Livraison::class, inversedBy="Relation")
     */
    private $livraison;

    /**
     * @ORM\OneToMany(targetEntity=LigneCommande::class, mappedBy="Relation")
     */
    private $ligneCommandes;

    public function __construct()
    {
        $this->ligneCommandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->DateCommande;
    }

    public function setDateCommande(\DateTimeInterface $DateCommande): self
    {
        $this->DateCommande = $DateCommande;

        return $this;
    }

    public function getFraisLivraison(): ?int
    {
        return $this->FraisLivraison;
    }

    public function setFraisLivraison(int $FraisLivraison): self
    {
        $this->FraisLivraison = $FraisLivraison;

        return $this;
    }

    public function getPrixTotal(): ?int
    {
        return $this->PrixTotal;
    }

    public function setPrixTotal(int $PrixTotal): self
    {
        $this->PrixTotal = $PrixTotal;

        return $this;
    }

    public function getTypePaiement(): ?string
    {
        return $this->TypePaiement;
    }

    public function setTypePaiement(string $TypePaiement): self
    {
        $this->TypePaiement = $TypePaiement;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getLivraison(): ?Livraison
    {
        return $this->livraison;
    }

    public function setLivraison(?Livraison $livraison): self
    {
        $this->livraison = $livraison;

        return $this;
    }

    /**
     * @return Collection|LigneCommande[]
     */
    public function getLigneCommandes(): Collection
    {
        return $this->ligneCommandes;
    }

    public function addLigneCommande(LigneCommande $ligneCommande): self
    {
        if (!$this->ligneCommandes->contains($ligneCommande)) {
            $this->ligneCommandes[] = $ligneCommande;
            $ligneCommande->setRelation($this);
        }

        return $this;
    }

    public function removeLigneCommande(LigneCommande $ligneCommande): self
    {
        if ($this->ligneCommandes->removeElement($ligneCommande)) {
            // set the owning side to null (unless already changed)
            if ($ligneCommande->getRelation() === $this) {
                $ligneCommande->setRelation(null);
            }
        }

        return $this;
    }
}
