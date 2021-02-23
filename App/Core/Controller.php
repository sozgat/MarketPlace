
<?php
require_once(CORE . "View.php");
class Controller {
    protected $view;

    public function view($view_name, $model = []){
        $this->view = new View($view_name, $model);
        return $this->view->Render();
    }

    public function Redirect($path)
    {
        header("Location: {$path}");
    }
}
?>