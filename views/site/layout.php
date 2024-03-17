<!-- views/layout.php -->
<!DOCTYPE html>
<html>
<head>
    <title><?= $this->e($title) ?></title>
    <style>
        h1{
            color:red;
        }
    </style>
</head>
<body>
    <header>
        <!-- Header content here -->
    </header>

    <main>
        <?= $this->section('content') ?>
    </main>

    <footer>
        <!-- Footer content here -->
    </footer>
</body>
</html>
