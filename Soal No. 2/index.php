<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width+device-width,initial-scale=1">
        <title>Form Input</title>
        <link rel="stylesheet" href="styles.css">
        <script>
        function reloadPage()
{
location.reload();
}
</script>
    </head>
<body>
<div id="card">
<div id="card-content">
  <div id="card-title">
    <h2>DATA DIRI</h2>
    <div class="underline-title"></div>
  </div>

<form method="POST" class="form" action="process.php">
<label for="user-name" style="padding-top:13px">&nbsp;Nama</label>
  <input
   id="user-name"
   class="form-content"
   type="text"
   name="name"
   autocomplete="on"
   required />
  <div class="form-border"></div>
<label for="user-age" style="padding-top:22px">&nbsp;Umur</label>
  <input
   id="user-age"
   class="form-content"
   type="text"
   name="age"
   required />
  <div class="form-border"></div>
<label for="user-city" style="padding-top:22px">&nbsp;Kota</label>
  <input
   id="user-city"
   class="form-content"
   type="text"
   name="city"
   required />
  <div class="form-border"></div>

<a href="#"><legend id="forgot-pass" value="Reload page" onclick="reloadPage()">Hapus</legend></a>
  
<input id="submit-btn" type="submit" name="submit" value="Submit">
</form>
  </div>

</body>