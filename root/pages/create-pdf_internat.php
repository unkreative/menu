<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Internat export</title>
<!-- connect to ggogle fonts for Quicksand and Playfair -->
 
<!-- my own style sheet -->
<link rel="stylesheet" href="/../web/lem_menu/root/css/menu_style.css">
<link rel="stylesheet" href="/web/lem_menu/root/css/topnav.css" type="text/css">
<script src="../scripts/navbar.js"></script>

<style>
@import url(https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&family=Quicksand:wght@700&display=swap);
/* for the day */
 .day {
    overflow-wrap: break-word;

	 color:#244d58;
	 font-family:"Quicksand", sans-serif;
	 font-size:15pt;
	 font-style:normal;
	 font-variant:normal;
	 font-weight: 7000;
	 line-height:1.2;
	 margin-bottom:3px;
	 margin-left:0;
	 margin-right:0;
	 margin-top:30px;
	 orphans:1;
	 page-break-after:auto;
	 page-break-before:auto;
	 text-align:center;
	 text-decoration:none;
	 text-indent:0;
	 text-transform:none;
	/* widows:1;
	 */
}
/* for the plat */
 .plat {
	 color:#244d58;
	/* font-family: 'Playfair Display', serif; */
    overflow-wrap: break-word;

	 font-family:"Quicksand", sans-serif;
	 font-size:23pt;
	 font-style:normal;
	 font-variant:normal;
	 font-weight:900;
	 line-height:1.2;
	 margin-bottom:0;
	 margin-left:0;
	 margin-right:0;
	 margin-top:2px;
	 orphans:1;
	 page-break-after:auto;
	 page-break-before:auto;
	 text-align:center;
	 text-decoration:none;
	 text-indent:0;
	 text-transform:none;
	 widows:1;
}
/* for the date */
 .date {

	 color:#244d58;
	 font-family:"Quicksand", sans-serif;
	 font-size:20pt;
	 font-style:normal;
	 font-variant:normal;
	 font-weight:700;
	 line-height:0.55;
	/* margin: 10px;
	 */
	 margin: 0;
	/* margin-bottom:10px;
	 */
	/* margin-left:0;
	 */
	/* margin-right:0;
	 */
	 margin-top:35px;
	/* page-break-after:auto;
	 */
	/* page-break-before:auto;
	 */
	 text-align:center;
	 text-decoration:none;
	 text-indent:0;
	 text-transform:none;
	/* widows:1;
	 */
}
/* for the undertitle */
 .undertitle {
	 color:#244d58;
	 font-family:"Quicksand", sans-serif;
	 font-size:10pt;
	 font-style:normal;
	 font-variant:normal;
	 font-weight:normal;
	 line-height:1.7;
	 margin-bottom:10px;
	 margin-left:0;
	 margin-right:0;
	 margin-top:0;
	 orphans:1;
	 page-break-after:auto;
	 page-break-before:auto;
	 text-align:center;
	 text-decoration:none;
	 text-indent:0;
	 text-transform:none;
	 widows:1;
}
/* main div (body of one pdf page) */
 .main_div {
	 overflow: hidden;
	 text-align:center;
	 position: relative;
	 height: 296mm;
     padding: 10px;
	/* width: 21cm;
	 */
	 background-color: white;
}
/* sub div to place things at the end of main div */
 .sub_div {
	 overflow: hidden;
	 position: absolute;
	 bottom: 0;
}
</style>
<!-- for the pdf creation -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

<?php
// connect to db
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "internat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// sql query to select items
$sql_lundi = "SELECT ID, date, potage, subtitle_potage, plat_1, subtitle_plat_1, plat_2, subtitle_plat_2, accompagnement, subtitle_accompagnement, légumes, subtitle_légumes, dessert, subtitle_dessert FROM lundi";

$internat_date = [];

$internat_month = [];

$ID = [];
$arr = array();
$arr1= [];

$result_lundi = $conn->query($sql_lundi);

$internat_date_lundi = [];

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

$internat_month_lundi = [];

if ($result_lundi->num_rows > 0) {
  // output data of each row
  while($row = $result_lundi->fetch_assoc()) {
    
    $lldate = strtotime($row["date"]); 
    array_push($internat_month_lundi, date("F", $lldate));
    
    array_push($ID, $row["ID"]);

    $ldate = strtotime($row["date"]);
    $ldate = date("j", $ldate);
    array_push($internat_date_lundi, $ldate);


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

$internat_date_mardi = [];

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

$internat_month_mardi = [];

if ($result_mardi->num_rows > 0) {
  // output data of each row
  while($row = $result_mardi->fetch_assoc()) {

    $lldate = strtotime($row["date"]); 
    array_push($internat_month_mardi, date("F", $lldate));
    
    $ldate = strtotime($row["date"]);
    $ldate = date("j", $ldate);
    array_push($arr_date_mardi, $ldate);
    array_push($internat_date_mardi, $ldate);

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

$internat_date_mercredi = [];

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

$internat_month_mercredi = [];

if ($result_mercredi->num_rows > 0) {
  // output data of each row
  while($row = $result_mercredi->fetch_assoc()) {

    $lldate = strtotime($row["date"]); 
    array_push($internat_month_mercredi, date("F", $lldate));

    $ldate = strtotime($row["date"]);
    $ldate = date("j", $ldate);
    array_push($arr_date_mercredi, $ldate);
    array_push($internat_date_mercredi, $ldate);

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

$internat_date_jeudi = [];

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

$internat_month_jeudi = [];

if ($result_jeudi->num_rows > 0) {
  // output data of each row
  while($row = $result_jeudi->fetch_assoc()) {

    $lldate = strtotime($row["date"]); 
    array_push($internat_month_jeudi, date("F", $lldate));

    $ldate = strtotime($row["date"]);
    $ldate = date("j", $ldate);
    array_push($arr_date_jeudi, $ldate);
    array_push($internat_date_jeudi, $ldate);

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

// format the date in arrays
// internat_date = [[internat_day_lundi, internat_day_mardi, internat_day_mercredi, internat_day_jeudi][internat_day_lundi, internat_day_mardi, internat_day_mercredi, internat_day_jeudi], ...]
foreach ($internat_date_lundi as $d) {
    $tmp_arr = [];
    
    array_push($tmp_arr, current($internat_date_lundi));
    next($internat_date_lundi);

    array_push($tmp_arr, current($internat_date_mardi));
    next($internat_date_mardi);

    array_push($tmp_arr, current($internat_date_mercredi));
    next($internat_date_mercredi);

    array_push($tmp_arr, current($internat_date_jeudi));
    next($internat_date_jeudi);

    array_push($internat_date, $tmp_arr);

};

foreach ($internat_month_lundi as $d) {
    $tmp_arr = [];
    
    array_push($tmp_arr, current($internat_month_lundi));
    next($internat_month_lundi);

    array_push($tmp_arr, current($internat_month_mardi));
    next($internat_month_mardi);

    array_push($tmp_arr, current($internat_month_mercredi));
    next($internat_month_mercredi);

    array_push($tmp_arr, current($internat_month_jeudi));
    next($internat_month_jeudi);

    array_push($internat_month, $tmp_arr);

};




// array1 (2, 2)
// array2 (3, 4)
// foreach ($internat_date as $item) {
//     echo " a ";
//     foreach ($item as $item1) {
//     echo $item1;
//     echo " ";
    
// }
// }
// other_array = ((2,3), (2,4))


// to display the 
foreach ($arr as $item){
    if(is_array($item)){
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
    else {
    }
}
$conn->close();

?>

</head>

<body>
    <div class="preview" >
        <div class="main_div"id="divToExport">
            <div id="div_internat">
                <br>
                <br>
                
                <h3 class="date">date</h3>
                <br>
                <br>
                
                <img src="/../web/lem_menu/root/images/internat-title.png" width="793" alt="Melusina">
                <br>
                
                <h4 class="day">Lundi</h4>
                <h2 class="plat">potage</h2>
                <h5 class="undertitle">undertitle</h5>
                
                <h2 class="plat">Plat</h2>
                <h5 class="undertitle">undertitle</h5>
                
                <h4 class="day">Mardi</h4>
                <h2 class="plat">potage</h2>
                <h5 class="undertitle">undertitle</h5>
                
                <h2 class="plat">Plat</h2>
                <h5 class="undertitle">undertitle</h5>
                
                <h4 class="day">Mercredi</h4>
                <h2 class="plat">potage</h2>
                <h5 class="undertitle">undertitle</h5>
                
                <h2 class="plat">Plat</h2>
                <h5 class="undertitle">undertitle</h5>
                
                <h4 class="day">Jeudi</h4>
                <h2 class="plat">potage</h2>
                <h5 class="undertitle">undertitle</h5>
                
                <h2 class="plat">Plat</h2>
                <h5 class="undertitle">undertitle</h5>

                
                <div class="sub_div">
                    <img style="vertical-align: bottom" src="/../web/lem_menu/root/images/internat-subtitle.png" width="793" alt="Melusina">            
                </div>   
            </div>
        </div>
    </div>
</body>

        
<script>
    var html_def = '';
function update(arg) {
// delete placeholder
try {
        let div_internat = document.getElementById("div_internat");
        div_internat.parentNode.removeChild(div_internat);
        console.log("success");

}
catch {
    console.error();
};

// define values
        let arr_internat_date1 = <?php echo json_encode($internat_date);?>;
        let arr_internat_date = arr_internat_date1[arg]

        let internat_date_first = arr_internat_date[0];
        let internat_date_last = arr_internat_date[arr_internat_date.length - 1];

        let internat_month_list =  <?php echo json_encode($internat_month);?>;
        let arr_internat = internat_month_list[arg]
        let internat_month = arr_internat[arr_internat.length - 1];

        let arr_date_lundi = <?php echo json_encode($arr_date_lundi);?>;
        let date_lundi = arr_date_lundi[arg];

        let arr_potage_lundi = <?php echo json_encode($arr_potage_lundi);?>;
        let potage_lundi = arr_potage_lundi[arg];

        let arr_subtitle_potage_lundi = <?php echo json_encode($arr_subtitle_potage_lundi);?>;
        let subtitle_potage_lundi = arr_subtitle_potage_lundi[arg];

        let arr_plat_1_lundi = <?php echo json_encode($arr_plat_1_lundi);?>;
        let plat_1_lundi = arr_plat_1_lundi[arg];

        let arr_subtitle_plat_1_lundi = <?php echo json_encode($arr_subtitle_plat_1_lundi);?>;
        let subtitle_plat_1_lundi = arr_subtitle_plat_1_lundi[arg];

        let arr_plat_2_lundi = <?php echo json_encode($arr_plat_2_lundi);?>;
        let plat_2_lundi = arr_plat_2_lundi[arg];

        let arr_subtitle_plat_2_lundi = <?php echo json_encode($arr_subtitle_plat_2_lundi);?>;
        let subtitle_plat_2_lundi = arr_subtitle_plat_2_lundi[arg];

        let arr_accompagnement_lundi = <?php echo json_encode($arr_accompagnement_lundi);?>;
        let accompagnement_lundi = arr_accompagnement_lundi[arg];

        let arr_subtitle_accompagnement_lundi = <?php echo json_encode($arr_subtitle_accompagnement_lundi);?>;
        let subtitle_accompagnement_lundi = arr_subtitle_accompagnement_lundi[arg];

        let arr_légumes_lundi = <?php echo json_encode($arr_légumes_lundi);?>;
        let légumes_lundi = arr_légumes_lundi[arg];

        let arr_subtitle_légumes_lundi = <?php echo json_encode($arr_subtitle_légumes_lundi);?>;
        let subtitle_légumes_lundi = arr_subtitle_légumes_lundi[arg];

        let arr_dessert_lundi = <?php echo json_encode($arr_dessert_lundi);?>;
        let dessert_lundi = arr_dessert_lundi[arg];

        let arr_subtitle_dessert_lundi = <?php echo json_encode($arr_subtitle_dessert_lundi);?>;
        let subtitle_dessert_lundi = arr_subtitle_dessert_lundi[arg];



        let arr_date_mardi = <?php echo json_encode($arr_date_mardi);?>;
        let date_mardi = arr_date_mardi[arg];

        let arr_potage_mardi = <?php echo json_encode($arr_potage_mardi);?>;
        let potage_mardi = arr_potage_mardi[arg];

        let arr_subtitle_potage_mardi = <?php echo json_encode($arr_subtitle_potage_mardi);?>;
        let subtitle_potage_mardi = arr_subtitle_potage_mardi[arg];

        let arr_plat_1_mardi = <?php echo json_encode($arr_plat_1_mardi);?>;
        let plat_1_mardi = arr_plat_1_mardi[arg];

        let arr_subtitle_plat_1_mardi = <?php echo json_encode($arr_subtitle_plat_1_mardi);?>;
        let subtitle_plat_1_mardi = arr_subtitle_plat_1_mardi[arg];

        let arr_plat_2_mardi = <?php echo json_encode($arr_plat_2_mardi);?>;
        let plat_2_mardi = arr_plat_2_mardi[arg];

        let arr_subtitle_plat_2_mardi = <?php echo json_encode($arr_subtitle_plat_2_mardi);?>;
        let subtitle_plat_2_mardi = arr_subtitle_plat_2_mardi[arg];

        let arr_accompagnement_mardi = <?php echo json_encode($arr_accompagnement_mardi);?>;
        let accompagnement_mardi = arr_accompagnement_mardi[arg];

        let arr_subtitle_accompagnement_mardi = <?php echo json_encode($arr_subtitle_accompagnement_mardi);?>;
        let subtitle_accompagnement_mardi = arr_subtitle_accompagnement_mardi[arg];

        let arr_légumes_mardi = <?php echo json_encode($arr_légumes_mardi);?>;
        let légumes_mardi = arr_légumes_mardi[arg];

        let arr_subtitle_légumes_mardi = <?php echo json_encode($arr_subtitle_légumes_mardi);?>;
        let subtitle_légumes_mardi = arr_subtitle_légumes_mardi[arg];

        let arr_dessert_mardi = <?php echo json_encode($arr_dessert_mardi);?>;
        let dessert_mardi = arr_dessert_mardi[arg];

        let arr_subtitle_dessert_mardi = <?php echo json_encode($arr_subtitle_dessert_mardi);?>;
        let subtitle_dessert_mardi = arr_subtitle_dessert_mardi[arg];



        let arr_date_mercredi = <?php echo json_encode($arr_date_mercredi);?>;
        let date_mercredi = arr_date_mercredi[arg];

        let arr_potage_mercredi = <?php echo json_encode($arr_potage_mercredi);?>;
        let potage_mercredi = arr_potage_mercredi[arg];

        let arr_subtitle_potage_mercredi = <?php echo json_encode($arr_subtitle_potage_mercredi);?>;
        let subtitle_potage_mercredi = arr_subtitle_potage_mercredi[arg];

        let arr_plat_1_mercredi = <?php echo json_encode($arr_plat_1_mercredi);?>;
        let plat_1_mercredi = arr_plat_1_mercredi[arg];

        let arr_subtitle_plat_1_mercredi = <?php echo json_encode($arr_subtitle_plat_1_mercredi);?>;
        let subtitle_plat_1_mercredi = arr_subtitle_plat_1_mercredi[arg];

        let arr_plat_2_mercredi = <?php echo json_encode($arr_plat_2_mercredi);?>;
        let plat_2_mercredi = arr_plat_2_mercredi[arg];

        let arr_subtitle_plat_2_mercredi = <?php echo json_encode($arr_subtitle_plat_2_mercredi);?>;
        let subtitle_plat_2_mercredi = arr_subtitle_plat_2_mercredi[arg];

        let arr_accompagnement_mercredi = <?php echo json_encode($arr_accompagnement_mercredi);?>;
        let accompagnement_mercredi = arr_accompagnement_mercredi[arg];

        let arr_subtitle_accompagnement_mercredi = <?php echo json_encode($arr_subtitle_accompagnement_mercredi);?>;
        let subtitle_accompagnement_mercredi = arr_subtitle_accompagnement_mercredi[arg];

        let arr_légumes_mercredi = <?php echo json_encode($arr_légumes_mercredi);?>;
        let légumes_mercredi = arr_légumes_mercredi[arg];

        let arr_subtitle_légumes_mercredi = <?php echo json_encode($arr_subtitle_légumes_mercredi);?>;
        let subtitle_légumes_mercredi = arr_subtitle_légumes_mercredi[arg];

        let arr_dessert_mercredi = <?php echo json_encode($arr_dessert_mercredi);?>;
        let dessert_mercredi = arr_dessert_mercredi[arg];

        let arr_subtitle_dessert_mercredi = <?php echo json_encode($arr_subtitle_dessert_mercredi);?>;
        let subtitle_dessert_mercredi = arr_subtitle_dessert_mercredi[arg];

  

        let arr_date_jeudi = <?php echo json_encode($arr_date_jeudi);?>;
        let date_jeudi = arr_date_jeudi[arg];

        let arr_potage_jeudi = <?php echo json_encode($arr_potage_jeudi);?>;
        let potage_jeudi = arr_potage_jeudi[arg];

        let arr_subtitle_potage_jeudi = <?php echo json_encode($arr_subtitle_potage_jeudi);?>;
        let subtitle_potage_jeudi = arr_subtitle_potage_jeudi[arg];

        let arr_plat_1_jeudi = <?php echo json_encode($arr_plat_1_jeudi);?>;
        let plat_1_jeudi = arr_plat_1_jeudi[arg];

        let arr_subtitle_plat_1_jeudi = <?php echo json_encode($arr_subtitle_plat_1_jeudi);?>;
        let subtitle_plat_1_jeudi = arr_subtitle_plat_1_jeudi[arg];

        let arr_plat_2_jeudi = <?php echo json_encode($arr_plat_2_jeudi);?>;
        let plat_2_jeudi = arr_plat_2_jeudi[arg];

        let arr_subtitle_plat_2_jeudi = <?php echo json_encode($arr_subtitle_plat_2_jeudi);?>;
        let subtitle_plat_2_jeudi = arr_subtitle_plat_2_jeudi[arg];

        let arr_accompagnement_jeudi = <?php echo json_encode($arr_accompagnement_jeudi);?>;
        let accompagnement_jeudi = arr_accompagnement_jeudi[arg];

        let arr_subtitle_accompagnement_jeudi = <?php echo json_encode($arr_subtitle_accompagnement_jeudi);?>;
        let subtitle_accompagnement_jeudi = arr_subtitle_accompagnement_jeudi[arg];

        let arr_légumes_jeudi = <?php echo json_encode($arr_légumes_jeudi);?>;
        let légumes_jeudi = arr_légumes_jeudi[arg];

        let arr_subtitle_légumes_jeudi = <?php echo json_encode($arr_subtitle_légumes_jeudi);?>;
        let subtitle_légumes_jeudi = arr_subtitle_légumes_jeudi[arg];

        let arr_dessert_jeudi = <?php echo json_encode($arr_dessert_jeudi);?>;
        let dessert_jeudi = arr_dessert_jeudi[arg];

        let arr_subtitle_dessert_jeudi = <?php echo json_encode($arr_subtitle_dessert_jeudi);?>;
        let subtitle_dessert_jeudi = arr_subtitle_dessert_jeudi[arg];

    
// set html for the menu to be inseerted afterwards
        let  html = `
    <div id="div_internat">

            <br>
            <br>
            
            <h3 class="date">Menu du ${internat_date_first} au ${internat_date_last} ${internat_month}</h3>
            <br>
            <br>
            
            <img src="/../web/lem_menu/root/images/internat-title.png" width="793" alt="Melusina">
            <br>

            <div id="del_lundi">

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

                </div>

                <div id="del_mardi">

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

                </div>



                <div id="del_mercredi">

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
                </div>


                <div id="del_jeudi">

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
                </div>

                <div class="sub_div">
            <img style="vertical-align: bottom" src="/../web/lem_menu/root/images/internat-subtitle.png" width="793" alt="Melusina">            
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

// insert the new html and button to generate file
const parentelement = document.getElementById("divToExport");
parentelement.insertAdjacentHTML("afterbegin", html19);
html_def = html19;
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
    if (plat_1_lundi == "") {
    let remove_subtitle = document.getElementById("subtitle_plat_1_lundi");
    remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    if (plat_2_lundi == "") {
        let remove_subtitle = document.getElementById("subtitle_plat_2_lundi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (accompagnement_lundi == "") {
        let remove_subtitle = document.getElementById("subtitle_accompagnement_lundi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    if (légumes_lundi == "") {
        let remove_subtitle = document.getElementById("subtitle_légumes_lundi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    if (dessert_lundi == "") {
        let remove_subtitle = document.getElementById("subtitle_dessert_lundi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    if (potage_mardi == "") {
        let remove_subtitle = document.getElementById("subtitle_potage_mardi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (plat_1_mardi == "") {
    let remove_subtitle = document.getElementById("subtitle_plat_1_mardi");
    remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (plat_2_mardi == "") {
        let remove_subtitle = document.getElementById("subtitle_plat_2_mardi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    if (accompagnement_mardi == "") {
        let remove_subtitle = document.getElementById("subtitle_accompagnement_mardi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    if (légumes_mardi == "") {
        let remove_subtitle = document.getElementById("subtitle_légumes_mardi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (dessert_mardi == "") {
        let remove_subtitle = document.getElementById("subtitle_dessert_mardi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }

    if (potage_mercredi == "") {
        let remove_subtitle = document.getElementById("subtitle_potage_mercredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (plat_1_mercredi == "") {
    let remove_subtitle = document.getElementById("subtitle_plat_1_mercredi");
    remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (plat_2_mercredi == "") {
        let remove_subtitle = document.getElementById("subtitle_plat_2_mercredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (accompagnement_mercredi == "") {
        let remove_subtitle = document.getElementById("subtitle_accompagnement_mercredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (légumes_mercredi == "") {
        let remove_subtitle = document.getElementById("subtitle_légumes_mercredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }

    if (dessert_mercredi == "") {
        let remove_subtitle = document.getElementById("subtitle_dessert_mercredi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (potage_jeudi == "") {
        let remove_subtitle = document.getElementById("subtitle_potage_jeudi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (plat_1_jeudi == "") {
    let remove_subtitle = document.getElementById("subtitle_plat_1_jeudi");
    remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (plat_2_jeudi == "") {
        let remove_subtitle = document.getElementById("subtitle_plat_2_jeudi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (accompagnement_jeudi == "") {
        let remove_subtitle = document.getElementById("subtitle_accompagnement_jeudi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (légumes_jeudi == "") {
        let remove_subtitle = document.getElementById("subtitle_légumes_jeudi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    if (dessert_jeudi == "") {
        let remove_subtitle = document.getElementById("subtitle_dessert_jeudi");
        remove_subtitle.parentNode.removeChild(remove_subtitle);
    }
    
    if (potage_lundi == "" && plat_1_lundi == "" && plat_2_lundi == "" && accompagnement_lundi == "" && légumes_lundi == "" && dessert_lundi == "") {
        let remove_lundi = document.getElementById("del_lundi");
        remove_lundi.parentNode.removeChild(remove_lundi);
    }
    else {
        let add_title = document.getElementById("del_lundi");
        let html = `
        <h4 class="day">lundi</h4>
        `;
        add_title.insertAdjacentHTML("afterbegin", html);
    }
 
    // check if days are completely there and if not delete them
    // else insert plat title   
    if (potage_mardi == "" && plat_1_mardi == "" && plat_2_mardi == "" && accompagnement_mardi == "" && légumes_mardi == "" && dessert_mardi == "") {
        let remove_mardi = document.getElementById("del_mardi");
remove_mardi.parentNode.removeChild(remove_mardi);
}
else {
let add_title = document.getElementById("del_mardi");
let html = `
<h4 class="day">mardi</h4>
`;
add_title.insertAdjacentHTML("afterbegin", html);
}
        
    if (potage_mercredi == "" && plat_1_mercredi == "" && plat_2_mercredi == "" && accompagnement_mercredi == "" && légumes_mercredi == "" && dessert_mercredi == "") {
        let remove_mercredi = document.getElementById("del_mercredi");
remove_mercredi.parentNode.removeChild(remove_mercredi);
}
else {
let add_title = document.getElementById("del_mercredi");
let html = `
<h4 class="day">mercredi</h4>
`;
add_title.insertAdjacentHTML("afterbegin", html);
}
    if (potage_jeudi == "" && plat_1_jeudi == "" && plat_2_jeudi == "" && accompagnement_jeudi == "" && légumes_jeudi == "" && dessert_jeudi == "") {
        let remove_jeudi = document.getElementById("del_jeudi");
remove_jeudi.parentNode.removeChild(remove_jeudi);
}
else {
let add_title = document.getElementById("del_jeudi");
let html = `
<h4 class="day">jeudi</h4>
`;
add_title.insertAdjacentHTML("afterbegin", html);
}
    }
    

</script>

<script type="text/javascript">
        function generatePDF(arg) {
            let id_menu = <?php echo json_encode($ID);?>;
    let menu_id = id_menu[arg];
    console.log(arg);
    console.log(id_menu);
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
    console.log("${toString(html)}");
    console.log(html_def);
    opened.document.write(`
    <html>
    <head>
    <title>Menu preview</title>
    <link rel="stylesheet" type="text/css" href="/web/lem_menu/root/css/menu_style.css">
   <style>
    @import url(https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&family=Quicksand:wght@700&display=swap);
/* for the day */
 .day {
	 color:#244d58;
	 font-family:"Quicksand", sans-serif;
	 font-size:15pt;
	 font-style:normal;
	 font-variant:normal;
	 font-weight: 7000;
	 line-height:1.2;
	 margin-bottom:3px;
	 margin-left:0;
	 margin-right:0;
	 margin-top:30px;
	 orphans:1;
	 page-break-after:auto;
	 page-break-before:auto;
	 text-align:center;
	 text-decoration:none;
	 text-indent:0;
	 text-transform:none;
	/* widows:1;
	 */
}
/* for the plat */
 .plat {
	 color:#244d58;
	/* font-family: 'Playfair Display', serif; */
	
	 font-family:"Quicksand", sans-serif;
	 font-size:23pt;
	 font-style:normal;
	 font-variant:normal;
	 font-weight:900;
	 line-height:1.2;
	 margin-bottom:0;
	 margin-left:0;
	 margin-right:0;
	 margin-top:2px;
	 orphans:1;
	 page-break-after:auto;
	 page-break-before:auto;
	 text-align:center;
	 text-decoration:none;
	 text-indent:0;
	 text-transform:none;
	 widows:1;
}
/* for the date */
 .date {
	 color:#244d58;
	 font-family:"Quicksand", sans-serif;
	 font-size:20pt;
	 font-style:normal;
	 font-variant:normal;
	 font-weight:700;
	 line-height:0.55;
	/* margin: 10px;
	 */
	 margin: 0;
	/* margin-bottom:10px;
	 */
	/* margin-left:0;
	 */
	/* margin-right:0;
	 */
	 margin-top:35px;
	/* page-break-after:auto;
	 */
	/* page-break-before:auto;
	 */
	 text-align:center;
	 text-decoration:none;
	 text-indent:0;
	 text-transform:none;
	/* widows:1;
	 */
}
body {
	background-color: #15172b;

}
.preview_html {
	background-color: #FFFFFF;

	width: 21cm;
	margin: auto;
	height: 29.7cm;
   /* margin: 10px;
	*/
	border-radius:1px;
}
/* for the undertitle */
 .undertitle {
	 color:#244d58;
	 font-family:"Quicksand", sans-serif;
	 font-size:10pt;
	 font-style:normal;
	 font-variant:normal;
	 font-weight:normal;
	 line-height:1.7;
	 margin-bottom:10px;
	 margin-left:0;
	 margin-right:0;
	 margin-top:0;
	 orphans:1;
	 page-break-after:auto;
	 page-break-before:auto;
	 text-align:center;
	 text-decoration:none;
	 text-indent:0;
	 text-transform:none;
	 widows:1;
}
/* main div (body of one pdf page) */
 .main_div {
	 overflow: hidden;
	 text-align:center;
	 position: relative;
	 height: 296mm;
	/* width: 21cm;
	 */
	 background-color: white;
}
/* sub div to place things at the end of main div */
 .sub_div {
	 overflow: hidden;
	 position: absolute;
	 bottom: 0;
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
    <div class="main_div">
    ${html_def}

    </div>
    </div>
    </body>
    </html>
    `);

    };

</script>
</body>

</html>