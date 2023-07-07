<?php

namespace App\Http\Controllers;


class AnimesControllers
{

    public function listarAnimes()
    {

        $animes = [
            'One Piece',
            'Naruto',
            'Death Note'
        ];

        $html = '<ul>';
        foreach ($animes as $anime) {
            $html .= "<li>$anime</li>";
        }
        $html .= '</ul>';
        echo $html;
    }
}