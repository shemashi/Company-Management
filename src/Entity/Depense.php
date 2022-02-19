<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depense
 *
 * @ORM\Table(name="depense", indexes={@ORM\Index(name="projet_idd", columns={"projet_id"})})
 * @ORM\Entity
 */
class Depense
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float", precision=10, scale=0, nullable=false)
     */
    private $budget;

    /**
     * @var string
     *
     * @ORM\Column(name="deplacement", type="string", length=50, nullable=false)
     */
    private $deplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_log", type="string", length=50, nullable=false)
     */
    private $prixLog;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_mat", type="string", length=50, nullable=false)
     */
    private $prixMat;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=false)
     */
    private $status;

    /**
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="projet_id", referencedColumnName="id")
     * })
     */
    private $projet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(float $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getDeplacement(): ?string
    {
        return $this->deplacement;
    }

    public function setDeplacement(string $deplacement): self
    {
        $this->deplacement = $deplacement;

        return $this;
    }

    public function getPrixLog(): ?string
    {
        return $this->prixLog;
    }

    public function setPrixLog(string $prixLog): self
    {
        $this->prixLog = $prixLog;

        return $this;
    }

    public function getPrixMat(): ?string
    {
        return $this->prixMat;
    }

    public function setPrixMat(string $prixMat): self
    {
        $this->prixMat = $prixMat;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getProjet(): ?Projet
    {
        return $this->projet;
    }

    public function setProjet(?Projet $projet): self
    {
        $this->projet = $projet;

        return $this;
    }


}
