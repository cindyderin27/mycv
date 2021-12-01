
 
                <div class="sousenfant3_2">
<?php

$title="Point d'intérêts";
$hobbies="simple passe temps pour se faire un plaisir";
$pes="IMAGES/pes2020.png";
$stack="IMAGES/stackoverflow.png";
$graf="IMAGES/graf.png";
$criminal="IMAGES/criminal.png";
$brasserie="IMAGES/brasserie.png";
$danse="IMAGES/danse.png";
$guiness="IMAGES/guiness.png";




   
              echo  '<div class="pointInteret">
                    <h3>'.$title.'</h3>
                    <p style="font-style: italic;">'.$hobbies.'</p>
                     
                    <div class="image">
                        <div class="image1">
                            <img src='.$pes.' alt="" srcset="">
                            <img src='.$stack.' alt="" srcset="">
                            <img src='.$graf.' alt="" srcset="">
                        </div>
                        <div class="image2">
                            <img src='.$criminal.' alt="" srcset="">
                            <img src='.$brasserie.' alt="" srcset="">
                            <img src='.$danse.' alt="" srcset="">
                            <img src='.$guiness.' alt="" srcset="">
                        </div>
                    </div>
                </div>'
                ?>
            <?php

$langue="Langues";
$pratique="Pratiquées en entreprise";
$francais="Français";
$anglais="Anglais";
             echo   '<div class="blocklangues">
                    <div class="languePratique">
                        <h3>'.$langue.'</h3>
                        <p style="font-style: italic;">'.$pratique.'</p>
                    </div>
                    <div class="checkLangue">
                        <div class="français">
                            <input type="checkbox" name="" id="" class="checkDex">
                            <p>'.$francais.'</p>
                        </div>
                        <div class="français">
                            <input type="checkbox" name="" id="" class="checkDex">
                            <p>'.$anglais.'</p>
                        </div>
                    </div>
                </div>'
  
              
            ?>

</div>