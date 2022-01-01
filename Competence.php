<?php
    class Competence{
       public $titre;
       public $langage;
       public $progression;


        public function __construct($titre,$langage,$progression)
        {
            $this->titre=$titre;
            $this->langage=$langage;
            $this->progression=$progression;

        }

        public static function boutonedition(){
            echo '
            <div class="modal fade" id="exampleModalCompetence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Nom utilisateur</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Mot de passe </label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary alertbox">OK</button>
                </div>
              </div>
            </div>
          </div>
            
            
            
            
            <div class="btnEdit">
            <button class="close btn-edition btn-envoyer buton_editer" id="exampleModalCompetence" data-bs-target="#exampleModalCompetence" data-bs-toggle="modal">
            <img src="IMAGES/pencil.png" class="icone" alt="" srcset="">
            </button>
            </div>';
        }

        public function afficheSousenfant2_2()
        {
            
            echo '
            <div class="sousenfant2_2">
                <input type="checkbox" checked name="" id="" class="checkDex">
                <div class="textNoir">
                    <div class="textGras">'.$this->titre.'</h3>
                        <img src="IMAGES/star.png"  alt="" srcset="">
                    </div>
                    <p>'.$this->langage.'</p>
                    <div class="progressGris">
                        <div class="progressBleu"></div>
                        <div class="progressCricle"></div>
                    </div>
                </div>
            </div>';

          
        }


    }

 
    $competence=  array (
     new  Competence ("Développement FrontEnd","HTML5, SASS, VueJs, NodeJs,Angular, JavaFx",85),
     new  Competence ("Développement BackEnd","Node JS, Drupal 8, Laravel, Kotlin, Java EE7",65),
     new  Competence ("Développement mobile","Android Kotlin, IOS Swift, Cordova, Flutter",75),
     new  Competence ("UI / UX Design","Photoshop CC, Adobe XD, Material Design",55),
     new  Competence ("Base de données & Big Data","Oracle 11g, PostgresSQL, Hadoop, Talend DI",90),
     new  Competence ("Outils / Environnements","Visual Paradigm, Git, Docker, K8s, Linux",70)
    );
    
    Competence::boutonedition();

    foreach($competence as $c){
        $c-> afficheSousenfant2_2();
    }

   
?>
