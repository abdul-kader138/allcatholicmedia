<?php

namespace Botble\Newsletter\Http\Requests;

use Botble\Support\Http\Requests\Request;

class SendTestNewsletterRequest extends Request
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'email:rfc', 'max:120'],
        ];
    }
}
