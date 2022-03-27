
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
   
    <style>
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			font-family: arial, sans-serif;
		}
		input, textarea {
			display: block;
			width: 300px;
			font-size: 18px;
			margin: 7px 0px;
		}
		label {
			display: block;
			padding: 2px 0px;
		}
	</style>
	
  </head>
  <body>
	
	<form method="post" action="send.php">
    	<label>Name:</label>
    	<input type="text" 
    	       name="name">
    
    	<label>Message:</label>
    	<textarea name="message"></textarea>

    	<input type="submit" 
    	       name="button">
    </form>

   
  </body>
</html>