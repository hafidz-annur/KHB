<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Formulir Kontak Baru</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; margin: 0; padding: 0;">

    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600"
        style="border-collapse: collapse; background-color: #ffffff;">
        <tr>
            <td style="padding: 20px 0; text-align: center;">
                <h2 style="color: #333;">Notifikasi Formulir Kontak Baru</h2>
                <p style="font-size: 14px; color: #666;">
                    Terima kasih! Berikut ini adalah detail formulir kontak yang baru masuk. <br>
                    Mohon segera tanggapi atau hubungi pelanggan.
                </p>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <p><strong>Nama:</strong> {{ $contact->name }}</p>
                <p><strong>Email:</strong> {{ $contact->email }}</p>
                <p><strong>Nomor Telepon:</strong> {{ $contact->phone_number }}</p>
                <p><strong>ID Produk:</strong> {{ $contact->product->name }}</p>
                <p><strong>Pesan:</strong> {{ $contact->message }}</p>
            </td>
        </tr>
        <tr>
            <td style="background-color: #f0f0f0; padding: 20px; text-align: center;">
                <p style="font-size: 12px; color: #666;">
                    Email ini dikirimkan melalui aplikasi {{ config('app.name') }}. <br>
                    Silakan segera hubungi pelanggan untuk respons yang lebih cepat.
                </p>
            </td>
        </tr>
    </table>

</body>

</html>