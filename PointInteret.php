<?php

class PointInteret{

   public $title;
   public $hobbies;
   public $pes;
   public $stack;
   public $graf;
   public $criminal;
   public $brasserie;
   public $danse;
   public $guiness;
   public $langue;
   public $pratique;
   public $francais;
   public $anglais;


   public function __construct($title,$hobbies,$pes,$stack,$graf,$criminal,$brasserie,
    $danse,$guiness,$langue,$pratique,$francais,$anglais)
   {
    $this->title=$title;
    $this->hobbies=$hobbies;
    $this->pes=$pes;
    $this->stack=$stack;
    $this->graf=$graf;
    $this->criminal=$criminal;
    $this->brasserie=$brasserie;
    $this->danse=$danse;
    $this->guiness=$guiness;
    $this->langue=$langue;
    $this->pratique=$pratique;
    $this->francais=$francais;
    $this->anglais=$anglais;


   }

   
       public function AffichePointInteret(){
        echo  '<div class="pointInteret">

        <h2>'.$this->title.'</h2>

        <p style="font-style: italic;">'.$this->hobbies.'</p>
         
        <div class="image">
            <div class="image1">
                <img src='.$this->pes.' alt="" srcset="">
                <img src='.$this->stack.' alt="" srcset="">
                <img src='.$this->graf.' alt="" srcset="">
            </div>
            <div class="image2">
                <img src='.$this->criminal.' alt="" srcset="">
                <img src='.$this->brasserie.' alt="" srcset="">
                <img src='.$this->danse.' alt="" srcset="">
                <img src='.$this->guiness.' alt="" srcset="">
            </div>
        </div>
    </div>';

       }      


       public function AfficheLangue()
       {
        echo   '<div class="blocklangues">
                    <div class="languePratique">

                        <h2>'.$this->langue.'</h2>
                        <p style="font-style: italic;">'.$this->pratique.'</p>
                    </div>
                    <div class="checkLangue">
                        <div class="français">
                            <input type="checkbox" name="" id="" class="checkDex">
                            <p>'.$this->francais.'</p>
                        </div>
                        <div class="français">
                            <input type="checkbox" name="" id="" class="checkDex">
                            <p>'.$this->anglais.'</p>
                        </div>
                    </div>
                </div>';
       }  
  



}

$point = new PointInteret("Point d'intérêts",
"Simple passe-temps pour se faire un peu plaisir",
"IMAGES/pes2020.png","IMAGES/stackoverflow.png",
"IMAGES/graf.png","IMAGES/criminal.png",
"IMAGES/brasserie.png","IMAGES/danse.png",
"IMAGES/guiness.png","Langues","Pratiquées en entreprise","Français","Anglais");

$point->AffichePointInteret();
$point->AfficheLangue();
?>