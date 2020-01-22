<!DOCTYPE html>
<html>
<head>
    <title> &#10084; AyRaMel &#10084;</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="seite.css" >
</head>
<body>
<div id="body">
    <div id="logo">
        <img src="Logoo.png"alt="Logo">
    </div>
    <div id="db">
        <table>
            <tr><td> <a href="Startseite.html">Startseite</a></td></tr>
            <tr><td><a href="Arten.html">Arten</a></td></tr>
            <tr><td> <a href="Catering.html">Catering</a></td></tr>
            <tr> <td><a href="Dekoration.html">Dekoration</a></td></tr>
            <tr><td> <a href="Fotografen.html">Fotografen</a></td></tr>
            <tr><td> <a href="Unterhaltung.html">Unterhaltung</a></td></tr>
            <tr><td> <a href ="bittefunktionier.php">Kontakt&#10094;</a></td></tr>
        </table>
    </div>
    <div id="Ss8">
        <form action="bittefunktionier.php">
            <table>
                <tr><td> Vorname:</td>
                    <td><input type="text" name="vorname" value=""></td></tr>
                <tr><td> Nachname:</td>
                    <td><input type="text" name="nachname" value=""></td></tr>
                <tr><td> E-Mail: </td>
                    <td><input type="text" name= "email" value=""></td></tr>
                <tr><td> Art der Feier:</td>
                    <td><select name="Arten">
                            <option value ="arten1">&#10084;</option>
                            <option value ="arten1">Hochzeit</option>
                            <option value ="arten2">Geburtstag</option>
                            <option value ="arten3">Kindergeburtstag</option>
                            <option value ="arten4">Baby-Party</option>
                            <option value ="arten6">Einweihungsfeier</option>
                            <option value ="arten7">Polterabend</option>
                            <option value ="arten8">Verlobungsfeier</option>
                            <option value ="arten9">Junggesellenabschied</option>
                        </select>
                    </td>
                <tr><td> Extraw&uuml;nsche:</td>
                    <td>
                        <input type="checkbox" name="Ew" value="catering">Catering
                        <input type="checkbox" name="Ew" value="dekoration">Dekoration
                        <input type="checkbox" name="Ew" value="fotografen">Fotografen
                        <input type="checkbox" name="Ew" value="unterhaltung">Unterhaltung
                    </td>
                <tr><td> Sonstige Bemerkungen: </td>
                    <td><input type="textarea" name="bemerkungen" valea=""></td>
                <tr><td></td>
                    <td><input type="submit" value="Abschicken"></td>

    </div>
    <?php
    if (isset($_GET["nachname"])&&isset($_GET["email"]))
    {
        echo "Wenn dir die Seite gefallen hat, schreib bitte noch in das";
    }
    ?>
    <a href="gestebuch.php">G&auml;stebuch</a>
</div></body></html>
