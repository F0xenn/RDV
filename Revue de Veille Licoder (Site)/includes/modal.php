<head>
  <!-- Intégration de jquery -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
  <!-- Intégration de js bootstrap -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- Intégration de css bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="css/veille.css">
</head>
<header>
  <!-- Modal -->
<div id="Connexion" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Connexion</h4>
      </div>
      <div class="modal-body">
        <p class="connexion">Pseudo:</p>
        <div class="input-group2">
          <input type="text" class="form-control" placeholder="Pseudo" aria-describedby="sizing-addon2">
        </div>
        <p class="connexion">Mot de Passe:</p>
        <div class="input-group3">
          <input type="text" class="form-control" placeholder="Mot de Passe" aria-describedby="sizing-addon2">
        </div>
        <a class="mdp-oublié" href="#">Mot de Passe oublié ?</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Connexion</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</header>
