<DOCTYPE html>
<html>
<head>
<title>Getting user deatails</title>
</head>
 <body>
     <table boarder="1">
</th>
    <tr>
    <th>Lastname</th>
    <th>Lastname</th>
    <th>Email</th>
    </tr>
    <?php
    foreach($userArray as $key=> $value){
      echo "<tr>
       <td>".$value['firstname']."</td>
       <td>".$value['lastname']."</td>
       <td>".$value['email']."</td>
      </tr>";
      }
      ?>
 
</table>
</body>
</html>
