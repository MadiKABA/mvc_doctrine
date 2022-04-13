<?php require_once"src/public/header.php";?>
	<h1>add entreprise</h1>
    <div class="container">
    <div class="row">
        <div class="col">
            <form action="http://localhost/nous_les_femme/Entreprise/add" class="row g-3 needs-validation" novalidate method="Post">
                <div class="col-md-4">
                    <label for="nom" class="form-label fs-2">NomEntreprise</label>
                    <input type="text" class="form-control" id="nom"  required name="nom">
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label fs-2">phone</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="phone" aria-describedby="inputGroupPrepend" required name="phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label fs-2">SiegeSocial</label>
                    <input type="text" class="form-control" id="validationCustom03" required name="siegeSocial">

                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label fs-2">Registre</label>
                    <input type="text" class="form-control"  required name="registre">

                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label fs-2">Ninea</label>
                    <input type="text" class="form-control"  required name="ninea">

                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label fs-2">SiteWeb</label>
                    <input type="text" class="form-control"  required name="siteWeb">

                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label fs-2">Coordonne GPS</label>
                    <input type="text" class="form-control"  required name="coordonnee_gps">

                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label fs-2">DateCreation</label>
                    <input type="date" class="form-control"  required name="dateCreation">

                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label fs-2">Quartier</label>
                    <select class="form-select"  required name="quartier_id">
                    <option selected disabled value="">Choix...</option>
                        <?php   
                        foreach($data['quartiers'] as $nbreEmploye)
                        {  ?>
                            <option value="<?php echo $nbreEmploye->getId()?>"><?php echo $nbreEmploye->getNom()?></option>
                       <?php }?> 
                    </select>
                    <div class="invalid-feedback">
                        Selectionner la region please.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label fs-2">Domaine</label>
                    <select class="form-select"  required name="domaine_id">
                    <option selected disabled value="">Choix...</option>
                        <?php   
                        foreach($data['domaineActivites'] as $domaine)
                        {  ?>
                            <option value="<?php echo $domaine->getId()?>"><?php echo $domaine->getLibelle()?></option>
                       <?php }?> 
                        
                    </select>
                    <div class="invalid-feedback">
                        Selectionner la region please.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label fs-2">Nombre employe</label>
                    <select class="form-select"  required name="nbre_employe_id">
                        <option selected disabled value="">Choix...</option>
                        <?php   
                        foreach($data['nbre_enployes'] as $nbreEmploye)
                        {  ?>
                            <option value="<?php echo $nbreEmploye->getId()?>"><?php echo $nbreEmploye->getLibelle()?></option>
                       <?php }?> 
                    </select>
                    <div class="invalid-feedback">
                        Selectionner la region please.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label fs-2">Rgime Juridique</label>
                    <select class="form-select"  required name="regime_id">
                        <option selected disabled value="">Choix...</option>
                        <?php   
                        foreach($data['regimeJuridique'] as $regime)
                        {  ?>
                            <option value="<?php echo $regime->getId()?>"><?php echo $regime->getLibelle()?></option>
                       <?php }?> 
                    </select>
                    <div class="invalid-feedback">
                        Selectionner la region please.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label fs-2">Repondant</label>
                    <select class="form-select"  required name="repondant_id">
                        <option selected disabled value="">Choix...</option>
                        <?php   
                        foreach($data['repondants'] as $repondant)
                        {  ?>
                            <option value="<?php echo $repondant->getId()?>"><?php echo $repondant->getNom(),$repondant->getPrenom()?></option>
                       <?php }?> 
                    </select>
                    <div class="invalid-feedback">
                        Selectionner la region please.
                    </div>
                </div>
                
                
                <div class="col-12">
                    <button class="btn btn-primary fs-2" type="submit">Engregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once"src/public/footer.php"?>