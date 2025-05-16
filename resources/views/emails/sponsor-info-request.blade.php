@component('mail::message')
# Request for sponsorship information
Company Name: {{$sponsor->company_name}}

Contact Name:

Contact Phone:

Contact Email:

I'm interested in:




Thanks,<br>
{{ config('app.name') }}
@endcomponent
