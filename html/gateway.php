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
    "getUsuario" => function () {
        return getUsuario();
    },
    "cadastrarUsuario" => function () {
        return cadastrarUsuario();
    },
    "atualizarUsuario" => function () {
        return atualizarUsuario();
    },
    "deletarUsuario" => function () {
        return deletarUsuario();
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

function getUsuario()
{
    global $usuarioController;
    $usuario = $usuarioController->getOne($_GET['id']);
    echo $usuario->toJson();
}

function cadastrarUsuario()
{
    isset($_SESSION['is_admin']) ? $is_admin = $_SESSION['is_admin'] : $is_admin = 0;

    global $usuarioController;
    if (isFullName($_POST['nome']) && isEmail($_POST['email']) && isPasswordValid($_POST['senha']) && $_POST['senha'] == $_POST['senha_repetida']) {
        $usuario = new Usuario();
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        $usuario->setSenha(md5($_POST['senha']));
        $is_admin == 1 ? $usuario->setCreditos($_POST['creditos']) : null;
        $usuario = $usuarioController->insert($usuario);
        header('Location: ./pages/usuarios.admin.php');
        exit();
    }
    header('Location: ./pages/cadastrar.php?error=2');
}

function atualizarUsuario()
{
    global $usuarioController;
    if (isFullName($_POST['nome']) && isEmail($_POST['email']) && isset($_POST['is_admin']) && isInteger($_POST['creditos'])) {
        $usuario = new Usuario();
        $usuario->setId($_POST['id']);
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        !isEmpty($_POST['senha']) ? $usuario->setSenha(md5($_POST['senha'])) : null;
        $usuario->setCreditos($_POST['creditos']);
        $usuario->setIsAdmin($_POST['is_admin']);
        $usuario = $usuarioController->update($usuario);
        // header('Location: ./pages/usuarios.admin.php');
        exit();
    }
    // header('Location: ./pages/cadastrar.php?error=2');
}

function deletarUsuario()
{
    global $usuarioController;
    $team = $usuarioController->delete($_GET['id']);
    header('Location: ./pages/usuarios.admin.php');
    exit();
}


function getTeam()
{
    global $teamController;
    $team = $teamController->getOne($_GET['id']);
    echo $team->toJson();
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

function atualizarTeam()
{
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

function deletarTeam()
{
    global $teamController;
    $team = $teamController->delete($_GET['id']);
    header('Location: ./pages/teams.admin.php');
    exit();
}
