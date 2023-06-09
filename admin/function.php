<?php
require '../include/db.php';

// Update Home
if (isset($_POST['updateHome'])) {
    $title_home = mysqli_real_escape_string($db,$_POST['title_home']);
    $subtitle_home = mysqli_real_escape_string($db,$_POST['subtitle_home']);
    $query = "UPDATE tbl_home SET title_home = '$title_home', subtitle_home = '$subtitle_home' WHERE id = 1";
    $run = mysqli_query($db,$query);
    if ($run) {
        echo "<script>document.location.href = 'index.php?success=Succesfully updated!';</script>";
    }
}
// Update Home

// Update About
if (isset($_POST['updateAbout'])) {
    $title_about = mysqli_real_escape_string($db,$_POST['title_about']);
    $subtitle_about = mysqli_real_escape_string($db,$_POST['subtitle_about']);
    // Img 1
    $img_about1 = $_FILES['img_about1']['name'];
    $imgtemp = $_FILES['img_about1']['tmp_name'];
    if ($imgtemp == '') {
        $sql_home = "SELECT * FROM tbl_about WHERE 1";
        $query_home = mysqli_query($db,$sql_home);
        $fetch_home = mysqli_fetch_array($query_home);
        $img_about1 = $fetch_home['img_about1'];
    }
    move_uploaded_file($imgtemp,"../images/$img_about1");
    // Img 2
    $img_about2 = $_FILES['img_about2']['name'];
    $imgtemp = $_FILES['img_about2']['tmp_name'];
    if ($imgtemp == '') {
        $sql_resume = "SELECT * FROM tbl_about WHERE 1";
        $query_resume = mysqli_query($db,$sql_resume);
        $fetch_resume = mysqli_fetch_array($query_resume);
        $img_about2 = $fetch_resume['img_about2'];
    }
    move_uploaded_file($imgtemp,"../images/$img_about2");
    // Img 3
    $img_about3 = $_FILES['img_about3']['name'];
    $imgtemp = $_FILES['img_about3']['tmp_name'];
    if ($imgtemp == '') {
        $sql_resume = "SELECT * FROM tbl_about WHERE 1";
        $query_resume = mysqli_query($db,$sql_resume);
        $fetch_resume = mysqli_fetch_array($query_resume);
        $img_about3 = $fetch_resume['img_about3'];
    }
    move_uploaded_file($imgtemp,"../images/$img_about3");
    $query = "UPDATE tbl_about SET title_about = '$title_about', subtitle_about = '$subtitle_about', img_about1 = '$img_about1', img_about2 = '$img_about2', img_about3 = '$img_about3' WHERE id = 1";
    $run = mysqli_query($db,$query);
    if ($run) {
        echo "<script>document.location.href = 'about.php?success=Succesfully updated!';</script>";
    }
}
// Update About
?>