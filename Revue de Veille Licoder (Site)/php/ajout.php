<html>
  <head>
    <meta charset="utf-8">
    <title>Ajouter une veille</title>
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  </head>
  <body>
    <div class="site-container">
      <?php require('../includes/nav.php'); ?>
      <div class="site-pusher">
        <div class="site-content">
          <div class="container">
            <div class="fond_ajout">
              <h1>Ajouter une veille</h1>
              <div class="champs">
                <form>
                  <p>
                    <label for="titre">Titre :</label><br>
                    <input type="text" name="titre" id="titre" />
                  </p>
                </form>
                <form>
                  <p>
                    <label for="text">Texte :</label><br>
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
