<?php

namespace App\Controller\Pages;

use App\Utility\View;
use \App\Model\Entity\Organization;

class Home extends Page {

    /**
     * Métado responsável por retomar o conteudo (view) da home
     * @return string
     */
    public static function getHome() {

        // ORGANIZAÇÃO
        $dbOrganization = new Organization;

        // RETORNA A VIEW DA HOME
        $content = View::render('pages/home', [
            'name' => $dbOrganization->name,
            'description' => $dbOrganization->description,
            'site' => $dbOrganization->site
        ]);
        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('JM Suplementos - Home', $content);
    }
}