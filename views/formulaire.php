<?php require_once('includes/navbar.html'); ?>

  		<div class="form-signin">
        <form action="index.php?action=controllerCv/addCvs" method="POST">
          <div class="form-floating">
            <input type="text" name="nom_complet" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nom complet</label>
          </div>
          <div class="form-floating">
            <input type="text" name="statut" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Statut</label>
          </div>
          <div class="form-floating">
            <input type="text" name="date_nais" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Date naissance</label>
          </div>
          <div class="form-floating">
            <input type="text" name="region" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Région</label>
          </div>
          <div class="col-12 select-form">
            <select class="form-select" name="situation" id="country" required>
                <option value="">Situation...</option>
                <option>Célibataire</option>
                <option>Marié(e)</option>
                <option>En couple</option>
              </select>
          </div>
          <div class="form-floating">
            <input type="text" name="sante" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Santé</label>
          </div>
          <div class="form-floating">
            <input type="text" name="quartier" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Quartier</label>
          </div>
          <div class="form-floating">
            <input type="text" name="ville" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Ville</label>
          </div>
          <div class="form-floating">
            <input type="text" name="pays" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Pays</label>
          </div>
          <div class="form-floating">
            <input type="text" name="telephone" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Téléphone</label>
          </div>
          <div class="form-floating">
            <input type="text" name="reseaux" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Réseau(x) Social(aux)</label>
          </div>
          <div class="form-floating">
            <input type="text" name="email" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Adresse mail</label>
          </div>
          <div class="form-floating">
            <input type="text" name="social" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Réseau(x) Social(aux)</label>
          </div>
          <div class="form-floating">
            <input type="text" name="map" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Coordonnées géographiques</label>
          </div>
          <div class="form-floating">
            <input type="text" name="entreprise" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Nom entreprise</label>
          </div>
          <div class="form-floating">
            <input type="text" name="start_date" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Date début</label>
          </div>
          <div class="form-floating">
            <input type="text" name="end_date" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Date fin</label>
          </div>
          <div class="form-floating">
            <input type="text" name="role" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Rôle</label>
          </div>
          <div class="form-floating">
            <input type="text" name="poste" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Poste</label>
          </div>
          <div class="form-floating">
            <input type="text" name="website" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Site web</label>
          </div>
          <div class="form-floating">
            <input type="text" name="institut" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Etablissement</label>
          </div>
          <div class="form-floating">
            <input type="text" name="date_ob" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Date d'obtention</label>
          </div>
          <div class="form-floating">
            <input type="text" name="diplome" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Nom diplôme</label>
          </div>
          <div class="form-floating">
            <input type="text" name="serie" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Filière/Serie</label>
          </div>

      <button name="submit" class="w-100 btn btn-lg btn-primary btn-margin"  type="submit">Enregistrer</button>
        </form>
  		</div>
  <?php require_once('includes/footer.html'); ?>
