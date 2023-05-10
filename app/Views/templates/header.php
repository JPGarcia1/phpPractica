<!doctype html>
<html>
<head>
    <title>CodeIgniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        form {
        display: flex;
        flex-direction: column;
        max-width: 400px;
        margin: 0 auto;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0069d9;
        }
        header {
        background-color: #007bff;
        color: #fff;
        padding: 20px;
        }
        nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        }
        nav li {
        margin-right: 20px;
        }
        nav a {
        color: #fff;
        text-decoration: none;
        }
        nav a:hover {
        text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
            <h1><?= esc($title) ?></h1>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>