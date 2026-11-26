<?php
// Hämtar POST-data från kontakt.html och sanerar med htmlspecialchars() mot XSS
$name = "";
if (isset($_POST["name"])) {
    $name = htmlspecialchars($_POST["name"]);
}

$email = "";
if (isset($_POST["email"])) {
    $email = htmlspecialchars($_POST["email"]);
}

$subject = "";
if (isset($_POST["subject"])) {
    $subject = htmlspecialchars($_POST["subject"]);
}

// Standardvärde om ingen radioknapp valts i formuläret
$role = "Inget valt";
if (isset($_POST["role"])) {
    $role = htmlspecialchars($_POST["role"]);
}

$message = "";
if (isset($_POST["message"])) {
    $message = htmlspecialchars($_POST["message"]);
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tack för ditt meddelande – Idris, junior webbutvecklare</title>
  <meta name="description" content="Bekräftelse på att ditt meddelande till Idris, Mohammednur och Joab har skickats.">
  <!-- Länk till CSS- och JS-filer (defer kör JS efter att HTML laddats) -->
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js" defer></script>
</head>
<body>

  <!-- Gemensamt sidhuvud och huvudnavigering för samtliga sidor -->
  <header class="site-header">
    <p class="site-header__name">Idris</p>
    <nav class="main-nav" aria-label="Huvudmeny">
      <ul class="main-nav__list">
        <li class="main-nav__item"><a class="main-nav__link" href="index.html">Om mig</a></li>
        <li class="main-nav__item"><a class="main-nav__link" href="projekt.html">Projekt</a></li>
        <li class="main-nav__item"><a class="main-nav__link" href="utbildning.html">Utbildning och erfarenhet</a></li>
        <li class="main-nav__item"><a class="main-nav__link" href="referenser.html">Referenser</a></li>
        <li class="main-nav__item"><a class="main-nav__link" href="kontakt.html">Kontakt</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h1 class="page-title">Tack för ditt meddelande!</h1>

    <!-- Bekräftelsevy som skriver ut sanerade formulärvärden i en beskrivningslista (dl) -->
    <section class="thanks">
      <p class="thanks__text">Hej <?php echo $name; ?>! Idris, Mohammednur och Joab har tagit emot ditt meddelande och svarar så snart vi kan.</p>

      <h2 class="thanks__title">Det här skickade du</h2>
      <dl class="thanks__list">
        <dt class="thanks__label">Namn</dt>
        <dd class="thanks__value"><?php echo $name; ?></dd>

        <dt class="thanks__label">E-post</dt>
        <dd class="thanks__value"><?php echo $email; ?></dd>

        <dt class="thanks__label">Ärende</dt>
        <dd class="thanks__value"><?php echo $subject; ?></dd>

        <dt class="thanks__label">Vem du är</dt>
        <dd class="thanks__value"><?php echo $role; ?></dd>

        <dt class="thanks__label">Meddelande</dt>
        <dd class="thanks__value"><?php echo $message; ?></dd>
      </dl>

      <p class="thanks__text"><a class="thanks__link" href="index.html">Tillbaka till startsidan</a></p>
    </section>
  </main>

  <footer class="site-footer">
    <p class="site-footer__text">© 2026 Idris, Mohammednur och Joab</p>
  </footer>

</body>
</html>