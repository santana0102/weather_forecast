<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weatherman</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="center">  
    <h1>Type the city informations to get the current weather forecast.</h1>
        <form action="includes/api.php" method="POST">
            <div class="txt_field">
                <input type="text" name="city" id="city" required>
                <span></span>
                <label>City name</label>
            </div>
            <input type="submit" value="Bring me the results">
        </form>
    </div>
</body>
