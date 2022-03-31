<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3</title>


</head>

<body>
    <table border="3px" bordercolor="darkgray" width="60%" align="center" style="background-color:lightgoldenrodyellow">
        <td>
          <b><center><h1 style="color: darkgray; font-size: 45px;"> Informations du Client</h1></center></b> 

            <form action="traiter.php" method="post" style="color: navy;">
               <!--QUESTION 5-->
                <table width="100%" style=" border-spacing: 5px;">
                <!--1ere ligne du tableau-->
                <tr height="40px">
                   <td align="right" width="40%">
                    <b><label>Nom</label></b>  
                   </td>
                   <td align="center" width="10%">
                       <b><label>:</label></b>
                   </td>
                   <td align="left">
                       <input type="text "name="Nom" id="Nom" placeholder="Saisissez votre nom">
                   </td>
                </tr>

                <!--2eme ligne du tableau-->
                <tr height="45px">
                    <td align="right" width="40%">
                     <b><label>Prénom</label></b>  
                    </td>
                    <td align="center" width="10%">
                        <b><label>:</label></b>
                    </td>
                    <td align="left">
                        <input type="text" name="Prenom" id="Prenom" placeholder="Saisissez votre prénom">
                    </td>
                 </tr>

                  <!--3eme ligne du tableau-->
                <tr height="45px">
                    <td align="right" width="40%">
                     <b><label>N° de téléphone</label></b>  
                    </td>
                    <td align="center" width="10%">
                        <b><label>:</label></b>
                    </td>
                    <td align="left">
                        <input type="tel" name="NumTel" id="NumTel" placeholder="Votre n° de téléphone">
                    </td>
                 </tr>

                  <!--4eme ligne du tableau-->
                <tr height="45px">
                    <td align="right" width="40%">
                     <b><label>Date de départ</label></b>  
                    </td>
                    <td align="center" width="10%">
                        <b><label>:</label></b>
                    </td>
                    <td align="left">
                        <input type="date" name="DateDepart" id="DateDepart">
                    </td>
                 </tr>


                  <!--5eme ligne du tableau-->
                <tr height="45px">
                    <td align="right" width="40%">
                     <b><label>Date de retour</label></b>  
                    </td>
                    <td align="center" width="10%">
                        <b><label>:</label></b>
                    </td>
                    <td align="left">
                        <input type="date" name="DateRetour" id="DateRetour">
                    </td>
                 </tr>

                  <!--6eme ligne du tableau--> <!--CHANGEMENT CODE-->
                <tr height="45px">
                    <td align="right" width="40%">
                     <b><label>Adresse</label></b>  
                    </td>
                    <td align="center" width="10%">
                        <b><label>:</label></b>
                    </td>
                    <td align="left">
                        <textarea name="Adresse" id="Adresse" placeholder="Saisissez votre Adresse"></textarea>
                    </td>
                 </tr>

                  <!--7eme ligne du tableau-->
                <tr height="45px">
                    <td align="right" width="40%">
                     <b><label>Genre</label></b>  
                    </td>
                    <td align="center" width="10%">
                        <b><label>:</label></b>
                    </td>
                    <td align="left">
                        <input type ="radio" name="Genre" id="MasculinID" value="Masculin" checked><label for="Masculin">Masculin</label>
                        <input type ="radio" name="Genre" id="FémininID" value="Féminin"><label for="Féminin">Féminin</label>
                        
                    </td>
                 </tr>
                  <!--8eme ligne du tableau-->
                <tr height="45px">
                    <td align="right" width="40%">
                     <b><label>Statut</label></b>  
                    </td>
                    <td align="center" width="10%">
                        <b><label>:</label></b>
                    </td>
                    <td align="left">
                        <input type ="checkbox" name="Statut" id="EmployéID" value="Employé" checked><label for="Employé">Employé</label>
                        <input type ="checkbox" name="Statut" id="EtudiantID" value="Etudiant" ><label for="Etudiant">Etudiant</label>
                        <input type ="checkbox" name="Statut" id="StagiaireID" value="Stagiaire" ><label for="Stagiaire">Stagiaire</label>
                        <input type ="checkbox" name="Statut" id="RetraitéID" value="Retraité"><label for="Retraité">Retraité</label>
                    </td>
                 </tr>
                 <!--RAISONS DU DEPLACEMNT 9eme ligne du tableau-->
                <tr height="45px">
                    <td align="right" width="40%">
                     <b><label>Raisons du déplacement</label></b>  
                    </td>
                    <td align="center" width="10%">
                        <b><label>:</label></b>
                    </td>
                    <td align="left">
                        <select name="Raisons" id="Raisons" multiple>
                            <option value="empty"></option>
                            <option value="Congés">Congés</option>
                            <option value="Travail">Travail</option>
                            <option value="Etudes">Etudes</option>
                            <option value="Familial">Familial</option>
                            <option value="Touristique">Touristique</option>
                            <option value="Médical">Médical</option>

                        </select>
                    </td>

                 </tr>

                 <tr height="55px"></tr>

                 <tr height="40px">
                    <td align="center">
                        <input type="reset" value="Réinitialiser" style="height: 30px; width: 170px; background-color:darksalmon">
                    </td>
                    <td></td>
                    <td align="center">
                     <input type="submit" value="Envoyer" style="height: 30px; width: 170px; background-color:darksalmon;">
                    </td>
                </tr>
                
                </table>

            </form>
        </td>
    </table>
    
                     
        
         








</body>

</html>