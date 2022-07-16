<a href="index.php?ul=admin" class="btn btn-danger">
  Return< </a> <br>
    <h1 align="center" class="t">modules</h1> <br>
    <table class="table ">


      <thead class="table-dark">
        <tr>

          <td scope="col" scope="col">id</td>

          <td scope="col">code</td>
          <td scope="col">designiation</td>
          <td scope="col">niveau</td>
          <td scope="col">semestre</td>
          <td scope="col">code_fill</td>
          <td colspan="3"><a href="index.php?ul=admin/mcreate" class="btn btn-success ">ajouter </a></td>
        </tr>
      </thead>
      <?php

      foreach ($data as $t) {

      ?>
        <tr>
          <td class="table-primary"> <?php echo $t->id; ?> </td>

          <td><?php echo $t->code; ?></td>
          <td><?php echo $t->designiation; ?></td>
          <td><?php echo $t->niveau; ?></td>
          <td><?php echo $t->semestre; ?></td>
          <td><?php echo $t->code_fill; ?></td>
          <td><a href="index.php?ul=admin/mdestroy/<?php echo $t->id ?>" class="btn btn-danger btn-sm">supprimer </a></td>
          <td><a href="index.php?ul=admin/medit/<?php echo $t->id ?>" class="btn btn-warning btn-sm">modifier</a></td>


        </tr>
      <?php
      }

      ?>
    </table>