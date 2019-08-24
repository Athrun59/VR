<?php  
    $save_path  = "";
    if($_POST["save_path"]){
        $save_path = $_POST["save_path"];
    }else{
        $save_path  = "./uploads/";
    }
    if (!file_exists($save_path)) {
        mkdir($save_path);
    }
    $save_name = "";
    if($_POST["save_name"]){
        $save_name = $_POST["save_name"];
    }else{
        $save_name = basename($_FILES['uploadedfile']['name']);
    }
    $target_path = $save_path.$save_name;
    $result = move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
    if($result) {
        echo "success";
    } else{
        echo "fail";
    }
?> 