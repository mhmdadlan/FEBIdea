<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    @if (isset($page) && $page == 'project')
    <link rel="stylesheet" type="text/css" href="css/piecharts.css">
    @elseif(isset($page) && $page == 'explore')
    <link rel="stylesheet" href="css/map-icons.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/snazzy-info-window.min.css">
    @endif
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>{{$page}}</title>
</head>