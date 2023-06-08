<?php
    $cookieNam1="numero";
    $cookieValor1="";
    $cookieName2="operator";
    $cookieValor2="";

    if(isset($_POST['numero'])) {
        $numero = $_POST['mostrador'].$_POST['numero'];
    } else {
        $numero = "";
    }
    if (isset($_POST['operator'])) {
        $cookieValor1 = $_POST['mostrador'];
        setcookie($cookieNam1, $cookieValor1, time() + (86400*30), "/");
        $cookieValor2 = $_POST['operator'];
        setcookie($cookieName2, $cookieValor2, time() + (86400*30), "/");
        $numero = "";
    }
    if (isset($_POST['igual'])) {
        $numero = $_POST['mostrador'];
        switch ($_COOKIE['operator']) {
            case '+':
                $total=$_COOKIE['numero']+$numero;
                break;
                case '-':
                    $total=$_COOKIE['numero']-$numero;
                    break;
                    case '*':
                        $total=$_COOKIE['numero']*$numero;
                        break;
                        case '/':
                            $total=$_COOKIE['numero']/$numero;
                            break;
        }
        $numero = $total;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/calculadora.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Calculadora</title>
</head>

<body>

    <div class="container" style="align-items: center;">
        <form action="" method="POST" class="col-12">
            <h1>CALCULATOR</h1>
            <input type="text" class="mostrarCalc" name="mostrador" value="<?php echo @$numero?>" id="mostrador1">
            <br><br>
                <div class="row">
                    <div class="col-1">
                        <input type="submit" value="1" class="number" name="numero"></span>
                    </div>
                    <div class="col-1">
                        <input type="submit" value="2" class="number" name="numero"></span>
                    </div>
                    <div class="col-1">
                        <input type="submit" value="3" class="number" name="numero"></span>
                    </div>
                    <div class="col-1">
                        <input type="submit" value="-" class="operador" name="operator"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="submit" value="4" class="number" name="numero"></span>
                    </div>
                    <div class="col-1">
                        <input type="submit" value="5" class="number" name="numero"></span>
                    </div>
                    <div class="col-1">
                        <input type="submit" value="6" class="number" name="numero"></span>
                    </div>
                    <div class="col-1">
                        <input type="submit" value="+" class="operador" name="operator"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="submit" value="7" class="number" name="numero"></span>
                    </div>
                    <div class="col-1">
                        <input type="submit" value="8" class="number" name="numero"></span>
                    </div>
                    <div class="col-1">
                        <input type="submit" value="9" class="number" name="numero"></span>
                    </div>
                    <div class="col-1">
                        <input type="submit" value="*" class="operador" name="operator"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <input type="submit" value="c" class="operador" name="operator"></span>
                    </div>
                    <div class="col-1">
                        <input type="submit" value="0" class="number" name="numero"></span>
                    </div>
                    <div class="col-1">
                        <input type="submit" value="=" class="igual" name="igual"></span>
                    </div>
                    <div class="col-1">
                        <input type="submit" value="/" class="operador" name="operator"></span>
                    </div>
                </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>