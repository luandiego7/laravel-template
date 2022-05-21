<?php

namespace App\Notifications\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordReset extends Notification
{
    use Queueable;

    private $token;
    private $name;

    /**
     * Construtor PasswordReset.
     *
     * @param $token
     * @param $name
     */
    public function __construct($token, $name)
    {
        $this->token = $token;
        $this->name  = $name;
    }

    /**
     * Receba os canais de entrega da notificação.
     *
     * @return array
     */
    public function via()
    {
        return ['mail'];
    }

    /**
     * Obtenha a representação de correio da notificação.
     *
     * @return MailMessage
     */
    public function toMail()
    {
        $mailMessage = new MailMessage();

        $mailMessage->subject('Notificação de recuperação de senha');
        $mailMessage->greeting('Olá ' . $this->name . ',');
        $mailMessage->line('Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha para sua conta.');
        $mailMessage->action('Recuperar senha', 'http://127.0.0.1:3000/#/reset/confirm-password/'.$this->token);
        $mailMessage->line('<span class="notice">Se você não solicitou uma redefinição de senha, nenhuma outra ação será necessária.</span>');

        return $mailMessage;
    }
}
