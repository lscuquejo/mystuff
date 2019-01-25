<?php
/**
 * Created by PhpStorm.
 * User: leonardoscuquejo
 * Date: 25/01/19
 * Time: 15:22
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GalleryAdminController extends AbstractController
{
    /**
     * @Route("/view-image")
     */
    public function new()
    {

        return new Response('Hello');

    }

}