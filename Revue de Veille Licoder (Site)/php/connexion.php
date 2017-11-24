<html>
  <head>
    <meta charset="utf-8">
    <title>Revue de Veille</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  </head>
  <body>
    <div class="site-container">
      <?php require('../includes/nav.php'); ?>
      <div class="site-pusher">
        <div class="site-content">
          <div class="container">
            <div class="fond_connection">
              <div class="champs">
                <h1>Connexion</h1>
                <form>
                  <p>
                    <label for="pseudo">Pseudo :</label><br>
                    <input class="chp" type="text" name="pseudo" id="pseudo" />
                  </p>
                  <p>
                    <label for="pass">Mot de passe :</label><br>
                    <input class="chp" type="password" name="pass" id="pass">
                  </p>
              </div>
              <input class="btn" type="submit" value="Connexion" />
            </form>
            </div>
          </div>
        </div>
      </div>
      <?php require('../includes/footer.php'); ?>
    </div>
  </body>
</html>
