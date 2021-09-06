<!DOCTYPE html>
<!--[if IE 7]>	 <html class="no-js lt-ie9 lt-ie8" lang="de"><![endif]-->
<!--[if IE 8]>	 <html class="no-js lt-ie9" lang="de"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="de"><!--<![endif]-->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# place: http://ogp.me/ns/place#">
<title>Baumgarten | Kontakt</title>
<meta name="description" content="Baumgarten | Kontakt"/>
<?php include 'head.php'; ?>
</head>
    
<body class="contact">
    <div id="loader">
        <img src="img/baumgarten-freudenau-goldach-baum.svg" alt="baumgarten freudenau goldach logo" width="30"/>
    </div>
    <?php include 'header.php'; ?>
    
    <section class="sectioncontact">
        <article>
            <?php include('form.php'); ?>
            <div class="container">  
                <form id="contact" action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
                    <h1>Kontaktformular</h1>
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
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Nachricht senden</button>
                    </fieldset>
                    <div class="success"><?= $success; ?></div>
                </form>
            </div>
        </article>    
    </section>
    
    <section class="sectiondload">
        <article>
            <div class="container respcont">  
                <h1>Downloads</h1>
                <table>
                    <tr>
                        <td class="downloadplan"><a href="downloads/baumgarten-grundrisse-haus-a-mietwohnung.pdf" download="Baumgarten-Haus-A-Grundrisspläne-Mietwohung"><img src="img/download-icon-weiss.svg" width="11" height="11" alt="download icon"> <strong> Haus A | Mietwohnungen</strong> Grundrisse (PDF)</a></td> 
                    </tr>
                    <tr>
                        <td class="downloadplan"><a href="downloads/baumgarten-grundrisse-haus-b-mietwohung.pdf" download="Baumgarten-Haus-B-Grundrisspläne-Mietwohung"><img src="img/download-icon-weiss.svg" width="11" height="11" alt="download icon"> <strong> Haus B | Mietwohnungen</strong> Grundrisse (PDF)</a></td> 
                    </tr>
                    <tr>
                        <td class="downloadplan"><a href="downloads/baumgarten-grundrisse-haus-c-mietwohung.pdf" download="Baumgarten-Haus-C-Grundrisspläne-Mietwohung"><img src="img/download-icon-weiss.svg" width="11" height="11" alt="download icon"> <strong> Haus C | Mietwohnungen</strong> Grundrisse (PDF)</a></td> 
                    </tr>
                    <tr>
                        <td class="downloadplan"><a href="downloads/baumgarten-anmeldeformular-mietinteressenten.pdf" download="Baumgarten-Anmeldeformular"><img src="img/download-icon-weiss.svg" width="11" height="11" alt="download icon"> <strong> Anmeldeformular</strong> (PDF)</a></td> 
                    </tr>
                    
                </table>
                <table class="downtable">
                    <tr>
                        <td class="downloadplan" colspan="7"><a href="downloads/baumgarten-grundrisse-haus-b-2-obergeschoss.pdf" download="Baumgarten-Haus-B-Grundrisspläne-Eigentumswohungen"><img src="img/download-icon-weiss.svg" width="11" height="11" alt="download icon"> <strong> Haus B | Eigentumswohnungen</strong> Grundrisse (PDF)</a></td> 
                    </tr>
                </table>
            </div>
            <div class="vermietungsstart">
                <h3><strong>Vermietungsstart:</strong> Bewerben Sie sich jetzt für Ihre gewünschte Wohnung. Die Wohnungen sind ab Spätherbst 2020 bezugsbereit.</h3>
            </div>
        </article>    
    </section>
    
    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>
    
</body>
</html>
