<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mad Libs - Onkunde</title>
</head>
<body>
  <h1>Mad Libs</h1>
  <nav>
    <a href="paniek.php">Er heerst paniek...</a>
    <a href="onkunde.php">Onkunde</a>
  </nav>
  <main>
    <h2>Onkunde</h2>
    <form method="post">
      <div class="fields">
        <label for="field1">Wat zou je graag willen kunnen?</label>
        <input type="text" name="field1" required>
      </div>
      <div class="fields">
        <label for="field2">Met welke persoon kun je goed opschieten?</label>
        <input type="text" name="field2" required>
      </div>
      <div class="fields">
        <label for="field3">Wat is je favoriete getal?</label>
        <input type="text" name="field3" required>
      </div>
      <div class="fields">
        <label for="field4">Wat heb je altijd bij je als je op vakantie gaat?</label>
        <input type="text" name="field4" required>
      </div>
      <div class="fields">
        <label for="field5">Wat is je beste persoonlijke eigenschap?</label>
        <input type="text" name="field5" required>
      </div>
      <div class="fields">
        <label for="field6">Wat is je slechtste persoonlijke eigenschap?</label>
        <input type="text" name="field6" required>
      </div>
      <div class="fields">
        <label for="field7">Wat is het ergste wat je kan overkomen?</label>
        <input type="text" name="field7" required>
      </div>
      <button type="submit" name="submitButton">Versturen</button>
    </form>
  </main>
  <footer>
    <p>© Deze website is gemaakt door Robin Vervoorn ©</p>
    <p>2023 - 2023</p>
  </footer>
  <style>
    <?php include 'madLibs.css';?>
  </style>
</body>
</html>