<!DOCTYPE html>
<html>
<head>
    <title>Recettes de cuisine</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Liste des recettes</h1>
        <a href="index.php?action=create" class="btn btn-primary">Créer une recette</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recipes as $recipe) : ?>
                    <tr>
                        <td><?php echo $recipe['id']; ?></td>
                        <td><?php echo $recipe['title']; ?></td>
                        <td><?php echo $recipe['descript']; ?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?php echo $recipe['id']; ?>" class="btn btn-info">Modifier</a>
                            <a href="index.php?action=delete&id=<?php echo $recipe['id']; ?>" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
