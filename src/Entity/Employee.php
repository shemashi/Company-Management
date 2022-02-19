<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employee", indexes={@ORM\Index(name="IDX_5D9F75A148D62931", columns={"id_service_id"}), @ORM\Index(name="IDX_5D9F75A159975F7E", columns={"id_division_id"})})
 * @ORM\Entity
 */
class Employee
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
     * @var string
     *
     * @ORM\Column(name="nom_emp", type="string", length=255, nullable=false)
     */
    private $nomEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_emp", type="string", length=255, nullable=false)
     */
    private $prenomEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="cnss", type="string", length=255, nullable=false)
     */
    private $cnss;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255, nullable=false)
     */
    private $genre;

    /**
     * @var int
     *
     * @ORM\Column(name="rib", type="integer", nullable=false)
     */
    private $rib;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_bank", type="string", length=255, nullable=false)
     */
    private $nomBank;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=255, nullable=false)
     */
    private $cin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenais", type="date", nullable=false)
     */
    private $datenais;

    /**
     * @var string
     *
     * @ORM\Column(name="profile", type="string", length=255, nullable=false)
     */
    private $profile;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire", type="float", precision=10, scale=0, nullable=false)
     */
    private $salaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_emp", type="date", nullable=false)
     */
    private $dateEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_emp", type="string", length=255, nullable=false)
     */
    private $etatEmp;

    /**
     * @var float
     *
     * @ORM\Column(name="prime", type="float", precision=10, scale=0, nullable=false)
     */
    private $prime;

    /**
     * @var float
     *
     * @ORM\Column(name="credit", type="float", precision=10, scale=0, nullable=false)
     */
    private $credit;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_service_id", referencedColumnName="id")
     * })
     */
    private $idService;

    /**
     * @var \Division
     *
     * @ORM\ManyToOne(targetEntity="Division")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_division_id", referencedColumnName="id")
     * })
     */
    private $idDivision;

    /**
     * @ORM\ManyToOne(targetEntity=Role::class, inversedBy="IdEmp")
     */
    private $role;

    public function __toString(){
        // to show the name of the Category in the select
        return $this->nomEmp;
        // to show the id of the Category in the select
        // return $this->id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEmp(): ?string
    {
        return $this->nomEmp;
    }

    public function setNomEmp(string $nomEmp): self
    {
        $this->nomEmp = $nomEmp;

        return $this;
    }

    public function getPrenomEmp(): ?string
    {
        return $this->prenomEmp;
    }

    public function setPrenomEmp(string $prenomEmp): self
    {
        $this->prenomEmp = $prenomEmp;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCnss(): ?string
    {
        return $this->cnss;
    }

    public function setCnss(string $cnss): self
    {
        $this->cnss = $cnss;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

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

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getRib(): ?int
    {
        return $this->rib;
    }

    public function setRib(int $rib): self
    {
        $this->rib = $rib;

        return $this;
    }

    public function getNomBank(): ?string
    {
        return $this->nomBank;
    }

    public function setNomBank(string $nomBank): self
    {
        $this->nomBank = $nomBank;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getDatenais(): ?\DateTimeInterface
    {
        return $this->datenais;
    }

    public function setDatenais(\DateTimeInterface $datenais): self
    {
        $this->datenais = $datenais;

        return $this;
    }

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function setProfile(string $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getSalaire(): ?float
    {
        return $this->salaire;
    }

    public function setSalaire(float $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getDateEmp(): ?\DateTimeInterface
    {
        return $this->dateEmp;
    }

    public function setDateEmp(\DateTimeInterface $dateEmp): self
    {
        $this->dateEmp = $dateEmp;

        return $this;
    }

    public function getEtatEmp(): ?string
    {
        return $this->etatEmp;
    }

    public function setEtatEmp(string $etatEmp): self
    {
        $this->etatEmp = $etatEmp;

        return $this;
    }

    public function getPrime(): ?float
    {
        return $this->prime;
    }

    public function setPrime(float $prime): self
    {
        $this->prime = $prime;

        return $this;
    }

    public function getCredit(): ?float
    {
        return $this->credit;
    }

    public function setCredit(float $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    public function getIdService(): ?Service
    {
        return $this->idService;
    }

    public function setIdService(?Service $idService): self
    {
        $this->idService = $idService;

        return $this;
    }

    public function getIdDivision(): ?Division
    {
        return $this->idDivision;
    }

    public function setIdDivision(?Division $idDivision): self
    {
        $this->idDivision = $idDivision;

        return $this;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): self
    {
        $this->role = $role;

        return $this;
    }


}
