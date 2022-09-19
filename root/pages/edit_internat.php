<!DOCTYPE html>
<html>
    <head>
        <title>edit internat</title>
        <link rel="stylesheet" href="/web/lem_menu/root/css/menu_style.css" type="text/css">
        <link rel="stylesheet" href="/web/lem_menu/root/css/topnav.css" type="text/css">
        <script src="../scripts/navbar.js"></script>

    </head>

    <?php
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

$sql_lundi = "SELECT ID, date, potage, subtitle_potage, plat_1, subtitle_plat_1, plat_2, subtitle_plat_2, accompagnement, subtitle_accompagnement, légumes, subtitle_légumes, dessert, subtitle_dessert FROM lundi";

$ID = null;
$arr = array();
$arr1= [];

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

if ($result_lundi->num_rows > 0) {
  // output data of each row
  while($row = $result_lundi->fetch_assoc()) {

    array_push($arr_date_lundi, $row["date"]);
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

if ($result_mardi->num_rows > 0) {
  // output data of each row
  while($row = $result_mardi->fetch_assoc()) {

    array_push($arr_date_mardi, $row["date"]);

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

if ($result_mercredi->num_rows > 0) {
  // output data of each row
  while($row = $result_mercredi->fetch_assoc()) {

    array_push($arr_date_mercredi, $row["date"]);

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

if ($result_jeudi->num_rows > 0) {
  // output data of each row
  while($row = $result_jeudi->fetch_assoc()) {

    array_push($arr_date_jeudi, $row["date"]);

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


foreach ($arr as $item){
    if(is_array($item)){

        $num = 0;
        $box = '<div class="box">
        <h3>select the menu you want to edit</h3>';
        $close_box = '</div>';
        $select='<select onchange="update(value)">';
        echo $box;
        echo $select;
        
        foreach ($item as $list){
            echo "aa".$list;
            echo "<option value='".$num."'>".$list.'</option>';
            $num = $num + 1;
        }
        echo '</select>';
        echo $close_box;
    }
    else {
    }
}
$conn->close();

?>
    <body>



<form action="/../web/lem_menu/root/scripts/update_internat.php" method="post" id="form">

<div id="lundi">
    <h1 id="del_lundi" class="box">Lundi</h1>
</div>

<div id="mardi">
    <h1 id="del_mardi" class="box">mardi</h1>
</div>

<div id="mercredi">
    <h1 id="del_mercredi" class="box">mercredi</h1>
</div>
<div id="jeudi">
    <h1 id="del_jeudi" class="box">jeudi</h1>
</div>
<input type="submit" class="submit" name="submit" value="Submit" >

</form>

<script>

    function update(arg) {
try {
        let div_lundi = document.getElementById("del_lundi");
        div_lundi.parentNode.removeChild(div_lundi);
        console.log("success");
       
        let div_mardi = document.getElementById("del_mardi");
        div_mardi.parentNode.removeChild(div_mardi);
        console.log("success");

        let div_mercredi = document.getElementById("del_mercredi");
        div_mercredi.parentNode.removeChild(div_mercredi);
        console.log("success");

        let div_jeudi = document.getElementById("del_jeudi");
        div_jeudi.parentNode.removeChild(div_jeudi);
        console.log("success");

}
catch {
    console.error("error");
}

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

        const parentelement_lundi = document.getElementById("lundi");
        let html_lundi = `
            <div id="del_lundi" class="box">
                    <h1>lundi</h1>
                        
                            <label for="date_lundi">date</label>
                            <input type="date" name="date_lundi" id="date_lundi" value="${date_lundi}">
                            <br>
                            <br>

                            <label for="potage_lundi">potage</label>
                            <input type="text" id="potage_lundi" name="potage_lundi" placeholder="plat" value="${potage_lundi}">
                            <input type="text" id="subtitle_potage_lundi" name="subtitle_potage_lundi" placeholder="subtitle" value="${subtitle_potage_lundi}">
                        <br>
                        <br>
                            <label for="plat_1_lundi">plat 1</label>
                            <input type="text" id="plat_1_lundi" name="plat_1_lundi" placeholder="plat" value="${plat_1_lundi}">
                            <input type="text" id="subtitle_plat_1_lundi" name="subtitle_plat_1_lundi" placeholder="subtitle" value="${subtitle_plat_1_lundi}">
                        <br>
                        <br>
                            <label for="plat_2_lundi">plat 2</label>
                            <input type="text" id="plat_2_lundi" name="plat_2_lundi" placeholder="plat" value="${plat_2_lundi}">
                            <input type="text" id="subtitle_plat_2_lundi" name="subtitle_plat_2_lundi" placeholder="subtitle" value="${subtitle_plat_2_lundi}">
                        <br>
                        <br>
                            <label for="accompagnement_lundi">accompagnement</label>
                            <input type="text" id="accompagnement_lundi" name="accompagnement_lundi" placeholder="plat" value="${accompagnement_lundi}">
                            <input type="text" id="subtitle_accompagnement_lundi" name="subtitle_accompagnement_lundi" placeholder="subtitle" value="${subtitle_accompagnement_lundi}">
                            <br>
                            <br>
                                <label for="légumes_lundi">légumes</label>
                                <input type="text" id="légumes_lundi" name="légumes_lundi" placeholder="plat" value="${légumes_lundi}">
                                <input type="text" id="subtitle_légumes_lundi" name="subtitle_légumes_lundi" placeholder="subtitle" value="${subtitle_légumes_lundi}">
                            <br>
                            <br>
                                <label for="dessert_lundi">dessert</label>
                                <input type="text" id="dessert_lundi" name="dessert_lundi" placeholder="plat" value="${dessert_lundi}">
                                <input type="text" id="subtitle_dessert_lundi" name="subtitle_dessert_lundi" placeholder="subtitle" value="${subtitle_dessert_lundi}">
                            <br>
                            <br>
                            <br>
                        <br>

                            </div>
                </div>

`;
        parentelement_lundi.insertAdjacentHTML("afterbegin", html_lundi);
    
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
        const parentelement_mardi = document.getElementById("mardi");

        let html_mardi = `
            <div id="del_mardi" class="box">
                    <h1>mardi</h1>
                        
                            <label for="date_mardi">date</label>
                            <input type="date" name="date_mardi" id="date_mardi" value="${date_mardi}">
                            <br>
                            <br>

                            <label for="potage_mardi">potage</label>
                            <input type="text" id="potage_mardi" name="potage_mardi" placeholder="plat" value="${potage_mardi}">
                            <input type="text" id="subtitle_potage_mardi" name="subtitle_potage_mardi" placeholder="subtitle" value="${subtitle_potage_mardi}">
                        <br>
                        <br>
                            <label for="plat_1_mardi">plat 1</label>
                            <input type="text" id="plat_1_mardi" name="plat_1_mardi" placeholder="plat" value="${plat_1_mardi}">
                            <input type="text" id="subtitle_plat_1_mardi" name="subtitle_plat_1_mardi" placeholder="subtitle" value="${subtitle_plat_1_mardi}">
                        <br>
                        <br>
                            <label for="plat_2_mardi">plat 2</label>
                            <input type="text" id="plat_2_mardi" name="plat_2_mardi" placeholder="plat" value="${plat_2_mardi}">
                            <input type="text" id="subtitle_plat_2_mardi" name="subtitle_plat_2_mardi" placeholder="subtitle" value="${subtitle_plat_2_mardi}">
                        <br>
                        <br>
                            <label for="accompagnement_mardi">accompagnement</label>
                            <input type="text" id="accompagnement_mardi" name="accompagnement_mardi" placeholder="plat" value="${accompagnement_mardi}">
                            <input type="text" id="subtitle_accompagnement_mardi" name="subtitle_accompagnement_mardi" placeholder="subtitle" value="${subtitle_accompagnement_mardi}">
                            <br>
                            <br>
                                <label for="légumes_mardi">légumes</label>
                                <input type="text" id="légumes_mardi" name="légumes_mardi" placeholder="plat" value="${légumes_mardi}">
                                <input type="text" id="subtitle_légumes_mardi" name="subtitle_légumes_mardi" placeholder="subtitle" value="${subtitle_légumes_mardi}">
                            <br>
                            <br>
                                <label for="dessert_mardi">dessert</label>
                                <input type="text" id="dessert_mardi" name="dessert_mardi" placeholder="plat" value="${dessert_mardi}">
                                <input type="text" id="subtitle_dessert_mardi" name="subtitle_dessert_mardi" placeholder="subtitle" value="${subtitle_dessert_mardi}">
                            <br>
                            <br>
                            <br>
                        <br>

                            </div>
                </div>

`;
        parentelement_mardi.insertAdjacentHTML("afterbegin", html_mardi);
    
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

        const parentelement_mercredi = document.getElementById("mercredi");
        let html_mercredi = `
            <div id="del_mercredi" class="box">
                    <h1>mercredi</h1>
                        
                            <label for="date_mercredi">date</label>
                            <input type="date" name="date_mercredi" id="date_mercredi" value="${date_mercredi}">
                            <br>
                            <br>

                            <label for="potage_mercredi">potage</label>
                            <input type="text" id="potage_mercredi" name="potage_mercredi" placeholder="plat" value="${potage_mercredi}">
                            <input type="text" id="subtitle_potage_mercredi" name="subtitle_potage_mercredi" placeholder="subtitle" value="${subtitle_potage_mercredi}">
                        <br>
                        <br>
                            <label for="plat_1_mercredi">plat 1</label>
                            <input type="text" id="plat_1_mercredi" name="plat_1_mercredi" placeholder="plat" value="${plat_1_mercredi}">
                            <input type="text" id="subtitle_plat_1_mercredi" name="subtitle_plat_1_mercredi" placeholder="subtitle" value="${subtitle_plat_1_mercredi}">
                        <br>
                        <br>
                            <label for="plat_2_mercredi">plat 2</label>
                            <input type="text" id="plat_2_mercredi" name="plat_2_mercredi" placeholder="plat" value="${plat_2_mercredi}">
                            <input type="text" id="subtitle_plat_2_mercredi" name="subtitle_plat_2_mercredi" placeholder="subtitle" value="${subtitle_plat_2_mercredi}">
                        <br>
                        <br>
                            <label for="accompagnement_mercredi">accompagnement</label>
                            <input type="text" id="accompagnement_mercredi" name="accompagnement_mercredi" placeholder="plat" value="${accompagnement_mercredi}">
                            <input type="text" id="subtitle_accompagnement_mercredi" name="subtitle_accompagnement_mercredi" placeholder="subtitle" value="${subtitle_accompagnement_mercredi}">
                            <br>
                            <br>
                                <label for="légumes_mercredi">légumes</label>
                                <input type="text" id="légumes_mercredi" name="légumes_mercredi" placeholder="plat" value="${légumes_mercredi}">
                                <input type="text" id="subtitle_légumes_mercredi" name="subtitle_légumes_mercredi" placeholder="subtitle" value="${subtitle_légumes_mercredi}">
                            <br>
                            <br>
                                <label for="dessert_mercredi">dessert</label>
                                <input type="text" id="dessert_mercredi" name="dessert_mercredi" placeholder="plat" value="${dessert_mercredi}">
                                <input type="text" id="subtitle_dessert_mercredi" name="subtitle_dessert_mercredi" placeholder="subtitle" value="${subtitle_dessert_mercredi}">
                            <br>
                            <br>
                            <br>
                        <br>

                            </div>
                </div>

`;
        parentelement_mercredi.insertAdjacentHTML("afterbegin", html_mercredi);
    

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

        const parentelement_jeudi = document.getElementById("jeudi");
        let html_jeudi = `
            <div id="del_jeudi" class="box">
                    <h1>jeudi</h1>
                        
                            <label for="date_jeudi">date</label>
                            <input type="date" name="date_jeudi" id="date_jeudi" value="${date_jeudi}">
                            <br>
                            <br>

                            <label for="potage_jeudi">potage</label>
                            <input type="text" id="potage_jeudi" name="potage_jeudi" placeholder="plat" value="${potage_jeudi}">
                            <input type="text" id="subtitle_potage_jeudi" name="subtitle_potage_jeudi" placeholder="subtitle" value="${subtitle_potage_jeudi}">
                        <br>
                        <br>
                            <label for="plat_1_jeudi">plat 1</label>
                            <input type="text" id="plat_1_jeudi" name="plat_1_jeudi" placeholder="plat" value="${plat_1_jeudi}">
                            <input type="text" id="subtitle_plat_1_jeudi" name="subtitle_plat_1_jeudi" placeholder="subtitle" value="${subtitle_plat_1_jeudi}">
                        <br>
                        <br>
                            <label for="plat_2_jeudi">plat 2</label>
                            <input type="text" id="plat_2_jeudi" name="plat_2_jeudi" placeholder="plat" value="${plat_2_jeudi}">
                            <input type="text" id="subtitle_plat_2_jeudi" name="subtitle_plat_2_jeudi" placeholder="subtitle" value="${subtitle_plat_2_jeudi}">
                        <br>
                        <br>
                            <label for="accompagnement_jeudi">accompagnement</label>
                            <input type="text" id="accompagnement_jeudi" name="accompagnement_jeudi" placeholder="plat" value="${accompagnement_jeudi}">
                            <input type="text" id="subtitle_accompagnement_jeudi" name="subtitle_accompagnement_jeudi" placeholder="subtitle" value="${subtitle_accompagnement_jeudi}">
                            <br>
                            <br>
                                <label for="légumes_jeudi">légumes</label>
                                <input type="text" id="légumes_jeudi" name="légumes_jeudi" placeholder="plat" value="${légumes_jeudi}">
                                <input type="text" id="subtitle_légumes_jeudi" name="subtitle_légumes_jeudi" placeholder="subtitle" value="${subtitle_légumes_jeudi}">
                            <br>
                            <br>
                                <label for="dessert_jeudi">dessert</label>
                                <input type="text" id="dessert_jeudi" name="dessert_jeudi" placeholder="plat" value="${dessert_jeudi}">
                                <input type="text" id="subtitle_dessert_jeudi" name="subtitle_dessert_jeudi" placeholder="subtitle" value="${subtitle_dessert_jeudi}">
                            <br>
                            <br>
                            <br>
                        <br>

                            </div>
                </div>

`;
        parentelement_jeudi.insertAdjacentHTML("afterbegin", html_jeudi);
    
    }
    </script>
</body>
</html>