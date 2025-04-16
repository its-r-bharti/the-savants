<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Internship Confirmation - The Savants</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9fafb; padding: 30px;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.08);">
        <tr style="background-color: #0f172a;">
            <td style="padding: 20px; text-align: center; color: #ffffff;">
                <h1 style="margin: 0; font-size: 24px;">The Savants</h1>
                <p style="margin: 5px 0 0; font-size: 16px;">Internship Registration Confirmation</p>
            </td>
        </tr>
        <tr>
            <td style="padding: 30px;">
                <h2 style="color: #0f172a; font-size: 20px;">Hi {{ $registration->name }},</h2>

                <p style="font-size: 16px; color: #333;">
                    We're happy to confirm your registration for the internship program at <strong>The Savants</strong>. Below are your details:
                </p>

                <ul style="list-style-type: none; padding-left: 0; font-size: 16px; color: #444;">
                    <li><strong>Name:</strong> {{ $registration->name }}</li>
                    <li><strong>Email:</strong> {{ $registration->email }}</li>
                    <li><strong>Phone:</strong> {{ $registration->phone }}</li>
                    <li><strong>Field:</strong> {{ ucfirst($registration->field) }}</li>
                    <li><strong>Duration:</strong>
                        @if($registration->duration == 30) 30 Days
                        @elseif($registration->duration == 45) 45 Days
                        @else 6 Months
                        @endif
                    </li>
                </ul>

                <p style="font-size: 16px; color: #333;">
                    Our team will contact you shortly with further details including your schedule, mentor information, and onboarding steps.
                </p>

                <p style="font-size: 16px; color: #333;">We’re excited to have you onboard and look forward to a great learning experience together!</p>

                <p style="margin-top: 30px; font-size: 16px; color: #0f172a;">
                    Warm regards,<br>
                    <strong>The Savants Team</strong><br>
                    <a href="https://thesavants.in" style="color: #64FFDA; text-decoration: none;">www.thesavants.in</a>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
