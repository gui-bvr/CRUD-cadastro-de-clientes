<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastrar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique&display=swap" rel="stylesheet">
</head>

<style>
    .font-shippori {
        font-family: 'Shippori Antique', sans-serif;
    }
    .font-shippori-bold {
        font-family: 'Shippori Antique', sans-serif;
        font-weight: bold;
    }
</style>

<?php include '../template/header.php' ?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="row pt-4 pb-4">
                <div class="card">
                    <h5 class="pt-3 font-shippori-bold">&ensp;Cadastrar</h5>
                    <form class="p-4" method="POST" action="../exec/cadastrar.php">
                        <div class="mb-3">
                            <i class="fas fa-user-alt"></i>
                            <label class="form-label font-shippori">Nome Completo:</label>
                            <input type="text" class="form-control" name="nome" autofocus required>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-phone"></i>
                            <label class="form-label font-shippori">Telefone:</label>
                            <input type="number" class="form-control" name="telefone" autofocus required>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-calendar-alt"></i>
                            <label class="form-label font-shippori">Idade:</label>
                            <input type="number" class="form-control" name="idade" autofocus required>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-at"></i>
                            <label class="form-label font-shippori">Email:</label>
                            <input type="email" class="form-control" name="email" autofocus required>
                        </div>
                        <div class="botao">
                            <input type="hidden" name="oculto" value="1"> 
                            <input type="submit" class="btn btn-primary" value="Cadastrar"> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/079c8de8d4.js" crossorigin="anonymous"></script>

</html>