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


        public function afficheSousenfant2_2()
        {
            echo '<div class="sousenfant2_2">
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

    foreach($competence as $c){
        $c-> afficheSousenfant2_2();
    }

   
?>
