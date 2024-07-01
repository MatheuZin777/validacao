<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form method="post">
        <input type="text" placeholder="Nome" name="Nome">
        <input type="number" placeholder="Idade" name="Idade">
        <label>Sexo:
            <select>
                <option></option>
                <option>
                    masculino
                </option>
                <option name="feminino">
                    feminino
                </option>
            </select>
        </label>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $Nome = $_POST['Nome'];
        $Idade = $_POST['Idade'];


        if (!empty($Nome) && !empty($Idade)) {

            $valid_feminino = "Sara";
            $valid_idade = "25";
            $valid_sexo = "feminino";// Ajustar para o sexo válido desejado.


            if ($Nome === $valid_feminino && $Idade <= $valid_idade) {
                echo "<script>alert('Bem-Vinda, $Nome!');</script>";
            } else {
                echo "<script>alert('Usuário ou senha incorretos.');</script>";
            }
        } else {
            echo "<script>alert('Por favor, preencha todos os campos.');</script>";
        }
    }
    ?>
</body>

</html>
<!-- 
Entrar com nome, sexo e idade de uma pessoa, se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e
a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA. -->