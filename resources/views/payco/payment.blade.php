  
<!DOCTYPE html>
<html>
    <head>
        <title>ePayco</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
        content="height=device-height, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <!-- Include Ecwid JS SDK -->
        <script src="https://d35z3p2poghz10.cloudfront.net/ecwid-sdk/js/1.2.5/ecwid-app.js"></script>
        <script>
        // Initialize the application
        EcwidApp.init({
            app_id: "{{ $app_id }}",
            autoloadedflag: true, 
            autoheight: true
        });
        // do something...
        </script>

        <!-- Include Ecwid CSS SDK -->
        <link rel="stylesheet" type="text/css" href="https://djqizrxa6f10j.cloudfront.net/ecwid-sdk/css/1.2.0/ecwid-app-ui.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Hi, this is Embedded App Home page. Store ID is {{ $storeId }}</div>
            </div>
        </div>
    </body>
</html>