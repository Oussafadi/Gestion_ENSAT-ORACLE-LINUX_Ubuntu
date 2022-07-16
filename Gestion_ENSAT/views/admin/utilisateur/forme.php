<h1 align="center" class="tx">utilisateurs form</h1>

<form method="POST" action="<?php if ($data == NULL) {
                              echo "index.php?ul=admin/ustore";
                            } else {
                              echo "index.php?ul=admin/uupdate/" . $data->id;
                            }   ?>">

  <table class="table table-striped">
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
      <td class="t">email</td>
      <td><input type="text" class="b" name="email" value="<?php echo $data != NULL ? $data->email : " "; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">pasword</td>
      <td><input type="text" class="b" name="pasword" value="<?php echo $data != NULL ? $data->pasword : " "; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="t">typ</td>
      <td><input type="text" class="b" name="typ" value="<?php echo $data != NULL ? $data->typ : " "; ?>"></td>
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