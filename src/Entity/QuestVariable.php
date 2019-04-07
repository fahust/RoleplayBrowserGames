<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestVariableRepository")
 */
class QuestVariable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titlezone;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="text")
     */
    private $initiative;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(min = 11,max = 89)
     */
    private $dedifficult;

    /**
     * @ORM\Column(type="text")
     */
    private $dialreussitenego;

    /**
     * @ORM\Column(type="text")
     */
    private $dialoguedereussitepersu;

    /**
     * @ORM\Column(type="text")
     */
    private $dialoguedereussitetaunt;

    /**
     * @ORM\Column(type="text")
     */
    private $dialoguedereussitenawak;

    /**
     * @ORM\Column(type="text")
     */
    private $dialoguededefaitenego;

    /**
     * @ORM\Column(type="text")
     */
    private $dialoguededefaitepersu;

    /**
     * @ORM\Column(type="text")
     */
    private $dialoguededefaitetaunt;

    /**
     * @ORM\Column(type="text")
     */
    private $dialoguededefaitenawak;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Monster", inversedBy="questVariables")
     * //@Assert\Count(max = 4)
     */
    private $monsters;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $createur;

    /**
     * @ORM\Column(type="text")
     */
    private $dialoguedereussitefin;

    /**
     * @ORM\Column(type="text")
     */
    private $dialoguededefaitefin;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Objet", inversedBy="questVariables")
     */
    private $objetreussite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $objetrequis;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Objet", inversedBy="questvariablesrequismany")
     */
    private $questrequismany;

    
    


    

    public function __construct()
    {
        $this->monsters = new ArrayCollection();
        $this->objetreussite = new ArrayCollection();
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        
        $metadata->addPropertyConstraint('monsters', new Assert\Count([
            'min'        => 1,
            'max'        => 10,
            'minMessage' => 'Tu dois sélectioner aux moins un monstre',
            'maxMessage' => 'Tu ne dois pas sélectioner plus de {{ limit }} monstres ',
        ]));
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTitlezone(): ?string
    {
        return $this->titlezone;
    }

    public function setTitlezone(string $titlezone): self
    {
        $this->titlezone = $titlezone;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getInitiative(): ?string
    {
        return $this->initiative;
    }

    public function setInitiative(string $initiative): self
    {
        $this->initiative = $initiative;

        return $this;
    }

    public function getDedifficult(): ?string
    {
        return $this->dedifficult;
    }

    public function setDedifficult(string $dedifficult): self
    {
        $this->dedifficult = $dedifficult;

        return $this;
    }

    public function getDialreussitenego(): ?string
    {
        return $this->dialreussitenego;
    }

    public function setDialreussitenego(string $dialreussitenego): self
    {
        $this->dialreussitenego = $dialreussitenego;

        return $this;
    }

    public function getDialoguedereussitepersu(): ?string
    {
        return $this->dialoguedereussitepersu;
    }

    public function setDialoguedereussitepersu(string $dialoguedereussitepersu): self
    {
        $this->dialoguedereussitepersu = $dialoguedereussitepersu;

        return $this;
    }

    public function getDialoguedereussitetaunt(): ?string
    {
        return $this->dialoguedereussitetaunt;
    }

    public function setDialoguedereussitetaunt(string $dialoguedereussitetaunt): self
    {
        $this->dialoguedereussitetaunt = $dialoguedereussitetaunt;

        return $this;
    }

    public function getDialoguedereussitenawak(): ?string
    {
        return $this->dialoguedereussitenawak;
    }

    public function setDialoguedereussitenawak(string $dialoguedereussitenawak): self
    {
        $this->dialoguedereussitenawak = $dialoguedereussitenawak;

        return $this;
    }

    public function getDialoguededefaitenego(): ?string
    {
        return $this->dialoguededefaitenego;
    }

    public function setDialoguededefaitenego(string $dialoguededefaitenego): self
    {
        $this->dialoguededefaitenego = $dialoguededefaitenego;

        return $this;
    }

    public function getDialoguededefaitepersu(): ?string
    {
        return $this->dialoguededefaitepersu;
    }

    public function setDialoguededefaitepersu(string $dialoguededefaitepersu): self
    {
        $this->dialoguededefaitepersu = $dialoguededefaitepersu;

        return $this;
    }

    public function getDialoguededefaitetaunt(): ?string
    {
        return $this->dialoguededefaitetaunt;
    }

    public function setDialoguededefaitetaunt(string $dialoguededefaitetaunt): self
    {
        $this->dialoguededefaitetaunt = $dialoguededefaitetaunt;

        return $this;
    }

    public function getDialoguededefaitenawak(): ?string
    {
        return $this->dialoguededefaitenawak;
    }

    public function setDialoguededefaitenawak(string $dialoguededefaitenawak): self
    {
        $this->dialoguededefaitenawak = $dialoguededefaitenawak;

        return $this;
    }

    /**
     * @return Collection|Monster[]
     */
    public function getMonsters(): Collection
    {
        return $this->monsters;
    }

    public function addMonster(Monster $monster): self
    {
        if (!$this->monsters->contains($monster)) {
            $this->monsters[] = $monster;
        }

        return $this;
    }

    public function removeMonster(Monster $monster): self
    {
        if ($this->monsters->contains($monster)) {
            $this->monsters->removeElement($monster);
        }

        return $this;
    }

    public function getCreateur(): ?int
    {
        return $this->createur;
    }

    public function setCreateur(?int $createur): self
    {
        $this->createur = $createur;

        return $this;
    }

    public function getDialoguedereussitefin(): ?string
    {
        return $this->dialoguedereussitefin;
    }

    public function setDialoguedereussitefin(string $dialoguedereussitefin): self
    {
        $this->dialoguedereussitefin = $dialoguedereussitefin;

        return $this;
    }

    public function getDialoguededefaitefin(): ?string
    {
        return $this->dialoguededefaitefin;
    }

    public function setDialoguededefaitefin(string $dialoguededefaitefin): self
    {
        $this->dialoguededefaitefin = $dialoguededefaitefin;

        return $this;
    }

    /**
     * @return Collection|Objet[]
     */
    public function getObjetreussite(): Collection
    {
        return $this->objetreussite;
    }

    public function addObjetreussite(Objet $objetreussite): self
    {
        if (!$this->objetreussite->contains($objetreussite)) {
            $this->objetreussite[] = $objetreussite;
        }

        return $this;
    }

    public function removeObjetreussite(Objet $objetreussite): self
    {
        if ($this->objetreussite->contains($objetreussite)) {
            $this->objetreussite->removeElement($objetreussite);
        }

        return $this;
    }

    public function getObjetrequis(): ?int
    {
        return $this->objetrequis;
    }

    public function setObjetrequis(?int $objetrequis): self
    {
        $this->objetrequis = $objetrequis;

        return $this;
    }

    public function getQuestrequismany(): ?Objet
    {
        return $this->questrequismany;
    }

    public function setQuestrequismany(?Objet $questrequismany): self
    {
        $this->questrequismany = $questrequismany;

        return $this;
    }

    

    

    

    
}