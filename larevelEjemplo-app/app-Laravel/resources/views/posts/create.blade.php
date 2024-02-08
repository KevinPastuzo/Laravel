<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilosF.css">
    <title>Añadir Cliente</title>
</head>
<body>
  <div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h3>Añadir Cliente</h3>
        <form action="{{ route('posts.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <textarea class="form-control" id="email" name="email" required></textarea>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
      </div>
    </div>
  </div>

  <style>
    body {
      background-color: #5DABD8;
      font-family: 'Calibri', sans-serif;
    }
    
    .container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 20px;
        
    }
    
    .form-group {
        margin-bottom: 15px;
    }
    
    label {
        font-weight: bold;
        color: #495057;
    }
    
    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ced4da;
        box-sizing: border-box;
    }
    
    button {
        background-color: #007bff;
        color: #ffffff;
        padding: 10px 20px;
    }
    
    
    @media (max-width: 576px) {
        .col-10 {
            width: 100%;
            margin: 0 auto;
        }
    }
  </style>
</body>
</html>
