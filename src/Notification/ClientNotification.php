<?php

namespace App\Notification;

use App\Entity\Client;
use Twig\Environment;

class ClientNotification {

    /**
     * @var \swift_Mailer
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $renderer;

    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }
    
    public function notify(Client $client)
    {
        $message = (new \Swift_Message('contact : ' . $client->getPrenom()))
            ->setFrom($client->getMail())
            ->setTo('clem79300@gmail.com')
            ->setReplyTo($client->getMail())
            ->setBody($this->renderer->render('Pages/reservation/email.html.twig', [
                'client' => $client
            ]), 'text/html');
        $this->mailer->send($message);
    }
}
