<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>comp</title>
</head>
<body>
    <div class="main-block">
      <form action="query_1.php" method="post">
      <h4>Choose Processor</h4>
         <select name="processor">
            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'comp');

            $query = 'SELECT * FROM `processor`';

            $result = mysqli_query($connection, $query);

            $res=mysqli_fetch_all ($result, MYSQLI_NUM);
            foreach($res as $name)
            echo "<option value='".$name[1]."'>".$name[1]."</option>";
            ?>
         </select>
         <input type="submit" name="form1" value="Поиск"><br>
         </form>
      <form action="query_2.php" method="post">
      <h4>Choose Software</h4>
         <select name="software">
               <?php
               $conn = new mysqli('localhost', 'root', '', 'comp');

               $query = 'SELECT * FROM `software`';

               $result = mysqli_query($conn, $query);

               $res=mysqli_fetch_all ($result, MYSQLI_NUM);
               foreach($res as $name)
               print "<option value='".$name[1]."'>".$name[1]."</option>";
               ?>
         </select>
         <input type="submit" name="form2" value="Поиск"><br>
      </form>
      <form action="query_3.php" method="post">
         <h4>ПК с истекшим гарантийным сроком. <br> Example 2022-03-06</h4>
         <input type="text" name="user_date" />
         <input type="submit" name="form3" value="Поиск"><br>
      </form>
   </div>
</body>
</html>