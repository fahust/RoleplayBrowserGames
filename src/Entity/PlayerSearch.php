<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

class PlayerSearch {


    /**
     * @var int|null
     */
    private $createdByMe;


    /**
     * @var string|null
     */
    private $language;


    /**
     * @var string|null
     */
    private $type;

    /**
     * @var int|null
     */
    private $maxLevel;

    /**
     * @var int|null
     * @Assert\Range(min=10,max = 1000000)
     */
    private $minLevel;
    
    
    /**
    * @var bool|null
    */
   private $likeAsc;

   
   /**
   * @var bool|null
   */
    private $likeDesc;

   
    /**
    * @var bool|null
    */
     private $nameAsc;

   
     /**
     * @var bool|null
     */
      private $nameDesc;

   
      /**
      * @var bool|null
      */
       private $dateAsc;
  
     
       /**
       * @var bool|null
       */
        private $dateDesc;
  
     
        /**
        * @var int|null
        * @Assert\Range(min=3,max = 18)
        */
         private $choiceNbrPerPage;

    /**
     * @param integer|null $maxLevel
     * @return PlayerSearch
     */
    public function setMaxLevel(int $maxLevel): PlayerSearch
    {
        $this->maxLevel = $maxLevel;
        return $this;
    }
    /**
     * @param integer|null $minLevel
     * @return PlayerSearch
     */
    public function setMinLevel(int $minLevel): PlayerSearch
    {
        $this->minLevel = $minLevel;
        return $this;
    }
    /**
     * @return integer|null
     */
    public function getMaxLevel(): ?int
    {
        return $this->maxLevel;
    }
    /**
     * @return integer|null
     */
    public function getMinLevel(): ?int
    {
        return $this->minLevel;
    }
    
    /**
     * @return bool|null
     */
    public function getlikeAsc(): ?bool
    {
        return $this->likeAsc;
    }
    /**
     * @return bool|null
     */
    public function getlikeDesc(): ?bool
    {
        return $this->likeDesc;
    }
    
    /**
     * @return bool|null
     */
    public function getnameAsc(): ?bool
    {
        return $this->nameAsc;
    }
    /**
     * @return bool|null
     */
    public function getnameDesc(): ?bool
    {
        return $this->nameDesc;
    }
    
    /**
     * @return bool|null
     */
    public function getdateAsc(): ?bool
    {
        return $this->dateAsc;
    }
    /**
     * @return bool|null
     */
    public function getdateDesc(): ?bool
    {
        return $this->dateDesc;
    }
    /**
     * @param boolean|null $minHp
     * @return PlayerSearch
     */
    public function setNameAsc(bool $nameAsc): PlayerSearch
    {
        $this->nameAsc = $nameAsc;
        return $this;
    }
    /**
     * @param boolean|null $minHp
     * @return PlayerSearch
     */
    public function setNameDesc(bool $nameDesc): PlayerSearch
    {
        $this->nameDesc = $nameDesc;
        return $this;
    }
    /**
     * @param boolean|null $minHp
     * @return PlayerSearch
     */
    public function setLikeAsc(bool $likeAsc): PlayerSearch
    {
        $this->likeAsc = $likeAsc;
        return $this;
    }
    /**
     * @param boolean|null $minHp
     * @return PlayerSearch
     */
    public function setLikeDesc(bool $likeDesc): PlayerSearch
    {
        $this->likeDesc = $likeDesc;
        return $this;
    }
    /**
     * @param boolean|null $minHp
     * @return PlayerSearch
     */
    public function setDateAsc(bool $dateAsc): PlayerSearch
    {
        $this->dateAsc = $dateAsc;
        return $this;
    }
    /**
     * @param boolean|null $minHp
     * @return PlayerSearch
     */
    public function setDateDesc(bool $dateDesc): PlayerSearch
    {
        $this->dateDesc = $dateDesc;
        return $this;
    }
    /**
     * @return integer|null
     */
    public function getChoiceNbrPerPage(): ?int
    {
        return $this->choiceNbrPerPage;
    }
    /**
     * @param integer|null $choiceNbrPerPage
     * @return PlayerSearch
     */
    public function setChoiceNbrPerPage(int $choiceNbrPerPage): PlayerSearch
    {
        $this->choiceNbrPerPage = $choiceNbrPerPage;
        return $this;
    }

    
    /**
     * @return integer|null
     */
    public function getCreatedByMe(): ?int
    {
        return $this->createdByMe;
    }


    /**
     * @param integer|null $createdByMe
     * @return PlayerSearch
     */
    public function setCreatedByMe(int $createdByMe): PlayerSearch
    {
        $this->createdByMe = $createdByMe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?int
    {
        return $this->language;
    }
    /**
     * @param string|null $language
     * @return PlayerSearch
     */
    public function setLanguage(int $language): PlayerSearch
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * @param string|null $type
     * @return PlayerSearch
     */
    public function setType(int $type): PlayerSearch
    {
        $this->type = $type;
        return $this;
    }
    


}