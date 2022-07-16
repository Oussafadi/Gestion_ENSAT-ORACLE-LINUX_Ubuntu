<h1 align="center" class="tx">filieres form</h1>

<form method="POST" action="<?php if ($data == NULL) {
                              echo "index.php?ul=admin/fstore";
                            } else {
                              echo "index.php?ul=admin/fupdate/" . $data->id;
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
      <td class="t">responsable</td>
      <td><input type="text" class="b" name="responsable" value="<?php echo $data != NULL ? $data->responsable : " "; ?>"></td>
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