<?php
/**
 * Created by PhpStorm.
 * User: Jarlaxxe
 * Date: 10/06/2019
 * Time: 16:42
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }
}