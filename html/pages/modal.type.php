<?php
require_once './../components/header.php';

class Field {
    public string $label;
    public string $name;
    public string $type;

    public function __construct(string $label, string $name, string $type) {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
    }
}

class Button {
    public string $text;
    public string $type;
    public ?string $miss;

    public function __construct($text, $type, $miss=false) {
        $this->text = $text;
        $this->type = $type;
        $this->miss = $miss;
    }
}

class Modal
{
    public $title;
    public $call;
    public $content = [];
    public $buttons = [];
    public $controller;

    public function __construct($title, $call, $content, $buttons, $controller)
    {
        $this->title = $title;
        $this->call = $call;
        $this->content = $content;
        $this->buttons = $buttons;
        $this->controller = $controller;
    }

    private function getButtons()
    {
        $temp = '';
        foreach ($this->buttons as $btn) {
            $temp = $temp . '<button class="btn btn-'.$btn->type.' btn-sm" '. ($btn->miss ? 'data-dismiss="modal"' : '') .'>'.$btn->text.'</button>';
        }
        return $temp;
    }

    private function getContent(){
        $temp = '';
        foreach ($this->content as $field) {
            $temp = $temp . '<div class="form-group row">
                                <label for="'.$field->name.'" class="col-sm-2 col-form-label col-form-label-sm">'.$field->label.'</label>
                                <div class="col-sm-10">
                                    <input type="'. $field->type.'" class="form-control form-control-sm" name="'.$field->name.'" autocomplete="off">
                                </div>
                            </div>';
        }
        return $temp;
    }

    public function generate()
    {

        echo '<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fas fa-flag fa-2x mr-3"></i>
                    <h5 class="modal-title" id="exampleModalLabel">' . $this->title . '</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body m-2">
                    <form action="./../gateway.php" method="post">
                        <input name="operation" value="'.$this->call.'" hidden />
                        '. $this->getContent() .'
                        <div class="modal-footer">' . $this->getButtons() . '</div>
                    </form>
                </div>
            </div>
        </div>
    </div>';
    }

    public function custom($string){
        echo $string;
    }
}

$footer = [
    new Button('Cancelar', 'dark', true),
    new Button('Cadastrar', 'primary'),
    new Button('Outro', 'success'),
];

$content = [
    new Field('Nome', 'nome', 'text'),
    new Field('Idade', 'idade', 'number'),
    new Field('Data Nascimento', 'idade', 'datetime-local'),
];

// $modal = new Modal('Novo Usuário', 'teste', $content, $footer);
$modal->generate();

?>

<!-- <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-flag fa-2x mr-3"></i>
                <h5 class="modal-title" id="exampleModalLabel">Novo Usuário</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body m-2">
                <form action="./../gateway.php" method="post">
                    <input name="operation" value="cadastrarUsuario" hidden />
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="nome" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" name="email" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="senha" class="col-sm-2 col-form-label col-form-label-sm">Senha</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control form-control-sm" name="senha" autocomplete="off">
                        </div>
                        <div class="col-sm-5">
                            <input type="password" class="form-control form-control-sm" name="senha_repetida" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="escudo" class="col-sm-2 col-form-label col-form-label-sm">Saldo</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control form-control-sm" name="saldo" autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary btn-sm">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

<!-- Diretivas -->
<!--  data-toggle="modal" data-target="#timeModal"-->

<?php
require_once './../components/footer.php';
?>

<script>
    $(document).ready(function() {
        $('#showModal').modal('show');
    });
</script>