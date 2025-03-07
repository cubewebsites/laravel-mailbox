<?php

namespace BeyondCode\Mailbox\Http\Requests;

use BeyondCode\Mailbox\InboundEmail;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class MailCareRequest extends FormRequest
{
    public function validator()
    {
        return Validator::make($this->all(), [
        ]);
    }

    public function email()
    {
        return InboundEmail::fromMessage(file_get_contents('php://input'));
    }
}
