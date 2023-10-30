<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        .body {
            display: flex;
            align-items: center;
            box-sizing: border-box;
        }

        .kotak {
            width: 50px;
            height: 50px;
            margin: 1px;
            border: 1px solid black;
            display: inline-block;
            text-align: center;
            line-height: 50px;
        }

        .clear {}

        .row {
            display: block;
        }

        #genap {
          background-color: silver;
            
        }

        #ganjil {
            
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <?php
   $rows = 5;

   for ($i = 1; $i <= $rows; $i++) {
       echo "<div class='row'>";
       for ($j = 1; $j <= $i; $j++) {
           if ($i % 2 == 0) {
               echo "<div class='kotak' id='genap'>$j</div>";
           } else {
               echo "<div class='kotak' id='ganjil'>$j</div>";
           }
       }
       echo "</div>";
   }
   ?>

</body>
</html>
