<h1 align="center" class="tx">eleves form</h1>

<form method="POST" action="<?php if ($data == NULL) {
                              echo "index.php?ul=admin/rstore";
                            } else {
                              echo "index.php?ul=admin/rupdate/" . $data->id;
                            }   ?>">

  <table class="table table-striped">
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">nom</td>
      <td><input type="text" class="b" name="nom" value="<?php echo $data != NULL ? $data->nom : " "; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">prenom</td>
      <td><input type="text" class="b" name="prenom" value="<?php echo $data != NULL ? $data->prenom : " "; ?>"></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">login</td>
      <td><input type="text" class="b" name="login" value="<?php echo $data != NULL ? $data->login : " "; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">departement</td>
      <td><input type="text" class="b" name="departement" value="<?php echo $data != NULL ? $data->departement : " "; ?>"></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

      <td><input class="bx" type="submit" name="env" value=" envoyer"></td>

    </tr>
  </table>

</form>