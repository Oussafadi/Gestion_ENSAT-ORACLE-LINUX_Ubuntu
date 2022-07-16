<a href="index.php" class="btn btn-danger"> deconnexion</a></h1><br>

<form>
  <?php
  include_once 'model\model.php';
  include_once 'model\filieres.php';
  include_once 'model\modules.php';
  include_once 'model\e_ms.php';
  $filiere = filiere::all();
  $module = module::all();
  $e_m = e_m::all();
  foreach ($filiere as $t) {

    if ($t->designiation == $_SESSION['test']) {
      $c = $t->code;
      echo "<h3  align='center'> Bonjour monsieur  : </h2><h4 align='center' >" . $t->designiation . "</h4><br> ";
      echo " <h3  align='center'> Vous etes responsable du  filiere : </h3><h4 align='center'>" . $t->responsable . "</h4><br>";
      $i = $t->id;
    }
  }
  echo "<h3  align='center'> Les element des modules de votre filiere classer par module  : </h3><br>";


  foreach ($module as $v) {

    if ($v->code_fill == $c) {
      echo "<center class='txt'>module: " . $v->code . " </center>";

  ?>
      <table class="table table-striped" class="table table-striped-columns">


        <thead>
          <tr class="table-primary">

            <td scope="col" scope="col">id</td>

            <td scope="col">module</td>
            <td scope="col">designiation</td>
            <td scope="col">niveau</td>
            <td scope="col">semestre</td>
            <td scope="col">code_fill</td>

          </tr>
        </thead>
        <tr>
          <td class="table-primary"> <?php echo $t->id; ?> </td>

          <td><?php echo $v->code; ?></td>
          <td><?php echo $v->designiation; ?></td>
          <td><?php echo $v->niveau; ?></td>
          <td><?php echo $v->semestre; ?></td>
          <td><?php echo $v->code_fill; ?></td>


        </tr>
        <tr>

          <?php
          echo "<center class='txt'> les elements de module " . $v->code . "  :<center>";
          foreach ($e_m as $t) {
            if ($v->code == $t->code_module) {

          ?>
              <table class="table table-striped" class="table table-striped-columns">


                <thead>
                  <tr class="table-primary">

                    <td scope="col" scope="col">id</td>

                    <td scope="col">element de module</td>
                    <td scope="col">designiation</td>
                    <td scope="col">VH</td>
                    <td scope="col">POIDS</td>
                    <td scope="col">code_module</td>

                  </tr>
                </thead>
                <tr>
                  <td class="table-primary"> <?php echo $t->id; ?> </td>

                  <td><?php echo $t->code; ?></td>
                  <td><?php echo $t->designiation; ?></td>
                  <td><?php echo $t->vh; ?></td>
                  <td><?php echo $t->poids; ?></td>
                  <td><?php echo $t->code_module; ?></td>


                </tr>
              <?php
            }

              ?>
              </table>
        </tr>
  <?php

          }
        }
      }

  ?>




</form>

</body>

</html>