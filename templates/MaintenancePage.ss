<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<% base_tag %>
	<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>

	$metatags(false)

	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="span6">
				<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Maintenance-time.svg/500px-Maintenance-time.svg.png" />
			</div>
			<div class="span6">
				<h1>$Title.XML</h1>
				$Content
			</div>
		</div>
	</div>

</body>

</html>