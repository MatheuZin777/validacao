<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .bord {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 90vh;
    }

    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 300px;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 5px;
    }

    form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
    }

    form label {
        margin-bottom: 15px;
    }

    h1{
        margin: 10px;
        margin-right: 200px;
    }

    #btn{
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
        transition-duration: 0.4s;
        border-radius: 10px;
    }
</style>

<body>
    <div class="bord">
        <form method="post">
            <h1>Log</h1>
            <input type="text" placeholder="Nome" name="Nome">
            <input type="number" placeholder="Idade" name="Idade">
            <label>Sexo:
                <select name="sexo">
                    <option value="">Selecione</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </label>
            <input id="btn" type="submit" value="Enviar">
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $Nome = $_POST['Nome'];
        $Idade = $_POST['Idade'];
        $sexo = $_POST['sexo'];

        if (!empty($Nome) && !empty($Idade) && !empty($sexo)) {

            if ($sexo == 'feminino' && $Idade < 25) {
                echo "Acesso permitido $Nome";
            } else {
                echo "Acesso não permitido $nome";
            }
        } else {
            echo "Por favor, preencha todos os campos.";
        }
    }
    ?>
</body>

</html>
