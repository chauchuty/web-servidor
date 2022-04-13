<?php
$notifyList = [
    "success" => [
        "1" => "logado com sucesso!",
        "2" => "deslogado com sucesso!",
        "3" => "cadastrado com sucesso!",
        "4" => "atualizado com sucesso!",
        "5" => "deletado com sucesso!",
    ],
    "error" => [
        "1" => "não foi possível logar",
        "2" => "não foi possível deslogar",
        "3" => "não foi possível cadastrar",
        "4" => "não foi possível atualizar",
        "5" => "não foi possível deletar",
    ],
    "warning" => [],
    "info" => []
];


if (isset($_GET['notify']) && isset($_GET['code'])) {
    $notify = $_GET['notify'];
    $message = ucfirst($notifyList[$_GET['notify']][$_GET['code']]);
    echo "<script>
                    
                    toastr.options = {
                        'closeButton': true,
                        'debug': false,
                        'newestOnTop': true,
                        'progressBar': true,
                        'positionClass': 'toast-top-full-width',
                        'preventDuplicates': false,
                        'onclick': null,
                        'showDuration': '300',
                        'hideDuration': '1000',
                        'timeOut': '5000',
                        'extendedTimeOut': '1000',
                        'showEasing': 'swing',
                        'hideEasing': 'linear',
                        'showMethod': 'fadeIn',
                        'hideMethod': 'fadeOut'
                    }
                    toastr.{$notify}('{$message}');
              </script>";
}
