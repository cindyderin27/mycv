<?php
$main="IMAGES/main.png";
$besoin1="Besoin";
$besoin2="d'un";
$besoin3="chef";
$besoin4="de";
$besoin5="projet?";
$loupe="IMAGES/loupe.png";
$delete="IMAGES/delete.png";
$cindy="IMAGES/cindy.jpg";
$nom="Cindy Temetang";
$profession="Architecte Logiciel / DevOps";
$sent="IMAGES/sent.png";



echo '<div class="sousenfant1">
                <div class="cover"></div>
                <div class="blockblanc">
                    <img src='.$main.' class="icon" alt="" srcset="">
                    <input type="search" name="" placeholder='.$besoin1.$besoin2.$besoin3.$besoin4.$besoin5.' class="searchbar" id="">
                    <div class="icon_searchbar">
                        <img src='.$loupe.' class="icon" alt="" srcset="">
                        <span class="divider"></span>
                        <img src='.$delete.' alt="" class="icon" srcset="">
                    </div>
                </div>
                <div class="image_et_Texte">
                    <img src='.$cindy.' class="profilImg" alt="" srcset="">
                    <div class="nom_profession">
                        <h1 class="nom">'.$nom.'</h1>
                        <p class="profession">'.$profession.'</p>
                    </div>
                </div>
                <span class="btnRouge"> <img src='.$sent.' height=30 ; width=30 > </span>
</div>';

?>



<?php
$cake="IMAGES/cake.png";
$naissance="Née le 27 Juillet 2001";
$originaire="Originaire du sud Cameroun";
$situationmatrimoniale="Marié, 02enfants - Santé RAS";
$location="IMAGES/location.png";
$residance="Résidant à Ndogbong";
$pays="Douala - Cameroun";
$map="Map: 4.053276 , 9.765047";
$tel="IMAGES/tel.png";
$telephone="(237) 674 053 983";
$plateforme="Mobile, Telegram, Whatsapp";
$email="IMAGES/email.png";
$emailname="junioressono@gmail.com";
$application="Google+, Twitter, Linkedin, Github";
$projet="+45 PROJETS";
$contrat="+31 CONTRATS";
$experience="12 ANS D EXP";

 echo '<div class="sousenfant2">

        <div class="sousenfantHaut">
            <div class="texteImageBlanc">
                <div class="imagecake">
                    <img src='.$cake.' style="height: 60px;width: 60px;" alt="" srcset=""
                        class="imageblanche">
                </div>
                <div class="textegauche">
                    <div class="texteNaissance">
                        <p>'.$naissance.'</p>
                        <p>'.$originaire.'</p>
                        <p>'.$situationmatrimoniale.'</p>
                    </div>
                    <div class="delimiter">
                        <hr class="hrNaissance">
                    </div>
                </div>

            </div>

            <div class="texteImageBlanc">
                <div class="imagecake">
                    <img src='.$location.' alt="" srcset="" class="imageblanche">
                </div>
                <div class="textegauche">
                    <div class="texteNaissance">
                        <p>'.$residance.'</p>
                        <p>'.$pays.'</p>
                        <p>'.$map.'</p>
                    </div>
                    <div class="delimiter">
                        <hr class="hrNaissance">
                    </div>
                </div>
            </div>


            <div class="texteImageBlanc">
                <div class="imagecake">
                    <img src='.$tel.' alt="" srcset="" class="imageblanche">
                </div>
                <div class="textegauche">
                    <div class="texteNaissance">
                        <p>'.$telephone.'</p>
                        <p>'.$plateforme.'</p>
                    </div>
                    <div class="delimiter">
                        <hr class="hrNaissance">
                    </div>
                </div>
            </div>



            <div class="texteImageBlanc">
                <div class="imagecake">
                    <img src='.$email.' style="height: 40px;" alt="" srcset="" class="imageblanche">
                </div>
                <div class="textegauche">
                    <div class="texteNaissance">
                        <p>'.$emailname.'</p>
                        <p>'.$application.'</p>
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
                    <p>'.$projet.'</p>
                </div>
                <div>
                    <p>'.$contrat.'</p>
                </div>
                <div>
                    <p>'.$experience.'</p>
                </div>
            </div>
        </div>
        <div class="sousenfantBas2">
            <div class="blocrouge"></div>
            <div></div>
            <div></div>
        </div>

</div> ';


?>