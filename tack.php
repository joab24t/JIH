<?php
// Hämtar och sanerar POST-data från formuläret.
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
  <title>Tack för ditt meddelande – Elias, junior webbutvecklare</title>
  <meta name="description" content="Bekräftelse på att ditt meddelande till Elias har skickats.">
  <!-- Koppling till CSS och JavaScript -->
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js" defer></script>
</head>
<body>

  
  <header class="site-header">
    <p class="site-header__name">Elias</p>
    <nav class="main-nav" aria-label="Huvudmeny">
     <a class="main-nav__link" href="index.html">Om mig</a> |
      <a class="main-nav__link" href="kompetens.html">Kompetens</a> |
      <a class="main-nav__link" href="projekt.html">Projekt</a> |
      <a class="main-nav__link" href="utbildning.html">Utbildning och erfarenhet</a> |
      <a class="main-nav__link" href="referenser.html">Referenser</a> |
      <a class="main-nav__link" href="kontakt.html">Kontakt</a>
    </nav>
  </header>

  <main>
    <h1 class="page-title">Tack för ditt meddelande!</h1>

    
    <section class="thanks">
      <p class="thanks__text">Hej <?php echo $name; ?>! Elias har tagit emot ditt meddelande och svarar så snart Jag kan.</p>

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
    <p class="site-footer__text">© 2026 Elias</p>
  </footer>

</body>
</html>