<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vérification de compte</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top">
      <img src="{{ $message->embed('images/logo.png') }}" style="display:block;"></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#f1f69d" style="background-color:#f1f69d; font-family:Arial,sans-serif; font-size:13px; color:#000000; padding:10px;">

      <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
        <tr>
          <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:15px; color:#525252;">
          <div style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:16px; color:#000000;">
            Vérification par email pour pouvoir suivre votre inscription en {{ $type }} sous le nom {{ $personne->NOM }}
          </div>
          <div style="font-size:12px;"><br>
            <div>Cher client,</div>
              <br>
              Lorem Ipsum adipiscing elit. Vestibulum magna enim, volutpat nec imperdiet id  tempor venenatis eros.
              Aliquam sed velit vitae nibh pulvinar iaculis. Aenean hendrerit, lorem eu luctus cursus, sapien justo auctor
              ligula, id bibendum lorem leo quis leo. Suspendisse sit amet aliquam orci. Aliquam erat volutpat.
              Aliquam erat volutpat. Nunc ac justo enim. Morbi eleifend feugiat turpis non placerat.
              Etiam sed tellus ac lectus lacinia molestie nec eu nisl. Pellentesque mattis luctus ultrices.
              <br>
              <br>
              Veuillez suivre ce lien <a href="{{ url('/') }}/{{ $urlDestination }}">Vérifiez votre contrat</a>
              <br>
              <br>
          </div>
          </td>
        </tr>
      </table>

    </td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#478730" style="background-color:#478730;"><table width="100%" border="0" cellspacing="0" cellpadding="15">
      <tr>
        <td align="left" valign="top" style="color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:13px;">Investir en Australie<br>
          Contact Person <br>
          Phone: (123) 456-789 <br>
          Email: <a href="mailto:name@yourcompanyname.com" style="color:#ffffff; text-decoration:none;">iea@contact.com</a><br>
          Website: <a href="http://www.yourcompanyname.com" target="_blank" style="color:#ffffff; text-decoration:none;">www.investir-en-australie.com</a></td>
      </tr>
    </table></td>
  </tr>
</table>


</body>
</html>
