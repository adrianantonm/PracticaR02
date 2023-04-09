<?php
    session_start();
$r = mt_rand( 128, 255 );
$g = mt_rand( 128, 255 );
$b = mt_rand( 128, 255 );
$bgcolor = 'rgba('.$r.','.$g.','.$b.')';
?>
<!doctype html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin: 0 auto;
        }
        button{
            padding: 0 30px;
            margin: 30px 100px 30px 100px;
            border-radius: 5px;
            background-color: aquamarine;
            font-size: 15px;

        }
        table{
            position: absolute;
            width: 100%;
            height: 100%;
            border: none;
        }
        td{
            margin: 0;
            width: 10%;
            height: 10%;
            background-color: black;

        }
        header{
            display: flex;
            justify-content: center;
            width: 100%;
            height: 100px;
            background-color: black;
        }
    </style>
</head>
<body>
    <header>
        <form action="sesion.php">
        <button id="mas">mas</button>
        <button id="menos">menos</button>
        </form>
    </header>

    <table>
        <tr>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
        </tr>
        <tr>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
        </tr>
        <tr>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
        </tr>
        <tr>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
        </tr>
        <tr>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
        </tr>
        <tr>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
        </tr>
        <tr>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
        </tr>
        <tr>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
        </tr>
        <tr>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
        </tr>
        <tr>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
            <td style="background-color: <?php echo $bgcolor?>"></td>
        </tr>
    </table>
</body>
</html>


