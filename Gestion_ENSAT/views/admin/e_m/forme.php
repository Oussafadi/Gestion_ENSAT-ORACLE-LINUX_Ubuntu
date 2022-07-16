<h1 align="center" class="tx">e_ms form</h1>

<form method="POST" action="<?php if ($data == NULL) {
                              echo "index.php?ul=admin/emstore";
                            } else {
                              echo "index.php?ul=admin/emupdate/" . $data->id;
                            }   ?>">

  <table class="table table-striped">

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">code</td>
      <td><input type="text" class="b" name="code" value="<?php echo $data != NULL ? $data->code : " "; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">designiation</td>
      <td><input type="text" class="b" name="designiation" value="<?php echo $data != NULL ? $data->designiation : " "; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">vh</td>
      <td><input type="number" class="b" name="vh" placeholder="<?php echo $data != NULL ? $data->vh : " "; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">poids</td>
      <td><input type="number" class="b" name="poids" placeholder="<?php echo $data != NULL ? $data->poids : " "; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">code module</td>
      <td><input type="text" class="b" name="code_module" value="<?php echo $data != NULL ? $data->code_module : " "; ?>"></td>
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