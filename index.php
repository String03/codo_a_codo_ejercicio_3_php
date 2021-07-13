/*    Crear una clase que tenga 5 atributos y 3 métodos
    A partir de la clase creada en el punto anterior crear 2 objetos
    Crear una clase que herede de la clase principal*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 PHP</title>
</head>
<body>
    <?php
    class vehiculo{
        protected string $modelo;
        protected string $precio;
        protected string $ruedas;
        protected string $marca;
        protected string $color;
    
        public function __construct()
        {
           
        }
        
        public function getModelo(){
           return $this->modelo = "Renault 12";
       }

       public function setModelo(){
           $this->modelo = $modelo;
       }

        public function getPrecio(){
           return $this->precio = "$150.000";
       }

       public function setPrecio(){
           $this->precio = $precio;
       }

        public function getRuedas(){
           return $this->ruedas = "4";
       }

       public function setRuedas(){
           $this->ruedas = $ruedas;
       }

        public function getMarca(){
           return $this->marca = "Renault";
       }

       public function setMarca(){
           $this->marca = $marca;
       }

       
        public function getColor(){
           return $this->color = "Negro";
       }

       public function setColor(){
           $this->color = $color;
       }

    }

$vehiculo1 = new vehiculo();
echo "<br>";
print_r($vehiculo1 ->getModelo());
echo "<br>";
print_r($vehiculo1 ->getPrecio());
echo "<br>";
print_r($vehiculo1 ->getRuedas());
echo "<br>";
print_r($vehiculo1 ->getMarca());
echo "<br>";
print_r($vehiculo1 ->getColor());
echo "<br>";
?>
</body>
</html>