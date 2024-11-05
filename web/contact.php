<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jautā man!</title>
</head>
<body>

    <h1>Jautā man!</h1>

    <form action="contact.php" method="post">
    
    <label for="fname">Name:</label>
        <input type="text" id="name" name="name"><br>
    <label for="name">E-Mail:</label>
        <input type="text" id="email" name="email"> <br>

    <label for="select">Select message type:</label>
    <select name="select" name="select">
        <option value="atsauksme">Atsauksme</option>
        <option value="ieteikums">Ieteikums</option>
        <option value="jautājums">Jautājums</option>
    </select>

    <br>
    
    <input type="checkbox" id="answer1" name="answer1" value="0">
        <label for="answer1">Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</label><br>
    <input type="checkbox" id="answer2" name="answer2" value="1">
        <label for="answer2">Vai piekrīti mūsu mājaslapas lietošanas noteikumiem?</label><br>

        <button type="button">submit form</button>
    </form>

    <ul>
        <li><a href="index.php">Sākumlapa</a></li>
        <li><a href="portfolio.php">Par mums</a></li>
        <li><a href="contact.php">Kontakti</a></li>
    </ul>
    
</body>

</html>