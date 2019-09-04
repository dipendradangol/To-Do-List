<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


    class AdminController extends AbstractController {


         /**
         *  @Route("/", name="home")
         */
        public function index(){
            $data = [];
            $data['taskList'] = ['Make a dough', 'Spread toppings', 'Bake it up'];
            return $this->render("/todo/list.html.twig", $data);
        }

         /**
         *  @Route("/clients", name="client_page")
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