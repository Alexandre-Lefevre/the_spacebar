<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 02/04/2019
 * Time: 11:25
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
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
        $comments =[
            'Devastation, voyage, and stigma.', 'Where is the senior sun?', 'Technically raise a crewmate.'
        ];

        return $this->render('article/show.html.twig', [
                'title' =>ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
            ]);
    }
}