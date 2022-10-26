<?php

class PessoaController
{
    public static function index()
    {
        include 'View/modules/Pessoa/ListaPessoa.php';
    }

    public static function form()
    {
        include 'View/modules/Pessoa/FormPessoa.php';
    }
}