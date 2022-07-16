<br><a href="index.php" class="btn btn-danger">deconnexion</a>
<a href="index.php?ul=eleves/mail" class="btn btn-warning">Envoyer Email </a> <br>
<h1 align="center">Vos notes:</h1><br>


<table class="table">


  <thead class="table-dark">
    <tr>
      <td scope="col">code_eleve</td>
      <td scope="col">note</td>
      <td scope="col">code_elm_module</td>
    </tr>
  </thead>
  <?php
  $i = 0;
  $moy = 0;
  //include_once 'index.php';
  foreach ($data as $t) {
    if ($t->code_eleve ==  $_SESSION['test']) {
      $i++;
      $moy = $moy + $t->note;

  ?>
      <tr>
        <td><?php echo $t->code_eleve; ?></td>
        <td><?php echo $t->code_elm_module; ?></td>
        <td><?php echo $t->note; ?></td>
      </tr>
  <?php
    }
  }

  ?>
  <tr>
    <td></td>
    <td></td>
    <td> moyene generale:<br> <?php echo $moy / $i; ?></td>

  </tr>
</table>