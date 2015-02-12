<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
	<div id="container">
		<p>My view has been loaded</p>
		<pre>
			<?php print_r($records)?>
		</pre> <hr/>

		<?php foreach ($records as $row): ?>
			<h1><?php echo $row->id."<br/>". $row->Name."<br/>".$row->Address; ?></h1>

		<?php endforeach; ?>
	</div>
</body>
</html>