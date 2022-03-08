
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation de cv</title>

    <link rel="stylesheet" href="./models/styles/css-5.1.3/bootstrap.css">
    <link rel="stylesheet" href="./models/styles/style.css">
    <script type="text/javascript" src="./js/testMail.js"></script>
    <script type="text/javascript" src="./js/testNum.js"></script>
    <link href="./css/sweetalert2.css" rel="stylesheet" />
</head>
<body>

    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <header class="container-fluid">
            <div class="container">
                <nav class="title">
                    <span>Formulaire de candidature</span>
                </nav>
    
                <section class="content-text">
                    Vous êtes à la recherche d'un stage ? Vous souhaitez proposer votre candidature spontanée ? Ou bien postuler à une offre d'emploi ?
                    <br><strong>NGSER</strong> propose régulièrement des postes à pourvoir au sein de ses services (assistant(e), technicien (ne), etc.).
    
                    <p>Nous vous remercions de bien vouloir postuler via le formulaire de candidature ci-dessous!</p>
                </section> 
    
                <div class="row mt-5">
                    <div class="col-md-6 p-2 rba_content">
                        <nav class="titl border border-dark p-3">
                            <span class="span_left">Identité</span>
    
                            <div class="row mt-3 pb-3">
                                <div class="col-4" style="text-align: right;">
                                    <label for="bio">Nom<span class='text'></span>:</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="nom"  class="form-control" required="true" placeholder="Votre nom">
                                </div>
    
                                <div class="col-4 mt-4" style="text-align: right;">
                                    <label for="bio">Prénoms<span class='text'></span>:</label>
                                </div>
                                <div class="col-8 mt-4">
                                    <input type="text" name="prenoms" class="form-control" required="true" placeholder="Votre prénoms">
                                </div>

                                <div class="col-4 mt-4" style="text-align: right;">
                                    <label for="bio">Genre<span class='text'></span>:</label>
                                </div>
                                <div class="col-8 mt-4">
                                    <select name="sexe" class="form-control" required="true">
                                        <option value="" disabled selected>S&eacute;lectionner</option>
                                        <option value="F">Feminin</option>
                                        <option value="M">Masculin</option>
                                    </select>
                                </div>
    
                                <div class="col-4 mt-4" style="text-align: right;">
                                    <label for="bio">E-mail<span class='text'></span>:</label>
                                </div>
                                <div class="col-8 mt-4">
                                    <input type="text" name="email" class="form-control" onkeypress="return testMail(event, this, 2);" required="true" placeholder="info@gmail.com">
                                </div>
    
                                <div class="col-4 mt-4" style="text-align: right;">
                                    <label for="bio">Numéro de téléphone<span class='text'></span>:</label>
                                </div>
                                <div class="col-8 mt-4">
                                    <input type="text" name="telephone" class="form-control" maxlength="10"  onkeypress="return testNum(event, this, 2);" required="true" placeholder="0100000000">
                                </div>
                            </div>
                        </nav>
                    </div>
    
                    <div class="col-md-6 p-2 mt-2 mt-md-0 rba_content">
                        <nav class="titl border border-dark p-3">
                            <span class="span_right">Candidature</span>
    
                            <div class="row mt-2 pb-1">
                                <div class="col-4 mt-4" style="text-align: right;">
                                    <label for="bio">Poste convoité<span class='text'></span>:</label>
                                </div>
                                <div class="col-8 mt-4">
                                    <select name="pos_conv" class="form-control" required="true">
                                        <option value="" disabled selected>S&eacute;lectionner votre demande</option>
                                        <option value="Analyste programmeur">Analyste programmeur</option>
                                        <option value="Business Developer">Business Developer</option>
                                        <option value="Chef produit">Chef produit</option>
                                        <option value="Chef projet">Chef projet</option>
                                        <option value="Comptable">Comptable</option>
                                        <option value="Controleur de gestion">Controleur de gestion</option>
                                        <option value="Ingenieur support et maintenance">Ingenieur support et maintenance</option>
                                        <option value="Ingenieur SI">Ingenieur SI</option>
                                         <option value="Kitting and Tool">Kitting and Tool</option>
                                         <option value="Manager RH">Manager RH</option>

                                         <option value="Responsable Moyen Généraux">Responsable Moyen Généraux</option>
                                          <option value="Senior Manager Achats">Senior Manager Achats</option>
                                         <option value="Senior Manager Admin">Senior Manager Admin</option>
                                        <option value="Senior Manager DTI">Senior Manager DTI</option>
                                        <option value="Senior Manager Finance">Senior Manager Finance</option>
                                        <option value="Senior Manager Projet">Senior Manager Projet</option>
                                        <option value="Technicien de surface">Technicien de surface</option>
                                        <option value="Team lead recherche et developpement">Team lead recherche et developpement</option>
                                        <option value="Team lead support et maintenance">Team lead support et maintenance</option>
                                        <option value="Team lead SI">Team lead SI</option>
                                        <option value="Tresorier">Tresorier</option>
                                        <option value="UX Designer">UX Designer</option>
                                        <option value="Web Designer">Web Designer</option>
                                        
                                    </select>
                                </div>
    
                                <div class="col-4 mt-4" style="text-align: right;">
                                    <label for="bio">Domaine de Compétence<span class='text'></span>:</label>
                                </div>
                                <div class="col-8 mt-4">
                                    <input type="text" name="dom_comp" class="form-control" required="true" placeholder="Domaine de compétence">
                                </div>
    
                                <div class="col-4 mt-4" style="text-align: right;">
                                    <label for="bio">Disponibilité<span class='text'></span>:</label>
                                </div>
                                <div class="col-8 mt-4">
                                    <select class="form-control" name="disponibilite" required="true">
                                        <option value="" disabled selected>S&eacute;lectionner la période de votre disponibilité</option>
                                        <option value="Immediate">Immediate</option>
                                        <option value="Dans 15 jours">15 Jours</option>
                                        <option value="Dans 01 mois">Dans 01 Mois</option>
                                        <option value="Dans 02 mois">Dans 02 Mois</option>
                                        <option value="Dans 03 mois">Dans 03 Mois</option>
                                        <option value="Dans 04 mois">Dans 04 Mois</option>
                                        <option value="Dans 05 mois">Dans 05 Mois</option>
                                        <option value="Dans 06 mois">Dans 06 Mois</option>
                                        <option value="Dans 06 mois">Dans 07 Mois</option>
                                        <option value="Dans 08 mois">Dans 08 Mois</option>
                                        <option value="Dans 09 mois">Dans 09 Mois</option>
                                        <option value="Dans 10 mois">Dans 10 Mois</option>
                                        <option value="Dans 11 mois">Dans 11 Mois</option>
                                        <option value="Dans 01 an">Dans 01 an</option>
                                    </select>
                                </div>
    
                                <div class="col-4 mt-4" style="text-align: right;">
                                    <label for="bio">Curriculim vitae (CV)<span class='text'></span>:</label>
                                </div>
                                <div class="col-8 mt-4">
                                    <input type="file" name="vitae" class="form-control" required="true">
                                </div>
    
                                <div class="col-4 mt-4" style="text-align: right;">
                                    <label for="bio">Lettre de motivation <span class='text'></span>:</label>
                                </div>
                                <div class="col-8 mt-4">
                                    <input type="file" name="let_motiv" class="form-control" required="true">
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="container id_btn">
                    <div class="mb-3">
                        <button type="reset" class="btn p-1 btn_left">Annuler</button>
                        <button type="submit" class="btn p-1 btn_right">Valider</button>
                    </div>
                </div>
            </div>
        </header>
    </form>

    <script src="./models/scripts/jquery-3.6.0.js"></script>
    <script src="./models/scripts/js/bootstrap.js"></script>
    <script src="./js/sweetalert2.all.js"></script>

     @include('sweet::alert')
</body>
</html>
