@component('mail::message')
# Thank You for Contacting Us, {{ $data->name }}!

We have received your Quote and our support team will get back to you as soon as possible. Here’s a summary of your submission:

@component('mail::table')
| Field       | Information         |
|-------------|---------------------|
| **Name**    | {{ $data->name }}   |
| **Email**   | {{ $data->email }}  |
| **Phone**   | {{ $data->phone }}  |
| **Service**   | {{ $data->service }}  |
@endcomponent

@component('mail::panel')
## Your Description:

"{{ $data->description }}"
@endcomponent

If you have any urgent queries, feel free to reply to this email, and we will respond promptly.

Thanks,
{{ config('app.name') }} Support Team
@endcomponent
