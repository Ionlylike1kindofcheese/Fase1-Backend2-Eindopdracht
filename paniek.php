<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mad Libs - Paniek</title>
</head>
<body>
<h1>Mad Libs</h1>
  <nav>
    <a href="paniek.php">Er heerst paniek...</a>
    <a href="onkunde.php">Onkunde</a>
  </nav>
  <main>
    <h2>Er heerst paniek...</h2>
    <form method="post" id="form">
      <div class="fields">
        <label for="field1">Welke dier zou je nooit als huisdier willen hebben?</label>
        <input type="text" name="field1" required>
      </div>
      <div class="fields">
        <label for="field2">Wie is de belangrijkste persoon in je leven?</label>
        <input type="text" name="field2" required>
      </div>
      <div class="fields">
        <label for="field3">In welk land zou je graag willen wonen?</label>
        <input type="text" name="field3" required>
      </div>
      <div class="fields">
        <label for="field4">Wat doe je als je je verveelt?</label>
        <input type="text" name="field4" required>
      </div>
      <div class="fields">
        <label for="field5">Met welk speelgoed speelde je als kind het meest?</label>
        <input type="text" name="field5" required>
      </div>
      <div class="fields">
        <label for="field6">Bij welke docent spijbel je het liefst?</label>
        <input type="text" name="field6" required>
      </div>
      <div class="fields">
        <label for="field7">Als je €100.000,- had, wat zou je dan kopen?</label>
        <input type="text" name="field7" required>
      </div>
      <div class="fields">
        <label for="field8">Wat is je favoriete bezigheid?</label>
        <input type="text" name="field8" required>
      </div>
      <button type="submit" name="submitButton">Versturen</button>
    </form>
    <section>
      <?php
      function test_input($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
      }

      if (isset($_POST['submitButton'])) {
        $fieldArray = [];
        foreach ($_POST as $key => $value) {
          $fieldArray[$key] = test_input($value);
        }
        echo '<style type="text/css">#form {display: none;}</style>';
        echo "<p>Er heerst paniek in koninkrijk " . $fieldArray['field3'] . ". Koning " . $fieldArray['field6'] . " is ten einde raad en als Koning
        " . $fieldArray['field6'] . " ten einde raad is, dan roept hij zijn ten-einde-raadsheer " . $fieldArray['field2'] . ".<br>
        \"" . $fieldArray['field2'] . "! Het is een ramp! Het is een schande!\" <br>
        \"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?\" <br>
        \"Mijn " . $fieldArray['field1'] . " is verdwenen! Zo maar, zonder waarschuwing. En ik had net " . $fieldArray['field5'] . " voor hem gekocht!\" <br>
        \"Majesteit, uw " . $fieldArray['field1'] . " komt vast wel vanzelf weer terug?\" <br>
        \"Ja. da's leuk en aardig, maar hoe moet ik in de tussentijd " . $fieldArray['field8'] . " leren?\" <br> 
        \"Maar Sire, daar kunt u toch uw " . $fieldArray['field7'] . " voor gebruiken.\" <br> 
        \"" . $fieldArray['field2'] . ", je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.\" <br> 
        \"" . $fieldArray['field4'] . ", Sire.\"";
      }
      ?>
    </section>
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