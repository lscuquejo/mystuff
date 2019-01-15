<?php
/**
 * Created by PhpStorm.
 * User: lscuquejo
 * Date: 15/01/19
 * Time: 12:23
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {

        return new Response('OMG !!! My first page is on!!!');

    }

    /**
     * @Route("/news/{slug}")
     */

    public function show($slug)
    {

        return new Response(sprintf(
            'Future page to show the article: %s',
            $slug
        ));

    }

}