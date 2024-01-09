<!DOCTYPE html>
<html lang="de">
<?php include 'header.php'; ?>

<body>
    <?php include 'menu.php'; ?>
    <header id="test">
        <h1>Aglaia</h1>
        <h1>Tattoo</h1>
    </header>
    <main>
        <h2>Kontaktformular</h2>
        <p>Wenn du von mir gestochen werden willst, kannst du dieses Formular ausfüllen. Ich melde mich dann bei dir so schnell ich kann. </p>
        <p>Bitte fülle das Formular aus, so gut du kannst. Dann kann ich mir schon Gedanken machen. </p>
        <section>
            <form id="contact-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="tattoowunsch">Tattoowunsch:</label>
                <textarea id="tattoowunsch" name="tattoowunsch" rows="4" required></textarea><br>

                <label for="email">E-Mail:</label>
                <input type="email" id="email" name="email" required><br>

                <input type="submit" id="submit-button" value="Absenden">
            </form>
            <div id="response-message" class="response-message"></div>
        </section>

    </main>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="mail.js"></script>
    <script src="menu.js"></script>
</body>

</html>