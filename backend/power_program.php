<?php

require("database.php");
database_update_program();
header('Location: ../frontend/funds.php');
?>