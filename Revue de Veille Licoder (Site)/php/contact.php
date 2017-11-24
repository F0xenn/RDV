<html>
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  </head>
  <body>
    <div class="site-container">
      <?php require('../includes/nav.php'); ?>
      <div class="site-pusher">
        <div class="site-content">
          <div class="container">
            <div class="fond_contact">
              <h1>Nous contacter</h1>
              <div class="champs">
                <form>
                  <p>
                    <label for="nom">Votre nom :</label><br>
                    <input type="text" name="nom" id="nom" required />
                  </p>
                </form>
                <form>
                  <p>
                    <label for="mail">Votre adresse mail :</label><br>
                    <input type="email" name="mail" id="mail" required />
                  </p>
                </form>
                <form>
                  <p>
                    <label for="sujet">Sujet :</label><br>
                    <input type="text" name="sujet" id="sujet" />
                  </p>
                </form>
                <form>
                  <p>
                    <label for="text">Message :</label><br>
                    <textarea id="text" name="text" rows="8" cols="80"></textarea>
                  </p>
                </form>
              </div>
              <input class="btn" type="submit" value="Envoyer" />
            </div>
          </div>
        </div>
      </div>
      <?php require('../includes/footer.php'); ?>
    </div>
  </body>
</html>
