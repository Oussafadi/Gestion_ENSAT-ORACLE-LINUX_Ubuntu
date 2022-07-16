<a href="index.php?ul=admin" class="btn btn-danger">
  Return< </a> <br>
    <h1 align="center" class="t">utilisateurs</h1> <br>
    <table class="table ">
      <thead class="table-dark">
        <tr>

          <td scope="col" scope="col">id</td>

          <td scope="col">login</td>
          <td scope="col">email</td>
          <td scope="col">pasword</td>
          <td scope="col">type</td>
          <td colspan="2"><a href="index.php?ul=admin/ucreate" class="btn btn-success">ajouter </a></td>
        </tr>
      </thead>
      <?php

      foreach ($data as $t) {

      ?>
        <tr>
          <td class="table-primary"> <?php echo $t->id; ?> </td>
          <td><?php echo $t->login; ?></td>
          <td><?php echo $t->email; ?></td>
          <td><?php echo $t->pasword; ?></td>
          <td><?php echo $t->typ; ?></td>
          <td><a href="index.php?ul=admin/udestroy/<?php echo $t->id ?>" class="btn btn-danger btn-sm">supprimer </a></td>
          <td><a href="index.php?ul=admin/uedit/<?php echo $t->id ?>" class="btn btn-warning btn-sm">modifier</a></td>


        </tr>
      <?php
      }

      ?>
    </table>
    </body>

    </html>