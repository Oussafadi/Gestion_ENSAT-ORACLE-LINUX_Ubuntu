<h1 align="center" class="tx">modules form</h1>

<form method="POST" action="<?php if ($data == NULL) {
                              echo "index.php?ul=admin/mystore";
                            } else {
                              echo "index.php?ul=admin/myupdate/" . $data->id;
                            }   ?>">

  <table class="table table-striped">

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">code_eleve</td>
      <td><input type="text" class="b" name="code_eleve" value="<?php echo $data != NULL ? $data->code_eleve : " "; ?>"></td>
    </tr>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">niveau</td>
      <td><input type="number" class="b" name="niveau" placeholder="<?php echo $data != NULL ? $data->niveau : " "; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">moyenne</td>
      <td><input type="number" class="b" name="moyenne" placeholder="<?php echo $data != NULL ? $data->moyenne : " "; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">code_fill</td>
      <td><input type="text" class="b" name="code_fill" value="<?php echo $data != NULL ? $data->code_fill : " "; ?>"></td>
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