<!DOCTYPE html>
<html>
<head>
    <title>Modifier une recette</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Modifier une recette</h1>
        <form action="index.php?action=update" method="POST">
            <input type="hidden" name="id" value="<?php echo $recipe['id']; ?>">
            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" class="form-control" name="title" value="<?php echo $recipe['title']; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea class="form-control" name="description" required><?php echo $recipe['descript']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</body>
</html>
