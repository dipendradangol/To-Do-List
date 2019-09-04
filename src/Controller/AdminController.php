<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;


    class AdminController extends Controller {


         /**
         *  @Route("/", name="home")
         */
        public function index(){
            return $this->render("/todo/list.html.twig");
        }

         /**
         *  @Route("/clients", name="clients_page")
         */
        public function clients(){
            return new Response("
            <html>
                <body>
                    <div>Hello there</div>
                </body>
            </html>");
        }
    }