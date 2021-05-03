@component('mail::message')
# Introduction

Your invoice has been paid!

@component('mail::button', ['url' => ''])
View Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
