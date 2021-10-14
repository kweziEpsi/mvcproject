
<html>
<head>
<title>First Assignment</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link type="text/css" rel="style.css">
</head>	
<body>

<?php echo form_open('form');?>
<hr/>
<form action="<?php echo site_url('form/index');?>" method='post'>
<h1 style="text-align:center">Enter data with relevance to the two fields below !!!</h1>
<hr/>
<br/>
<form>
<h5>Username:</h5>
<?php echo form_error('name'); ?>
<input type="text" name="name" style="font-size: 20px;" value="<?php echo set_value('name'); ?>" placeholder="insert username"  size="50" />
</br>

<h5>Email:</h5>
<?php echo form_error('email'); ?>
<input type="text" name="email" style="font-size: 20px;" value="<?php echo set_value('email'); ?>" placeholder="insert email address" size="50"/>
<br/><br/>
<input type="submit" name="submit" value="Add" class="style_btn lin_color_left start_btn"/>
</form>

<!--Tables displaying the Values in the database -->
<table border="1" class="table table-bordered">
</th>
    <tr>
    <th>Username</th>
    <th>Email</th>
    <th colspan="2">Action</th>
    </tr>
    <?php
    foreach($userArray as $key=> $value){
      echo "<tr>
       <td>".$value['name']."</td>
       <td>".$value['email']."</td>
       <td> </a>
       </td>
       <td> <a/></td> 
      </tr>";
      }
      ?>
 
</table>
</body>
</html>

