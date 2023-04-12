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
    <form method="post" id="form">
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
        echo "<p>Er zijn veel mensen die niet kunnen " . $fieldArray['field1'] . ". Neem nou " . $fieldArray['field2'] . ". Zelfs met de hulp
        van een " . $fieldArray['field4'] . " of zelfs " . $fieldArray['field3'] . " kan " . $fieldArray['field2'] . " niet " . $fieldArray['field1'] . ". 
        Dat heeft niet te maken met een gebrek aan " . $fieldArray['field5'] . ", maar met een te veel aan " . $fieldArray['field6'] . ". 
        Te veel " . $fieldArray['field6'] . " leidt tot " . $fieldArray['field7'] . " en dat is niet goed als je wilt " . $fieldArray['field1'] . ". 
        Helaas voor " . $fieldArray['field2'] . "</p>";
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