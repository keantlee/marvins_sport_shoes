@component('mail::message')
# Hello Username!

Thank you for registering to Marvin's Sport Shoes!

To verify your account click the button to below.

@component('mail::button', ['url' => '/verification-successful'])
Verify E-mail
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
