<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Tutorial</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    <div class="nav">
      <ul>
        <li><a href="{{route('contacts.create')}}">Create</a></li>
        <li><a href="{{route('contacts.index')}}">Home</a></li>
      </ul>

    </div>

    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
