<html>
<head>
    <title>View Student Records</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios Registrados</div>

                <div class="panel-body">
                    <center>
                    <table border = "1">
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Apellido Paterno</td>
                            <td>Apellido Materno</td>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->surname }}</td>
                                <td>{{ $user->second_surname }}</td>
                                <td><a href = 'users/{{ $user->id }}'>Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>