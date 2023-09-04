<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR CODE GENERATOR</title>
    <link rel="stylesheet" href="./bootstrap_VAPOUR.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">QR_CODE GENERATOR</a>
    </div>
</nav>
<form class="p-5" action="generate.php" method="post">
  <fieldset>
    <legend>GENERATE QR_CODE IN MILLISECONDS FAM</legend>
    <div class="form-group">
      <label for="code-text" class="form-label mt-4">ENTER THE TEXT YOU WOULD LIKE TO EMBED IN THE QRCODE</label>
      <input type="input" name="text" class="form-control" id="code-text" placeholder="Go" required>
    </div>
    <button type="submit" class="btn btn-primary">GENERATE</button>
  </fieldset>
</form>
</body>
</html>