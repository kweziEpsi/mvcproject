<html>
<head>
<title>First Assignment</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link type="text/css" rel="style.css">
</head>	
<body>

<hr/>
<form action="<?php echo base_url('form/update_num/'.$user->id);?>" method='post'>
<h1 style="text-align:center">Enter data with relevance to the two fields below !!!</h1>
<hr/>
<br/>
<form>
<h5>Username:</h5>
<input type="text" name="name" style="font-size: 20px;" value="" placeholder="insert username"  size="50" />
</br>

<h5>Email:</h5>
<input type="text" name="email" style="font-size: 20px;" value="" placeholder="insert email address" size="50"/>
<br/><br/>
<input type="submit" name="submit" value="Update" class="style_btn lin_color_left start_btn"/>
</form>
</body>
</html>