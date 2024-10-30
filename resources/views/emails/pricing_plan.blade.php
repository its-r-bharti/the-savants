<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Plan Subscription</title>
</head>
<body>
    <h1>New {{ $plan_type }} Plan Subscription</h1>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>School Name:</strong> {{ $school_name }}</p>
    <p><strong>Phone Number:</strong> {{ $phone_number }}</p>
    <p><strong>Template ID:</strong> {{ $template_id }}</p>
    @if($message)
        <p><strong>Message:</strong> {{ $message }}</p>
    @endif
</body>
</html>
