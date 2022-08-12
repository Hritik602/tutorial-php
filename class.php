<html>

<body>
    <?php
    class Fruits
    {
        public  $name;
        public $color;


        function setName($name)
        {
            $this->name = $name;
        }

        function getName()
        {
            return $this->name;
        }
    }

    $apple = new Fruits;
    $banana = new Fruits;

    $apple->setName("Apple");
    echo $apple->getName();
    echo "<br>";
    $banana->setName("Banana");
    echo $banana->getName();
    ?>
</body>

</html>