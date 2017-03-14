<?php

namespace App\Http\Controllers\User;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordOrig;

class ResetPassword extends ResetPasswordOrig
{
    /**
     * リセットメール用viewの修正
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->action('Reset Password', route('user.password.reset', $this->token))
            ->line('If you did not request a password reset, no further action is required.');
    }

}
