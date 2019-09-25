<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RoutingController
{
    /**
     * @Route("/routing", name="routing")
     */
    public function routes()
    {
        return new Response(file_get_contents('js/fos_js_routes.json'));
    }
}
