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
            Contrat de service entre {{ $type }} {{ $personnemoral->NOM }} et IEA propriétaire du site www.investir-en-australie.com
          </div>
          <div style="font-size:12px;"><br>
            <div>Ci dessous : </div>
              <br>
              <ul>
                <?php for($i=0; $i<count($condition) ; $i++){ ?>
                <li><?php echo $condition[$i] ?></li>
                <?php } ?>
              </ul>

              <br>
              <br>
                <input type="checkbox" class="acceptation" name="acceptation" />Bon pour acceptation sans réserves
                <br>
                <br>
                <a href="{{ url('/') }}/signerContrat" class="btn btn-info btnContinuer" role="button">Continuer</a>
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

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function(){

        $(".btnContinuer").prop('disabled', true);

        $(".acceptation").change(function(){
           if( $(".acceptation").prop("checked") ){
             $(".btnContinuer").prop('disabled', false);
           }
           else{
             $(".btnContinuer").prop('disabled', true);
           }
        });

    });
</script>


</body>
</html>
