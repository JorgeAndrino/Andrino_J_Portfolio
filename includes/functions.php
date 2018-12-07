<?php

include 'connect.php';

function get_single_project($pdo) {
    $query = "SELECT project FROM tbl_gallery WHERE ID = '.pics'";

    $get_project = $pdo->query($query);
    $results = array();

    while($row = $get_project->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;


    }

    return $results;
}

function get_all_projects($pdo) {
    $query = "SELECT * FROM tbl_gallery";

    $get_project = $pdo->query($query);
    $results = array();

    while($row = $get_project->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }

    return $results;
}



?>