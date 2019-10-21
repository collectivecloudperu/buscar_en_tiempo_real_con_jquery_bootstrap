<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Buscar en tiempo real con jQuery y Bootstrap</title>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>

    <!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  	<!-- Optional theme -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  	<!-- Latest compiled and minified JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <script type="text/javascript">
        $(document).ready(function () {

            (function ($) {

                $('#filtrar').keyup(function () {

                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();

                })

            }(jQuery));

        });
      </script>    

  </head>
  <body>
  	<div class="container">
	    <h1>Disco: Dash Berlin - The New Daylight</h1>

      <div class="input-group"> <span class="input-group-addon">Buscar</span>
        <input id="filtrar" type="text" class="form-control" placeholder="Ingresa la canción de este Disco que deseas Buscar...">
      </div>

	    <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nº</th>
            <th>Canción</th>
            <th>Detalles</th>            
            <th>Reproducir</th>
          </tr>
        </thead>
        <tbody class="buscar">
          <tr><td>1UuaX3kHs5iKD1mFFsArHq</td><td>1</td><td>Till The Sky Falls Down - Vocal Mix</td><td><a target="_blank" alt="Till The Sky Falls Down - Vocal Mix" title="Till The Sky Falls Down - Vocal Mix" href=https://api.spotify.com/v1/tracks/1UuaX3kHs5iKD1mFFsArHq >Ver Detalles</a></td><td><a target="_blank" alt="Till The Sky Falls Down - Vocal Mix" title="Till The Sky Falls Down - Vocal Mix" href=https://open.spotify.com/track/1UuaX3kHs5iKD1mFFsArHq >Reproducir</a></td></tr><tr><td>4f0dhdt7rjOgUEv7HmF4rM</td><td>2</td><td>Man On The Run - Original Vocal Mix</td><td><a target="_blank" alt="Man On The Run - Original Vocal Mix" title="Man On The Run - Original Vocal Mix" href=https://api.spotify.com/v1/tracks/4f0dhdt7rjOgUEv7HmF4rM >Ver Detalles</a></td><td><a target="_blank" alt="Man On The Run - Original Vocal Mix" title="Man On The Run - Original Vocal Mix" href=https://open.spotify.com/track/4f0dhdt7rjOgUEv7HmF4rM >Reproducir</a></td></tr><tr><td>4U2zGQMK5L3mRuoGZA4WDy</td><td>3</td><td>Wired</td><td><a target="_blank" alt="Wired" title="Wired" href=https://api.spotify.com/v1/tracks/4U2zGQMK5L3mRuoGZA4WDy >Ver Detalles</a></td><td><a target="_blank" alt="Wired" title="Wired" href=https://open.spotify.com/track/4U2zGQMK5L3mRuoGZA4WDy >Reproducir</a></td></tr><tr><td>44DRt5JbAtRrt5vxH1lazp</td><td>4</td><td>Waiting - Original Mix</td><td><a target="_blank" alt="Waiting - Original Mix" title="Waiting - Original Mix" href=https://api.spotify.com/v1/tracks/44DRt5JbAtRrt5vxH1lazp >Ver Detalles</a></td><td><a target="_blank" alt="Waiting - Original Mix" title="Waiting - Original Mix" href=https://open.spotify.com/track/44DRt5JbAtRrt5vxH1lazp >Reproducir</a></td></tr><tr><td>2bUsni4knblLirfRD7DUS6</td><td>5</td><td>Never Cry Again - Original Mix</td><td><a target="_blank" alt="Never Cry Again - Original Mix" title="Never Cry Again - Original Mix" href=https://api.spotify.com/v1/tracks/2bUsni4knblLirfRD7DUS6 >Ver Detalles</a></td><td><a target="_blank" alt="Never Cry Again - Original Mix" title="Never Cry Again - Original Mix" href=https://open.spotify.com/track/2bUsni4knblLirfRD7DUS6 >Reproducir</a></td></tr><tr><td>36QfRyd9lQyPKL9eFmmSXa</td><td>6</td><td>To Be The One - Original Mix</td><td><a target="_blank" alt="To Be The One - Original Mix" title="To Be The One - Original Mix" href=https://api.spotify.com/v1/tracks/36QfRyd9lQyPKL9eFmmSXa >Ver Detalles</a></td><td><a target="_blank" alt="To Be The One - Original Mix" title="To Be The One - Original Mix" href=https://open.spotify.com/track/36QfRyd9lQyPKL9eFmmSXa >Reproducir</a></td></tr><tr><td>0KpehNMSwZQZ13KlwaFLyP</td><td>7</td><td>End Of Silence</td><td><a target="_blank" alt="End Of Silence" title="End Of Silence" href=https://api.spotify.com/v1/tracks/0KpehNMSwZQZ13KlwaFLyP >Ver Detalles</a></td><td><a target="_blank" alt="End Of Silence" title="End Of Silence" href=https://open.spotify.com/track/0KpehNMSwZQZ13KlwaFLyP >Reproducir</a></td></tr><tr><td>1zvFKlkIriv5yCp1HYGZTy</td><td>8</td><td>The Night Time</td><td><a target="_blank" alt="The Night Time" title="The Night Time" href=https://api.spotify.com/v1/tracks/1zvFKlkIriv5yCp1HYGZTy >Ver Detalles</a></td><td><a target="_blank" alt="The Night Time" title="The Night Time" href=https://open.spotify.com/track/1zvFKlkIriv5yCp1HYGZTy >Reproducir</a></td></tr><tr><td>6jXUnH9po91agPvwJPHINq</td><td>9</td><td>Renegade - Original Mix</td><td><a target="_blank" alt="Renegade - Original Mix" title="Renegade - Original Mix" href=https://api.spotify.com/v1/tracks/6jXUnH9po91agPvwJPHINq >Ver Detalles</a></td><td><a target="_blank" alt="Renegade - Original Mix" title="Renegade - Original Mix" href=https://open.spotify.com/track/6jXUnH9po91agPvwJPHINq >Reproducir</a></td></tr><tr><td>4IzhqrjLOwNuh3W7JryWqx</td><td>10</td><td>Janeiro</td><td><a target="_blank" alt="Janeiro" title="Janeiro" href=https://api.spotify.com/v1/tracks/4IzhqrjLOwNuh3W7JryWqx >Ver Detalles</a></td><td><a target="_blank" alt="Janeiro" title="Janeiro" href=https://open.spotify.com/track/4IzhqrjLOwNuh3W7JryWqx >Reproducir</a></td></tr><tr><td>6ShnXpRHu79ElednDKNfnJ</td><td>11</td><td>Feel U Here - Original Mix</td><td><a target="_blank" alt="Feel U Here - Original Mix" title="Feel U Here - Original Mix" href=https://api.spotify.com/v1/tracks/6ShnXpRHu79ElednDKNfnJ >Ver Detalles</a></td><td><a target="_blank" alt="Feel U Here - Original Mix" title="Feel U Here - Original Mix" href=https://open.spotify.com/track/6ShnXpRHu79ElednDKNfnJ >Reproducir</a></td></tr><tr><td>1UMKL51JlWiuKoqXoRwlpp</td><td>12</td><td>The New Daylight</td><td><a target="_blank" alt="The New Daylight" title="The New Daylight" href=https://api.spotify.com/v1/tracks/1UMKL51JlWiuKoqXoRwlpp >Ver Detalles</a></td><td><a target="_blank" alt="The New Daylight" title="The New Daylight" href=https://open.spotify.com/track/1UMKL51JlWiuKoqXoRwlpp >Reproducir</a></td></tr><tr><td>54G96vyYvYpq8JiU9sAxtD</td><td>13</td><td>Surround Me - Bonus Track</td><td><a target="_blank" alt="Surround Me - Bonus Track" title="Surround Me - Bonus Track" href=https://api.spotify.com/v1/tracks/54G96vyYvYpq8JiU9sAxtD >Ver Detalles</a></td><td><a target="_blank" alt="Surround Me - Bonus Track" title="Surround Me - Bonus Track" href=https://open.spotify.com/track/54G96vyYvYpq8JiU9sAxtD >Reproducir</a></td></tr>
        </tbody>
      </table>

    </div>
  </body>
</html>
