<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ankieta PHP</title>
</head>
<body>
    <header><h1>Ankieta PHP</h1></header>
    <form action="ankieta.php" method="POST">
    <?php
        $tech = ["C", "CPP", "Java", "C#", "HTML", "CSS", "XML", "PHP", "JavaScript"];
        foreach($tech as $t)
        {
            echo "<input type=\"checkbox\" name = \"tech[]\" value=\"$t\" /> $t <br />";
        }
        ?>
        <br/>
        <input type="submit" name="submit" value="Wyślij "/>
    </form>
    <?php
        if (filter_input(INPUT_POST, "submit")) {
            $akcja = filter_input(INPUT_POST, "submit");
            switch ($akcja) {
                case "Wyślij" : wyslij();break;
            }
        }
        ?>
<?php 
function wyslij()
{
    if (!(file_exists("ankieta.txt"))) {
        $args = 
     [
      'tech' => ['filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS, 'flags' =>FILTER_REQUIRE_ARRAY],
     ];
        $dane = filter_input_array(INPUT_POST, $args);
        foreach ($dane as $key => $val) {
            if ($val === false or $val === NULL) {
            $errors .= $key . " ";
            }
            if ($errors !="") {
               
                
           } 
           else {
                  echo "<br>Nie poprawne dane: " . $errors;
                }
    }
}
}
?>
</body>
</html>