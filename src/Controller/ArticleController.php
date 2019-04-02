<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 02/04/2019
 * Time: 11:25
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Ma première page !!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'blabla de la page : %s',
            $slug
        ));
    }
}