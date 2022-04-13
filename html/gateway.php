<?php
session_start();

require_once './utilities/functions.utility.php';
require_once './utilities/validate.utility.php';
require_once './controller/usuario.controller.php';
require_once './controller/team.controller.php';
require_once './controller/partida.controller.php';

// Controllers
$usuarioController = new UsuarioController();
$teamController = new TeamController();
$partidaController = new PartidaController();

// Module
$gateway = [
    // "loginPage" => function () {
    //     return loginPage();
    // },
    "login" => function () {
        return login();
    },
    "logout" => function () {
        return logout();
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
    "cadastrarPartida" => function () {
        return cadastrarPartida();
    },
    "deletarPartida" => function () {
        return deletarPartida();
    },
];

$operation = isset($_POST['operation']) ? $_POST['operation'] : $_GET['operation'];

try {
    $gateway[$operation]();
} catch (\Throwable $th) {
    echo "ERROR: " . $th->getMessage();
    die();
}

// Routes
// function loginPage()
// {
//     isProtected();
//     header('Location: ./../pages/usuarios.admin.php');
// }


// Functions

function login()
{
    global $usuarioController;
    $usuario = $usuarioController->findOne($_POST['email'], md5($_POST['senha']));

    if (!$usuario) {
        nextPage('./pages/login.php', 'error', '1');
        die();
    }

    $_SESSION['id'] = $usuario->getId();
    $_SESSION['nome'] = $usuario->getNome();
    $_SESSION['email'] = $usuario->getEmail();
    $_SESSION['is_admin'] = $usuario->getIsAdmin();
    nextPage('./pages/dashboard.php', 'success', '1');
    exit();
}

function logout()
{
    session_destroy();
    nextPage('./pages/login.php', 'success', '2');
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
    // Melhorias: validate(['isFullName', 'isEmail', 'isPassword', 'isConfirmPassword']);
    if (isFullName($_POST['nome']) && isEmail($_POST['email']) && isPasswordValid($_POST['senha']) && $_POST['senha'] == $_POST['senha_repetida']) {
        $usuario = new Usuario();
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        $usuario->setSenha(md5($_POST['senha']));
        $is_admin == 1 ? $usuario->setSaldo($_POST['saldo']) : null;
        $usuario = $usuarioController->insert($usuario);
        $is_admin ? nextPage('./pages/usuarios.admin.php', 'success', '3') : nextPage('./pages/login.php', 'success', '3');
        exit();
    }
    $is_admin ? nextPage('./pages/usuarios.admin.php', 'error', '3') : nextPage('./pages/cadastrar.php', 'error', '3');
}

function atualizarUsuario()
{
    global $usuarioController;
    if (isFullName($_POST['nome']) && isEmail($_POST['email']) && isset($_POST['is_admin']) && isNumber($_POST['saldo'])) {
        $usuario = new Usuario();
        $usuario->setId($_POST['id']);
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        !isEmpty($_POST['senha']) ? $usuario->setSenha(md5($_POST['senha'])) : null;
        $usuario->setSaldo($_POST['saldo']);
        $usuario->setIsAdmin($_POST['is_admin']);
        $usuario = $usuarioController->update($usuario);
        nextPage('./pages/usuarios.admin.php', 'success', '4');
        exit();
    }
    nextPage('./pages/usuarios.admin.php', 'error', '4');
}

function deletarUsuario()
{
    global $usuarioController;
    $delete = $usuarioController->delete($_GET['id']);

    if ($delete) {
        nextPage('./pages/usuarios.admin.php', 'success', '5');
        exit();
    }
    nextPage('./pages/usuarios.admin.php', 'error', '5');
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
        nextPage('./pages/teams.admin.php', 'success', '3');
        exit();
    }
    nextPage('./pages/teams.admin.php', 'error', '3');
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
        nextPage('./pages/teams.admin.php', 'success', '4');
        exit();
    }
    nextPage('./pages/teams.admin.php', 'error', '4');
}

function deletarTeam()
{
    global $teamController;
    $delete = $teamController->delete($_GET['id']);

    if ($delete) {
        nextPage('./pages/teams.admin.php', 'success', '5');
        exit();
    }
    nextPage('./pages/teams.admin.php', 'error', '5');
}

function cadastrarPartida()
{
    global $partidaController;
    if (isDate($_POST['data_inicio']) && isId($_POST['fk_team_a_id']) && isId($_POST['fk_team_b_id']) && isDiffTeams($_POST['fk_team_a_id'], $_POST['fk_team_b_id'])) {
        $partida = new Partida();
        $partida->setDataInicio($_POST['data_inicio']);
        $partida->setFkTeamAId($_POST['fk_team_a_id']);
        $partida->setFkTeamBId($_POST['fk_team_b_id']);
        $partida = $partidaController->insert($partida);
        nextPage('./pages/partidas.admin.php', 'success', '3');
        exit();
    }
    nextPage('./pages/partidas.admin.php', 'error', '3');
}

function atualizarPartida()
{
    global $partidaController;
    if (isDate($_POST['data_inicio']) && isId($_POST['fk_team_a_id']) && isId($_POST['fk_team_b_id']) && isDiffTeams($_POST['fk_team_a_id'], $_POST['fk_team_b_id'])) {
        $partida = new Partida();
        $partida->setId($_POST['id']);
        $partida->setDataInicio($_POST['data_inicio']);
        $partida->setFkTeamAId($_POST['fk_team_a_id']);
        $partida->setFkTeamBId($_POST['fk_team_b_id']);
        $partida = $partidaController->update($partida);
        nextPage('./pages/partidas.admin.php', 'success', '4');
        exit();
    }
    nextPage('./pages/partidas.admin.php', 'error', '4');
}

function deletarPartida()
{
    global $partidaController;
    $delete = $partidaController->delete($_GET['id']);

    if ($delete) {
        nextPage('./pages/partidas.admin.php', 'success', '5');
        exit();
    }
    nextPage('./pages/partidas.admin.php', 'error', '5');
}