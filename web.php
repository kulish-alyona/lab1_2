<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   #data {
      display: block;
   }
</style>
<body>
    <h1>Main Page</h1>
    <h3>Apple M1 Pro</h3>
    <button className="btn-show1">Показать Apple M1 Pro</button>
    <div className="block-data">
    <?php   // LOOP TILL END OF DATA
               $connection = mysqli_connect('localhost', 'root', '', 'comp');

               // текст SQL запроса, который будет передан базе
               $query = 'SELECT netname FROM computer WHERE FID_Processor = (SELECT id_processor FROM processor WHERE name = "Apple M1 Pro")';
            
               // выполняем запрос к базе данных
                  $result = mysqli_query($connection, $query);

                 while($row = $result->fetch_assoc())
                {
             ?>
            <h4><?php echo  $row['netname']; ?></h4>
             <?php
                }

                // закрываем соединение с базой
               mysqli_close($connection);
             ?>
    </div>

    <h3>Guarantee more 1 month</h3>
    <button className="btn-show1">Показать Apple M1 Pro</button>
    <div className="block-data">
    <?php   // LOOP TILL END OF DATA
               $connection = mysqli_connect('localhost', 'root', '', 'comp');

               // текст SQL запроса, который будет передан базе
               $query = 'SELECT netname FROM computer where CURRENT_DATE > (DATE_ADD(date_purchase, INTERVAL guarantee MONTH))';
            
               // выполняем запрос к базе данных
                  $result = mysqli_query($connection, $query);

                 while($row = $result->fetch_assoc())
                {
             ?>
            <h4><?php echo  $row['netname']; ?></h4>
             <?php
                }

                // закрываем соединение с базой
               mysqli_close($connection);
             ?>
    </div>

    <h3>FORM</h3>
    <form action="select.php" method="post">
   <label>Name OS</label><input type="text" name="name" id="name"><br/><br/>
   <input type="submit" value="Submit">
    <div className="block-data">
    <?php   // LOOP TILL END OF DATA
               $connection = mysqli_connect('localhost', 'root', '', 'comp');

               $name = mysqli_real_escape_string($connection, $_POST['name']);

               // текст SQL запроса, который будет передан базе
               $sql_new = 'SELECT netname from computer, computer_software, software 
where ID_Computer=FID_Computer and FID_Software=ID_Software and name="macOS"';

            
               // выполняем запрос к базе данных
                  if($name) {
                     $result = mysqli_query($connection, $query);

                 while($row = $result->fetch_assoc())
                {
             ?>
            
             <?php
                }
               }

                // закрываем соединение с базой
               mysqli_close($connection);
             ?>
    </div>


   
   <script>
      const btnShow = document.getElementById("btn-show");
      const elData = document.getElementById("data");

      btnShow.onclick = () => {
         if(elData.style.display === "block") {
            elData.style.display = "none";
         } else {
            elData.style.display = "block"
         }
      }
   </script>
</body>
</html>