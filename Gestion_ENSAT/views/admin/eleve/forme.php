<h1 align="center" class="tx">eleves form</h1>

<form method="POST" action="<?php if ($data == NULL) {
                                echo "index.php?ul=admin/elvstore";
                            } else {
                                echo "index.php?ul=admin/elvupdate/" . $data->id;
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
            <td class="t">code</td>
            <td><input type="text" class="b" name="code" value="<?php echo $data != NULL ? $data->code : " "; ?>"></td>
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
            <td class="t">niveau</td>
            <td><input type="text" class="b" name="niveau" value="<?php echo $data != NULL ? $data->niveau : " "; ?>"></td>
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