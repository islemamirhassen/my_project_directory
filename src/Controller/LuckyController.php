<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class LuckyController extends AbstractController
{
    #[Route('/islem/number')]

    public function number(): Response
    {
        $number = random_int(0, 100);


        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    #[Route('/islem/hello')]
    
    public function bonjour(): Response
    {
    


        return new Response(
            '<html><body>hello</body></html>'
        );
    }
}
