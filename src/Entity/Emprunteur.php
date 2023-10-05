<?php

namespace App\Entity;

use App\Repository\EmprunteurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmprunteurRepository::class)]
class Emprunteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\ManyToMany(targetEntity: livre::class, inversedBy: 'emprunteurs')]
    private Collection $livres_empruntes;


    public function __construct()
    {
        $this->livres_empruntes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, livre>
     */
    public function getLivresEmpruntes(): Collection
    {
        return $this->livres_empruntes;
    }

    public function addLivresEmprunte(livre $livresEmprunte): static
    {
        if (!$this->livres_empruntes->contains($livresEmprunte)) {
            $this->livres_empruntes->add($livresEmprunte);
        }

        return $this;
    }

    public function removeLivresEmprunte(livre $livresEmprunte): static
    {
        $this->livres_empruntes->removeElement($livresEmprunte);

        return $this;
    }
}
