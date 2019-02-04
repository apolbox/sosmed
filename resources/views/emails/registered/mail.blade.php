@component('mail::message')
# Email pendaftaran

Terima kasih telah mendaftar, silahkan klik link dibawah ini untuk melanjutkan.

@component('mail::button', ['url' => $link])
Konfirmasi email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
