<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New hire request from your portfolio</title>
    <style>
        body { font-family: system-ui, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 1rem; }
        .label { font-weight: 600; color: #666; margin-top: 1rem; }
        .value { margin-top: 0.25rem; }
        .message-box { background: #f5f5f5; padding: 1rem; border-radius: 6px; margin-top: 0.5rem; }
        hr { border: none; border-top: 1px solid #ddd; margin: 1.5rem 0; }
    </style>
</head>
<body>
    <h1>New message from your portfolio</h1>
    <p>Someone sent you a message from the Hire Me section.</p>

    <hr>

    <div class="label">Name / Company</div>
    <div class="value">{{ $name }}</div>

    <div class="label">Email</div>
    <div class="value"><a href="mailto:{{ $email }}">{{ $email }}</a></div>

    <div class="label">Message</div>
    <div class="message-box">{{ $message }}</div>

    <hr>
    <p style="font-size: 0.875rem; color: #666;">Sent at {{ $sentAt }} from your portfolio contact form.</p>
</body>
</html>
