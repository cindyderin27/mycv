
<div class="sousenfant3_1">
            <?php 
            $batiment="IMAGES/batiment.png";
            $experience="Expériende professionelle";
            $expertise="Expertise en entreprise";
            $menu="IMAGES/menu.png";

            
            $etablissement3="-@Institut Universitaire de la Côte";
            $debut="De";
            $metier3="Analyse, UML & MERISE,ORACLE & MYSQL , Dev IOS & ";
            $metier3_1="Android , BI & Big Data Talend DI & Hadoop";
            $niveau1=1;
            $niveau2=2;
            $niveau4=4;
            $annee="année";
            $date2011= "Octobre 2011";
            $currentDate="ce jour";
            $lien2=" - http://istdi.net";
            $sousnbrannee3  = date("Y") - date("2011") ; 


            $etablissement4 =" -@Kayroual group";
            $profession =" Développeur en chef ";
            $debut="De";
            $metier4="Réalisation de multiples projets logiciels et web , Infographie, ... ";
            $date2015= "juin 2015";
            $date2013= "mai 2013";
            $lien3=" - http://kharoual.com";
            $sousnbrannee4 = date("2015") - date("2013") ; 


            $profession2="  Responsable commercial ";
            $etablisement5=" -@BAO Sarl";
            $debut="De";
            $metier5="Définition des stratégies commerciales, Contrôle de qualité, suivi...";
            $date2012= "Dédembre 2012";
            $date2013="juin 2013";
            $lien4=" - http://bao-sarl.com";
            $sousnbrannee5  = date("2013") - date("2012") ; 


            $etablissement1="-@Ets. M DE M";
            $debut="De";
            $date2019= "juillet 2019";
            $metier1="chef du projet annuaire-universel.cm de l'ART;";
            $currentDate="ce jour";
            $lien=" - http://mdem.cm";
            $sousnbrannee1  = date("Y") - date("2019") ; 


            
        $etablissement2=" -@Startup ChickDev";
        $debut="De";
        $metier2="Réalisation de plusieurs sites web et applications web et mobiles";
        $date2015= "jiun 2015";
        $currentDate="ce jour";
        $lien1=" - http://chickdev.com";
        $sousnbrannee2  = date("Y") - date("2015") ; 


        $etablissement4 =" -@Kayroual group";
        $profession =" Développeur en chef ";
        $debut="De";
        $metier4="Réalisation de multiples projets logiciels et web , Infographie, ... ";
        $date2015= "juin 2015";
        $date2013= "mai 2013";
        $lien3=" - http://kharoual.com";
        $sousnbrannee4 = date("2015") - date("2013") ; 


        $profession2="  Responsable commercial ";
        $etablisement5=" -@BAO Sarl";
        $debut="De";
        $metier5="Définition des stratégies commerciales, Contrôle de qualité, suivi...";
        $date2012= "décembre 2012";
        $date2013="juin 2013";
        $lien4=" - http://bao-sarl.com";
        $sousnbrannee5  = date("2013") - date("2012") ; 

        $experienceTotal=$sousnbrannee3 + 2;


             echo '<div class="enteteExperience">
                    <div class="experienceGauche">
                        <img src='.$batiment.' style="height:30px;width:30px;" alt="" srcset="">
                        <div class="experienceexpertise">
                            <h3>'.$experience.' ( '.$experienceTotal.' années ) </h3> 
                            <p style="font-style: italic;">'.$expertise.'</p>
                        </div>
                    </div>
                    <div>
                        <img src='.$menu.' style="height:30px;width:20px;" alt="">
                    </div>
                </div>
       

                  <div class="basBlanc">
                    <div class="scroll">
                    
                
                <div class="contenuBasBlanc">
                        <p style="font-weight: bold; letter-spacing: 5px;" class="professionEtablissement">
                            Chef desprojets technologiques
                            <span>
                                '.$etablissement1.'
                            </span>
                        </p>
                        <div class="basDroit">
                            <div>
                                <p style="color:#72A4C7;">'.$debut.'  '. $date2019. ' à '.$currentDate.' '.$lien.' </p> 
                                <p>'.$metier1.'</p>
                            </div>
                            <hr class="hrNaissance">
                        </div>
                    </div>

                

                 <div class="contenuBasBlanc">
                        <p style="font-weight: bold; letter-spacing: 1px;" class="professionEtablissement">
                            Fondateur & DT
                            <span>
                               '.$etablissement2.'
                            </span>
                        </p>
                        <div class="basDroit">
                            <div>
                                <p style="color:#72A4C7;">'.$debut.'  '. $date2015. ' à '.$currentDate.' '.$lien1.'</p>
                                <p>'.$metier2.'</p>
                            </div>
                            <hr class="hrNaissance">
                        </div>
                    </div>

           

        
           <div class="contenuBasBlanc">
                        <p style="font-weight: bold;" class="professionEtablissement">
                          Enseignant
                            <span>
                           '.$etablissement3.'
                            </span>
                        </p>
                        <div class="basDroit">
                            <div>
                                <p style="color:#72A4C7;">'.$debut.'  '. $date2011. ' à '.$currentDate.' '.$lien2.'</p>
                                <p>'.$metier3.'
                                 <br>'.$metier3_1.'
                                    " '.$niveau1.' <sup>  ère </sup>  ,'.$niveau2.' <sup>ème </sup> et '.$niveau4.' <sup> ème </sup> '.$annee.' </p>
                            </div>
                            <hr class="hrNaissance">
                        </div>
                    </div>

                

                    <div class="contenuBasBlanc">
                        <p style="font-weight: bold;" class="professionEtablissement">
                           '.$profession.'
                            <span>
                            '.$etablissement4.'
                            </span>
                        </p>
                <div class="basDroit">
                            <div>
                                <p style="color:#72A4C7;">'.$debut.'  '. $date2013. ' à '.$date2015.' '.$lien3.'</p>
                                <p>'.$metier4.'</p>
                            </div>
                            <hr class="hrNaissance">
                        </div>
                    </div>


                    <div class="contenuBasBlanc">
                        <p style="font-weight: bold;" class="professionEtablissement">
                          '.$profession2.'
                            <span>
                              '.$etablisement5.'
                            </span>
                        </p>
                        <div class="basDroit">
                            <div>
                                <p style="color:#72A4C7;">'.$debut.'  '. $date2012. ' à '.$date2013.' '.$lien4.'</p>
                                <p>'.$metier5.'</p>
                            </div>
                            <hr class="hrNaissance">
                        </div>
                    </div>
                    
                     



    
                    <div class="contenuBasBlanc">
                    <p style="font-weight: bold;" class="professionEtablissement">
                      Enseignant
                        <span>
                       '.$etablissement3.'
                        </span>
                    </p>
                    <div class="basDroit">
                        <div>
                            <p style="color:#72A4C7;">'.$debut.'  '. $date2011. ' à '.$currentDate.' '.$lien2.'</p>
                            <p>'.$metier3.'
                             <br>'.$metier3_1.'
                                " '.$niveau1.' <sup>  ère </sup>  ,'.$niveau2.' <sup>ème </sup> et '.$niveau4.' <sup> ème </sup> '.$annee.' </p>
                        </div>
                        <hr class="hrNaissance">
                    </div>
                </div>

                

                    <div class="contenuBasBlanc">
                        <p style="font-weight: bold;" class="professionEtablissement">
                           '.$profession.'
                            <span>
                            '.$etablissement4.'
                            </span>
                        </p>
                <div class="basDroit">
                            <div>
                                <p style="color:#72A4C7;">'.$debut.'  '. $date2013. ' à '.$date2015.' '.$lien3.'</p>
                                <p>'.$metier4.'</p>
                            </div>
                            <hr class="hrNaissance">
                        </div>
                    </div>


                    <div class="contenuBasBlanc">
                        <p style="font-weight: bold;" class="professionEtablissement">
                          '.$profession2.'
                            <span>
                              '.$etablisement5.'
                            </span>
                        </p>
                        <div class="basDroit">
                            <div>
                                <p style="color:#72A4C7;">'.$debut.'  '. $date2012. ' à '.$date2013.' '.$lien4.'</p>
                                <p>'.$metier5.'</p>
                            </div>
                            <hr class="hrNaissance">
                        </div>
                    </div>'
                    
                      ?>

</div>