<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Email Template</title>
</head>

<body style="font-family: 'Poppins', Arial, sans-serif">

    <table width="100%" border="0" cellspacing="0" cellpadding="0">

        <tr>
            <td align="center" style="padding: 20px;">
                <table class="content" width="600" border="0" cellspacing="0" cellpadding="0"
                    style="border-collapse: collapse; border: 1px solid #cccccc;">
                    <!-- Header -->
                    <tr>
                        <td class="header"
                            style="background-color: #345C72; padding: 40px; text-align: center; color: white; font-size: 24px;">
                            Request Appointment Details
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td class="body" style="padding: 40px; text-align: left; font-size: 16px; line-height: 1.6;">
                            Name : <b>{{ $data['name'] }}</b> <br>
                            Phone Number : <b>{{ $data['phone'] }}</b><br>
                            Email : <b>{{ $data['email'] }}</b><br>
                            Service : <b>{{ $data['service'] }}</b>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td class="footer"
                            style="background-color: #333333; padding: 40px; text-align: center; color: white; font-size: 14px;">
                            Copyright &copy; 2024 | Share and Care
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
