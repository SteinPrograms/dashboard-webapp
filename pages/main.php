
<?php
ini_set('display_errors', 1);
require("../functions/functions.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortfolioTracker</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php head(); ?>

</head>

<body>
    <?php
    
    function chart(){
        echo('<div width="50%"><canvas id="myChart"></canvas><script src="../js/chart.js"></script></div>');
    }
    chart();
    ?>
        


</body>
</html>