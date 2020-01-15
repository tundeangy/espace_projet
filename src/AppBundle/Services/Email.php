<?php
/**
 * Created by IntelliJ IDEA
 * User: gnacadja
 * Date: 27/08/2018
 * Time: 15:57
 */

namespace AppBundle\Services;

use Swift_Mailer;
use Symfony\Component\Templating\EngineInterface as Templating;
use Symfony\Component\DependencyInjection\Container as Container;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class Email
{

    //On crée deux variables qui vont récupérer les deux services appelé dans la définition du service owo_msp.email
    private $mailer;//Pour récupérer le service mailer
    private $container;
    private $mail_user;

    //Le constructeur initialise au départ les deux services et les stocke dans les deux variables créées ci-dessus
    public function __construct(\Swift_Mailer $mailer, Container $container, $mail_user)
    {
        $this->mailer = $mailer;// Le service Swift_Mailer
        $this->container = $container;
        $this->mail_user = $mail_user;
    }



    public function sendMail($sujet,$receveur)
    {
        $emailExpediteur = "africabourse@africabourse.com";
        $message = (new \Swift_Message($sujet))
//            ->setFrom('langanfinrenaud@ogi-informatique.com')
            ->setFrom(array($emailExpediteur=>'Africabourse APP'))
            ->setTo($receveur)
            ->setBody(
                $this->container->get('templating')->render('mail/errormail.html.twig')
                /*$this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    'mail/errormail.html.twig'

                )*/,
                'text/html'
            );

        $ok  =  $this->mailer->send($message);

        return $ok;

    }
}