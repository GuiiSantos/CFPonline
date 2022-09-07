<?php

namespace Source\Controllers;

use Source\Core\Controller;

class Client extends Controller {

    public function __construct() {
        parent::__construct(CONF_URL_VIEWS);
    }

    public function home($data) {
        $this->view->addData(["pageId" => "home"],
            "Client/base"
        );
        echo $this->view->render(
            "Client/home"
        );
    }

    public function sobre($data) {
        $this->view->addData(["pageId" => "sobre"],
            "Client/base"
        );
        echo $this->view->render(
            "Client/sobre"
        );
    }

    public function cursos($data) {
        $this->view->addData(["pageId" => "cursos"],
            "Client/base"
        );
        echo $this->view->render(
            "Client/cursos"
        );
    }

    public function ebooks($data) {
        $this->view->addData(["pageId" => "ebooks"],
            "Client/base"
        );
        echo $this->view->render(
            "Client/ebooks"
        );
    }

    public function depoimentos($data) {
        $this->view->addData(["pageId" => "depoimentos"],
            "Client/base"
        );
        echo $this->view->render(
            "Client/depoimentos"
        );
    }

    public function cadastrar($data) {
        $this->view->addData(["pageId" => "cadastrar"],
            "Client/base"
        );
        echo $this->view->render(
            "Client/cadastrar"
        );
    }

    public function login($data) {
        $this->view->addData(["pageId" => "login"],
            "Client/base"
        );
        echo $this->view->render(
            "Client/login"
        );
    }

    public function error(array $data) {
        $errCode = filter_var($data["errcode"], FILTER_SANITIZE_STRING);
        if(!is_numeric($errCode)) $errCode = "404";


        $this->view->addData(["seo" => "212"], "Client/base");
        echo $this->view->render(
            "Client/error",
            [
                "errCode" => "•" . $errCode . "•",
                "errMessage"
            ]
        );
    }
}