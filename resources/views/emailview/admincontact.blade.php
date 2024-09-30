@component('mail::message')
# Contact Us Form Submission

Hi ITrove Admin,

You have received a new contact us form submission. Here are the details:

@component('mail::table')
| Field       | Information     |
|-------------|-----------------|
| **Name**    | {{ $data->name ?? 'N/A' }} |
| **Email**   | {{ $data->email ?? 'N/A' }} |
| **Phone**   | {{ $data->phone ?? 'N/A' }} |
| **Message** | {{ $data->message ?? 'N/A' }} |
@endcomponent

@component('mail::panel')
## User Message:

"{{ $data['message'] }}"
@endcomponent

@component('mail::button', ['url' => 'mailto:'.$data->email])
Reply to {{ $data->name }}
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
