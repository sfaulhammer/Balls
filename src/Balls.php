<html>
<body>
<form action='Balls.php' method='get'>
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
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 02.05.2018
 * Time: 08:56
 */
require_once ("Basketball.php");
require_once ("Fußball.php");
require_once ("PingPongBall.php");
abstract class ball
{
    protected $name;
    protected $width;
    protected $material;

    function __construct(string $name, float $width, string $material)
    {
        $this->name = $name;
        $this->width = $width;
        $this->material = $material;
    }

    function __toString()
    {
        // TODO: Implement __toString() method.
        $return = "Name:".$this->name."<br>"."Durchmesser:".$this->width."<br>"."Material:".$this->material."<br>"."Volumen:".$this->volume()."<p>";
        if($_GET['ausgabe'] == "h") {
            if(isset($_GET['material']) && $this->material == $_GET['material'] ) {
                return $return;
            } else if(isset($_GET['material']) == false) {
                return $return;
            }
            return "";
        } else {
            if(isset($_GET['material']) && $this->material == $_GET['material'] ) {
                echo json_encode($return);
            } else if (isset($_GET['material']) == false) {
                echo json_encode($return);
            }
            return "";
        }

    }
}

$fussball = new Fussball("Adidas Sport 1000", 30.75, "Gummi");
$fussball2 = new Fussball("Nike Sport Elite", 30.75, "Gummi");
$basketball = new Basketball("NBA Pro Elite", 25.7, "Kautschuk");
$basketball2 = new Basketball("NBA Alpha Elite", 25.7, "Kautschuk");
$pingpongball = new PingPongBall("Xang Li 5000", 10, "Plastik");
$pingpongball2 = new PingPongBall("Xang Hu Ultra", 10, "Plastik");


if(isset($_GET['ausgabe'])) {
    echo($fussball);
    echo($basketball);
    echo($pingpongball);
    echo($fussball2);
    echo($basketball2);
    echo($pingpongball2);
}

