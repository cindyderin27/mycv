<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>curriculum_vitae</title>
</head>

<body>
    <div class="parent">
        <div class="enfant1">
            <?php
            include("enfant1.php");
            ?>
        </div>


         <div class="enfant2">
             <?php
            include("enfant2.php");
             ?>

        </div>


        <div class="enfant3">
                <div class="sousenfant3_1">
                <?php
                    include("sousenfant3_1.php");
                    ?>
                </div>

                <div class="sousenfant3_2">
                <?php
                    include("sousenfant3_2.php");
                    ?>
                </div>

                <div class="sousenfant3_3">
                <?php
                    include("sousenfant3_3.php");
                    ?>
                </div>
                
        </div>

        
    </div>
</body>

</html>