<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="http://releases.flowplayer.org/js/flowplayer-3.2.13.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fish Command</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FISH COMMAND</a>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php include "nav.php"; ?>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Camera</h1>
			<div id="live" style="width:640px;height:480px;margin:0 auto;text-align:center"></div>
<script>

$f("live", "http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf", {
 
    clip: {
        url: '',
        live: true,
        // configure clip to use influxis as our provider, it uses our rtmp plugin
        provider: 'influxis'
    },
 
    // streaming plugins are configured under the plugins node
    plugins: {
 
        // here is our rtpm plugin configuration
        influxis: {
            url: "flowplayer.rtmp-3.2.13.swf",
 
            // netConnectionUrl defines where the streams are found
            netConnectionUrl: 'rtmp://fishbowl.yepps.net/live'
        }
    }
});
</script>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/js/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
