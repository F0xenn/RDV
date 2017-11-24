
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
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
            <div class="fond_inscription">
              <h1>Inscription</h1>
              <div class="champs">
                <form>
                  <p>
                    <label for="pseudo">Pseudo :</label><br>
                    <input type="text" name="pseudo" id="pseudo" />
                  </p>
                  <p>
                    <label for="mail">Adresse mail :</label><br>
                    <input type="email" name="mail" id="mail" />
                  </p>
                  <p>
                    <label for="pass">Mot de passe :</label><br>
                    <input type="password" name="pass" id="pass">
                  </p>
                <div class="CGU">
                  <input type="checkbox" name="choix" required />
                  <label class="cgu" for="choix">Accepter les CGU</label>
                </div>
              </div>
              <input class="btn" type="submit" value="Enregistrement" />
            </form>
            </div>
          </div>
        </div>
      </div>
      <?php require('../includes/footer.php'); ?>
    </div>
  </body>
</html>
