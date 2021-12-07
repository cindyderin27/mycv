<?php

    class Experience{
     public $profession;
     public $etablissement;
     public $dateDebut;
     public $dateFin;
     public $lien;
     public $poste;


    public function __construct(
    $profession,$etablissement,$dateDebut,$dateFin,$lien,$poste)
    {
        $this->profession=$profession;
        $this->etablissement=$etablissement;
        $this->dateDebut=$dateDebut;
        $this->dateFin=$dateFin;
        $this->lien=$lien;
        $this->poste=$poste;
    }


    public  function experienceTotal($sousnbrannee3){
        return $sousnbrannee3 + 2;
    } 

    public static function enteteHaut(){
        
        echo '<div class="enteteExperience">
        <div class="experienceGauche">
            <img src="IMAGES/batiment.png" style="height:40px;width:40px;" alt="" srcset="">
            <div class="experienceexpertise">
                <h2>Expérience Professionnelle ( 10 années ) </h2> 
                <p style="font-style: italic;"> Expertise en entreprise </p>
            </div>
        </div>
        <div>
            <img src="IMAGES/menu.png"  style="height:30px;width:20px;top: 20px;" alt="">
        </div>
    </div>';

    }

public function AfficheSousenfant3_1(){

   echo   
    ' 
    <div class="contenuBasBlanc">
            <p style="font-weight: bold; letter-spacing: 5px;" class="professionEtablissement">
               '.$this->profession.'
                <span>
                    '.$this->etablissement.'
                </span>
            </p>
            <div class="basDroit">
                <div>
                    <p style="color:#72A4C7;"> De '.$this->dateDebut.' à '.$this->dateFin.' '.$this->lien.' </p> 
                    <p>'.$this->poste.'</p>
                </div>
                <div class="delimiter">
                <hr class="hrNaissance">
            </div>
            </div>
        </div>';
        
    }


    }

  

    $experience=  array (
        new  Experience ("Chef des projets technologiques","-@Ets. M DE M", "Juillet 2019","ce jour ","- http://mdem.cm","chef du projet annuaire-universel.cm de l'ART;"),
        new  Experience ("Fondateur & DT","-@Startup ChickDev", "Juin 2015","ce jour "," - http://chickdev.com","Réalisation de plusieurs sites web et applications web et mobiles"),
        new  Experience ("Enseignant","-@Institut Universitaire de la Côte", "Octobre 2011","ce jour "," - http://istdi.net","Analyse, UML & MERISE,ORACLE & MYSQL , Dev IOS & Android , BI & Big Data Talend DI & Hadoop"),
        new  Experience ("Développeur en chef","-@Kayroual group", "juin 2015","mai 2013"," - http://kharoual.com","Réalisation de multiples projets logiciels et web , Infographie, ..."),
        new  Experience ("Responsable commercial "," -@BAO Sarl", "Dédembre 2012","juin 2013 "," - http://bao-sarl.com","Définition des stratégies commerciales, Contrôle de qualité, suivi.."),
        new  Experience ("Chef des projets technologiques","-@Ets. M DE M", "Juillet 2019","ce jour ","- http://mdem.cm","chef du projet annuaire-universel.cm de l'ART;"),
        new  Experience ("Développeur en chef","-@Kayroual group", "juin 2015","mai 2013"," - http://kharoual.com","Réalisation de multiples projets logiciels et web , Infographie, ..."),
        new  Experience ("Responsable commercial "," -@BAO Sarl", "Dédembre 2012","juin 2013 "," - http://bao-sarl.com","Définition des stratégies commerciales, Contrôle de qualité, suivi.."),
        new  Experience ("Chef des projets technologiques","-@Ets. M DE M", "Juillet 2019","ce jour ","- http://mdem.cm","chef du projet annuaire-universel.cm de l'ART;")
       );
   

     Experience::enteteHaut();

       echo '<div class="basBlanc">
       <div class="scroll">';

       foreach($experience as $c){
           $c-> AfficheSousenfant3_1();
       }

       echo '</div> </div>';




   
?>
