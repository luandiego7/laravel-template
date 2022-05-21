<?php

namespace App\Notifications\Auth;

use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;
use Illuminate\Notifications\Messages\MailMessage;

class VerifyEmail extends VerifyEmailBase
{
    private $nome;

    /**
     * Construtor VerifyEmail.
     *
     * @param $nome
     */
    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Obtenha a representação de correio da notificação.
     *
     * @param mixed $notifiable
     * @return MailMessage|mixed
     */
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }

        $mailMessage = new MailMessage();

        $mailMessage->subject('Notificação de confirmação de e-mail');
        $mailMessage->greeting('Olá ' . $this->nome . ',');
        $mailMessage->line('Por favor, clique no botão abaixo e realize login para confirmar o cadastros com seu endereço de e-mail.');
        $mailMessage->action('Confirmar e-mail', $this->verificationUrl($notifiable));
        $mailMessage->line('<span class="notice">Se você não criou ou não solicitou uma conta, nenhuma outra ação será necessária.</span>');

        return $mailMessage;
    }
}
