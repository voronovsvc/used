<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<script src="/js/scripts.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title> <?php echo $title; ?> </title>
</head>

<body>
	<header id="header">
		<h1>header</h1>
  </header>

  <div id="content">
      <?php if (!empty($content)): ?>
        <?php print $content; ?>
      <?php endif; ?>
  </div>

  <footer id="footer">
  	<h3>footer</h3>
  </footer>
</body>
</html>
