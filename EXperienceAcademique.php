<?php


class ExperienceAcademique{
   public  $filiere;
   public  $ecole;
   public $dateObtention;
   public $specialisation;

    public function __construct($filiere, $ecole, $dateObtention,$specialisation)
    {

         $this->filiere=$filiere;
         $this->ecole=$ecole;
         $this->dateObtention=$dateObtention;
         $this->specialisation=$specialisation;

    }

    public static function enteteHaut(){
        echo '   <div class="enteteExperience1">
        <div class="experienceGauche">
            <img src="IMAGES/chapeau.png"" style="height:60px;width:60px;" alt="" srcset="">
            <div class="experienceexpertise">
                <h1>Cursus Académique</h1>
                <p style="font-style: italic;">Diplômes et formations certifiantes</p>
            </div>
        </div>
        <div>
            <img src="IMAGES/menu.png" style="height:30px;width:20px;" alt="">
        </div>
    </div>';
    }

    public function Sousenfant3_3(){
        echo '
        <div class="contenuBasBlanc">
            <p class="professionEtablissement">
               '.$this->filiere.'
                <span style="font-weight: bold;">
                    '.$this->ecole.'
                </span>
            </p>
            <div class="basDroit">
                <div style="display: flex;">
                    <p style="color:#72A4C7;">'.$this->dateObtention.' </p>
                    <p>'.$this->specialisation.'</p>
                </div>
               <hr class="hrNaissance">
            </div>
        </div> ';
    
    }


}


$academique =  array (
    new  ExperienceAcademique ("DIPET 2 Electroniques","-@ENSET de Douala", "Août 2016 -","Gestion d'éclairage d'une maison( Android + Arduino)"),
    new  ExperienceAcademique ("Oracle Cerified Associate","-@Kenthix Sarl", "Mars 2009 -","Oracle Database 11g Administratio"),
    new  ExperienceAcademique ("Oracle SQL Certifie","-@Kentnix Sarl", "Décembre 2008 -","SQL2, SQL 3, XML"),
    new  ExperienceAcademique ("Licence Professionnelle"," -@Douala Institute of Tech.", "Octobre 2008 -","Télécommunication & Réseaux"),
    new  ExperienceAcademique ("Responsable commercial "," -@BAO Sarl", "Dédembre 2012","juin 2013 "," - http://bao-sarl.com","Définition des stratégies commerciales, Contrôle de qualité, suivi.."),
    new  ExperienceAcademique ("DEC/ BTS","-@CCNB Dieppe - Canada", "Septembre  2007 -","Programmation Appliquée pour Internet"),
    new  ExperienceAcademique ("Baccalauréat"," -@Lycée Technique de Douala Bassap", "Juin 2005 - ","ElectroTechnique, Mention BIEN (major de centre"),
    new  ExperienceAcademique ("Baccalauréat"," -@Lycée Technique de Douala Bassap", "Juin 2005 - ","ElectroTechnique, Mention BIEN (major de centre")
   );


 ExperienceAcademique::enteteHaut();

   echo '<div class="basBlanc1">
   <div class="scroll">';

   foreach($academique as $c){
       $c-> Sousenfant3_3();
   }

   echo '</div> </div>';



?>
