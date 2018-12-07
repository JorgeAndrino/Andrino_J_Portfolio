<?php

include 'functions.php';

if (isset($_GET['projects'])) {
    
    $data = get_single_project($conn, $_GET['projects']);
    echo json_encode($data);
}

else {
    $data = get_all_projects($conn);
    echo json_encode($data);
}
?>