<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Your CSS stylesheets or links here -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link href="/web/assets/css/articles.css" rel="stylesheet" type="text/css" media="screen, projection">
	<script src="/web/assets/js/articles.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
        }
        main {
            flex-direction: row;
            /*justify-content: space-between;*/
            padding: 20px;
        }
        aside {
            width: 200px;
            background-color: #f4f4f4;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            margin-bottom: 10px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        nav ul li a:hover {
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <h1>Admin dashboard</h1>
    </header>
    <main class="row">
        <aside class="col-md-2">
            <nav>
                <ul>
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">User</a></li>
                </ul>
            </nav>
        </aside>
        <section class="col-md-10">
            <?= $this->section('content') ?>
        </section>
    </main>
    <!-- Your JavaScript scripts or links here -->
</body>
</html>
