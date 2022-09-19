<?php
include_once 'db_internat.php';

if(isset($_POST['submit']))
{    

     $date_lundi = $_POST['date_lundi'];
     $date_mardi = $_POST['date_mardi'];
     $date_mercredi = $_POST['date_mercredi'];
     $date_jeudi = $_POST['date_jeudi'];


     if (empty($date_lundi)){
          if (empty($date_mardi)){
               if (empty($date_mercredi)){
                    if (empty($date_jeudi)){
                              echo "neee";
                    }

                    else {
                         $ID = date("ymd", strtotime($date_jeudi));  
                    }
               }
               
               else {
                    $ID = date("ymd", strtotime($date_mercredi));  
               }
               
          }
          else {
               $ID = date("ymd", strtotime($date_mardi));  
          }
               
     }
          else {
               $ID = date("ymd", strtotime($date_lundi));  
          }

     $potage_lundi = $_POST['potage_lundi'];
     $subtitle_potage_lundi = $_POST['subtitle_potage_lundi'];
     $plat_1_lundi = $_POST['plat_1_lundi'];
     $subtitle_plat_1_lundi = $_POST['subtitle_plat_1_lundi'];
     $plat_2_lundi= $_POST['plat_2_lundi'];
     $subtitle_plat_2_lundi= $_POST['subtitle_plat_2_lundi'];
     $accompagnement_lundi= $_POST['accompagnement_lundi'];
     $subtitle_accompagnement_lundi= $_POST['subtitle_accompagnement_lundi'];
     $légumes_lundi= $_POST['légumes_lundi'];
     $subtitle_légumes_lundi= $_POST['subtitle_légumes_lundi'];
     $dessert_lundi= $_POST['dessert_lundi'];
     $subtitle_dessert_lundi= $_POST['subtitle_dessert_lundi'];

     $sql = "INSERT INTO lundi (ID, date, potage, subtitle_potage, plat_1, subtitle_plat_1, plat_2, subtitle_plat_2, accompagnement, subtitle_accompagnement, légumes, subtitle_légumes, dessert, subtitle_dessert)
     VALUES ('$ID', '$date_lundi', '$potage_lundi', '$subtitle_potage_lundi', '$plat_1_lundi', '$subtitle_plat_1_lundi', '$plat_2_lundi', '$subtitle_plat_2_lundi', '$accompagnement_lundi', '$subtitle_accompagnement_lundi', '$légumes_lundi', '$subtitle_légumes_lundi', '$dessert_lundi', '$subtitle_dessert')";
     mysqli_query($conn, $sql);
 
     $potage_mardi = $_POST['potage_mardi'];
     $subtitle_potage_mardi = $_POST['subtitle_potage_mardi'];
     $plat_1_mardi = $_POST['plat_1_mardi'];
     $subtitle_plat_1_mardi = $_POST['subtitle_plat_1_mardi'];
     $plat_2_mardi= $_POST['plat_2_mardi'];
     $subtitle_plat_2_mardi= $_POST['subtitle_plat_2_mardi'];
     $accompagnement_mardi= $_POST['accompagnement_mardi'];
     $subtitle_accompagnement_mardi= $_POST['subtitle_accompagnement_mardi'];
     $légumes_mardi= $_POST['légumes_mardi'];
     $subtitle_légumes_mardi= $_POST['subtitle_légumes_mardi'];
     $dessert_mardi= $_POST['dessert_mardi'];
     $subtitle_dessert_mardi= $_POST['subtitle_dessert_mardi'];

     $sql = "INSERT INTO mardi (ID, date, potage, subtitle_potage, plat_1, subtitle_plat_1, plat_2, subtitle_plat_2, accompagnement, subtitle_accompagnement, légumes, subtitle_légumes, dessert, subtitle_dessert)
     VALUES ('$ID', '$date_mardi', '$potage_mardi', '$subtitle_potage_mardi', '$plat_1_mardi', '$subtitle_plat_1_mardi', '$plat_2_mardi', '$subtitle_plat_2_mardi', '$accompagnement_mardi', '$subtitle_accompagnement_mardi', '$légumes_mardi', '$subtitle_légumes_mardi', '$dessert_mardi', '$subtitle_dessert')";
     mysqli_query($conn, $sql);
 
     $potage_mercredi = $_POST['potage_mercredi'];
     $subtitle_potage_mercredi = $_POST['subtitle_potage_mercredi'];
     $plat_1_mercredi = $_POST['plat_1_mercredi'];
     $subtitle_plat_1_mercredi = $_POST['subtitle_plat_1_mercredi'];
     $plat_2_mercredi= $_POST['plat_2_mercredi'];
     $subtitle_plat_2_mercredi= $_POST['subtitle_plat_2_mercredi'];
     $accompagnement_mercredi= $_POST['accompagnement_mercredi'];
     $subtitle_accompagnement_mercredi= $_POST['subtitle_accompagnement_mercredi'];
     $légumes_mercredi= $_POST['légumes_mercredi'];
     $subtitle_légumes_mercredi= $_POST['subtitle_légumes_mercredi'];
     $dessert_mercredi= $_POST['dessert_mercredi'];
     $subtitle_dessert_mercredi= $_POST['subtitle_dessert_mercredi'];

     $sql = "INSERT INTO mercredi (ID, date, potage, subtitle_potage, plat_1, subtitle_plat_1, plat_2, subtitle_plat_2, accompagnement, subtitle_accompagnement, légumes, subtitle_légumes, dessert, subtitle_dessert)
     VALUES ('$ID', '$date_mercredi', '$potage_mercredi', '$subtitle_potage_mercredi', '$plat_1_mercredi', '$subtitle_plat_1_mercredi', '$plat_2_mercredi', '$subtitle_plat_2_mercredi', '$accompagnement_mercredi', '$subtitle_accompagnement_mercredi', '$légumes_mercredi', '$subtitle_légumes_mercredi', '$dessert_mercredi', '$subtitle_dessert')";
     mysqli_query($conn, $sql);

     $potage_jeudi = $_POST['potage_jeudi'];
     $subtitle_potage_jeudi = $_POST['subtitle_potage_jeudi'];
     $plat_1_jeudi = $_POST['plat_1_jeudi'];
     $subtitle_plat_1_jeudi = $_POST['subtitle_plat_1_jeudi'];
     $plat_2_jeudi= $_POST['plat_2_jeudi'];
     $subtitle_plat_2_jeudi= $_POST['subtitle_plat_2_jeudi'];
     $accompagnement_jeudi= $_POST['accompagnement_jeudi'];
     $subtitle_accompagnement_jeudi= $_POST['subtitle_accompagnement_jeudi'];
     $légumes_jeudi= $_POST['légumes_jeudi'];
     $subtitle_légumes_jeudi= $_POST['subtitle_légumes_jeudi'];
     $dessert_jeudi= $_POST['dessert_jeudi'];
     $subtitle_dessert_jeudi= $_POST['subtitle_dessert_jeudi'];

     $sql = "INSERT INTO jeudi (ID, date, potage, subtitle_potage, plat_1, subtitle_plat_1, plat_2, subtitle_plat_2, accompagnement, subtitle_accompagnement, légumes, subtitle_légumes, dessert, subtitle_dessert)
     VALUES ('$ID', '$date_jeudi', '$potage_jeudi', '$subtitle_potage_jeudi', '$plat_1_jeudi', '$subtitle_plat_1_jeudi', '$plat_2_jeudi', '$subtitle_plat_2_jeudi', '$accompagnement_jeudi', '$subtitle_accompagnement_jeudi', '$légumes_jeudi', '$subtitle_légumes_jeudi', '$dessert_jeudi', '$subtitle_dessert')";
     mysqli_query($conn, $sql);

     mysqli_close($conn);
}

header("Location: http://localhost:8888/web/lem_menu/root/pages/internat.php");

?>
