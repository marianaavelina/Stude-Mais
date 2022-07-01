<?php
//página de cadastro
if(isset($_POST['submit'])){
    //print_r($_POST['nome']);
    //print_r('<br>');
    //print_r($_POST['email']);
    //print_r('<br>');
    //print_r($_POST['telefone']);
    //print_r('<br>');
    //print_r($_POST['genero']);
    //print_r('<br>');
    //print_r($_POST['data_nascimento']);
    //print_r('<br>');
    //print_r($_POST['cidade']);
    //print_r('<br>');
    //print_r($_POST['estado']);
    //print_r('<br>');
    //print_r($_POST['endereco']);

    include_once('config.php');

    //matrícula, nome, data_nasc, sexo, período, interesse, entrada, email, senha;

    $matrícula = $_POST['matrícula'];
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
    $sexo = $_POST['sexo'];
    $período = $_POST['período'];
    $interesse = $_POST['interesse'];
    $entrada = $_POST['entrada'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $result = mysqli_query($conexao, "INSERT INTO cadastro (matrícula, nome, 
    data_nasc, sexo, período, interesse, entrada, email, senha) VALUES ('$matrícula','$nome', 
    '$data_nasc', '$sexo','$período', '$interesse','$entrada','$email', '$senha')");

    header('Location: teladelogin.php');
}

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 40%;
            left: 45%;
            transform: translate(-40%,-40%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 10px;
            border-radius: 15px;
            width: 40%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nasc{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
<a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro do Usuário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="number" name="matrícula" id="matrícula" class="inputUser" required>
                    <label for="matrícula" class="labelInput">Matrícula</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <label for="data_nasc"> Data de Nascimento: </label>
                <br>
                <input type="date" name="data_nasc" id="data_nasc" required>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="sexo" name="sexo" value="F" required>
                <label for="sexo">Feminino</label>
                <br>
                <input type="radio" id="sexo" name="sexo" value="M" required>
                <label for="sexo">Masculino</label>
                <br><br>
                <label for="período">Período e Curso: </label>
                <br>
                <select name="período">
                    <option selected="" value=""> Selecione o Período e o Curso: </option>
                    <option value="1º - TI"> 1º Período - TI </option>
                    <option value="2º - TI"> 2º Período - TI </option>
                    <option value="3º - TI"> 3º Período - TI </option>
                    <option value="4º - TI"> 4º Período - TI </option>
                    <option value="5º - TI"> 5º Período - TI </option>
                    <option value="6º - TI"> 6º Período - TI </option>
                    <option value="7º - TI"> 7º Período - TI </option>
                    <option value="1º - MAM"> 1º Período - MAM </option>
                    <option value="2º - MAM"> 2º Período - MAM </option>
                    <option value="3º - MAM"> 3º Período - MAM </option>
                    <option value="4º - MAM"> 4º Período - MAM </option>
                    <option value="5º - MAM"> 5º Período - MAM </option>
                    <option value="6º - MAM"> 6º Período - MAM </option>
                    <option value="1º - MAB"> 1º Período - MAB </option>
                    <option value="2º - MAB"> 2º Período - MAB </option>
                    <option value="3º - MAB"> 3º Período - MAB </option>
                    <option value="4º - MAB"> 4º Período - MAB </option>
                </select>
                <br><br>
                <label for="entrada"> Ano de entrada no IFRJ: </label>
                <br>
                <input type="date" name="entrada" id="entrada" required>
                <br><br>
                <label for="interesse">Área de Interesse: </label>
                <br>
                <select name="interesse">
                    <option selected="" value=""> Selecione a Aréa de Conhecimento </option>
                    <option value="Vestibular Público"> Vestibular Público </option>
                    <option value="Vestibular Privado"> Vestibular Privado </option>
                    <option value="ENEM"> ENEM </option>
                </select>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>