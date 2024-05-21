<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Planos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
        }
        .plan {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        .plan h2 {
            margin-top: 0;
        }
        .plan ul {
            list-style-type: none;
            padding: 0;
        }
        .plan li {
            margin-bottom: 10px;
        }
        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Conheça Nossos Planos</h1>

    <div class="plan">
        <h2>Plano Básico</h2>
        <ul>
            <li>5 GB de armazenamento</li>
            <li>Atendimento ao cliente por e-mail</li>
            <li>Suporte técnico básico</li>
        </ul>
        <a href="#" class="button">Selecionar Plano</a>
    </div>

    <div class="plan">
        <h2>Plano Standard</h2>
        <ul>
            <li>10 GB de armazenamento</li>
            <li>Atendimento ao cliente por e-mail e telefone</li>
            <li>Suporte técnico avançado</li>
        </ul>
        <a href="#" class="button">Selecionar Plano</a>
    </div>

    <div class="plan">
        <h2>Plano Premium</h2>
        <ul>
            <li>20 GB de armazenamento</li>
            <li>Atendimento ao cliente 24/7</li>
            <li>Suporte técnico premium</li>
        </ul>
        <a href="#" class="button">Selecionar Plano</a>
    </div>
</div>
</body>
</html>
