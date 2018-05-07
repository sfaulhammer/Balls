<html>
    <body>
        <form action='balls.php' method='get'>
            <input type='radio' name='ausgabe' value='h'> HTML
            <input type='radio' name='ausgabe' value='j'> JSON
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

require("ballsInter.php");

class ball implements ballsInter
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
        $return = "Name:".$this->name."<br>"."Durchmesser:".$this->width."<br>"."Material:".$this->material."<br>"."Umfang:".$this->volume()."<p>";
        if($_GET['ausgabe'] == "h") {
            return $return;
        } else {
            echo json_encode($return);
            return "";
        }

    }

    function volume(): float
    {
        return (3 / 4) * pi() * ($this->width / 2);
    }

}
$fussball = new Ball("Fußball", 30.75, "Gummi");
$basketball = new Ball("Basketball", 25.7, "Kautschuk");
$tennisball = new Ball("Tennis", 20, "Stoff");
$pingpongball = new Ball("PingPong", 10, "Plastik");
$test1 = new Ball("Fußball", 30.75, "Gummi");
$test = new Ball("Fußball", 30.75, "Gummi");

if(isset($_GET['ausgabe'])) {
    echo($test.$test->volume()."<br>");
    echo($test1 . $test1->volume() . "<br>");
    echo($fussball . $fussball->volume() . "<br>");
    echo($basketball . $basketball->volume() . "<br>");
    echo($pingpongball . $pingpongball->volume() . "<br>");
    echo($tennisball . $tennisball->volume() . "<br>");
}

