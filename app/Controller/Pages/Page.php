<?php

namespace App\Controller\Pages;

use App\Utility\View;

class Page {

    /**
     * Métado responsável por redenrizar o topo da página 
     * @return string
     */
    private static function getHeader() {
        return View::render('pages/header');
    }

       /**
     * Métado responsável por redenrizar o topo da página 
     * @return string
     */
    private static function getFooter() {
        return View::render('pages/footer');
    }

    /**
     * Métado responsável por retomar o conteudo (view) da página genérica
     * @return string
     */
    public static function getPage($title, $content) {
        return View::render('pages/page', [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }
}
