<?php
namespace sfaulhammer\baelle;
?>

<html>
<body>
<form action='../library/Balls.php' method='get'>
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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
    }



    function __toString()
    {
        // TODO: Implement __toString() method.
        $return = "Name:".$this->getName()."<br>"."Durchmesser:".$this->getWidth()."<br>"."Material:".$this->getMaterial()."<br>"."Volumen:".$this->volume()."<p>";

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

