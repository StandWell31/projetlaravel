<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
</head>
<body style="margin: auto">

  <!-- Always shows a header, even in smaller screens. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header couleur"style="background-color: #e00000;">
      @include('home.header')
    </header>


    <main class="mdl-layout__content"style="background: url("img/cars.jpg");">
      <div class="page-content">
        @include('modification.contenu')
      </div>
    </main>
  </div>

</body>
</html>
