<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivreRepository::class)]
class Livre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\ManyToOne(inversedBy: 'livres')]
    private ?Auteur $auteur = null;

    #[ORM\ManyToMany(targetEntity: Emprunteur::class, mappedBy: 'livres_empruntes')]
    private Collection $emprunteurs;

    public function __construct()
    {
        $this->emprunteurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAuteur(): ?Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(?Auteur $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * @return Collection<int, Emprunteur>
     */
    public function getEmprunteurs(): Collection
    {
        return $this->emprunteurs;
    }

    public function addEmprunteur(Emprunteur $emprunteur): static
    {
        if (!$this->emprunteurs->contains($emprunteur)) {
            $this->emprunteurs->add($emprunteur);
            $emprunteur->addLivresEmprunte($this);
        }

        return $this;
    }

    public function removeEmprunteur(Emprunteur $emprunteur): static
    {
        if ($this->emprunteurs->removeElement($emprunteur)) {
            $emprunteur->removeLivresEmprunte($this);
        }

        return $this;
    }
}
