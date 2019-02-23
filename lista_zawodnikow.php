<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>System sędziowski</title>
        <meta name="author" content="Jakub Grzybowski">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div id="head">
        <a href="index.php" id="arrow"><div class="triangle-left"></div></a>
        <div id="title">
                    TMP 2018
        </div>
        </div>
        <table>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Narodowość</th>
                <th>Klub</th>
                <th>Kategoria</th>
                <th>Poomsae 1</th>
                <th>Poomsae 2</th>
                <th>Wynik</th>
                <th>Miejsce</th>
            </tr>
        
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "lista_zawodnikow";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            echo "Connected successfully";
            $sql = "SELECT * FROM lista";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr> <td>".$row["Imie"]."</td>"."<td>". $row["Nazwisko"]."</td>"."<td>". $row["Narodowosc"]."</td>"."<td>". $row["Klub"]."</td>"."<td>". $row["Kategoria"]."</td>"."<td>". $row["Poomsae 1"]."</td>"."<td>". $row["Poomsae 2"]."</td>"."<td>". $row["Wynik"]."</td>"."<td>". $row["Miejsce"]. "</td></tr>";
                
                }   
            }
            else {
                echo "0 results";
                }
            $conn->close();
        ?>
         </table>
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
