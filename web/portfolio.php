<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>Portfolio</h1>
    <div>
    <img id="catImg" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia.tenor.com%2FD7Wa7yKl7oQAAAAC%2Fbeluga-the-cat-hakosh1307.gif&f=1&nofb=1&ipt=4343fe8caa44afa81623f5e771323d3b8bc1ff118fc5241c2b36b37a288a4d68&ipo=images" alt="catImg">
    <button type="button" id="hideButton">Hide</button>
    </div>
    <h2>Mani Projekti </h2>
    <div>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit neque explicabo earum itaque minus assumenda similique nulla eveniet officiis expedita!
        </p>
    </div>

    <div class="hidden">
        <ul>
            <li>Lorem, ipsum dolor.</li>
            <li>Lorem, ipsum dolor.</li>
            <li>Lorem, ipsum dolor.</li>
            <li>Lorem, ipsum dolor.</li>
            <li>Lorem, ipsum dolor.</li>
        </ul>
    </div>

    <ul>
        <li><a href="index.php">Sākumlapa</a></li>
        <li><a href="portfolio.php">Par mums</a></li>
        <li><a href="contact.php">Kontakti</a></li>
    </ul>

    <script>
        // JavaScript to hide the image when the button is clicked
        document.getElementById("hideButton").addEventListener("click", function() {
            var img = document.getElementById("catImg");
            if (img.style.display === "none") {
                img.style.display = "block"; // Show the image
                this.textContent = "Hide"; // Change button text
            } else {
                img.style.display = "none"; // Hide the image
                this.textContent = "Show"; // Change button text
            }
        });
    </script>

</body>
</html>