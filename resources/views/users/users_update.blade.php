<html>

<head>
    <title>Usuarios | Editar</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar Registros</div>

                <div class="panel-body">
                    <center>
                    <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

                        <table>
                            <tr>
                                <td>Nombre</td>
                                <td>
                                    <input type = 'text' name = 'name'
                                           value = '<?php echo$users[0]->name; ?>'/>
                                </td>
                            </tr>
                            <tr>
                                <td>Apellido Paterno</td>
                                <td>
                                    <input type = 'text' name = 'apellidoP'
                                           value = '<?php echo$users[0]->surname; ?>'/>
                                </td>
                            </tr>
                            <tr>
                                <td>Apellido Materno</td>
                                <td>
                                    <input type = 'text' name = 'apellidoM'
                                           value = '<?php echo$users[0]->second_surname; ?>'/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan = '2'>
                                    <input type = 'submit' value = "Actualizar" />
                                </td>
                            </tr>
                        </table>

                    </form>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>