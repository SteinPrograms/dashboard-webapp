<?php
    ini_set('display_errors', 'on');
    session_start();
    require("../backend/database.php");
    require("../backend/functions.php");
    include("../backend/task_bar.php");
    if ($_SESSION["auth"]!=1){
        header('Location:../index.php?erreur=1');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1">
    <link rel="stylesheet" href="../styles/settings.css">
    <link rel="stylesheet" href="../styles/taskbar.css">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/Icon.svg"/>
    <title>PortfolioTracker  | Settings</title>

</head>

<body onload="change_mode()">    

        
    <a class='logout' href="../backend/logout.php" >
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 2.91666C7.58968 2.91666 6.47688 3.37759 5.65641 4.19806C4.83594 5.01854 4.375 6.13133 4.375 7.29166V27.7083C4.375 28.8686 4.83594 29.9814 5.65641 30.8019C6.47688 31.6224 7.58968 32.0833 8.75 32.0833H17.5C18.6603 32.0833 19.7731 31.6224 20.5936 30.8019C21.4141 29.9814 21.875 28.8686 21.875 27.7083V7.29166C21.875 6.13133 21.4141 5.01854 20.5936 4.19806C19.7731 3.37759 18.6603 2.91666 17.5 2.91666H8.75ZM23.7606 10.6356C24.0341 10.3622 24.405 10.2086 24.7917 10.2086C25.1784 10.2086 25.5492 10.3622 25.8227 10.6356L31.656 16.4689C31.9294 16.7424 32.083 17.1133 32.083 17.5C32.083 17.8867 31.9294 18.2576 31.656 18.531L25.8227 24.3644C25.5477 24.63 25.1793 24.777 24.7969 24.7737C24.4145 24.7704 24.0488 24.617 23.7784 24.3466C23.508 24.0762 23.3546 23.7104 23.3513 23.3281C23.348 22.9457 23.495 22.5773 23.7606 22.3023L27.1046 18.9583H14.5833C14.1966 18.9583 13.8256 18.8047 13.5521 18.5312C13.2786 18.2577 13.125 17.8868 13.125 17.5C13.125 17.1132 13.2786 16.7423 13.5521 16.4688C13.8256 16.1953 14.1966 16.0417 14.5833 16.0417H27.1046L23.7606 12.6977C23.4872 12.4242 23.3336 12.0534 23.3336 11.6667C23.3336 11.28 23.4872 10.9091 23.7606 10.6356V10.6356Z" fill="var(--accent-color)"/>
        </svg>
    </a>
    <div class="header">
        <h1>Paramètres</h1>
    </div>
    
    
    <div class="status">
        
        <h1>Status</h1>


        <div class="little-break"></div>
        <div class="status-light" id="status_light"></div>
        <p>En marche depuis : <p id="runtime"></p></p>

    </div>

<footer>
<script src="/scripts/index.js"></script>
<?php

task_bar("settings");
?>
</footer>

<script>
    function dateDiff(date1, date2){
        var diff = {}                           // Initialisation du retour
        var tmp = date2 - date1;
    
        tmp = Math.floor(tmp/1000);             // Nombre de secondes entre les 2 dates
        diff.sec = tmp % 60;                    // Extraction du nombre de secondes
    
        tmp = Math.floor((tmp-diff.sec)/60);    // Nombre de minutes (partie entière)
        diff.min = tmp % 60;                    // Extraction du nombre de minutes
    
        tmp = Math.floor((tmp-diff.min)/60);    // Nombre d'heures (entières)
        diff.hour = tmp % 24;                   // Extraction du nombre d'heures
        
        tmp = Math.floor((tmp-diff.hour)/24);   // Nombre de jours restants
        diff.day = tmp;
        
        return diff;
    }

    function currentTime() {
        <?php 
            $requete = "select * from program";
            $result = @mysqli_query(cnxDB(),$requete);
            if ( $result == FALSE ){
                echo("var start = 'error';");
            }
            elseif  ( mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    echo("var start ='".$row['start']."' ;");
                }
            }
            else{
                echo("var start = 'no result';");
                }
        ?>
        var values = start.split(/[- :]/);
        var start_date = new Date(Date.UTC(values[0], values[1]-1, values[2], values[3], values[4], values[5]));
        var date = new Date(); /* creating object of Date class */
        date = updateTime(date);
        var hour = date.getHours();
        var min = date.getMinutes();
        var sec = date.getSeconds();

        var diff = dateDiff(start_date,date);
        document.getElementById("runtime").innerText = diff.day+" d "+diff.hour+" h "+diff.min+" m "+diff.sec+" s";
        var t = setTimeout(function(){ currentTime() }, 1000);
  }
  
  function updateTime(k) {
    if (k < 10) {
      return "0" + k;
    }
    else {
      return k;
    }
  }
        


    currentTime(); /* calling currentTime() function to initiate the process */
</script>

<script>
        <?php 
            $requete = "select * from program";
            $result = @mysqli_query(cnxDB(),$requete);
            if ( $result == FALSE ){
                echo("var power = 'error';");
            }
            elseif  ( mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    echo("var power ='".$row['status']."' ;");
                }
            }
            else{
                echo("var power = 'no result';");
                }
        ?>
        var light_indicator = document.getElementById("status_light");
        if (power=='1'){
            light_indicator.style.background='green'
            console.log("Button color set to green");
        }
        else{
            light_indicator.style.background='red'
            console.log("Button color set to red");
            start = 'no'
        }

</script>
</body>
</html>
