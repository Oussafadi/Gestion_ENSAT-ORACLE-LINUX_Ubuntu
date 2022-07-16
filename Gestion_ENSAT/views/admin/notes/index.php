<a href="index.php?ul=admin" class="btn btn-danger">
  Return< </a> <br>
    <h1 align="center" class="t">notes</h1> <br>
    <table class="table ">


      <thead class="table-dark">
        <tr>

          <td scope="col" scope="col">id</td>

          <td scope="col">code_eleve</td>
          <td scope="col">note</td>
          <td scope="col">code_elm_module</td>
          <td colspan="3"><a href="index.php?ul=admin/ncreate" class="btn btn-success">ajouter </a></td>
        </tr>
      </thead>
      <?php

      foreach ($data as $t) {

      ?>
        <tr>
          <td class="table-primary"> <?php echo $t->id; ?> </td>

          <td><?php echo $t->code_eleve; ?></td>
          <td><?php echo $t->note; ?></td>
          <td><?php echo $t->code_elm_module; ?></td>
          <td><a href="index.php?ul=admin/ndestroy/<?php echo $t->id ?>" class="btn btn-danger btn-sm">supprimer </a></td>
          <td><a href="index.php?ul=admin/nedit/<?php echo $t->id ?>" class="btn btn-warning btn-sm">modifier</a></td>


        </tr>
      <?php
      }

      ?>
    </table>
    </body>

    </html>