{{ $admin ? 'Dear Admin' : 'Dear' . $contact->name }},<br>
@if ($admin)
    <br>
    You have received a new message from the contact form on your website. Here are the details:
    <br>
    <br>
    Name: {{ $contact->name }}<br>
    Email: {{ $contact->email }}<br>
    @unless ($contact->subject == null)
        Subject: {{ $contact->subject }}<br>
    @endunless
    @unless ($contact->phone == null)
        Phone: {{ $contact->phone }}<br>
    @endunless
    @unless ($contact->service_id == null)
        Service: {{ $contact->service->name }}<br>
    @endunless
    Message: {{ $contact->message }}<br>
    <br>
    You can respond to this message by replying to this email.
    <br>
@endif
@if (!$admin)
    <br>
    Thank you for reaching out to us through our website. We have received your message and will get back to you as soon
    as
    possible.
    <br>
    <br>

    Our team is reviewing your inquiry, and we’ll provide a response shortly. If your request is urgent, feel free to
    contact us directly at {{ config('mail.contact') }}.
    <br>
    <br>

    We appreciate your interest and look forward to assisting you!
    <br>
    <br>
@endif


Best regards,<br>
{{ config('app.name') }} <br>
{{ config('app.url') }}
