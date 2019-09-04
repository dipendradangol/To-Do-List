<?php 
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    
    class ClientController extends AbstractController {
        /**
         * @Route("/subclient", name="client_controller")
         */
        public function index() {
            return new Response("
            <html>
                <body>
                    <div>hello from client controller</div>    
                </body>
            </html>");
        }
    }