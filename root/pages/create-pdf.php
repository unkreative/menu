<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Menu export</title>
    
    <style>
/* for the menu title */
        .title {
            color: #244d58;
            font-family: "Quicksand", sans-serif;
            font-size: 15pt;
            font-style: normal;
            font-variant: normal;
            font-weight: 7000px;
            line-height: 1.2;
            margin-bottom: 3px;
            margin-left: 0;
            margin-right: 0;
            margin-top: 30px;
            orphans: 1;
            page-break-after: auto;
            page-break-before: auto;
            text-align: center;
            text-decoration: none;
            text-indent: 0;
            text-transform: none;
            widows:1;
        }

/* menu plats */
        .plat {
            color: #b0755c;
            font-family: 'Playfair Display', serif;
            font-size: 23pt;
            font-style: normal;
            font-variant: normal;

            font-weight: 900px;
            line-height: 1.2;
            margin-bottom: 0px;
            margin-left: 0;
            margin-right: 0;
            margin-top: 2px;
            orphans: 1;
            page-break-after: auto;
            page-break-before: auto;
            text-align: center;
            text-decoration: none;
            text-indent: 0;
            text-transform: none;
            widows: 1;
        }

/* date for the menu */
        .date {
            color: #244d58;
            font-family: "Quicksand", sans-serif;
            font-size: 20pt;
            font-style: normal;
            font-variant: normal;
            font-weight: 700;
            line-height: 0.55;
            /* margin: 10px; */
            padding: auto;
            margin: 0;
            /* margin-bottom:10px; */
            /* margin-left:0; */
            /* margin-right:0; */
            margin-top: 35px;
            /* page-break-after:auto; */
            /* page-break-before:auto; */
            text-align: center;
            text-decoration: none;
            text-indent: 0;
            text-transform: none;
            /* widows:1; */
        }

/* undertitle for the menu */
        .undertitle {
            color: #244d58;
            font-family: "Quicksand", sans-serif;
            font-size: 10pt;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1.7;
            margin-bottom: 10px;
            margin-left: 0;
            margin-right: 0;
            margin-top: 0px;
            orphans: 1;
            page-break-after: auto;
            page-break-before: auto;
            text-align: center;
            text-decoration: none;
            text-indent: 0;
            text-transform: none;
            widows: 1;
        }

/* main div where the text is stored of menu */
        .main_div {
            overflow: hidden;
            padding: 10px;

            text-align: center;
            position: relative;
            height: 296mm;
            /* width: 21cm; */
            background-color: white;
        }
/* div where the subtitle image is stored */
        .sub_div {
            overflow: hidden;
            position: absolute;
            bottom: 0px;
        }
</style>
    <!-- for fonts (quicksand, Playfair) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&family=Quicksand:wght@700&display=swap" rel="stylesheet">
    
    <!-- my own styleshet -->
    <link rel="stylesheet" type="text/css" href="/web/lem_menu/root/css/menu_style.css">
   
    <!-- for the pdf creation -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="/web/lem_menu/root/css/topnav.css" type="text/css">
    <script src="../scripts/navbar.js"></script>
    
<?php
// connect to db
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "menu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
// select command
$sql_lundi = "SELECT ID, date, potage, subtitle_potage, plat_1, subtitle_plat_1, plat_2, subtitle_plat_2, accompagnement, subtitle_accompagnement, légumes, subtitle_légumes, dessert, subtitle_dessert FROM lundi";

// id for file name
$ID = [];

$arr = array();
$arr1 = [];
// query result
$result_lundi = $conn->query($sql_lundi);

$arr1_date_lundi = array();
$arr_date_lundi = [];

$arr_potage_lundi = [];
$arr_subtitle_potage_lundi = [];

$arr_plat_1_lundi = [];
$arr_subtitle_plat_1_lundi = [];

$arr_plat_2_lundi = [];
$arr_subtitle_plat_2_lundi = [];

$arr_accompagnement_lundi = [];
$arr_subtitle_accompagnement_lundi = [];

$arr_légumes_lundi = [];
$arr_subtitle_légumes_lundi = [];

$arr_dessert_lundi = [];
$arr_subtitle_dessert_lundi = [];

if ($result_lundi->num_rows > 0)
{
    // output data of each row
    while ($row = $result_lundi->fetch_assoc())
    {
// add the id to array to be accessed later (createpdf)
        array_push($ID, $row["ID"]);
        
        // format and push date to array
        $ldate = strtotime($row["date"]);
        $ldate = date("l j F Y", $ldate);

        array_push($arr_date_lundi, $ldate);
        array_push($arr1, $row["ID"]);

        array_push($arr_potage_lundi, $row["potage"]);
        array_push($arr_subtitle_potage_lundi, $row["subtitle_potage"]);

        array_push($arr_plat_1_lundi, $row["plat_1"]);
        array_push($arr_subtitle_plat_1_lundi, $row["subtitle_plat_1"]);

        array_push($arr_plat_2_lundi, $row["plat_2"]);
        array_push($arr_subtitle_plat_2_lundi, $row["subtitle_plat_2"]);

        array_push($arr_accompagnement_lundi, $row["accompagnement"]);
        array_push($arr_subtitle_accompagnement_lundi, $row["subtitle_accompagnement"]);

        array_push($arr_légumes_lundi, $row["légumes"]);
        array_push($arr_subtitle_légumes_lundi, $row["subtitle_légumes"]);

        array_push($arr_dessert_lundi, $row["dessert"]);
        array_push($arr_subtitle_dessert_lundi, $row["subtitle_dessert"]);

    }
}

array_push($arr, $arr1);
array_push($arr1_date_lundi, $arr_date_lundi);

$sql_mardi = "SELECT ID, date, potage, subtitle_potage, plat_1, subtitle_plat_1, plat_2, subtitle_plat_2, accompagnement, subtitle_accompagnement, légumes, subtitle_légumes, dessert, subtitle_dessert FROM mardi";

$result_mardi = $conn->query($sql_mardi);

$arr1_date_mardi = array();
$arr_date_mardi = [];

$arr_potage_mardi = [];
$arr_subtitle_potage_mardi = [];

$arr_plat_1_mardi = [];
$arr_subtitle_plat_1_mardi = [];

$arr_plat_2_mardi = [];
$arr_subtitle_plat_2_mardi = [];

$arr_accompagnement_mardi = [];
$arr_subtitle_accompagnement_mardi = [];

$arr_légumes_mardi = [];
$arr_subtitle_légumes_mardi = [];

$arr_dessert_mardi = [];
$arr_subtitle_dessert_mardi = [];

if ($result_mardi->num_rows > 0)
{
    // output data of each row
    while ($row = $result_mardi->fetch_assoc())
    {

        $ldate = strtotime($row["date"]);
        $ldate = date("l j F Y", $ldate);
        array_push($arr_date_mardi, $ldate);

        array_push($arr_potage_mardi, $row["potage"]);
        array_push($arr_subtitle_potage_mardi, $row["subtitle_potage"]);

        array_push($arr_plat_1_mardi, $row["plat_1"]);
        array_push($arr_subtitle_plat_1_mardi, $row["subtitle_plat_1"]);

        array_push($arr_plat_2_mardi, $row["plat_2"]);
        array_push($arr_subtitle_plat_2_mardi, $row["subtitle_plat_2"]);

        array_push($arr_accompagnement_mardi, $row["accompagnement"]);
        array_push($arr_subtitle_accompagnement_mardi, $row["subtitle_accompagnement"]);

        array_push($arr_légumes_mardi, $row["légumes"]);
        array_push($arr_subtitle_légumes_mardi, $row["subtitle_légumes"]);

        array_push($arr_dessert_mardi, $row["dessert"]);
        array_push($arr_subtitle_dessert_mardi, $row["subtitle_dessert"]);

    }
}
array_push($arr1_date_mardi, $arr_date_mardi);

$sql_mercredi = "SELECT ID, date, potage, subtitle_potage, plat_1, subtitle_plat_1, plat_2, subtitle_plat_2, accompagnement, subtitle_accompagnement, légumes, subtitle_légumes, dessert, subtitle_dessert FROM mercredi";

$result_mercredi = $conn->query($sql_mercredi);

$arr1_date_mercredi = array();
$arr_date_mercredi = [];

$arr_potage_mercredi = [];
$arr_subtitle_potage_mercredi = [];

$arr_plat_1_mercredi = [];
$arr_subtitle_plat_1_mercredi = [];

$arr_plat_2_mercredi = [];
$arr_subtitle_plat_2_mercredi = [];

$arr_accompagnement_mercredi = [];
$arr_subtitle_accompagnement_mercredi = [];

$arr_légumes_mercredi = [];
$arr_subtitle_légumes_mercredi = [];

$arr_dessert_mercredi = [];
$arr_subtitle_dessert_mercredi = [];

if ($result_mercredi->num_rows > 0)
{
    // output data of each row
    while ($row = $result_mercredi->fetch_assoc())
    {

        $ldate = strtotime($row["date"]);
        $ldate = date("l j F Y", $ldate);
        array_push($arr_date_mercredi, $ldate);

        array_push($arr_potage_mercredi, $row["potage"]);
        array_push($arr_subtitle_potage_mercredi, $row["subtitle_potage"]);

        array_push($arr_plat_1_mercredi, $row["plat_1"]);
        array_push($arr_subtitle_plat_1_mercredi, $row["subtitle_plat_1"]);

        array_push($arr_plat_2_mercredi, $row["plat_2"]);
        array_push($arr_subtitle_plat_2_mercredi, $row["subtitle_plat_2"]);

        array_push($arr_accompagnement_mercredi, $row["accompagnement"]);
        array_push($arr_subtitle_accompagnement_mercredi, $row["subtitle_accompagnement"]);

        array_push($arr_légumes_mercredi, $row["légumes"]);
        array_push($arr_subtitle_légumes_mercredi, $row["subtitle_légumes"]);

        array_push($arr_dessert_mercredi, $row["dessert"]);
        array_push($arr_subtitle_dessert_mercredi, $row["subtitle_dessert"]);

    }
}
array_push($arr1_date_mercredi, $arr_date_mercredi);

$sql_jeudi = "SELECT ID, date, potage, subtitle_potage, plat_1, subtitle_plat_1, plat_2, subtitle_plat_2, accompagnement, subtitle_accompagnement, légumes, subtitle_légumes, dessert, subtitle_dessert FROM jeudi";

$result_jeudi = $conn->query($sql_jeudi);

$arr1_date_jeudi = array();
$arr_date_jeudi = [];

$arr_potage_jeudi = [];
$arr_subtitle_potage_jeudi = [];

$arr_plat_1_jeudi = [];
$arr_subtitle_plat_1_jeudi = [];

$arr_plat_2_jeudi = [];
$arr_subtitle_plat_2_jeudi = [];

$arr_accompagnement_jeudi = [];
$arr_subtitle_accompagnement_jeudi = [];

$arr_légumes_jeudi = [];
$arr_subtitle_légumes_jeudi = [];

$arr_dessert_jeudi = [];
$arr_subtitle_dessert_jeudi = [];

if ($result_jeudi->num_rows > 0)
{
    // output data of each row
    while ($row = $result_jeudi->fetch_assoc())
    {

        $ldate = strtotime($row["date"]);
        $ldate = date("l j F Y", $ldate);
        array_push($arr_date_jeudi, $ldate);

        array_push($arr_potage_jeudi, $row["potage"]);
        array_push($arr_subtitle_potage_jeudi, $row["subtitle_potage"]);

        array_push($arr_plat_1_jeudi, $row["plat_1"]);
        array_push($arr_subtitle_plat_1_jeudi, $row["subtitle_plat_1"]);

        array_push($arr_plat_2_jeudi, $row["plat_2"]);
        array_push($arr_subtitle_plat_2_jeudi, $row["subtitle_plat_2"]);

        array_push($arr_accompagnement_jeudi, $row["accompagnement"]);
        array_push($arr_subtitle_accompagnement_jeudi, $row["subtitle_accompagnement"]);

        array_push($arr_légumes_jeudi, $row["légumes"]);
        array_push($arr_subtitle_légumes_jeudi, $row["subtitle_légumes"]);

        array_push($arr_dessert_jeudi, $row["dessert"]);
        array_push($arr_subtitle_dessert_jeudi, $row["subtitle_dessert"]);

    }
}
array_push($arr1_date_jeudi, $arr_date_jeudi);

$sql_vendredi = "SELECT ID, date, potage, subtitle_potage, plat_1, subtitle_plat_1, plat_2, subtitle_plat_2, accompagnement, subtitle_accompagnement, légumes, subtitle_légumes, dessert, subtitle_dessert FROM vendredi";

$result_vendredi = $conn->query($sql_vendredi);

$arr1_date_vendredi = array();
$arr_date_vendredi = [];

$arr_potage_vendredi = [];
$arr_subtitle_potage_vendredi = [];

$arr_plat_1_vendredi = [];
$arr_subtitle_plat_1_vendredi = [];

$arr_plat_2_vendredi = [];
$arr_subtitle_plat_2_vendredi = [];

$arr_accompagnement_vendredi = [];
$arr_subtitle_accompagnement_vendredi = [];

$arr_légumes_vendredi = [];
$arr_subtitle_légumes_vendredi = [];

$arr_dessert_vendredi = [];
$arr_subtitle_dessert_vendredi = [];

if ($result_vendredi->num_rows > 0)
{
    // output data of each row
    while ($row = $result_vendredi->fetch_assoc())
    {

        $ldate = strtotime($row["date"]);
        $ldate = date("l j F Y", $ldate);
        array_push($arr_date_vendredi, $ldate);

        array_push($arr_potage_vendredi, $row["potage"]);
        array_push($arr_subtitle_potage_vendredi, $row["subtitle_potage"]);

        array_push($arr_plat_1_vendredi, $row["plat_1"]);
        array_push($arr_subtitle_plat_1_vendredi, $row["subtitle_plat_1"]);

        array_push($arr_plat_2_vendredi, $row["plat_2"]);
        array_push($arr_subtitle_plat_2_vendredi, $row["subtitle_plat_2"]);

        array_push($arr_accompagnement_vendredi, $row["accompagnement"]);
        array_push($arr_subtitle_accompagnement_vendredi, $row["subtitle_accompagnement"]);

        array_push($arr_légumes_vendredi, $row["légumes"]);
        array_push($arr_subtitle_légumes_vendredi, $row["subtitle_légumes"]);

        array_push($arr_dessert_vendredi, $row["dessert"]);
        array_push($arr_subtitle_dessert_vendredi, $row["subtitle_dessert"]);

    }
}
array_push($arr1_date_vendredi, $arr_date_vendredi);

// to make the select thing to select menu by id
foreach ($arr as $item)
{
    if (is_array($item))
    {
        $num = 0;
        $box = '<div class="box" id="main">
        <h3>select the menu you want to create a pdf for</h3>';
        $close_box = '</div>';
        $label = '<label style="margin-left:10px;" for="select">generate menu for</label>';

        $select = '<select style="margin-top:1px" onchange="update(value)" id="select">';
        echo $box;
        echo $label;
        echo $select;
        echo "<option value='placeholder'>placeholder</option>";

        foreach ($item as $list)
        {
            $date = strtotime($list);
            echo "<option value='" . $num . "'>" . date("d/m/y", $date) . ' (' . $list . ')' . '</option>';
            $num = $num + 1;
        }

        echo '</select>';
        echo '<br>';
        echo $close_box;
    }
    else
    {
    }
}
$conn->close();

?>

</head>

<body>

    <div class="preview">
        <div id="divToExport">
            <div class="main_div" id="lundi">
                <div id="del_lundi">
                    <br>
                    <h3 class="date">date</h3>

                    <img src="/../web/lem_menu/root/images/restaurant-menu_title.png" width="793" alt="Melusina">
                    <br>

                    <div id="potage_lundi">
                        <h4 class="title">potage</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_potage_lundi">undertitle</h5>
                    </div>

                    <div id="plat_1_lundi">
                        <h4 class="title">Plat 1</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_plat_1_lundi">undertitle</h5>
                    </div>

                    <div id="plat_2_lundi">
                        <h4 class="title">Plat 2</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_plat_2_lundi">undertitle</h5>
                    </div>

                    <div id="accompagnement_lundi">
                        <h4 class="title">Accompagnement</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_accompagnement_lundi">undertitle</h5>
                    </div>

                    <div id="légumes_lundi">
                        <h4 class="title">Légumes</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_légumes_lundi">undertitle</h5>
                    </div>

                    <div id="dessert_lundi">
                        <h4 class="title">Dessert</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_dessert_lundi">undertitle</h5>
                    </div>

                    <div class="sub_div">
                        <img src="/../web/lem_menu/root/images/restaurant-menu_subtitle.jpg" width="793" alt="Melusina">
                    </div>
                </div>
            </div>

            <div class="main_div" id="mardi">
                <div id="del_mardi">
                    <br>
                    <br>
                    <h3 class="date">date</h3>

                    <img src="/../web/lem_menu/root/images/restaurant-menu_title.png" width="793" alt="Melusina">
                    <br>

                    <div id="potage_mardi">
                        <h4 class="title">potage</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_potage_mardi">undertitle</h5>
                    </div>

                    <div id="plat_1_mardi">
                        <h4 class="title">Plat 1</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_plat_1_mardi">undertitle</h5>
                    </div>

                    <div id="plat_2_mardi">
                        <h4 class="title">Plat 2</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_plat_2_mardi">undertitle</h5>
                    </div>

                    <div id="accompagnement_mardi">
                        <h4 class="title">Accompagnement</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_accompagnement_mardi">undertitle</h5>
                    </div>

                    <div id="légumes_mardi">
                        <h4 class="title">Légumes</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_légumes_mardi">undertitle</h5>
                    </div>

                    <div id="dessert_mardi">
                        <h4 class="title">Dessert</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_dessert_mardi">undertitle</h5>
                    </div>

                    <div class="sub_div">
                        <img src="/../web/lem_menu/root/images/restaurant-menu_subtitle.jpg" width="793" alt="Melusina">
                    </div>
                </div>
            </div>

            <div class="main_div" id="mercredi">
                <div id="del_mercredi">
                    <br>
                    <br>
                    <h3 class="date">date</h3>

                    <img src="/../web/lem_menu/root/images/restaurant-menu_title.png" width="793" alt="Melusina">
                    <br>

                    <div id="potage_mercredi">
                        <h4 class="title">potage</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_potage_mercredi">undertitle</h5>
                    </div>

                    <div id="plat_1_mercredi">
                        <h4 class="title">Plat 1</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_plat_1_mercredi">undertitle</h5>
                    </div>

                    <div id="plat_2_mercredi">
                        <h4 class="title">Plat 2</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_plat_2_mercredi">undertitle</h5>
                    </div>

                    <div id="accompagnement_mercredi">
                        <h4 class="title">Accompagnement</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_accompagnement_mercredi">undertitle</h5>
                    </div>

                    <div id="légumes_mercredi">
                        <h4 class="title">Légumes</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_légumes_mercredi">undertitle</h5>
                    </div>

                    <div id="dessert_mercredi">
                        <h4 class="title">Dessert</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_dessert_mercredi">undertitle</h5>
                    </div>

                    <div class="sub_div">
                        <img src="/../web/lem_menu/root/images/restaurant-menu_subtitle.jpg" width="793" alt="Melusina">
                    </div>
                </div>
            </div>

            <div class="main_div" id="jeudi">
                <div id="del_jeudi">
                    <br>
                    <br>
                    <h3 class="date">date</h3>

                    <img src="/../web/lem_menu/root/images/restaurant-menu_title.png" width="793" alt="Melusina">
                    <br>

                    <div id="potage_jeudi">
                        <h4 class="title">potage</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_potage_jeudi">undertitle</h5>
                    </div>

                    <div id="plat_1_jeudi">
                        <h4 class="title">Plat 1</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_plat_1_jeudi">undertitle</h5>
                    </div>

                    <div id="plat_2_jeudi">
                        <h4 class="title">Plat 2</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_plat_2_jeudi">undertitle</h5>
                    </div>

                    <div id="accompagnement_jeudi">
                        <h4 class="title">Accompagnement</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_accompagnement_jeudi">undertitle</h5>
                    </div>

                    <div id="légumes_jeudi">
                        <h4 class="title">Légumes</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_légumes_jeudi">undertitle</h5>
                    </div>

                    <div id="dessert_jeudi">
                        <h4 class="title">Dessert</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_dessert_jeudi">undertitle</h5>
                    </div>

                    <div class="sub_div">
                        <img src="/../web/lem_menu/root/images/restaurant-menu_subtitle.jpg" width="793" alt="Melusina">
                    </div>
                </div>
            </div>

            <div class="main_div" id="vendredi">
                <div id="del_vendredi">
                    <br>
                    <br>
                    <h3 class="date">date</h3>

                    <img src="/../web/lem_menu/root/images/restaurant-menu_title.png" width="793" alt="Melusina">
                    <br>

                    <div id="potage_vendredi">
                        <h4 class="title">potage</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_potage_vendredi">undertitle</h5>
                    </div>

                    <div id="plat_1_vendredi">
                        <h4 class="title">Plat 1</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_plat_1_vendredi">undertitle</h5>
                    </div>

                    <div id="plat_2_vendredi">
                        <h4 class="title">Plat 2</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_plat_2_vendredi">undertitle</h5>
                    </div>

                    <div id="accompagnement_vendredi">
                        <h4 class="title">Accompagnement</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_accompagnement_vendredi">undertitle</h5>
                    </div>

                    <div id="légumes_vendredi">
                        <h4 class="title">Légumes</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_légumes_vendredi">undertitle</h5>
                    </div>

                    <div id="dessert_vendredi">
                        <h4 class="title">Dessert</h4>
                        <h2 class="plat">Plat</h2>
                        <h5 class="undertitle" id="subtitle_dessert_vendredi">undertitle</h5>
                    </div>

                    <div class="sub_div">
                        <img src="/../web/lem_menu/root/images/restaurant-menu_subtitle.jpg" width="793" alt="Melusina">
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>


<script>
    var html_def = '';
    function update(arg) {
        // delete current pagees existing
try {
        let div_lundi = document.getElementById("lundi");
        div_lundi.parentNode.removeChild(div_lundi);
        console.log("success");
       
        let div_mardi = document.getElementById("mardi");
        div_mardi.parentNode.removeChild(div_mardi);
        console.log("success");

        let div_mercredi = document.getElementById("mercredi");
        div_mercredi.parentNode.removeChild(div_mercredi);
        console.log("success");

        let div_jeudi = document.getElementById("jeudi");
        div_jeudi.parentNode.removeChild(div_jeudi);
        console.log("success");

        let div_vendredi = document.getElementById("vendredi");
        div_vendredi.parentNode.removeChild(div_vendredi);
        console.log("success");
}
catch {
    console.error("error");
};
        // define variables to insert them later in html

        // get the array from php
        let arr_date_lundi = <?php echo json_encode($arr_date_lundi); ?>;
        // select variable in array by argu (index of selection)
        let date_lundi = arr_date_lundi[arg];

        let arr_potage_lundi = <?php echo json_encode($arr_potage_lundi); ?>;
        let potage_lundi = arr_potage_lundi[arg];

        let arr_subtitle_potage_lundi = <?php echo json_encode($arr_subtitle_potage_lundi); ?>;
        let subtitle_potage_lundi = arr_subtitle_potage_lundi[arg];

        let arr_plat_1_lundi = <?php echo json_encode($arr_plat_1_lundi); ?>;
        let plat_1_lundi = arr_plat_1_lundi[arg];

        let arr_subtitle_plat_1_lundi = <?php echo json_encode($arr_subtitle_plat_1_lundi); ?>;
        let subtitle_plat_1_lundi = arr_subtitle_plat_1_lundi[arg];

        let arr_plat_2_lundi = <?php echo json_encode($arr_plat_2_lundi); ?>;
        let plat_2_lundi = arr_plat_2_lundi[arg];

        let arr_subtitle_plat_2_lundi = <?php echo json_encode($arr_subtitle_plat_2_lundi); ?>;
        let subtitle_plat_2_lundi = arr_subtitle_plat_2_lundi[arg];

        let arr_accompagnement_lundi = <?php echo json_encode($arr_accompagnement_lundi); ?>;
        let accompagnement_lundi = arr_accompagnement_lundi[arg];

        let arr_subtitle_accompagnement_lundi = <?php echo json_encode($arr_subtitle_accompagnement_lundi); ?>;
        let subtitle_accompagnement_lundi = arr_subtitle_accompagnement_lundi[arg];

        let arr_légumes_lundi = <?php echo json_encode($arr_légumes_lundi); ?>;
        let légumes_lundi = arr_légumes_lundi[arg];

        let arr_subtitle_légumes_lundi = <?php echo json_encode($arr_subtitle_légumes_lundi); ?>;
        let subtitle_légumes_lundi = arr_subtitle_légumes_lundi[arg];

        let arr_dessert_lundi = <?php echo json_encode($arr_dessert_lundi); ?>;
        let dessert_lundi = arr_dessert_lundi[arg];

        let arr_subtitle_dessert_lundi = <?php echo json_encode($arr_subtitle_dessert_lundi); ?>;
        let subtitle_dessert_lundi = arr_subtitle_dessert_lundi[arg];



        let arr_date_mardi = <?php echo json_encode($arr_date_mardi); ?>;
        let date_mardi = arr_date_mardi[arg];

        let arr_potage_mardi = <?php echo json_encode($arr_potage_mardi); ?>;
        let potage_mardi = arr_potage_mardi[arg];

        let arr_subtitle_potage_mardi = <?php echo json_encode($arr_subtitle_potage_mardi); ?>;
        let subtitle_potage_mardi = arr_subtitle_potage_mardi[arg];

        let arr_plat_1_mardi = <?php echo json_encode($arr_plat_1_mardi); ?>;
        let plat_1_mardi = arr_plat_1_mardi[arg];

        let arr_subtitle_plat_1_mardi = <?php echo json_encode($arr_subtitle_plat_1_mardi); ?>;
        let subtitle_plat_1_mardi = arr_subtitle_plat_1_mardi[arg];

        let arr_plat_2_mardi = <?php echo json_encode($arr_plat_2_mardi); ?>;
        let plat_2_mardi = arr_plat_2_mardi[arg];

        let arr_subtitle_plat_2_mardi = <?php echo json_encode($arr_subtitle_plat_2_mardi); ?>;
        let subtitle_plat_2_mardi = arr_subtitle_plat_2_mardi[arg];

        let arr_accompagnement_mardi = <?php echo json_encode($arr_accompagnement_mardi); ?>;
        let accompagnement_mardi = arr_accompagnement_mardi[arg];

        let arr_subtitle_accompagnement_mardi = <?php echo json_encode($arr_subtitle_accompagnement_mardi); ?>;
        let subtitle_accompagnement_mardi = arr_subtitle_accompagnement_mardi[arg];

        let arr_légumes_mardi = <?php echo json_encode($arr_légumes_mardi); ?>;
        let légumes_mardi = arr_légumes_mardi[arg];

        let arr_subtitle_légumes_mardi = <?php echo json_encode($arr_subtitle_légumes_mardi); ?>;
        let subtitle_légumes_mardi = arr_subtitle_légumes_mardi[arg];

        let arr_dessert_mardi = <?php echo json_encode($arr_dessert_mardi); ?>;
        let dessert_mardi = arr_dessert_mardi[arg];

        let arr_subtitle_dessert_mardi = <?php echo json_encode($arr_subtitle_dessert_mardi); ?>;
        let subtitle_dessert_mardi = arr_subtitle_dessert_mardi[arg];



        let arr_date_mercredi = <?php echo json_encode($arr_date_mercredi); ?>;
        let date_mercredi = arr_date_mercredi[arg];

        let arr_potage_mercredi = <?php echo json_encode($arr_potage_mercredi); ?>;
        let potage_mercredi = arr_potage_mercredi[arg];

        let arr_subtitle_potage_mercredi = <?php echo json_encode($arr_subtitle_potage_mercredi); ?>;
        let subtitle_potage_mercredi = arr_subtitle_potage_mercredi[arg];

        let arr_plat_1_mercredi = <?php echo json_encode($arr_plat_1_mercredi); ?>;
        let plat_1_mercredi = arr_plat_1_mercredi[arg];

        let arr_subtitle_plat_1_mercredi = <?php echo json_encode($arr_subtitle_plat_1_mercredi); ?>;
        let subtitle_plat_1_mercredi = arr_subtitle_plat_1_mercredi[arg];

        let arr_plat_2_mercredi = <?php echo json_encode($arr_plat_2_mercredi); ?>;
        let plat_2_mercredi = arr_plat_2_mercredi[arg];

        let arr_subtitle_plat_2_mercredi = <?php echo json_encode($arr_subtitle_plat_2_mercredi); ?>;
        let subtitle_plat_2_mercredi = arr_subtitle_plat_2_mercredi[arg];

        let arr_accompagnement_mercredi = <?php echo json_encode($arr_accompagnement_mercredi); ?>;
        let accompagnement_mercredi = arr_accompagnement_mercredi[arg];

        let arr_subtitle_accompagnement_mercredi = <?php echo json_encode($arr_subtitle_accompagnement_mercredi); ?>;
        let subtitle_accompagnement_mercredi = arr_subtitle_accompagnement_mercredi[arg];

        let arr_légumes_mercredi = <?php echo json_encode($arr_légumes_mercredi); ?>;
        let légumes_mercredi = arr_légumes_mercredi[arg];

        let arr_subtitle_légumes_mercredi = <?php echo json_encode($arr_subtitle_légumes_mercredi); ?>;
        let subtitle_légumes_mercredi = arr_subtitle_légumes_mercredi[arg];

        let arr_dessert_mercredi = <?php echo json_encode($arr_dessert_mercredi); ?>;
        let dessert_mercredi = arr_dessert_mercredi[arg];

        let arr_subtitle_dessert_mercredi = <?php echo json_encode($arr_subtitle_dessert_mercredi); ?>;
        let subtitle_dessert_mercredi = arr_subtitle_dessert_mercredi[arg];

  

        let arr_date_jeudi = <?php echo json_encode($arr_date_jeudi); ?>;
        let date_jeudi = arr_date_jeudi[arg];

        let arr_potage_jeudi = <?php echo json_encode($arr_potage_jeudi); ?>;
        let potage_jeudi = arr_potage_jeudi[arg];

        let arr_subtitle_potage_jeudi = <?php echo json_encode($arr_subtitle_potage_jeudi); ?>;
        let subtitle_potage_jeudi = arr_subtitle_potage_jeudi[arg];

        let arr_plat_1_jeudi = <?php echo json_encode($arr_plat_1_jeudi); ?>;
        let plat_1_jeudi = arr_plat_1_jeudi[arg];

        let arr_subtitle_plat_1_jeudi = <?php echo json_encode($arr_subtitle_plat_1_jeudi); ?>;
        let subtitle_plat_1_jeudi = arr_subtitle_plat_1_jeudi[arg];

        let arr_plat_2_jeudi = <?php echo json_encode($arr_plat_2_jeudi); ?>;
        let plat_2_jeudi = arr_plat_2_jeudi[arg];

        let arr_subtitle_plat_2_jeudi = <?php echo json_encode($arr_subtitle_plat_2_jeudi); ?>;
        let subtitle_plat_2_jeudi = arr_subtitle_plat_2_jeudi[arg];

        let arr_accompagnement_jeudi = <?php echo json_encode($arr_accompagnement_jeudi); ?>;
        let accompagnement_jeudi = arr_accompagnement_jeudi[arg];

        let arr_subtitle_accompagnement_jeudi = <?php echo json_encode($arr_subtitle_accompagnement_jeudi); ?>;
        let subtitle_accompagnement_jeudi = arr_subtitle_accompagnement_jeudi[arg];

        let arr_légumes_jeudi = <?php echo json_encode($arr_légumes_jeudi); ?>;
        let légumes_jeudi = arr_légumes_jeudi[arg];

        let arr_subtitle_légumes_jeudi = <?php echo json_encode($arr_subtitle_légumes_jeudi); ?>;
        let subtitle_légumes_jeudi = arr_subtitle_légumes_jeudi[arg];

        let arr_dessert_jeudi = <?php echo json_encode($arr_dessert_jeudi); ?>;
        let dessert_jeudi = arr_dessert_jeudi[arg];

        let arr_subtitle_dessert_jeudi = <?php echo json_encode($arr_subtitle_dessert_jeudi); ?>;
        let subtitle_dessert_jeudi = arr_subtitle_dessert_jeudi[arg];

    

        let arr_date_vendredi = <?php echo json_encode($arr_date_vendredi); ?>;
        let date_vendredi = arr_date_vendredi[arg];

        let arr_potage_vendredi = <?php echo json_encode($arr_potage_vendredi); ?>;
        let potage_vendredi = arr_potage_vendredi[arg];

        let arr_subtitle_potage_vendredi = <?php echo json_encode($arr_subtitle_potage_vendredi); ?>;
        let subtitle_potage_vendredi = arr_subtitle_potage_vendredi[arg];

        let arr_plat_1_vendredi = <?php echo json_encode($arr_plat_1_vendredi); ?>;
        let plat_1_vendredi = arr_plat_1_vendredi[arg];

        let arr_subtitle_plat_1_vendredi = <?php echo json_encode($arr_subtitle_plat_1_vendredi); ?>;
        let subtitle_plat_1_vendredi = arr_subtitle_plat_1_vendredi[arg];

        let arr_plat_2_vendredi = <?php echo json_encode($arr_plat_2_vendredi); ?>;
        let plat_2_vendredi = arr_plat_2_vendredi[arg];

        let arr_subtitle_plat_2_vendredi = <?php echo json_encode($arr_subtitle_plat_2_vendredi); ?>;
        let subtitle_plat_2_vendredi = arr_subtitle_plat_2_vendredi[arg];

        let arr_accompagnement_vendredi = <?php echo json_encode($arr_accompagnement_vendredi); ?>;
        let accompagnement_vendredi = arr_accompagnement_vendredi[arg];

        let arr_subtitle_accompagnement_vendredi = <?php echo json_encode($arr_subtitle_accompagnement_vendredi); ?>;
        let subtitle_accompagnement_vendredi = arr_subtitle_accompagnement_vendredi[arg];

        let arr_légumes_vendredi = <?php echo json_encode($arr_légumes_vendredi); ?>;
        let légumes_vendredi = arr_légumes_vendredi[arg];

        let arr_subtitle_légumes_vendredi = <?php echo json_encode($arr_subtitle_légumes_vendredi); ?>;
        let subtitle_légumes_vendredi = arr_subtitle_légumes_vendredi[arg];

        let arr_dessert_vendredi = <?php echo json_encode($arr_dessert_vendredi); ?>;
        let dessert_vendredi = arr_dessert_vendredi[arg];

        let arr_subtitle_dessert_vendredi = <?php echo json_encode($arr_subtitle_dessert_vendredi); ?>;
        let subtitle_dessert_vendredi = arr_subtitle_dessert_vendredi[arg];

        // define html to be inserted later
        let html = `
            <div class="main_div" id="lundi">
                <div id="del_lundi">
                    <br>
                    <br>
                    <h3 class="date">${date_lundi}</h3>
                    
                    <img src="/../web/lem_menu/root/images/restaurant-menu_title.png" width="793" alt="Melusina">
                    <br>

                    <div id="potage_lundi">
                        <h2 class="plat">${potage_lundi}</h2>
                        <h5 class="undertitle" id="subtitle_potage_lundi">${subtitle_potage_lundi}</h5>
                    </div>

                    <div id="plat_1_lundi">
                        <h2 class="plat">${plat_1_lundi}</h2>
                        <h5 class="undertitle" id="subtitle_plat_1_lundi">${subtitle_plat_1_lundi}</h5>
                    </div>

                    <div id="plat_2_lundi">
                        <h2 class="plat">${plat_2_lundi}</h2>
                        <h5 class="undertitle" id="subtitle_plat_2_lundi">${subtitle_plat_2_lundi}</h5>
                    </div>

                    <div id="accompagnement_lundi">
                        <h2 class="plat">${accompagnement_lundi}</h2>
                        <h5 class="undertitle" id="subtitle_accompagnement_lundi">${subtitle_accompagnement_lundi}</h5>
                    </div>

                    <div id="légumes_lundi">
                        <h2 class="plat">${légumes_lundi}</h2>
                        <h5 class="undertitle" id="subtitle_légumes_lundi">${subtitle_légumes_lundi}</h5>
                    </div>

                    <div id="dessert_lundi">
                        <h2 class="plat">${dessert_lundi}</h2>
                        <h5 class="undertitle" id="subtitle_dessert_lundi">${subtitle_dessert_lundi}</h5>
                    </div>

                    <div class="sub_div">
                        <img src="/../web/lem_menu/root/images/restaurant-menu_subtitle.jpg" width="793" alt="Melusina">            
                    </div>
                </div>
            </div>

            <div class="main_div" id="mardi">
                <div id="del_mardi">
                    <br>
                    <br>
                    <h3 class="date">${date_mardi}</h3>
                    
                    <img src="/../web/lem_menu/root/images/restaurant-menu_title.png" width="793" alt="Melusina">
                    <br>

                    <div id="potage_mardi">
                        <h2 class="plat">${potage_mardi}</h2>
                        <h5 class="undertitle" id="subtitle_potage_mardi">${subtitle_potage_mardi}</h5>
                    </div>

                    <div id="plat_1_mardi">
                        <h2 class="plat">${plat_1_mardi}</h2>
                        <h5 class="undertitle" id="subtitle_plat_1_mardi">${subtitle_plat_1_mardi}</h5>
                    </div>

                    <div id="plat_2_mardi">
                        <h2 class="plat">${plat_2_mardi}</h2>
                        <h5 class="undertitle" id="subtitle_plat_2_mardi">${subtitle_plat_2_mardi}</h5>
                    </div>

                    <div id="accompagnement_mardi">
                        <h2 class="plat">${accompagnement_mardi}</h2>
                        <h5 class="undertitle" id="subtitle_accompagnement_mardi">${subtitle_accompagnement_mardi}</h5>
                    </div>

                    <div id="légumes_mardi">
                        <h2 class="plat">${légumes_mardi}</h2>
                        <h5 class="undertitle" id="subtitle_légumes_mardi">${subtitle_légumes_mardi}</h5>
                    </div>

                    <div id="dessert_mardi">
                        <h2 class="plat">${dessert_mardi}</h2>
                        <h5 class="undertitle" id="subtitle_dessert_mardi">${subtitle_dessert_mardi}</h5>
                    </div>

                    <div class="sub_div">
                        <img src="/../web/lem_menu/root/images/restaurant-menu_subtitle.jpg" width="793" alt="Melusina">            
                    </div>
                </div>
            </div>


            <div class="main_div" id="mercredi">
                <div id="del_mercredi">
                    <br>
                    <br>
                    <h3 class="date">${date_mercredi}</h3>
                    
                    <img src="/../web/lem_menu/root/images/restaurant-menu_title.png" width="793" alt="Melusina">
                    <br>

                    <div id="potage_mercredi">
                        <h2 class="plat">${potage_mercredi}</h2>
                        <h5 class="undertitle" id="subtitle_potage_mercredi">${subtitle_potage_mercredi}</h5>
                    </div>

                    <div id="plat_1_mercredi">
                        <h2 class="plat">${plat_1_mercredi}</h2>
                        <h5 class="undertitle" id="subtitle_plat_1_mercredi">${subtitle_plat_1_mercredi}</h5>
                    </div>

                    <div id="plat_2_mercredi">
                        <h2 class="plat">${plat_2_mercredi}</h2>
                        <h5 class="undertitle" id="subtitle_plat_2_mercredi">${subtitle_plat_2_mercredi}</h5>
                    </div>

                    <div id="accompagnement_mercredi">
                        <h2 class="plat">${accompagnement_mercredi}</h2>
                        <h5 class="undertitle" id="subtitle_accompagnement_mercredi">${subtitle_accompagnement_mercredi}</h5>
                    </div>

                    <div id="légumes_mercredi">
                        <h2 class="plat">${légumes_mercredi}</h2>
                        <h5 class="undertitle" id="subtitle_légumes_mercredi">${subtitle_légumes_mercredi}</h5>
                    </div>

                    <div id="dessert_mercredi">
                        <h2 class="plat">${dessert_mercredi}</h2>
                        <h5 class="undertitle" id="subtitle_dessert_mercredi">${subtitle_dessert_mercredi}</h5>
                    </div>

                    <div class="sub_div">
                        <img src="/../web/lem_menu/root/images/restaurant-menu_subtitle.jpg" width="793" alt="Melusina">            
                    </div>
                </div>
            </div>


            <div class="main_div" id="jeudi">
                <div id="del_jeudi">
                    <br>
                    <br>
                    <h3 class="date">${date_jeudi}</h3>
                    
                    <img src="/../web/lem_menu/root/images/restaurant-menu_title.png" width="793" alt="Melusina">
                    <br>

                    <div id="potage_jeudi">
                        <h2 class="plat">${potage_jeudi}</h2>
                        <h5 class="undertitle" id="subtitle_potage_jeudi">${subtitle_potage_jeudi}</h5>
                    </div>

                    <div id="plat_1_jeudi">
                        <h2 class="plat">${plat_1_jeudi}</h2>
                        <h5 class="undertitle" id="subtitle_plat_1_jeudi">${subtitle_plat_1_jeudi}</h5>
                    </div>

                    <div id="plat_2_jeudi">
                        <h2 class="plat">${plat_2_jeudi}</h2>
                        <h5 class="undertitle" id="subtitle_plat_2_jeudi">${subtitle_plat_2_jeudi}</h5>
                    </div>

                    <div id="accompagnement_jeudi">
                        <h2 class="plat">${accompagnement_jeudi}</h2>
                        <h5 class="undertitle" id="subtitle_accompagnement_jeudi">${subtitle_accompagnement_jeudi}</h5>
                    </div>

                    <div id="légumes_jeudi">
                        <h2 class="plat">${légumes_jeudi}</h2>
                        <h5 class="undertitle" id="subtitle_légumes_jeudi">${subtitle_légumes_jeudi}</h5>
                    </div>

                    <div id="dessert_jeudi">
                        <h2 class="plat">${dessert_jeudi}</h2>
                        <h5 class="undertitle" id="subtitle_dessert_jeudi">${subtitle_dessert_jeudi}</h5>
                    </div>

                    <div class="sub_div">
                        <img src="/../web/lem_menu/root/images/restaurant-menu_subtitle.jpg" width="793" alt="Melusina">            
                    </div>
                </div>
            </div>

            <div class="main_div" id="vendredi">
                <div id="del_vendredi">
                    <br>
                    <br>
                    <h3 class="date">${date_vendredi}</h3>
                    
                    <img src="/../web/lem_menu/root/images/restaurant-menu_title.png" width="793" alt="Melusina">
                    <br>

                    <div id="potage_vendredi">
                        <h2 class="plat">${potage_vendredi}</h2>
                        <h5 class="undertitle" id="subtitle_potage_vendredi">${subtitle_potage_vendredi}</h5>
                    </div>

                    <div id="plat_1_vendredi">
                        <h2 class="plat">${plat_1_vendredi}</h2>
                        <h5 class="undertitle" id="subtitle_plat_1_vendredi">${subtitle_plat_1_vendredi}</h5>
                    </div>

                    <div id="plat_2_vendredi">
                        <h2 class="plat">${plat_2_vendredi}</h2>
                        <h5 class="undertitle" id="subtitle_plat_2_vendredi">${subtitle_plat_2_vendredi}</h5>
                    </div>

                    <div id="accompagnement_vendredi">
                        <h2 class="plat">${accompagnement_vendredi}</h2>
                        <h5 class="undertitle" id="subtitle_accompagnement_vendredi">${subtitle_accompagnement_vendredi}</h5>
                    </div>

                    <div id="légumes_vendredi">
                        <h2 class="plat">${légumes_vendredi}</h2>
                        <h5 class="undertitle" id="subtitle_légumes_vendredi">${subtitle_légumes_vendredi}</h5>
                    </div>

                    <div id="dessert_vendredi">
                        <h2 class="plat">${dessert_vendredi}</h2>
                        <h5 class="undertitle" id="subtitle_dessert_vendredi">${subtitle_dessert_vendredi}</h5>
                    </div>

                    <div class="sub_div">
                        <img src="/../web/lem_menu/root/images/restaurant-menu_subtitle.jpg" width="793" alt="Melusina">            
                    </div>
                </div>
            </div>
`;

// near translate function, can be upgraded and rewritten to be more compact
// values to replace
let replace1 = "January";
let torep1 = "janvier";

let replace2 = "February";
let torep2 = "février";

let replace3 = "March";
let torep3 = "mars";

let replace4 = "April";
let torep4 = "avril";

let replace5 = "May";
let torep5 = "mai";

let replace6 = "June";
let torep6 = "juin";

let replace7 = "July";
let torep7 = "juillet";

let replace8 = "August";
let torep8 = "août";

let replace9 = "September";
let torep9 = "septembre";

let replace10 = "October";
let torep10 = "octobre";

let replace11 = "November";
let torep11 = "novembre";

let replace12 = "December";
let torep12 = "décembre";

let replace13 = "Monday";
let torep13 = "Lundi";

let replace14 = "Tuesday";
let torep14 = "Mardi";

let replace15 = "Wednesday";
let torep15 = "Mercredi";

let replace16 = "Thursday";
let torep16 = "Jeudi";

let replace17 = "Friday";
let torep17 = "Vendredi";

let replace18 = "Saturday";
let torep18 = "samedi";

let replace19 = "Sunday";
let torep19 = "dimanche";

// make that all values replace everything
var re1 = new RegExp(replace1, 'g');
var re2 = new RegExp(replace2, 'g');
var re3 = new RegExp(replace3, 'g');
var re4 = new RegExp(replace4, 'g');
var re5 = new RegExp(replace5, 'g');
var re6 = new RegExp(replace6, 'g');
var re7 = new RegExp(replace7, 'g');
var re8 = new RegExp(replace8, 'g');
var re9 = new RegExp(replace9, 'g');
var re10 = new RegExp(replace10, 'g');
var re11 = new RegExp(replace11, 'g');
var re12 = new RegExp(replace12, 'g');
var re13 = new RegExp(replace13, 'g');
var re14 = new RegExp(replace14, 'g');
var re15 = new RegExp(replace15, 'g');
var re16 = new RegExp(replace16, 'g');
var re17 = new RegExp(replace17, 'g');
var re18 = new RegExp(replace18, 'g');
var re19 = new RegExp(replace19, 'g');

// replace in html
let html1 = html.replace(re1, torep1);
let html2 = html1.replace(re2, torep2);
let html3 = html2.replace(re3, torep3);
let html4 = html3.replace(re4, torep4);
let html5 = html4.replace(re5, torep5);
let html6 = html5.replace(re6, torep6);
let html7 = html6.replace(re7, torep7);
let html8 = html7.replace(re8, torep8);
let html9 = html8.replace(re9, torep9);
let html10 = html9.replace(re10, torep10);
let html11 = html10.replace(re11, torep11);
let html12 = html11.replace(re12, torep12);
let html13 = html12.replace(re13, torep13);
let html14 = html13.replace(re14, torep14);
let html15 = html14.replace(re15, torep15);
let html16 = html15.replace(re16, torep16);
let html17 = html16.replace(re17, torep17);
let html18 = html17.replace(re18, torep18);
let html19 = html18.replace(re19, torep19);

html_def = html19;
// insert the new html and button to generate file
const parentelement = document.getElementById("divToExport");
parentelement.insertAdjacentHTML("afterbegin", html19);

console.log("insert html");
// delete button 
try {
        let div_button = document.getElementById("btn");
        div_button.parentNode.removeChild(div_button);
        console.log("success");

}
catch {
    console.error("error");
};

try {
        let div_button = document.getElementById("btn2");
        div_button.parentNode.removeChild(div_button);
        console.log("success");

}
catch {
    console.error("error");
};

// make the new button
let button_html = `<button style="margin-left:10px" type="button" onclick="generatePDF(${arg})" id="btn">Export to PDF</button>`;
const pelement = document.getElementById("main");
pelement.insertAdjacentHTML("beforeend", button_html);

let button_html1 = `<button type="button" onclick="addNode()" id="btn2">html page</button>`;
const pelement1 = document.getElementById("main");
pelement1.insertAdjacentHTML("beforeend", button_html1);

    // add and remove final things (remove subtitle if empty and add title if present)
    if (potage_lundi == "") {
        let remove_subtitle = document.getElementById("subtitle_potage_lundi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("potage_lundi");
        let html = `
        <h4 class="title">potage</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }

    if (plat_1_lundi == "") {
    let remove_subtitle = document.getElementById("subtitle_plat_1_lundi");
    remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("plat_1_lundi");
        let html = `
        <h4 class="title">plat 1</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (plat_2_lundi == "") {
        let remove_subtitle = document.getElementById("subtitle_plat_2_lundi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("plat_2_lundi");
        let html = `
        <h4 class="title">plat 2</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (accompagnement_lundi == "") {
        let remove_subtitle = document.getElementById("subtitle_accompagnement_lundi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("accompagnement_lundi");
        let html = `
        <h4 class="title">accompagnement</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (légumes_lundi == "") {
        let remove_subtitle = document.getElementById("subtitle_légumes_lundi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("légumes_lundi");
        let html = `
        <h4 class="title">légumes</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (dessert_lundi == "") {
        let remove_subtitle = document.getElementById("subtitle_dessert_lundi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("dessert_lundi");
        let html = `
        <h4 class="title">dessert</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (potage_mardi == "") {
        let remove_subtitle = document.getElementById("subtitle_potage_mardi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("potage_mardi");
        let html = `
        <h4 class="title">potage</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }

    if (plat_1_mardi == "") {
    let remove_subtitle = document.getElementById("subtitle_plat_1_mardi");
    remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("plat_1_mardi");
        let html = `
        <h4 class="title">plat 1</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (plat_2_mardi == "") {
        let remove_subtitle = document.getElementById("subtitle_plat_2_mardi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("plat_2_mardi");
        let html = `
        <h4 class="title">plat 2</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (accompagnement_mardi == "") {
        let remove_subtitle = document.getElementById("subtitle_accompagnement_mardi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("accompagnement_mardi");
        let html = `
        <h4 class="title">accompagnement</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (légumes_mardi == "") {
        let remove_subtitle = document.getElementById("subtitle_légumes_mardi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("légumes_mardi");
        let html = `
        <h4 class="title">légumes</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (dessert_mardi == "") {
        let remove_subtitle = document.getElementById("subtitle_dessert_mardi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("dessert_mardi");
        let html = `
        <h4 class="title">dessert</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (potage_mercredi == "") {
        let remove_subtitle = document.getElementById("subtitle_potage_mercredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("potage_mercredi");
        let html = `
        <h4 class="title">potage</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }

    if (plat_1_mercredi == "") {
    let remove_subtitle = document.getElementById("subtitle_plat_1_mercredi");
    remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("plat_1_mercredi");
        let html = `
        <h4 class="title">plat 1</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (plat_2_mercredi == "") {
        let remove_subtitle = document.getElementById("subtitle_plat_2_mercredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("plat_2_mercredi");
        let html = `
        <h4 class="title">plat 2</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (accompagnement_mercredi == "") {
        let remove_subtitle = document.getElementById("subtitle_accompagnement_mercredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("accompagnement_mercredi");
        let html = `
        <h4 class="title">accompagnement</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (légumes_mercredi == "") {
        let remove_subtitle = document.getElementById("subtitle_légumes_mercredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("légumes_mercredi");
        let html = `
        <h4 class="title">légumes</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (dessert_mercredi == "") {
        let remove_subtitle = document.getElementById("subtitle_dessert_mercredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("dessert_mercredi");
        let html = `
        <h4 class="title">dessert</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    
    if (potage_jeudi == "") {
        let remove_subtitle = document.getElementById("subtitle_potage_jeudi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("potage_jeudi");
        let html = `
        <h4 class="title">potage</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }

    if (plat_1_jeudi == "") {
    let remove_subtitle = document.getElementById("subtitle_plat_1_jeudi");
    remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("plat_1_jeudi");
        let html = `
        <h4 class="title">plat 1</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (plat_2_jeudi == "") {
        let remove_subtitle = document.getElementById("subtitle_plat_2_jeudi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("plat_2_jeudi");
        let html = `
        <h4 class="title">plat 2</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (accompagnement_jeudi == "") {
        let remove_subtitle = document.getElementById("subtitle_accompagnement_jeudi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("accompagnement_jeudi");
        let html = `
        <h4 class="title">accompagnement</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (légumes_jeudi == "") {
        let remove_subtitle = document.getElementById("subtitle_légumes_jeudi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("légumes_jeudi");
        let html = `
        <h4 class="title">légumes</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (dessert_jeudi == "") {
        let remove_subtitle = document.getElementById("subtitle_dessert_jeudi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("dessert_jeudi");
        let html = `
        <h4 class="title">dessert</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    
    if (potage_vendredi == "") {
        let remove_subtitle = document.getElementById("subtitle_potage_vendredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("potage_vendredi");
        let html = `
        <h4 class="title">potage</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }

    if (plat_1_vendredi == "") {
    let remove_subtitle = document.getElementById("subtitle_plat_1_vendredi");
    remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("plat_1_vendredi");
        let html = `
        <h4 class="title">plat 1</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (plat_2_vendredi == "") {
        let remove_subtitle = document.getElementById("subtitle_plat_2_vendredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("plat_2_vendredi");
        let html = `
        <h4 class="title">plat 2</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (accompagnement_vendredi == "") {
        let remove_subtitle = document.getElementById("subtitle_accompagnement_vendredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("accompagnement_vendredi");
        let html = `
        <h4 class="title">accompagnement</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (légumes_vendredi == "") {
        let remove_subtitle = document.getElementById("subtitle_légumes_vendredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("légumes_vendredi");
        let html = `
        <h4 class="title">légumes</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    if (dessert_vendredi == "") {
        let remove_subtitle = document.getElementById("subtitle_dessert_vendredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    else {
        let add_title = document.getElementById("dessert_vendredi");
        let html = `
        <h4 class="title">dessert</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
    // check if days are completely there and if not delete them
    if (potage_lundi == "" && plat_1_lundi == "" && plat_2_lundi == "" && accompagnement_lundi == "" && légumes_lundi == "" && dessert_lundi == "") {
        let remove_lundi = document.getElementById("lundi");
        remove_lundi.parentNode.removeChild(remove_lundi);
    }
    if (potage_mardi == "" && plat_1_mardi == "" && plat_2_mardi == "" && accompagnement_mardi == "" && légumes_mardi == "" && dessert_mardi == "") {
        let remove_mardi = document.getElementById("mardi");
        remove_mardi.parentNode.removeChild(remove_mardi);
    }
    if (potage_mercredi == "" && plat_1_mercredi == "" && plat_2_mercredi == "" && accompagnement_mercredi == "" && légumes_mercredi == "" && dessert_mercredi == "") {
        let remove_mercredi = document.getElementById("mercredi");
        remove_mercredi.parentNode.removeChild(remove_mercredi);
    }
    if (potage_jeudi == "" && plat_1_jeudi == "" && plat_2_jeudi == "" && accompagnement_jeudi == "" && légumes_jeudi == "" && dessert_jeudi == "") {
        let remove_jeudi = document.getElementById("jeudi");
        remove_jeudi.parentNode.removeChild(remove_jeudi);
    }
    if (potage_vendredi == "" && plat_1_vendredi == "" && plat_2_vendredi == "" && accompagnement_vendredi == "" && légumes_vendredi == "" && dessert_vendredi == "") {
        let remove_vendredi = document.getElementById("vendredi");
        remove_vendredi.parentNode.removeChild(remove_vendredi);
    }
    
    };
    
    function generatePDF(arg) {
        let id_menu = <?php echo json_encode($ID); ?>;
       
        let menu_id = id_menu[arg];
        
        // Choose the element id which you want to export.
        var element = document.getElementById('divToExport');
        
        var opt = {

            // margin:       0.5,
            filename:     `${menu_id}.pdf`,
            html2canvas:  { scale: 2},
            image:        { type: 'jpeg', quality: 0.98 },
            jsPDF:        {precision: '16'},

          }; 
        // choose the element and pass it to html2pdf() function and call the save() on it to save as pdf.
        html2pdf().set(opt).from(element).save();
      }
</script>
<script>

function addNode() {
    var opened = window.open("");
    opened.document.write(`
    <html>
    <head>
    <title>Menu preview</title>
    <link rel="stylesheet" type="text/css" href="/web/lem_menu/root/css/menu_style.css">

    <style>
/* for the menu title */
        .title {
            color: #244d58;
            font-family: "Quicksand", sans-serif;
            font-size: 15pt;
            font-style: normal;
            font-variant: normal;
            font-weight: 7000px;
            line-height: 1.2;
            margin-bottom: 3px;
            margin-left: 0;
            margin-right: 0;
            margin-top: 30px;
            orphans: 1;
            page-break-after: auto;
            page-break-before: auto;
            text-align: center;
            text-decoration: none;
            text-indent: 0;
            text-transform: none;
            /* widows:1; */
        }

/* menu plats */
        .plat {
            color: #b0755c;
            font-family: 'Playfair Display', serif;
            font-size: 23pt;
            font-style: normal;
            font-variant: normal;

            font-weight: 900px;
            line-height: 1.2;
            margin-bottom: 0px;
            margin-left: 0;
            margin-right: 0;
            margin-top: 2px;
            orphans: 1;
            page-break-after: auto;
            page-break-before: auto;
            text-align: center;
            text-decoration: none;
            text-indent: 0;
            text-transform: none;
            widows: 1;
        }
body {
	background-color: #15172b;

}
        .preview_html {
	background-color: #15172b;

	width: 21cm;
	margin: auto;
	height: auto;
   /* margin: 10px;
	*/
	border-radius:1px;
}
/* date for the menu */
        .date {
            color: #244d58;
            font-family: "Quicksand", sans-serif;
            font-size: 20pt;
            font-style: normal;
            font-variant: normal;
            font-weight: 700;
            line-height: 0.55;
            /* margin: 10px; */
            padding: auto;
            margin: 0;
            /* margin-bottom:10px; */
            /* margin-left:0; */
            /* margin-right:0; */
            margin-top: 35px;
            /* page-break-after:auto; */
            /* page-break-before:auto; */
            text-align: center;
            text-decoration: none;
            text-indent: 0;
            text-transform: none;
            /* widows:1; */
        }

/* undertitle for the menu */
        .undertitle {
            color: #244d58;
            font-family: "Quicksand", sans-serif;
            font-size: 10pt;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 1.7;
            margin-bottom: 10px;
            margin-left: 0;
            margin-right: 0;
            margin-top: 0px;
            orphans: 1;
            page-break-after: auto;
            page-break-before: auto;
            text-align: center;
            text-decoration: none;
            text-indent: 0;
            text-transform: none;
            widows: 1;
        }

/* main div where the text is stored of menu */
        .main_div {
            overflow: hidden;

            text-align: center;
            position: relative;
            height: 296mm;
            /* width: 21cm; */
            background-color: white;
        }
/* div where the subtitle image is stored */
        .sub_div {
            overflow: hidden;
            position: absolute;
            bottom: 0px;
        }
</style>
    <!-- for fonts (quicksand, Playfair) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <!-- my own styleshet -->

    </head>
    <body>
    <div class="preview_html">
    ${html_def}

    </div>
    </body>
    </html>
    `);

    };
</script>
</body>

</html>