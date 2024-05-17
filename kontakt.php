<!DOCTYPE html>
<html lang="de">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# place: http://ogp.me/ns/place#">
<title>STEPCUBE | Kontakt</title>
<meta name="description" content="STEPCUBE | Kontakt"/>
<?php include 'head.php'; ?>
</head>

<body class="wafont">
  <?php include 'headerblue.php'; ?>
    <section class="maincontainer kontaktcontainer">
      <h1 class="header bau">Fragen Sie uns</h1>
        <article class="containerform">
            <?php include('form.php'); ?>
            <div>
                <form id="contact" action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
                    <fieldset>
                        <input placeholder="Name&#42;" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
                        <span class="error"><?= $name_error ?></span>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Vorname&#42;" type="text" name="vorname" value="<?= $vorname ?>" tabindex="2">
                        <span class="error"><?= $vorname_error ?></span>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Email&#42;" type="text" name="email" value="<?= $email ?>" tabindex="3" >
                        <span class="error"><?= $email_error ?></span>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Telefon&#42;" type="text" name="telefon" value="<?= $telefon ?>" tabindex="4" >
                        <span class="error"><?= $telefon_error ?></span>
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="Schreiben Sie uns eine Nachricht...." name="mitteilung" tabindex="5" ><?php echo $mitteilung;?></textarea>
                        <span class="error"><?= $mitteilung_error ?></span>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Senden</button>
                    </fieldset>
                    <div class="success"><?= $success; ?></div>
                </form>
            </div>
        </article>
        <article class="containeranmeldung">
            <div class="vermietungsstart">
              <div class="kontakt">
                <p>
                  <strong>Wincasa AG</strong>
                  <br><strong>Ansprechperson</strong>
                  <br>Lars Gabriel
                  <br><a href="tel:041444030090">T +41 44 403 00 90</a>
                  <br><a href="mailto:lars.gabriel@wincasa.ch?subject=Stepcube%20Romanshorn" target="_top">lars.gabriel@wincasa.ch</a>
                </p>
                <p>
                 <strong>Vermietungsstart:</strong>
                 <br>Bewerben Sie sich jetzt für Ihre Wohnung, Gewerbe oder Büro. Diese sind ab 1. August 2022 bezugsbereit.</p>
                 <a class="buttonpositiv buttonanmeldung" href="downloads/stepcube-anmeldeformular-mietinteressenten.pdf" download="Stepcube Anmeldeformular Wohnung">Anmeldeformular Wohnung</a>
                 <a class="buttonpositiv buttonanmeldung" href="downloads/stepcube-anmeldeformular-gewerbe.pdf" download="Stepcube Anmeldeformular Gewerbe">Anmeldeformular Gewerbe</a>
                 <a class="buttonpositiv buttonanmeldung" href="downloads/stepcube-anmeldeformular-buero.pdf" download="Stepcube Anmeldeformular Buero">Anmeldeformular Büro</a>
              </div>

            </div>
        </article>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>

</body>
</html>
