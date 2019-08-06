
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Form Registration</title>
    </head>
    <body>  
        <h3>Form Registrasi</h3>
        <form action="{{ url('/send') }}" method="post">
        {{ csrf_field() }}
        <table>
        <tr>
            <td>Nama</td>
            <td>: <input type="text" name="name" placeholder="Nama Lengkap" required /> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <input type="email" name="email" placeholder="Email Anda" required /> </td>
        </tr>
        <tr>
        <td>Nomor Telepon</td>
            <td>: <input type="number" name="telepon" placeholder="Nomor Telepon Anda" required /> </td>
        </tr>
        <tr>
            <td><button type="submit">Kirim</button></td>
        </tr>
        </table>
        </form>
    </body>
</html>