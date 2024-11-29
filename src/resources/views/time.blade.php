<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acme: Current Time</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-200">

    <div class="container mx-auto max-w-lg p-4 ">

      <div class="text-center shadow rounded-lg bg-white p-10">

        <h1 class="text-3xl font-bold">Acme: current time is:</h1>

        <h3>{{ $time }}</h3>

      </div>

    </div>

  </body>
</html>
