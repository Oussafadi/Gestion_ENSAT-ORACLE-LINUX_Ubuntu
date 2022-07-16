<a href="index.php?ul=admin" class="btn btn-danger">
  Return< </a> <br>
    <h1 align="center" class="t">e_ms</h1> <br>
    <table class="table">


      <thead class="table-dark">
        <tr>

          <td scope="col" scope="col">id</td>

          <td scope="col">code</td>
          <td scope="col">designiation</td>
          <td scope="col">VH</td>
          <td scope="col">POIDS</td>
          <td scope="col">code module</td>
          <td colspan="2"><a href="index.php?ul=admin/emcreate" class="btn btn-success">ajouter </a></td>
        </tr>
      </thead>
      <?php

      foreach ($data as $t) {

      ?>
        <tr>
          <td class="table-primary"> <?php echo $t->id; ?> </td>

          <td><?php echo $t->code; ?></td>
          <td><?php echo $t->designiation; ?></td>
          <td><?php echo $t->vh; ?></td>
          <td><?php echo $t->poids; ?></td>
          <td><?php echo $t->code_module; ?></td>
          <td><a href="index.php?ul=admin/emedit/<?php echo $t->id ?>" class="btn btn-danger">supprimer </a></td>
          <td><a href="index.php?ul=admin/emedit/<?php echo $t->id ?>" class="btn btn-primary">modifier</a></td>


        </tr>
      <?php
      }

      ?>
    </table>
    </body>

    </html>