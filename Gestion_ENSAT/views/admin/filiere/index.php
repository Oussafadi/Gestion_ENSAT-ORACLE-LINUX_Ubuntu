<a href="index.php?ul=admin" class="btn btn-danger">
  Return< </a> <br>
    <h1 align="center" class="t">filieres</h1> <br>
    <table class="table">
      <thead class="table-dark">
        <tr>

          <td scope="col" scope="col">id</td>

          <td scope="col">code</td>
          <td scope="col">designiation</td>
          <td scope="col">responsable</td>
          <td colspan="2"><a href="index.php?ul=admin/fcreate" class="btn btn-success">ajouter </a></td>
        </tr>
      </thead>
      <?php

      foreach ($data as $t) {

      ?>
        <tr>
          <td class="table-primary"> <?php echo $t->id; ?> </td>

          <td><?php echo $t->code; ?></td>
          <td><?php echo $t->designiation; ?></td>
          <td><?php echo $t->responsable; ?></td>
          <td><a href="index.php?ul=admin/fdestroy/<?php echo $t->id ?>" class="btn btn-danger btn-sm">supprimer </a></td>
          <td><a href="index.php?ul=admin/fedit/<?php echo $t->id ?>" class="btn btn-warning btn-sm">modifier</a></td>


        </tr>
      <?php
      }

      ?>
    </table>
    </body>

    </html>