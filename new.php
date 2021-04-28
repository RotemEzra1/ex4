<!DOCTYPE html>
<html>
<head>
    <title>Rotem Ezra</title>
</head>
<body>
    <?php
        $name = $_GET["name"]; 
        $color = $_GET["color"];

        echo "<h1> Hello " .$name. "</h1>";
        switch ($color) {
            case "Yellow":
              echo "yaala Beitar!";
              break;
            case "Red":
              echo "Oh no, just not Hapoel, Go back and select yellow";
              break;
            case "Green":
              echo "Not a good choice, Go back and select yellow";
            }
              ?>
</body>
</html>