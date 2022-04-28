<!DOCTYPE html>
</html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script  src=
"https://code.jquery.com/jquery-3.5.1.min.js"
                integrity=
"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
                crossorigin="anonymous">
                </script>
<input type="submit" id="p" value="<p>" onclick="sprawdz('<p></p>')">
<input type="submit" id="h1" value="<h1>" onclick="sprawdz('<h1></h1>')">
<input type="submit" id="h2" value="<h2>" onclick="sprawdz('<h2></h2>')">
<input type="submit" id="form" value="form" style=" margin-left: 516px" onclick="sprawdz_form()">
<input type="submit" id="function" value="function" onclick="sprawdz_function()"><br>
<div>
<textarea id="text" style="width: 60vh; height: 80vh; float:left; margin-top: 20px"></textarea>
<textarea id="text2" style="width: 40vh; height: 50vh; margin-left: 80px; margin-top: 20px; float:left"></textarea>   
</div>


<script>
    function sprawdz(a){
        var curPos = document.getElementById("text").selectionStart;
                console.log(curPos);
                let x = $("#text").val();
                let text_to_insert = a;
                $("#text").val(
            x.slice(0, curPos) + text_to_insert + x.slice(curPos));
    }
    function sprawdz_form(){
        var curPos = document.getElementById("text2").selectionStart;
                console.log(curPos);
                let x = $("#text2").val();
                let text_to_insert = '<form>\n  <input type="" id="" value="">\n    <input type="" id="" value="">\n    <input type="" id="" value="">\n    <input type="" id="" value="" onclick="">\n</form>';
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
</script>
</body>
</html>
