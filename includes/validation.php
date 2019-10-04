<?php
header('Content-type: text/html; charset=utf-8');

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'database.php';

// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if (empty($email) || empty($senha)) {
    echo "<script>alert('OPS! INFORME O USUÁRIO E SENHA.');location.href='../';</script>";
    exit;
}

$PDO = Banco::conectar();

$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = sha1(:senha) AND confirmado = 2 AND status = 1 LIMIT 1";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) != 1) {
    echo "<script>alert('OPS! USUÁRIO OU SENHA INVÁLIDOS.');location.href='../LandingPage';</script>";
    exit;
} else {

    $resultado = $users[0];

    if (!isset($_SESSION)) session_start();

    $_SESSION['UsuarioID']            = $resultado['id'];
    $_SESSION['UsuarioNome']          = $resultado['nome'];
    $_SESSION['UsuarioApelido']       = $resultado['apelido'];
    $_SESSION['UsuarioNivel']         = $resultado['nivel'];
    $_SESSION['UsuarioConfirmado']    = $resultado['confirmado'];
    $_SESSION['UsuarioPerfil']        = $resultado['perfil_completo'];

    if($_SESSION['UsuarioNivel'] == '100') {
        header("Location: ../ProfilePage");
        exit;
    }
    if(($_SESSION['UsuarioConfirmado'] == '2') and ($_SESSION['UsuarioPerfil'] == '1'))
        {
            header("Location: ../YourAccount-AccountSettings");
            exit;
    }  
    if(($_SESSION['UsuarioNivel'] == '1') and ($_SESSION['UsuarioConfirmado'] == '2') and ($_SESSION['UsuarioPerfil'] == '2'))
        {
            header("Location: ../ProfilePage");
            exit;
    }
}