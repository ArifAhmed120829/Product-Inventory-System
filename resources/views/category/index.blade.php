<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Simple web page</title>
   <link rel = "stylesheet" href = "{{ asset('css/style.css') }}">
</head>
<body>
   <h1> welcome to my web page </h1>
   <button onclick="changeText()">Click Me</button>
   <p id="message"></p>

   <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>