@component('mail::message')

Dear {{ $user->userInfo->full_name }},

Your account ID is: {{$user->userInfo->account_id}}.

Thank you for registering with us!

Verify your account so that you may start enjoying the special privileges given to registered customer.

@component('mail::button', ['url' => $url])
Verify Email
@endcomponent


Regards,<br>
{{ config('app.name') }}

@endcomponent