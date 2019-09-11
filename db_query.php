<?php
    include("db/db_config.php");
    //Build an array with the data
    $team_drinks = array();
    $fetchqry = "SELECT name, work_drink, pub_drink FROM team order by name ASC";
    $result = mysqli_query($conn,$fetchqry);

    $rows = array();

    while($row = $result->fetch_assoc()){
        $team_drinks[] = $row;
    };
?>

