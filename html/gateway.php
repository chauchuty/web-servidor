<?php
session_start();

require_once './utilities/validate.utility.php';
require_once './controller/usuario.controller.php';
require_once './controller/team.controller.php';

// Controllers
$usuarioController = new UsuarioController();
$teamController = new TeamController();

// Module
$gateway = [
    "login" => function () {
        return login();
    },
    "cadastrarUsuario" => function () {
        return cadastrarUsuario();
    },
    "getTeam" => function () {
        return getTeam();
    },
    "cadastrarTeam" => function () {
        return cadastrarTeam();
    },
    "atualizarTeam" => function () {
        return atualizarTeam();
    },
    "deletarTeam" => function () {
        return deletarTeam();
    },
];

$operation = isset($_POST['operation']) ? $_POST['operation'] : $_GET['operation'];

try {
    $gateway[$operation]();
} catch (\Throwable $th) {
    echo "ERROR: " . $th->getMessage();
    die();
}


// Functions

function login()
{
    global $usuarioController;
    $usuario = $usuarioController->findOne($_POST['email'], md5($_POST['senha']));

    if (!$usuario) {
        header('Location: ./pages/login.php?error=1');
        die();
    }

    $_SESSION['id'] = $usuario->getId();
    $_SESSION['nome'] = $usuario->getNome();
    $_SESSION['email'] = $usuario->getEmail();
    $_SESSION['is_admin'] = $usuario->getIsAdmin();
    header('Location: ./pages/dashboard.php');
    exit();
}

function cadastrarUsuario()
{
    global $usuarioController;
    if (isEmail($_POST['email']) && isFullName($_POST['nome']) && isPasswordValid($_POST['senha']) && $_POST['senha'] == $_POST['senha_repetida']) {
        $usuario = new Usuario();
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        $usuario->setSenha(md5($_POST['senha']));
        $usuario = $usuarioController->insert($usuario);
        header('Location: ./pages/login.php');
        exit();
    }
    header('Location: ./pages/cadastrar.php?error=2');
}

function getTeam()
{
    global $teamController;
    $team = $teamController->getOne($_GET['id']);
    print_r($team);
}

function cadastrarTeam()
{
    global $teamController;
    if ($_POST['nome'] && isSigla($_POST['sigla']) && isLink($_POST['escudo'])) {
        $team = new Team();
        $team->setNome($_POST['nome']);
        $team->setSigla($_POST['sigla']);
        $team->setEscudo($_POST['escudo']);
        $team = $teamController->insert($team);
        header('Location: ./pages/teams.admin.php');
        exit();
    }
}

function atualizarTeam(){
    global $teamController;
    if ($_POST['nome'] && isSigla($_POST['sigla']) && isLink($_POST['escudo'])) {
        $team = new Team();
        $team->setId($_POST['id']);
        $team->setNome($_POST['nome']);
        $team->setSigla($_POST['sigla']);
        $team->setEscudo($_POST['escudo']);
        $team = $teamController->update($team);
        header('Location: ./pages/teams.admin.php');
        exit();
    }
}

function deletarTeam(){
    global $teamController;
    $team = $teamController->delete($_GET['id']);
    header('Location: ./pages/teams.admin.php');
    exit();
}