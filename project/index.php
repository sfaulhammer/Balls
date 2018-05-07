<?php
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 07.05.2018
 * Time: 12:48
 */
namespace sfaulhammer\project;

use sfaulhammer\baelle\Fussball;
use sfaulhammer\baelle\Basketball;
use sfaulhammer\baelle\PingPongBall;

require_once "vendor/autoload.php";

$fussball = new Fussball("Adidas Sport 1000", 30.75, "Gummi");
$fussball2 = new Fussball("Nike Sport Elite", 30.75, "Gummi");
$basketball = new Basketball("NBA Pro Elite", 25.7, "Kautschuk");
$basketball2 = new Basketball("NBA Alpha Elite", 25.7, "Kautschuk");
$pingpongball = new PingPongBall("Xang Li 5000", 10, "Plastik");
$pingpongball2 = new PingPongBall("Xang Hu Ultra", 10, "Plastik");
?>
    <html>
    <body>
    <form action='index.php' method='get'>
        <input type='radio' name='ausgabe' value='h'> HTML
        <input type='radio' name='ausgabe' value='j'> JSON

        <input type='radio' name='material' value='Gummi'> Gummi
        <input type='radio' name='material' value='Kautschuk'> Kautschuk
        <input type='radio' name='material' value='Plastik'> Plastik
        <button type="submit" value="Los">Los</button>
    </form>
    </body>
    </html>


    <?php
if(isset($_GET['ausgabe'])) {
    echo($fussball);
    echo($basketball);
    echo($pingpongball);
    echo($fussball2);
    echo($basketball2);
    echo($pingpongball2);
}
