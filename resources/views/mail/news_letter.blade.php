@component('mail::message')
# Thank You for Subscribing!

Dear **{{ $data->email }}**,

Thank you for subscribing to our newsletter at **Innovation Trove**. We're excited to keep you updated with our latest news, updates, and special offers.

If you have any questions or suggestions, feel free to reach out to us.

@component('mail::panel')
Best Regards,
The Innovation Trove Team
@endcomponent

@endcomponent
