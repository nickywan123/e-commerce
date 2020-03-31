@component('mail::message')

Thank you for registering!

Your account ID is: {{$user->userInfo->account_id}} 

Please click on the below link to verify your account.

@component('mail::button', ['url' => $url])
Verify Email
@endcomponent


Regards,<br>
{{ config('app.name') }}

@endcomponent