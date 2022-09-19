<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>menu</title>
        <link rel="stylesheet" href="/web/lem_menu/root/css/menu_style.css?<?php echo time(); ?>" type="text/css">
        <link rel="stylesheet" href="/web/lem_menu/root/css/topnav.css?<?php echo time(); ?>" type="text/css">
        <script src="../scripts/navbar.js"></script>

    </head>
    <body>
<form action="/../web/lem_menu/root/scripts/insert.php" autocomplete="off" method="post" id="form">

<div id="lundi">
        <div class="box" id="lundi_column0">
            <h1>Lundi</h1>
                    <label for="date_lundi">date</label>
                    <input type="date" name="date_lundi" id="date_lundi">
                    <br> 
                    <br>

                    <label for="potage_lundi">potage</label>
                    <input type="text" id="potage_lundi" name="potage_lundi" placeholder="plat">
                    <input type="text" id="subtitle_potage_lundi" name="subtitle_potage_lundi" placeholder="subtitle">
                <br>
                <br>
                    <label for="plat_1_lundi">plat 1</label>
                    <input type="text" id="plat_1_lundi" name="plat_1_lundi" placeholder="plat">
                    <input type="text" id="subtitle_plat_1_lundi" name="subtitle_plat_1_lundi" placeholder="subtitle">
                <br>
                <br>
                    <label for="plat_2_lundi">plat 2</label>
                    <input type="text" id="plat_2_lundi" name="plat_2_lundi" placeholder="plat">
                    <input type="text" id="subtitle_plat_2_lundi" name="subtitle_plat_2_lundi" placeholder="subtitle">
                <br>
                <br>
                    <label for="accompagnement_lundi">accompagnement</label>
                    <input type="text" id="accompagnement_lundi" name="accompagnement_lundi" placeholder="plat">
                    <input type="text" id="subtitle_accompagnement_lundi" name="subtitle_accompagnement_lundi" placeholder="subtitle">
                    <br>
                    <br>
                        <label for="légumes_lundi">légumes</label>
                        <input type="text" id="légumes_lundi" name="légumes_lundi" placeholder="plat">
                        <input type="text" id="subtitle_légumes_lundi" name="subtitle_légumes_lundi" placeholder="subtitle">
                    <br>
                    <br>
                        <label for="dessert_lundi">dessert</label>
                        <input type="text" id="dessert_lundi" name="dessert_lundi" placeholder="plat">
                        <input type="text" id="subtitle_dessert_lundi" name="subtitle_dessert_lundi" placeholder="subtitle">
                    <br>
                    <br>
                <br>

                    <button id="remove_lundi0" onClick="remove_lundi('lundi_column0')">remove</button>

        </div>
    </div>


<div id="mardi">
    <div class="box" id="mardi_column0">
        <h1>mardi</h1>
                <label for="date_mardi">date</label>
                <input type="date" name="date_mardi" id="date_mardi">
                <br>
                <br>

                <label for="potage_mardi">potage</label>
                <input type="text" id="potage_mardi" name="potage_mardi" placeholder="plat">
                <input type="text" id="subtitle_potage_mardi" name="subtitle_potage_mardi" placeholder="subtitle">
            <br>
            <br>
                <label for="plat_1_mardi">plat 1</label>
                <input type="text" id="plat_1_mardi" name="plat_1_mardi" placeholder="plat">
                <input type="text" id="subtitle_plat_1_mardi" name="subtitle_plat_1_mardi" placeholder="subtitle">
            <br>
            <br>
                <label for="plat_2_mardi">plat 2</label>
                <input type="text" id="plat_2_mardi" name="plat_2_mardi" placeholder="plat">
                <input type="text" id="subtitle_plat_2_mardi" name="subtitle_plat_2_mardi" placeholder="subtitle">
            <br>
            <br>
                <label for="accompagnement_mardi">accompagnement</label>
                <input type="text" id="accompagnement_mardi" name="accompagnement_mardi" placeholder="plat">
                <input type="text" id="subtitle_accompagnement_mardi" name="subtitle_accompagnement_mardi" placeholder="subtitle">
                <br>
                <br>
                    <label for="légumes_mardi">légumes</label>
                    <input type="text" id="légumes_mardi" name="légumes_mardi" placeholder="plat">
                    <input type="text" id="subtitle_légumes_mardi" name="subtitle_légumes_mardi" placeholder="subtitle">
                <br>
                <br>
                    <label for="dessert_mardi">dessert</label>
                    <input type="text" id="dessert_mardi" name="dessert_mardi" placeholder="plat">
                    <input type="text" id="subtitle_dessert_mardi" name="subtitle_dessert_mardi" placeholder="subtitle">
                <br>
                <br>
            <br>

                <button id="remove_mardi0" onClick="remove_mardi('mardi_column0')">remove</button>

    </div>
</div>

<div id="mercredi">
    <div class="box" id="mercredi_column0">
        <h1>mercredi</h1>
                <label for="date_mercredi">date</label>
                <input type="date" name="date_mercredi" id="date_mercredi">
                <br>
                <br>

                <label for="potage_mercredi">potage</label>
                <input type="text" id="potage_mercredi" name="potage_mercredi" placeholder="plat">
                <input type="text" id="subtitle_potage_mercredi" name="subtitle_potage_mercredi" placeholder="subtitle">
            <br>
            <br>
                <label for="plat_1_mercredi">plat 1</label>
                <input type="text" id="plat_1_mercredi" name="plat_1_mercredi" placeholder="plat">
                <input type="text" id="subtitle_plat_1_mercredi" name="subtitle_plat_1_mercredi" placeholder="subtitle">
            <br>
            <br>
                <label for="plat_2_mercredi">plat 2</label>
                <input type="text" id="plat_2_mercredi" name="plat_2_mercredi" placeholder="plat">
                <input type="text" id="subtitle_plat_2_mercredi" name="subtitle_plat_2_mercredi" placeholder="subtitle">
            <br>
            <br>
                <label for="accompagnement_mercredi">accompagnement</label>
                <input type="text" id="accompagnement_mercredi" name="accompagnement_mercredi" placeholder="plat">
                <input type="text" id="subtitle_accompagnement_mercredi" name="subtitle_accompagnement_mercredi" placeholder="subtitle">
                <br>
                <br>
                    <label for="légumes_mercredi">légumes</label>
                    <input type="text" id="légumes_mercredi" name="légumes_mercredi" placeholder="plat">
                    <input type="text" id="subtitle_légumes_mercredi" name="subtitle_légumes_mercredi" placeholder="subtitle">
                <br>
                <br>
                    <label for="dessert_mercredi">dessert</label>
                    <input type="text" id="dessert_mercredi" name="dessert_mercredi" placeholder="plat">
                    <input type="text" id="subtitle_dessert_mercredi" name="subtitle_dessert_mercredi" placeholder="subtitle">
                <br>
                <br>
            <br>

                <button id="remove_mercredi0" onClick="remove_mercredi('mercredi_column0')">remove</button>

    </div>
</div>

<div id="jeudi">
    <div class="box" id="jeudi_column0">
        <h1>jeudi</h1>
                <label for="date_jeudi">date</label>
                <input type="date" name="date_jeudi" id="date_jeudi">
                <br>
                <br>

                <label for="potage_jeudi">potage</label>
                <input type="text" id="potage_jeudi" name="potage_jeudi" placeholder="plat">
                <input type="text" id="subtitle_potage_jeudi" name="subtitle_potage_jeudi" placeholder="subtitle">
            <br>
            <br>
                <label for="plat_1_jeudi">plat 1</label>
                <input type="text" id="plat_1_jeudi" name="plat_1_jeudi" placeholder="plat">
                <input type="text" id="subtitle_plat_1_jeudi" name="subtitle_plat_1_jeudi" placeholder="subtitle">
            <br>
            <br>
                <label for="plat_2_jeudi">plat 2</label>
                <input type="text" id="plat_2_jeudi" name="plat_2_jeudi" placeholder="plat">
                <input type="text" id="subtitle_plat_2_jeudi" name="subtitle_plat_2_jeudi" placeholder="subtitle">
            <br>
            <br>
                <label for="accompagnement_jeudi">accompagnement</label>
                <input type="text" id="accompagnement_jeudi" name="accompagnement_jeudi" placeholder="plat">
                <input type="text" id="subtitle_accompagnement_jeudi" name="subtitle_accompagnement_jeudi" placeholder="subtitle">
                <br>
                <br>
                    <label for="légumes_jeudi">légumes</label>
                    <input type="text" id="légumes_jeudi" name="légumes_jeudi" placeholder="plat">
                    <input type="text" id="subtitle_légumes_jeudi" name="subtitle_légumes_jeudi" placeholder="subtitle">
                <br>
                <br>
                    <label for="dessert_jeudi">dessert</label>
                    <input type="text" id="dessert_jeudi" name="dessert_jeudi" placeholder="plat">
                    <input type="text" id="subtitle_dessert_jeudi" name="subtitle_dessert_jeudi" placeholder="subtitle">
                <br>
                <br>
            <br>

                <button id="remove_jeudi0" onClick="remove_jeudi('jeudi_column0')">remove</button>

    </div>
</div>

<div id="vendredi">
    <div class="box" id="vendredi_column0">
        <h1>vendredi</h1>
                <label for="date_vendredi">date</label>
                <input type="date" name="date_vendredi" id="date_vendredi">
                <br>
                <br>

                <label for="potage_vendredi">potage</label>
                <input type="text" id="potage_vendredi" name="potage_vendredi" placeholder="plat">
                <input type="text" id="subtitle_potage_vendredi" name="subtitle_potage_vendredi" placeholder="subtitle">
            <br>
            <br>
                <label for="plat_1_vendredi">plat 1</label>
                <input type="text" id="plat_1_vendredi" name="plat_1_vendredi" placeholder="plat">
                <input type="text" id="subtitle_plat_1_vendredi" name="subtitle_plat_1_vendredi" placeholder="subtitle">
            <br>
            <br>
                <label for="plat_2_vendredi">plat 2</label>
                <input type="text" id="plat_2_vendredi" name="plat_2_vendredi" placeholder="plat">
                <input type="text" id="subtitle_plat_2_vendredi" name="subtitle_plat_2_vendredi" placeholder="subtitle">
            <br>
            <br>
                <label for="accompagnement_vendredi">accompagnement</label>
                <input type="text" id="accompagnement_vendredi" name="accompagnement_vendredi" placeholder="plat">
                <input type="text" id="subtitle_accompagnement_vendredi" name="subtitle_accompagnement_vendredi" placeholder="subtitle">
                <br>
                <br>
                    <label for="légumes_vendredi">légumes</label>
                    <input type="text" id="légumes_vendredi" name="légumes_vendredi" placeholder="plat">
                    <input type="text" id="subtitle_légumes_vendredi" name="subtitle_légumes_vendredi" placeholder="subtitle">
                <br>
                <br>
                    <label for="dessert_vendredi">dessert</label>
                    <input type="text" id="dessert_vendredi" name="dessert_vendredi" placeholder="plat">
                    <input type="text" id="subtitle_dessert_vendredi" name="subtitle_dessert_vendredi" placeholder="subtitle">
                <br>
                <br>
            <br>

                <button id="remove_vendredi0" onClick="remove_vendredi('vendredi_column0')">remove</button>

    </div>
</div>

<input type="submit" class="submit" name="submit" value="Submit" >
<br>
<br>
</form>
       
       <script>
        
        var num_lundi;
        num_lundi = 1
        function remove_lundi(div_id) {
            // delete thing
            let div = document.getElementById(div_id);
            div.parentNode.removeChild(div);
            // make new button

            const h2 = document.getElementById("lundi");
            let html = "<div class='column' id='new_btn_lundi'><button class='btn_remove'onClick=add_lundi()>new Lundi</button></div>";
            h2.insertAdjacentHTML("afterbegin", html);

        }

        function add_lundi() {
            // remove new button
            let div = document.getElementById('new_btn_lundi');
            div.parentNode.removeChild(div);
            // make the new lundi tab
            const parentelement = document.getElementById("lundi");
            let html = `
            <div id="lundi_column${num_lundi}" class="box">
                    <h1>lundi</h1>
                        
                            <label for="date_lundi">date</label>
                            <input type="date" name="date_lundi" id="date_lundi">
                            <br>
                            <br>

                            <label for="potage_lundi">potage</label>
                            <input type="text" id="potage_lundi" name="potage_lundi" placeholder="plat">
                            <input type="text" id="subtitle_potage_lundi" name="subtitle_potage_lundi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="plat_1_lundi">plat 1</label>
                            <input type="text" id="plat_1_lundi" name="plat_1_lundi" placeholder="plat">
                            <input type="text" id="subtitle_plat_1_lundi" name="subtitle_plat_1_lundi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="plat_2_lundi">plat 2</label>
                            <input type="text" id="plat_2_lundi" name="plat_2_lundi" placeholder="plat">
                            <input type="text" id="subtitle_plat_2_lundi" name="subtitle_plat_2_lundi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="accompagnement_lundi">accompagnement</label>
                            <input type="text" id="accompagnement_lundi" name="accompagnement_lundi" placeholder="plat">
                            <input type="text" id="subtitle_accompagnement_lundi" name="subtitle_accompagnement_lundi" placeholder="subtitle">
                            <br>
                            <br>
                                <label for="légumes_lundi">légumes</label>
                                <input type="text" id="légumes_lundi" name="légumes_lundi" placeholder="plat">
                                <input type="text" id="subtitle_légumes_lundi" name="subtitle_légumes_lundi" placeholder="subtitle">
                            <br>
                            <br>
                                <label for="dessert_lundi">dessert</label>
                                <input type="text" id="dessert_lundi" name="dessert_lundi" placeholder="plat">
                                <input type="text" id="subtitle_dessert_lundi" name="subtitle_dessert_lundi" placeholder="subtitle">
                            <br>
                            <br>
                            <br>
                        <br>

                            <button id="remove_lundi${num_lundi}" onClick="remove_lundi('lundi_column${num_lundi}')">remove</button>

                            </div>
                </div>

`;
            parentelement.insertAdjacentHTML("afterbegin", html);
            num_lundi = num_lundi + 1


        }
        
        var num_mardi;
        num_mardi = 1
        function remove_mardi(div_id) {
            // delete thing
            let div = document.getElementById(div_id);
            div.parentNode.removeChild(div);
            // make new button

            const h2 = document.getElementById("mardi");
            let html = "<div class='column' id='new_btn_mardi'><button class='btn_remove'onClick=add_mardi()>new Mardi</button></div>";
            h2.insertAdjacentHTML("afterbegin", html);

        }

        function add_mardi() {
            // remove new button
            let div = document.getElementById('new_btn_mardi');
            div.parentNode.removeChild(div);
            // make the new mardi tab
            const parentelement = document.getElementById("mardi");
            let html = `
            <div class="box" id="mardi_column${num_mardi}">
                    <h1>mardi</h1>
                        
                            <label for="date_mardi">date</label>
                            <input type="date" name="date_mardi" id="date_mardi">
                            <br>
                            <br>

                            <label for="potage_mardi">potage</label>
                            <input type="text" id="potage_mardi" name="potage_mardi" placeholder="plat">
                            <input type="text" id="subtitle_potage_mardi" name="subtitle_potage_mardi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="plat_1_mardi">plat 1</label>
                            <input type="text" id="plat_1_mardi" name="plat_1_mardi" placeholder="plat">
                            <input type="text" id="subtitle_plat_1_mardi" name="subtitle_plat_1_mardi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="plat_2_mardi">plat 2</label>
                            <input type="text" id="plat_2_mardi" name="plat_2_mardi" placeholder="plat">
                            <input type="text" id="subtitle_plat_2_mardi" name="subtitle_plat_2_mardi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="accompagnement_mardi">accompagnement</label>
                            <input type="text" id="accompagnement_mardi" name="accompagnement_mardi" placeholder="plat">
                            <input type="text" id="subtitle_accompagnement_mardi" name="subtitle_accompagnement_mardi" placeholder="subtitle">
                            <br>
                            <br>
                                <label for="légumes_mardi">légumes</label>
                                <input type="text" id="légumes_mardi" name="légumes_mardi" placeholder="plat">
                                <input type="text" id="subtitle_légumes_mardi" name="subtitle_légumes_mardi" placeholder="subtitle">
                            <br>
                            <br>
                                <label for="dessert_mardi">dessert</label>
                                <input type="text" id="dessert_mardi" name="dessert_mardi" placeholder="plat">
                                <input type="text" id="subtitle_dessert_mardi" name="subtitle_dessert_mardi" placeholder="subtitle">
                            <br>
                            <br>
                            <br>
                        <br>

                            <button id="remove_mardi${num_mardi}" onClick="remove_mardi('mardi_column${num_mardi}')">remove</button>

                            </div>
                </div>

`;
            parentelement.insertAdjacentHTML("afterbegin", html);
            num_mardi = num_mardi + 1


        }        
        var num_mercredi;
        num_mercredi = 1
        function remove_mercredi(div_id) {
            // delete thing
            let div = document.getElementById(div_id);
            div.parentNode.removeChild(div);
            // make new button

            const h2 = document.getElementById("mercredi");
let html = "<div class='column' class='btn_remove'  id='new_btn_mercredi'><button class='btn_remove'onClick=add_mercredi()>new Mercredi</button></div>";
            h2.insertAdjacentHTML("afterbegin", html);

        }

        function add_mercredi() {
            // remove new button
            let div = document.getElementById('new_btn_mercredi');
            div.parentNode.removeChild(div);
            // make the new mercredi tab
            const parentelement = document.getElementById("mercredi");
            let html = `
            <div id="mercredi_column${num_mercredi}" class="box">
                    <h1>mercredi</h1>
                        
                            <label for="date_mercredi">date</label>
                            <input type="date" name="date_mercredi" id="date_mercredi">
                            <br>
                            <br>

                            <label for="potage_mercredi">potage</label>
                            <input type="text" id="potage_mercredi" name="potage_mercredi" placeholder="plat">
                            <input type="text" id="subtitle_potage_mercredi" name="subtitle_potage_mercredi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="plat_1_mercredi">plat 1</label>
                            <input type="text" id="plat_1_mercredi" name="plat_1_mercredi" placeholder="plat">
                            <input type="text" id="subtitle_plat_1_mercredi" name="subtitle_plat_1_mercredi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="plat_2_mercredi">plat 2</label>
                            <input type="text" id="plat_2_mercredi" name="plat_2_mercredi" placeholder="plat">
                            <input type="text" id="subtitle_plat_2_mercredi" name="subtitle_plat_2_mercredi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="accompagnement_mercredi">accompagnement</label>
                            <input type="text" id="accompagnement_mercredi" name="accompagnement_mercredi" placeholder="plat">
                            <input type="text" id="subtitle_accompagnement_mercredi" name="subtitle_accompagnement_mercredi" placeholder="subtitle">
                            <br>
                            <br>
                                <label for="légumes_mercredi">légumes</label>
                                <input type="text" id="légumes_mercredi" name="légumes_mercredi" placeholder="plat">
                                <input type="text" id="subtitle_légumes_mercredi" name="subtitle_légumes_mercredi" placeholder="subtitle">
                            <br>
                            <br>
                                <label for="dessert_mercredi">dessert</label>
                                <input type="text" id="dessert_mercredi" name="dessert_mercredi" placeholder="plat">
                                <input type="text" id="subtitle_dessert_mercredi" name="subtitle_dessert_mercredi" placeholder="subtitle">
                            <br>
                            <br>
                            <br>
                        <br>

                            <button id="remove_mercredi${num_mercredi}" onClick="remove_mercredi('mercredi_column${num_mercredi}')">remove</button>

                            </div>
                </div>

`;
            parentelement.insertAdjacentHTML("afterbegin", html);
            num_mercredi = num_mercredi + 1
        }
                
        var num_jeudi;
        num_jeudi = 1
        function remove_jeudi(div_id) {
            // delete thing
            let div = document.getElementById(div_id);
            div.parentNode.removeChild(div);
            // make new button

            const h2 = document.getElementById("jeudi");
let html = "<div class='column' class='btn_remove'  id='new_btn_jeudi'><button class='btn_remove'onClick=add_jeudi()>new Jeudi</button></div>";
            h2.insertAdjacentHTML("afterbegin", html);

        }

        function add_jeudi() {
            // remove new button
            let div = document.getElementById('new_btn_jeudi');
            div.parentNode.removeChild(div);
            // make the new jeudi tab
            const parentelement = document.getElementById("jeudi");
            let html = `

            <div id="jeudi_column${num_jeudi}" class="box">
                    <h1>jeudi</h1>
                        
                            <label for="date_jeudi">date</label>
                            <input type="date" name="date_jeudi" id="date_jeudi">
                            <br>
                            <br>

                            <label for="potage_jeudi">potage</label>
                            <input type="text" id="potage_jeudi" name="potage_jeudi" placeholder="plat">
                            <input type="text" id="subtitle_potage_jeudi" name="subtitle_potage_jeudi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="plat_1_jeudi">plat 1</label>
                            <input type="text" id="plat_1_jeudi" name="plat_1_jeudi" placeholder="plat">
                            <input type="text" id="subtitle_plat_1_jeudi" name="subtitle_plat_1_jeudi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="plat_2_jeudi">plat 2</label>
                            <input type="text" id="plat_2_jeudi" name="plat_2_jeudi" placeholder="plat">
                            <input type="text" id="subtitle_plat_2_jeudi" name="subtitle_plat_2_jeudi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="accompagnement_jeudi">accompagnement</label>
                            <input type="text" id="accompagnement_jeudi" name="accompagnement_jeudi" placeholder="plat">
                            <input type="text" id="subtitle_accompagnement_jeudi" name="subtitle_accompagnement_jeudi" placeholder="subtitle">
                            <br>
                            <br>
                                <label for="légumes_jeudi">légumes</label>
                                <input type="text" id="légumes_jeudi" name="légumes_jeudi" placeholder="plat">
                                <input type="text" id="subtitle_légumes_jeudi" name="subtitle_légumes_jeudi" placeholder="subtitle">
                            <br>
                            <br>
                                <label for="dessert_jeudi">dessert</label>
                                <input type="text" id="dessert_jeudi" name="dessert_jeudi" placeholder="plat">
                                <input type="text" id="subtitle_dessert_jeudi" name="subtitle_dessert_jeudi" placeholder="subtitle">
                            <br>
                            <br>
                            <br>
                        <br>

                            <button id="remove_jeudi${num_jeudi}" onClick="remove_jeudi('jeudi_column${num_jeudi}')">remove</button>

                            </div>
                </div>

`;
            parentelement.insertAdjacentHTML("afterbegin", html);
            num_jeudi = num_jeudi + 1


        }
                
        var num_vendredi;
        num_vendredi = 1
        function remove_vendredi(div_id) {
            // delete thing
            let div = document.getElementById(div_id);
            div.parentNode.removeChild(div);
            // make new button

            const h2 = document.getElementById("vendredi");
            let html = "<div class='column' id='new_btn_vendredi'><button class='btn_remove'onClick=add_vendredi()>new Vendredi</button></div>";
            h2.insertAdjacentHTML("afterbegin", html);

        }

        function add_vendredi() {
            // remove new button
            let div = document.getElementById('new_btn_vendredi');
            div.parentNode.removeChild(div);
            // make the new vendredi tab
            const parentelement = document.getElementById("vendredi");
            let html = `
            <div id="vendredi_column${num_vendredi}" class="box">
                    <h1>vendredi</h1>
                        
                            <label for="date_vendredi">date</label>
                            <input type="date" name="date_vendredi" id="date_vendredi">
                            <br>
                            <br>

                            <label for="potage_vendredi">potage</label>
                            <input type="text" id="potage_vendredi" name="potage_vendredi" placeholder="plat">
                            <input type="text" id="subtitle_potage_vendredi" name="subtitle_potage_vendredi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="plat_1_vendredi">plat 1</label>
                            <input type="text" id="plat_1_vendredi" name="plat_1_vendredi" placeholder="plat">
                            <input type="text" id="subtitle_plat_1_vendredi" name="subtitle_plat_1_vendredi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="plat_2_vendredi">plat 2</label>
                            <input type="text" id="plat_2_vendredi" name="plat_2_vendredi" placeholder="plat">
                            <input type="text" id="subtitle_plat_2_vendredi" name="subtitle_plat_2_vendredi" placeholder="subtitle">
                        <br>
                        <br>
                            <label for="accompagnement_vendredi">accompagnement</label>
                            <input type="text" id="accompagnement_vendredi" name="accompagnement_vendredi" placeholder="plat">
                            <input type="text" id="subtitle_accompagnement_vendredi" name="subtitle_accompagnement_vendredi" placeholder="subtitle">
                            <br>
                            <br>
                                <label for="légumes_vendredi">légumes</label>
                                <input type="text" id="légumes_vendredi" name="légumes_vendredi" placeholder="plat">
                                <input type="text" id="subtitle_légumes_vendredi" name="subtitle_légumes_vendredi" placeholder="subtitle">
                            <br>
                            <br>
                                <label for="dessert_vendredi">dessert</label>
                                <input type="text" id="dessert_vendredi" name="dessert_vendredi" placeholder="plat">
                                <input type="text" id="subtitle_dessert_vendredi" name="subtitle_dessert_vendredi" placeholder="subtitle">
                            <br>
                            <br>
                            <br>
                        <br>

                            <button id="remove_vendredi${num_vendredi}" onClick="remove_vendredi('vendredi_column${num_vendredi}')">remove</button>

                            </div>
                </div>

`;
            parentelement.insertAdjacentHTML("afterbegin", html);
            num_vendredi = num_vendredi + 1


        }
       </script>

    </body>
</html>