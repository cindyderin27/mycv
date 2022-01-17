<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <script src="bootstrap/js/bootstrap.min.js"></script>
   <script src="JS/jquery.min.js" defer></script>
    <script src="JS/jszip.min.js" defer></script>
    <script src="JS/kendo.all.min.js" defer></script>
    <script src="JS/script.js" defer ></script>
    <title>curriculum_vitae</title>
    
</head>

<body>
    <div class="parent" id="myCanvas">
        <div class="enfant1">
            <?php
           require 'Personne.php';
            ?>
        </div>

         <div class="enfant2">
             <?php
            require 'Competence.php';
             ?>

        </div>


        <div class="enfant3">
                <div class="sousenfant3_1">
                <?php
                   require 'Experience.php';
                    ?>
                </div>

                <div class="sousenfant3_2">
                <?php
                   require 'PointInteret.php';
                    ?>
                </div>

                <div class="sousenfant3_3">
                <?php
                  require 'EXperienceAcademique.php';
                    ?>
                </div>
                
        </div>

        
    </div>
</body>

</html>