<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script src="https://kit.fontawesome.com/e18ee3dab9.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        @routes
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>
    <body>
        @inertia
    </body>
</html>