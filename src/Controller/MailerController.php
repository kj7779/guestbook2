<?php
// src/Controller/MailerController.php
namespace App\Controller;

use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Comment;
use App\Entity\Conference;
use App\Form\CommentType;
use App\Repository\ConferenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Request;

class MailerController extends AbstractController
{
#[Route('/email')]
public function sendEmail(MailerInterface $mailer): Response
{
$email = (new Email())
->from('kojistill1212@outlook.jp')
->to('kojistill1017@gmail.com')
//->cc('cc@example.com')
//->bcc('bcc@example.com')
//->replyTo('fabien@example.com')
//->priority(Email::PRIORITY_HIGH)
->subject('Time for Symfony Mailer!')
->text('Sending emails is fun again!')
->html('<p>See Twig integration for better HTML integration!</p>');

$mailer->send($email);

    return $this->render('conference/index.html.twig', [

    ]);

}
}