<!DOCTYPE html>
<!--[if IE 7]>	 <html class="no-js lt-ie9 lt-ie8" lang="de"><![endif]-->
<!--[if IE 8]>	 <html class="no-js lt-ie9" lang="de"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="de"><!--<![endif]-->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# place: http://ogp.me/ns/place#">
<title>STEPCUBE | Kontakt</title>
<meta name="description" content="STEPCUBE | Kontakt"/>
<?php include 'head.php'; ?>
</head>

<body>
    <?php include 'header.php'; ?>
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
                <h3><strong>Vermietungsstart:</strong> Bewerben Sie sich jetzt für Ihre gewünschte Wohnung. Die Wohnungen sind ab Spätherbst 2020 bezugsbereit.</h3>
            </div>
        </article>
    </section>

    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>

</body>
</html>
