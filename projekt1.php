<?php 
    $connect = mysqli_connect('localhost','root','','polecenia');
?>
<!DOCTYPE html>
</html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Generator</title>
</head>
<body>
<script  src=
"https://code.jquery.com/jquery-3.5.1.min.js"
                integrity=
"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
                crossorigin="anonymous">
                </script>
<center>
<?php 
    $zapytanie = "SELECT * FROM polecenia";
    $query = mysqli_query($connect,$zapytanie);
    $rows = mysqli_fetch_all($query,MYSQLI_ASSOC);

    foreach($rows as $w){
    echo<<<END
        <input class="button-12" type="submit" value="{$w['wartosc']}" id="{$w['nazwa']}" onclick="insert('{$w['znacznik']}')">
    END;
    }
?>
<br>
                    <input type="submit" class="button-12" style="margin-top: 5px" id="html" value="html"  onclick="sprawdz_html()">
                    <input type="submit" class="button-12" id="table" value="table" onclick="sprawdz_table()">
                    <input type="submit" class="button-12" id="form" value="form" onclick="sprawdz_form()">
                    <input type="submit" class="button-12" id="function" value="function" onclick="sprawdz_function()">
                    <input type="submit" class="button-12" id="css" value="css" onclick="sprawdz_css()"><br>
</center>
<div>
    <center>
        <textarea id="text" style="width: 60vh; height: 78vh; resize:none; margin-top: 13px"></textarea>
        <textarea id="text2" style="width: 60vh; height: 78vh; resize:none; margin-top: 13px"></textarea>   
    </center>

</div>


<script>
    function insert(arg){
        var curPos = document.getElementById("text").selectionStart;
        console.log(curPos);
        let x = $("#text").val();
        let text_to_insert = arg;
        $("#text").val(
            x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }
function sprawdz_form(){
        var curPos = document.getElementById("text2").selectionStart;
                console.log(curPos);
                let x = $("#text2").val();
                let text_to_insert = '<form method="" action="">\n  <input type="" id="" value="">\n    <input type="" id="" value="">\n    <input type="" id="" value="">\n    <input type="" id="" value="" onclick="">\n</form>';
                $("#text2").val(
            x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }
    function sprawdz_function(){
        var curPos = document.getElementById("text2").selectionStart;
                console.log(curPos);
                let x = $("#text2").val();
                let text_to_insert = 'function nazwa_funkcji(parametr 1, parametr 2)\n  {\n     //twój kod\n  };';
                $("#text2").val(
            x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }
    function sprawdz_css(){
        var curPos = document.getElementById("text2").selectionStart;
                console.log(curPos);
                let x = $("#text2").val();
                let text_to_insert = '<link rel="stylesheet" href="arkusz.css">';
                $("#text2").val(
            x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }
    function sprawdz_html(){
        var curPos = document.getElementById("text2").selectionStart;
                console.log(curPos);
                let x = $("#text2").val();
                let text_to_insert = "<!DOCTYPE html>\n<html lang=\"pl\">\n<head>\n<meta charset=\"UTF-8\">\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n<title>Document</title>\n</head>\n<body>\n\n</body>\n</html>";
                $("#text2").val(
            x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }
    function sprawdz_table(){
        var curPos = document.getElementById("text2").selectionStart;
                console.log(curPos);
                let x = $("#text2").val();
                let text_to_insert = '<table>\n <tr>\n      <td> </td>\n      <td> </td>\n </tr>\n <tr>\n      <td> </td>\n      <td> </td>\n </tr>\n</table>';
                $("#text2").val(
            x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }
</script>
</body>
</html>
