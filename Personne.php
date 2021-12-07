<?php

class Personne{
 
   public $imageCindy;
   public $nom;
   public $profession;
   public $naissance;
   public $originaire;
   public $situationmatrimoniale;
   public $residance;
   public $pays;
   public $telephone;
   public $plateforme;
   public $emailname;
   public $application;
   public $projet;
   public $contrat;
   public $experience;
   public $map;

   public function __construct($imageCindy,$nom,$profession,
   $naissance,$originaire,$situationmatrimoniale,$residance,$pays,$map,
   $telephone,$plateforme,$emailname,$application,$projet,$contrat,$experience)
   {
     
      $this->imageCindy=$imageCindy;
      $this-> nom=$nom;
      $this-> profession=$profession;
      $this-> naissance=$naissance;
      $this-> originaire=$originaire;
      $this-> situationmatrimoniale= $situationmatrimoniale;
      $this->map=$map;
      $this->residance=$residance;
      $this->pays=$pays;
      $this->telephone=$telephone;
      $this->plateforme=$plateforme;
      $this->emailname= $emailname;
      $this->application=$application;
      $this->projet= $projet;
      $this-> contrat= $contrat;
      $this-> experience= $experience;
   
   }


   public function afficheSousenfant1(){
      echo '<div class="sousenfant1">
                <div class="cover"></div>
                <div class="blockblanc">
                    <img src="IMAGES/main.png" class="icon" alt="" srcset="">
                    <input type="search" name="" placeholder="Besoin d un chef de projet?" class="searchbar" id="">
                    <div class="icon_searchbar">
                        <img src="IMAGES/loupe.png" class="icon" alt="" srcset="">
                        <span class="divider"></span>
                        <img src="IMAGES/delete.png" alt="" class="icon" srcset="">
                    </div>
                </div>
                <div class="image_et_Texte">
                    <img src='.$this->imageCindy.' class="profilImg" alt="" srcset="">
                    <div class="nom_profession">
                        <h1 class="nom">'.$this->nom.'</h1>
                        <p class="profession">'.$this->profession.'</p>
                    </div>
                </div>


                <div class="modal fade" id="exampleModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5>Envoyer un message</h5>
                                </div>
                                <div class="modal-body">
<<<<<<< HEAD
                                    <form method="POST" action="index.php">
=======
                                    <form method="POST" action="SendMail.php">
>>>>>>> aa3e456d7d16b50103d1776c4daf1d106a41611e
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Adresse mail:</label>
                                                <input type="text" class="form-control" id="recipient-name" name="adresseMail">
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                            <button type="submit" class="btn btn-primary">Envoyer</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="group-button" id="group-buttons">
                    <button class="btn-envoyer" id ="btn-email"  onclick="retieveEmail();">
                    <img src="IMAGES/download.png" alt="" srcset="">
                    </button>

                    <button class="btn-envoyer"  id="exampleModal" data-bs-target="#exampleModal" data-bs-toggle="modal">
                    <img src="IMAGES/gmail.png" alt="" srcset="">
                    </button>
                 </div>

                 


                <button class="btnRouge" id="button-click" onclick="showButton();"><img src="IMAGES/sent.png"  height=30 ; width=30 > </button>

                
   </div>'; 
       
   }


   public function afficheSousenfant2(){
      echo '<div class="sousenfant2">

        <div class="sousenfantHaut">
            <div class="texteImageBlanc">
                <div class="imagecake">
                    <img src="IMAGES/cake.png" style="height: 60px;width: 60px;" alt="" srcset=""
                        class="imageblanche">
                </div>
                <div class="textegauche">
                    <div class="texteNaissance">
                        <p>'.$this->naissance.'</p>
                        <p>'.$this->originaire.'</p>
                        <p>'.$this->situationmatrimoniale.'</p>
                    </div>
                    <div class="delimiter">
                        <hr class="hrNaissance">
                    </div>
                </div>

            </div>

            <div class="texteImageBlanc">
                <div class="imagecake">
                    <img src="IMAGES/location.png" alt="" srcset="" class="imageblanche">
                </div>
                <div class="textegauche">
                    <div class="texteNaissance">
                        <p>'.$this->residance.'</p>
                        <p>'.$this->pays.'</p>
                        <p>'.$this->map.'</p>
                    </div>
                    <div class="delimiter">
                        <hr class="hrNaissance">
                    </div>
                </div>
            </div>


            <div class="texteImageBlanc">
                <div class="imagecake">
                    <img src="IMAGES/tel.png" alt="" srcset="" class="imageblanche">
                </div>
                <div class="textegauche">
                    <div class="texteNaissance">
                        <p>'.$this->telephone.'</p>
                        <p>'.$this->plateforme.'</p>
                    </div>
                    <div class="delimiter">
                        <hr class="hrNaissance">
                    </div>
                </div>
            </div>



            <div class="texteImageBlanc">
                <div class="imagecake">
                    <img src="IMAGES/email.png" style="height: 40px;" alt="" srcset="" class="imageblanche">
                </div>
                <div class="textegauche">
                    <div class="texteNaissance">
                        <p>'.$this->emailname.'</p>
                        <p>'.$this->application.'</p>
                    </div>
                    <div class="delimiter">
                        <hr class="hrNaissance">
                    </div>
                </div>
            </div>
        </div>

        <div class="sousenfantBas">
            <div class="sousenfantBas1">
                <div class="projet">
                    <p>'.$this->projet.'</p>
                </div>
                <div>
                    <p>'.$this->contrat.'</p>
                </div>
                <div>
                    <p>'.$this->experience.'</p>
                </div>
            </div>
        </div>
        <div class="sousenfantBas2">
            <div class="blocrouge"></div>
            <div></div>
            <div></div>
        </div>

</div> ';
   }



}


$personne = new Personne
("IMAGES/cindy.jpg","Cindy Temetang","Architecte Logiciel / DevOps","Né le 27 Juillet 2001","Originaire du sud Cameroun",
"Marié, 02enfants - Santé RAS","Résidant à Ndogbong","Douala - Cameroun",
"Map: 4.053276 , 9.765047","(237) 674 053 983","Mobile, Telegram, Whatsapp",
"junioressono@gmail.com","Google+, Twitter, Linkedin, Github",
"+45 PROJETS","+31 CONTRATS","12 ANS D EXP"
) ;

 $personne->afficheSousenfant1();
 $personne->afficheSousenfant2();

?>