<?php

declare(strict_types=1);

namespace Modules\Common\Services;

use Illuminate\Support\Facades\Mail;
use Modules\Common\Http\Dto\ContactFormDto;

class ContactService
{
    public function sendContactForm(ContactFormDto $contactFormDto): void
    {
        Mail::send('mail.mail', array(
            'name' => $contactFormDto->getName(),
            'email' => $contactFormDto->getEmail(),
            'messages' => $contactFormDto->getMessage(),
        ), function($message) use ($contactFormDto){
            $message->from($contactFormDto->getEmail());
            $message->to(config('admin.default_admin_mail'))->subject('Message from client');
        });
    }
}