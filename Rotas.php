<?php

class Rotas {

    private $rotas;

    public function __construct()
    {
        $this->initRoutes();
    }

    public function setRotas(array $rotas)
    {
        $this->rotas = $rotas;
    }

    public function getRotas()
    {
        return $this->rotas;
    }

    public function initRoutes(){

        $ar['home']         =   array('routes' => '/', 'arquivo' => 'principal.php');
        $ar['empresa']      =   array('routes' => '/empresa', 'arquivo' => 'empresa.php');
        $ar['contato']      =   array('routes' => '/contato', 'arquivo' => 'contato.php');
        $ar['produtos']     =   array('routes' => '/produtos', 'arquivo' => 'produtos.php');
        $ar['servicos']     =   array('routes' => '/servicos', 'arquivo' => 'servicos.php');

        $this->setRotas($ar);
    }

    public function getRoute()
    {
        $url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

        return $url['path'];
    }

    public function init($url)
    {
        #Arquivos de controle...
        $arq = false;
        $rotaUrl = "";

        #Percorrendo o array de rotas e validando se existe a rota solicitada
        array_walk($this->getRotas(), function($rota) use($url,&$arq,&$rotaUrl) {

            $uri = str_replace("/","",$url).".php";

            #verificando se existe o arquivo da requisição
            if(!file_exists($uri) and $uri != ".php"){
               $arq = true;
            }

            if($url == $rota['routes']){
               $rotaUrl = $rota['arquivo'];
            }
        });

        if($arq){
            header("HTTP/1.0 404 Not Found");
            require_once 'error404.php';
        } else {
            require_once $rotaUrl;
        }
    }
}