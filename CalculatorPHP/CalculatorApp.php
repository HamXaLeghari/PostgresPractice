
<form method="post">
    number 1: <input name="n1" type="text"><br>
    number 2: <input name="n2" type="text"><br>

    <input name="cal" type="submit" value="+"> <input name="cal" type="submit" value="-"> <input name="cal" type="submit" value="x"> <input name="cal" type="submit" value="/">
</form>

result: <input type="text" disabled value="<?php

if (isset($_POST["cal"]) && $_POST["cal"] !=""  && isset($_POST["n1"]) && $_POST["n1"] !="" && is_numeric($_POST["n1"]) && isset($_POST["n2"]) && $_POST["n2"] !="" && is_numeric($_POST["n2"])){


    include("./Calculator.php");
    $calulator = new Calculator();
    if ($_POST["cal"] === "+"){

       echo $calulator->add($_POST["n1"],$_POST["n2"]);
    }

    else if ($_POST["cal"] === "-"){

        echo $calulator->subtract($_POST["n1"],$_POST["n2"]);
    }

    if ($_POST["cal"] === "*"){

        echo $calulator->multiply($_POST["n1"],$_POST["n2"]);
    }

    if ($_POST["cal"] === "/"){

        echo $calulator->divide($_POST["n1"],$_POST["n2"]);
    }

    unset($_POST["cal"]);
    unset($_POST["n1"]);
    unset($_POST["n2"]);
}

?>">
