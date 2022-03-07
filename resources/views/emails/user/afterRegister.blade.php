@component('mail::message')
# Welcome

Hi {{ $user->name }}
<br>
Welcome To BWA Laracamp, your account has been created succesfully. Now you can choose your best bootcamp ever!.

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
