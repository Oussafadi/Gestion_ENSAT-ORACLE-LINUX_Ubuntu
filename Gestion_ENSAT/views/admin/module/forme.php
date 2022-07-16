<h1 align="center" class="tx">modules form</h1>

<form method="POST" action="<?php if ($data == NULL) {
                              echo "index.php?ul=admin/mstore";
                            } else {
                              echo "index.php?ul=admin/mupdate/" . $data->id;
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
      <td class="t">niveau</td>
      <td><input type="number" class="b" name="niveau" placeholder="<?php echo $data != NULL ? $data->niveau : " "; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">semestre</td>
      <td><input type="number" class="b" name="semestre" placeholder="<?php echo $data != NULL ? $data->semestre : " "; ?>"></td>
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