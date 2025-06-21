{{-- <!DOCTYPE html>
<html>
<head>
    <title>Renewal Reminder</title>
</head>
<body>
    <p>Dear {{ $customer->name }},</p>
    <p>{{ $customer->renewal_amount }}</p>
    <p>This is a friendly reminder that your product subscription will expire on <strong>{{ \Carbon\Carbon::parse($customer->expiry_date)->format('F j, Y') }}</strong>.</p>
    <p>Please renew it before the due date to continue enjoying our services.</p>
    <p>Thank you,<br>Team</p>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Renewal Reminder</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    /* Responsive styles */
    @media screen and (max-width: 600px) {
      .container {
         font-family: "Poppins", sans-serif !important;
        width: 100% !important;
        padding: 10px !important;
      }
      h1{
        font-size: 16px !important;
      }
      h2{
        font-size: 14px !important;
      }
      .button {
        background-color: #ff4444 !important;
        width: 50% !important;
        color:white !important;
      }
    }
  </style>
</head>
<body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color: #f4f4f4;">

  <table align="center" width="100%" cellpadding="0" cellspacing="0" bgcolor="#f4f4f4">
    <tr>
      <td align="center">
        <table class="container" width="600" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="margin: 0 auto; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
          <tr>
            <td bgcolor="ff4444" style="padding: 20px; text-align: center;">
              <h1 style="color: #ffffff !important; margin: 0; font-size: 20px;">Vanguard Communications</h1>
            </td>
          </tr>
          <tr>
            <td style="padding: 10px;">
              <h2 style="color: #333;">Hello {{ $customer->name }},</h2>
              <p style="font-size: 14px; color: #555;">
                Just a friendly reminder that your product subscription is set to <strong>expire on {{ \Carbon\Carbon::parse($customer->expiry_date)->format('F j, Y') }}</strong>.
              </p>
              <p style="font-size: 14px; color: #555;">
                Renewal Amount: <strong style="color: #27ae60;">₹ {{ $customer->renewal_amount }}</strong>
              </p>

              <p style="font-size: 14px; color: #555;">
                To continue enjoying uninterrupted service, please renew your subscription before the expiration date.
              </p>

              <p style="text-align: center; margin: 30px 0;">
                <a href="#" class="button" style="background-color: #ff4444; color: white !important; padding: 14px 28px; text-decoration: none; border-radius: 4px; font-weight: bold; display: inline-block;">Renew Now</a>
              </p>

              <p style="font-size: 14px; color: #999;">
                If you have already renewed, please disregard this message.
              </p>
            </td>
          </tr>
          <tr>
            <td bgcolor="#ecf0f1" style="padding: 20px; text-align: center; font-size: 13px; color: #888;">
              © {{ now()->year }} Vanguard Communications. All rights reserved.<br>
              gps@vanguardkerala.com | +91-94472-15807
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

</body>
</html>
