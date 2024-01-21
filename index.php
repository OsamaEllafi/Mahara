<!DOCTYPE html>
<html>

<head>
  <title>Product Information</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <div class="container">
    <h1>Product Information</h1>
    <form action="process.php" method="GET">
      <label for="quantity">Quantity:</label>
      <input type="number" id="quantity" name="quantity" required />
      <label for="type">Chose Mobile type:</label>
      <label for="Iphone">Iphone</label>
      <input type="radio" name="type" id="type" value="Iphone" />
      <label for="Galaxy">Galaxy</label>
      <input type="radio" name="type" id="type" value="Galaxy" />
      <button type="submit">Submit</button>
    </form>
  </div>
</body>

</html>