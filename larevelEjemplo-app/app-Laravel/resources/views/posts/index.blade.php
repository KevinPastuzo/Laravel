<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>INICIO</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-sm">
                <div class="card">
                    <div class="card-header" style="background-color: #9BF070;">
                        <h5 class="card-title">{{ $post->nombre }}</h5>
                    </div>
                    <div class="card-title">
                        <p class="card-text">{{ $post->email }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            </div>
                            <div class="col-sm">
                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container-fluid">
            <a href={{ route('posts.index') }}></a>
            <div class="justify-end">
                <div class="col">
                    <a class="btn btn-sm btn-success" href={{ route('posts.create') }}>Añadir usuario</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #5DABD8;
            font-family: 'Calibri', sans-serif;
        }

        .container {
            margin-top: 20px;
        }

        .card {
            margin-bottom: 20px;
        }
        .card-header{ 
            background-color: #9BF070;
        }
        .card-title {
            padding: 15px;
        }

        .btn {
            margin-top: 5px;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        @media (max-width: 576px) {
            .col-sm {
                width: 100%;
                margin-bottom: 20px;
            }
        }

    </style>
</body>
</html>
