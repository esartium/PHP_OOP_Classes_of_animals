<?php
use App\Dogs;

require_once('../vendor/autoload.php');
?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="a.css">
</head>

<body>

<div id="infoheader">
    <?php
    $dog = new Dogs('шарик');
    ?>
</div>

<div  class="container-fluid">

<div class="row" id="polovinki">

            <div class="col-md-4" id="polovina1">

            <div id="pol1back">
            <form action="dia_win_dog.php" id="aaa">
                <button type="submit" class="but">
                    Поговорить
                </button>
            </form>
            <form action="korm_dog.php">
                <button type="submit" class="but">
                    Покормить
                </button>
            </form>
            </div>
            </div>

            <div class="col-md-6" id="polovina2">
            <div id="poglad" class="container">
            <div id="pogladsoo">тыкните на собаку, чтобы погладить её:</div>
                <form action="dog_poglad.php">
                    <button type="submit" id="pogladbutton" class="dogpic">  </button>
                </form>
            </div>
            </div>
</div>

</div>

</body>
