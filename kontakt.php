<!DOCTYPE html>
<!--[if IE 7]>	 <html class="no-js lt-ie9 lt-ie8" lang="de"><![endif]-->
<!--[if IE 8]>	 <html class="no-js lt-ie9" lang="de"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="de"><!--<![endif]-->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# place: http://ogp.me/ns/place#">
<title>STEPCUBE | Kontakt</title>
<meta name="description" content="STEPCUBE | Kontakt"/>
<?php include 'head.php'; ?>
</head>

<body class="wafont">
  <header>
    <div class="logo w">
      <a href="index" target="_top">
         <img src="img/stepcube-wohnen-romanshorn-logo.svg" alt="stepcube-wohnen-romanshorn-logo" width="220px" height="auto"/>
     </a>
   </div>

   <nav class="menu">
      <div class="navbutton">
        <img src="img/stepcube-navbutton.svg" alt="stepcube-navbutton" width="40" height="40"/>
      </div>

      <div class="navcontainer">
        <div class="navone"></div>
        <div class="navtwo"></div>
        <div class="navthree"></div>
        <div class="navfour"></div>
        <ul class="navline">
          <li><a href="index">Stepcube</a></li>
          <li><a href="romanshorn">Romanshorn</a></li>
          <li><a href="wohnangebot">Wohnangebot</a></li>
          <li><a href="baubeschreibung">Baubeschreibung</a></li>
          <li><a href="kontakt">Kontakt</a></li>
        </ul>
      </div>
    </nav>
  </header>
    <section class="maincontainer">
        <article class="containerform">
            <?php include('form.php'); ?>
            <div>
                <form id="contact" action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
                    <h1>Fragen Sie uns</h1>
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
                  <strong>Sproll & Ramseyer AG</strong>
                  <br>Das Haus für Häuser<br>
                  <br><strong>Ansprechperson</strong>
                  <br>Janine Schmuckli
                  <br><a href="tel:0712290029">T 071 229 00 29</a>
                  <br><a href="mailto:janine.schmuckli@sur.ag?subject=Stepcube%20Romanshorn" target="_top">e-Mail</a>
                </p>
                <p>
                 <strong>Vermietungsstart:</strong>
                 <br>Bewerben Sie sich jetzt für Ihre gewünschte Wohnung, Gewerbe oder Büro. Diese sind ab Sommer 2022 bezugsbereit.</p>
                 <a class="buttonpositiv" href="downloads/baumgarten-anmeldeformular-mietinteressenten.pdf" download="Stepcube Anmeldeformular">Anmeldeformular</a>
              </div>

            </div>
        </article>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>

</body>
</html>
