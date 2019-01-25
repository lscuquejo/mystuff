<?php
/**
 * Created by PhpStorm.
 * User: leonardoscuquejo
 * Date: 25/01/19
 * Time: 16:11
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GalleryController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homePage()
    {

        return new Response('this will be the index');

    }
    /**
     * @Route("/view/{slug}")
     */
    public function viewPage($slug)
    {

        return $this->render('gallery/show.html.twig', [

            'title' => ucwords(str_replace('-', '', $slug)),

        ]);
    }

}