<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     * @Cache(maxage="0", public=true, smaxage="3600")
     */
    public function index(): Response
    {
        $data = [
            'message' => 'If you can read this, then it works!',
        ];

        return $this->json($data);
    }
}
