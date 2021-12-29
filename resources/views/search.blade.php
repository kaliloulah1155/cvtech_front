 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de cv</title>

    <link rel="stylesheet" href="../models/styles/css-5.1.3/bootstrap.css">
    <link rel="stylesheet" href="../models/styles/style.css">
    <link rel="stylesheet" href="../models/data_tableau/styles/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link href="./css/sweetalert2.css" rel="stylesheet" />
</head>
<body>

    <section class="container-fluid">
        <div class="responsive-table-line" style="margin:0px auto;">
            <article class="container">

                <h4 class="text-center mt-3">Liste des candidatures</h4>

                <div class="card mb-1" >
                    <div class="card-header p-5">
                        <div class="row">
                            <div class="col-md-2">
                                <label class="mb-2">Nom :</label>
                                <input type="text" class="form-control nom" placeholder="Nom" style="width: 100%;height:35px;padding: 2%;border-radius:3px;background:transparent">
                            </div>
                             <div class="col-md-2">
                                <label class="mb-2">pr&#233;noms :</label>
                                <input type="text" class="form-control prenoms" placeholder="Pr&#233;noms" style="width: 100%;height:35px;padding: 2%;border-radius:3px;background:transparent">
                            </div>

                            <div class="col-md-4">
                                <label class="mb-2">Domaine de compétence :</label>
                                <input type="text" class="form-control dom_comp"  placeholder="Domaine de compétence" style="width: 100%;height:35px;padding: 2%;border-radius:3px;background:transparent">
                            </div>

                            <div class="col-md-3">
                                <label class="mb-2">Poste convoité :</label>
                                <!-- <input type="text" class="form-control" placeholder="Poste convoité" style="width: 100%;height:35px;padding: 2%;border-radius:3px;background:transparent"> -->
                                <select class="form-control poste_conv" style="width: 100%;height:35px;padding: 2%;border-radius:3px;background:transparent">
                                    <option value="" selected>S&eacute;lectionner</option>
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
            
                            <div class="col-md-1">
                                <button class="btn_search" title="Bouton de recherches">
                                    <i class="fa fa-search text-primary"></i>
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <br/>
                <a href="{{route('cvsearch')}}">Rafraichir la liste</a> <br/><br/>
                <table id="min-data" class="test table" width="100%">
                    <thead class="table-sm table-hover text-white" style="background: #4a67b3;">
                        <tr>
                            <th style="min-width: 100px;text-align: left;border-top-left-radius: 4px;">Nom</th>
                            <th style="min-width: 100px;text-align: left;">Pr&#233;noms</th>
                            <th style="min-width: 100px;text-align: left;">Sexe</th>
                            <th style="min-width: 100px;text-align: left;">Email</th>
                            <th style="min-width: 100px;text-align: left;">Contact</th>
                            <th style="min-width: 100px;text-align: left;">Poste convoit&#233;</th>
                            <th style="min-width: 100px;text-align: center;">Curriculim vitae</th>
                            <th style="min-width: 100px;text-align: center;">Lettre de motivation</th>
                            <!-- <th style="min-width: 100px;text-align: center;border-top-right-radius: 4px;">Actions</th> -->
                        </tr>
                    </thead>
                    <tbody  class="list_personnel">
                      <!--  <tr>
                            <th style="min-width: 100px;text-align: left;">Agnymel</th>
                            <th style="min-width: 100px;text-align: left;">Guy Marcel</th>
                            <th style="min-width: 100px;text-align: left;">M</th>
                            <th style="min-width: 100px;text-align: left;">email@gmail.com</th>
                            <th style="min-width: 100px;text-align: left;">0120354365</th>
                            <th style="min-width: 100px;text-align: left;">Ressource Humaine</th>
                            <th style="min-width: 100px;text-align: center;">
                                <a href="#"><i class="fad fa-copy fa-2x text-dark"></i></a>
                            </th>
                            <th style="min-width: 100px;text-align: center;">
                                <a href="#"><i class="fad fa-copy fa-2x text-dark"></i></a>
                            </th>
                        </tr> -->
                      
                    </tbody>
                </table>
            </article>
        </div>
    </section>

    <script src="../models/scripts/jquery-3.6.0.js"></script>
    <script src="../models/scripts/js/bootstrap.js"></script>
    <script src="../models/data_tableau/scripts/jquery.dataTables.min.js"></script>
    <script src="../models/data_tableau/scripts/datatable_language.js"></script>
    <script src="./js/sweetalert2.all.js"></script>

     @include('sweet::alert')

     <script type="text/javascript">


      function calldata(responseNew){
      		var t = $('.table').DataTable();
   			 t.clear();

   			  for (let i = 0; i < responseNew.length; i++) {

                 t.row.add(
                    [
               			responseNew[i]['nom'],
                        responseNew[i]['prenoms'],
                        responseNew[i]['sexe'],
                        responseNew[i]['email'],
                        responseNew[i]['telephone'],
                        responseNew[i]['pos_conv'],
                        "<a href="+responseNew[i]['vitae']+" target='_blank'  ><i class='fad fa-copy fa-2x text-dark'></i></a>",
                        "<a href="+responseNew[i]['let_motiv']+" target='_blank'><i class='fad fa-copy fa-2x text-dark'></i></a>"
                    ]
                ); 
            }
            t.draw(); 
      }

     	//chargement de la liste 
     	function ajaxListecv() {
		    $.ajax({
		        url: "{{route('listsearch')}}",
		        type: "POST",
		        success: function(response) {

		             //console.log(response[0]['data']);

		             var responseNew =response[0]['data'];
		              calldata(responseNew);

		        },
		        error: function(err) {
		            console.log(err);
		        },
		    });
		}
		ajaxListecv();

		//Requete de recherche
		$(document).on('click','.btn_search',function(){

				var searchinput=1;
			$.ajax({
		        url: "{{route('listsearch')}}",
		        type: "POST",
		         data: {
	                nom: $('.nom').val(),
	                prenoms: $('.prenoms').val(),
	                dom_comp: $('.dom_comp').val(),
	                poste_conv: $('.poste_conv').val(),
	                search:searchinput
	            },
		        success: function(response) {
		        	 
		            // console.log(response[0]['data']);
		            var responseNew =response[0]['data'];
		            calldata(responseNew);
		            searchinput=0;
		        },
		        error: function(err) {
		            console.log(err);
		        },
		    });

		});
     	

     </script>
</body>
</html>