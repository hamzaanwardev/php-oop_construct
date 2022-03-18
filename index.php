<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Construct Function</title>
</head>
<body>
<h1>PHP Constructor</h1>


<?php
 class person {
     public $name, $age, $class;
     function __construct($n,$a,$c) {
         $this->name = $n;
         $this->age = $a;
         $this->class = $c;
     }
     function show() {
        echo "Your Name :". $this->name."<br>";
        echo "YOur Age :". $this->age."<br>";
        echo "Your Class :". $this->class."<br>";
     }
 }
 $p1 = new person ("Hamza",24,"Executive at Immentia");
 $p2 = new person ("Abdullah",29,"Job at Immentia");
 $p3 = new person ("Zeeshan",27,"Accociate Executive at Immentia");
 $p1->show();
 $p2->show();
 $p3->show();
?>
</body>
</html>