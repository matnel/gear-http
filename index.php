<!DOCTYPE html>
<html>
  <head>
    <title>Wearable control</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8" />
  </head>

  <body>

    <table style="width:100%">
      <tr>
        <td>Gear 1</td>
        <td><button type="button" id="1" class="btn btn-default">Off</button></td>
      </tr>
      <tr>
        <td>Gear 2</td>
        <td><button type="button"  id="2" class="btn btn-default">Off</button></td>
      </tr>
      <tr>
        <td>Gear 3</td>
        <td><button type="button"  id="3" class="btn btn-default">Off</button></td>
      </tr>
       <tr>
        <td>Gear 4</td>
        <td><button type="button"  id="4" class="btn btn-default">Off</button></td>
      </tr>
    </table>


    <script type="text/javascript">

      $('button').click(function() {

        var next = "On";
        if( $(this).html() == 'On' ) {
          next = "Off";
        }

        $(this).html( next );

        $(this).toggleClass('btn-primary');

        var txt = [];

        $.each( $('button'), function(i, nappula) {
          var html = $(nappula).html() == "On";
          var id = parseInt( $(nappula).attr('id') ) - 1;
          txt[ id ] = html;
        });

       txt = JSON.stringify( txt );

        console.log(txt);
        $.post("txt.php",{suggest:txt}, function(r) {console.log(r);} );

      });

      </script>
  </body>
</html>
