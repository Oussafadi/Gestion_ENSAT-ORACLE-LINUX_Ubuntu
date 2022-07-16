<h1 align="center" class="tx">notes form</h1>

<form method="POST" action="<?php if ($data == NULL) {
                              echo "index.php?ul=admin/nstore";
                            } else {
                              echo "index.php?ul=admin/nupdate/" . $data->id;
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
      <td class="t">note</td>
      <td><input type="number" class="b" name="note" placeholder="<?php echo $data != NULL ? $data->note : " "; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">code_elm_module</td>
      <td><input type="text" class="b" name="code_elm_module" value="<?php echo $data != NULL ? $data->code_elm_module : " "; ?>"></td>
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