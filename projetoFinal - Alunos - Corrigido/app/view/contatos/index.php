<?php /** @var Contato[] $contatos */?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title><?php htmlspecialchars($title ?? 'Contatos');?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
<h1 class="mb-4">Contatos</h1>
<p>
    <a href="/contatos/create" class="btn btn-primary">Novo contato</a>
</p>
<div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php if(count($contatos) > 0){?>
            <?php foreach($contatos as $c){?> 
                <tr> <!-- tirar htmlspecialchars -->
                    <td><?php echo "$c->id"; ?></td>
                    <td><?php echo "$c->nome"?></td>
                    <td><?php echo "$c->email"?></td>
                    <td><?php echo "$c->telefone"?></td>
                    <td>
                        <a href="/contatos/<?php echo "$c->id"; ?>/edit" class="btn btn-sm btn-outline-primary">Editar</a>
                        <form action="/contatos/<?php echo "$c->id"; ?>/delete" method="post" class="d-inline" onsubmit="return confirm('Excluir?');">
                            <button type="submit" class="btn btn-s/m btn-outline-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
                <?php } else{ ?>
                    <tr>
                        <td colspan="5" class="text-center text-muted">Não há contatos cadastrados.</td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
