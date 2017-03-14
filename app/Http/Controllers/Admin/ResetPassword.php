<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordOrig;

class ResetPassword extends ResetPasswordOrig
{
    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->action('Reset Password', route('admin.password.reset', $this->token))
            ->line('If you did not request a password reset, no further action is required.');
    }

}
