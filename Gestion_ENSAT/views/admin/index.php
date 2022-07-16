<a href="index.php" class="
btn btn-danger"> deconnexion</a>
<pre>
<h1 align='center'>
 Bienvenue dans l'espace admin</h1></pre>
<div class="login">
  <form class="forme" action="" method="POST">
    <h4>Choisir une table: <h4> <select name='tab_nom' class="a1">
          <option value="eleve" align="center"> eleve</option>
          <option value="el_m" align="center"> element de module</option>
          <option value="filiere" align="center"> filiere</option>
          <option value="module" align="center"> module</option>
          <option value="moyennes" align="center"> moyennes</option>
          <option value="notes" align="center"> notes</option>
          <option value="responsable" align="center"> responsable</option>
          <option value="utilisateur" align="center"> utilisateur</option>
        </select>
        <br> <input class='btn btn-success' type="submit" name="log" placeholder=" valide">


        <?php
        if (isset($_POST['log'])) {
          if ($_POST['tab_nom'] == 'eleve') {
            header('location: index.php?ul=admin/eleve');
            //header('location:eleves');
          } elseif ($_POST['tab_nom'] == 'el_m') {
            header('location: index.php?ul=admin/e_m');
            //header('location:e_ms');
          } elseif ($_POST['tab_nom'] == 'filiere') {
            // header('location:filieres');
            header('location: index.php?ul=admin/filieres');
          } elseif ($_POST['tab_nom'] == 'module') {
            //header('location:modules');
            header('location: index.php?ul=admin/modules');
          } elseif ($_POST['tab_nom'] == 'moyennes') {
            //header('location:moyenness');
            header('location: index.php?ul=admin/moyennes');
          } elseif ($_POST['tab_nom'] == 'notes') {
            //header('location:notess');
            header('location: index.php?ul=admin/notes');
          } elseif ($_POST['tab_nom'] == 'responsable') {
            //header('location:responsables');
            header('location: index.php?ul=admin/responsables');
          } elseif ($_POST['tab_nom'] == 'utilisateur') {
            //header('location:utilisateurs');
            header('location: index.php?ul=admin/utilisateurs');
          }
        }
        ?>




  </form>
</div>