<?php

namespace Theshop\ApiClient\Requests\Customer;

use Theshop\ApiClient\AbstractRequest;

class CompletePasswordResetRequest extends AbstractRequest
{
    protected string $url = 'v1/auth/password-reset';
    protected string $method = 'post';

    public function __construct(
        public readonly string $email,
        public readonly string $token,
        public readonly string $password,
        public readonly string $passwordConfirmation,
    ) {
        $this->options = [
            'form_params' => [
                'email'                 => $this->email,
                'token'                 => $this->token,
                'password'              => $this->password,
                'password_confirmation' => $this->passwordConfirmation,
            ],
        ];
    }
}
