<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class ClientController {

        /**
         *  @Route("/clients", name="clients_page")
         */

        public function index(){
            return new Response("
            <html>
                <body>
                    <div>Hello frome client controller</div>
                </body>
            </html>");
        }
    }