<!doctype html>
<html lang="en"> <!-- HTML document with English language -->

<head>
    <meta charset="utf-8"> <!-- Character encoding for UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Responsive viewport meta tag -->

    <title>@yield('title','Custom Auth Laravel') </title> <!-- Setting the title of the page, with a default value of 'Custom Auth Laravel' -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Linking Bootstrap CSS -->
</head>

<body>
    @include('include.header') <!-- Including header section from a separate file -->
    @yield('content') <!-- Yielding the content section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- Linking Bootstrap JavaScript -->
</body>

</html>
