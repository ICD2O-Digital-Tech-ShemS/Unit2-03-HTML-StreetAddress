<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
    <meta name="description" content="Address">
    <meta name="keyword" content="Immaculata, ics2o">
    <meta name="author" content="Shem Irekpita">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="180x190" href="./Favicon/math.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/Home.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/Home.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/Home.png">
    <link rel="manifest" href="./Favicons/Home.png">
    <title>Home</title>
  </head>
  <body>
   <h1>Fill</h1>
<script src="./js/script.js"></script>
      <h3>this form</h3>
      <form action="javascript:enterClicked()">
        <label for="sname">Street Name</label>
        <input type="text" id="street-name" placeholder="street Name">
        <br>
        <br>
        <label for="number">Street Number</label>
        <input type="number" id="number-entered" placeholder="street number">
        <br>
        <br>
        <input type="submit" value="Enter">
      </form>
    <div id="result">
    </div>
      <iframe id="result" name="result">
		Your first name is <?php echo $_POST["sname"]; ?> and your age is <?php echo $_POST["number"]; ?>.
      </iframe>
  </body>
</html>
