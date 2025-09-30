<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title><?php htmlspecialchars($title ?? 'Novo');?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
                background-color: #f8f9fa;
            }
            h1 {
                color: #0d6efd;
            }
            .btn-primary {
                background-color: #0d6efd;
            }
            .btn-outline-primary {
                border-color: #0d6efd;
                color: #0d6efd;
            }
            .btn-outline-primary:hover {
                background-color: #0d6efd;
                color: white;
            }
    </style>
</head>
<body class="container py-4">
    <h1 class="mb-4">Novo Contato</h1>
    <form method="post" action="/contatos" class="row g-3">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?php htmlspecialchars($old['nome'] ?? '')?>">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php htmlspecialchars($old['email'] ?? '')?>">
        </div>
        <div class="col-md-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" value="<?php htmlspecialchars($old['telefone'] ?? '')?>">
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/contatos" class="btn btn-outline-secondary">Cancelar</a>
        </div>
    </form>
    </body>
</html>
