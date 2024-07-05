
<?php
    $_FILES['userfile']['name'] = $_SESSION['fname'].".jpeg";
    if (isset($_POST['submit'])) {
        $uploaddir = 'upload/';
        $aduploaddir = '../admin/upload/';
        $aduploadfile = $aduploaddir . basename($_FILES['userfile']['name']);
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    //echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) ) {
        //echo "File is valid, and was successfully uploaded.\n";
        move_uploaded_file($_FILES['userfile']['tmp_name'], $aduploadfile);
        echo "<script type='text/javascript'>alert('File is valid, and was successfully uploaded.');</script>";
    } else {
        echo "Possible file upload attack!\n";
    }
    /*
    echo 'Here is some more debugging info:';
    print_r($_FILES);

    print "</pre>";
 
    }*/

    function profile(){
        $_FILES['userfile']['name'] = $_SESSION['fname'].".jpeg";
        $uploaddir = 'upload/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
    }
}