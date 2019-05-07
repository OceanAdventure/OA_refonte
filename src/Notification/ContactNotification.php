<?php

namespace App\Notification;

use App\Entity\Contact;
use Twig\Environment;

class ContactNotification {

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
    
    public function notify(Contact $contact)
    {
        $message = (new \Swift_Message('contact : ' . $contact->getSujet()))
            ->setFrom($contact->getMail())
            ->setTo('clem79300@gmail.com')
            ->setReplyTo($contact->getMail())
            ->setBody($this->renderer->render('Pages/contact/email.html.twig', [
                'contact' => $contact
            ]), 'text/html');
        $this->mailer->send($message);
    }
}
