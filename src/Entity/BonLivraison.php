<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BonLivraison
 *
 * @ORM\Table(name="bon_livraison", indexes={@ORM\Index(name="facture_bon_livraison", columns={"facture_id"})})
 * @ORM\Entity
 */
class BonLivraison
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
     * @var \BonLivraison
     *
     * @ORM\ManyToOne(targetEntity="BonLivraison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facture_id", referencedColumnName="id")
     * })
     */
    private $facture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFacture(): ?self
    {
        return $this->facture;
    }

    public function setFacture(?self $facture): self
    {
        $this->facture = $facture;

        return $this;
    }


}
