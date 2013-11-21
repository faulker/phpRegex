<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/Software" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<title>phpRegex</title>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1" />
	<meta itemprop="name" content="phpRegex">
	<meta itemprop="description" content="A tool for testing php regular expressions">
	
	<!-- Google Fonts (http://www.google.com/webfonts) //-->
	<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="//connect.facebook.net/en_US/all.js"></script> <!-- Facebook Like button //-->
	
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->

	<script type="text/javascript">
	<!-- Google Analytics - START //-->
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-79212-14']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
	<!-- Google Analytics - END //-->

	<!-- Google +1 Code - Start //-->
	(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();
	<!-- Google +1 Code - End //-->
	</script>
</head>
<body>

<!-- For the Facebook Like Buttons - Start //-->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>
<!-- For the Facebook Like Buttons - End //-->

<div id="wrapper" class="container_12">
	<header role="banner">
		<h1 id="logo" class="grid_8">phpRegex</h1>
		<section role="buttons" class="grid_4">
			<div id="fbControl">
				<div class="fb-like" data-send="false" data-layout="button_count" data-width="110" data-show-faces="false" data-colorscheme="light"></div>
			</div>
			<div id="plusControl">
				<div class="g-plusone" data-width="100" data-size="medium"></div>
			</div>
			<div id="twControl">
				<a href="https://twitter.com/share" class="twitter-share-button" data-related="nox_freak" data-hashtags="regex">Tweet</a>
			</div>
		</section>
	</header>
	<section role="regex_input" class="grid_12">
		<label><b>Expressions:</b></label>
		<input type="textbox" id="regex_input" value="/(\w*)\.(com|info)/" />
	</section>
	<section role="regex_options" class="grid_12">
		<div class="grid_3">
			<label><b>Functions:</b></label><br />
			<input type="radio" value="0" name="option" checked="checked" /><label>preg_match_all</label><br />
			<input type="radio" value="1" name="option" /><label>preg_match</label><br />
			<input type="radio" value="2" name="option" /><label>preg_split</label>
		</div>
		<div class="grid_8">
			<div>
				<label><b>Flags:</b></label><br />
				<input type="radio" id="flags_none" value="" name="flags" checked="checked" /><label>None</label>
			</div>
			<div class="preg_all_only"><input type="radio" value="PREG_PATTERN_ORDER" name="flags" /><label>PREG_PATTERN_ORDER</label></div>
			<div class="preg_all_only"><input type="radio" value="PREG_SET_ORDER" name="flags" /><label>PREG_SET_ORDER</label></div>
			<div class="preg_only"><input type="radio" value="PREG_OFFSET_CAPTURE" name="flags" /><label>PREG_OFFSET_CAPTURE</label></div>
			<div class="split_only"><input type="radio" value="PREG_SPLIT_NO_EMPTY" name="flags" /><label>PREG_SPLIT_NO_EMPTY</label></div>
			<div class="split_only"><input type="radio" value="PREG_SPLIT_DELIM_CAPTURE" name="flags" /><label>PREG_SPLIT_DELIM_CAPTURE</label></div>
			<div class="split_only"><input type="radio" value="PREG_SPLIT_OFFSET_CAPTURE" name="flags" /><label>PREG_SPLIT_OFFSET_CAPTURE</label></div>
		</div>
	</section>
	<section role="string" class="grid_12">
		<label><b>String to Search:</b></label><br />
		<textarea id="input_string">Welcome to phpRegex, a tool to help you learn how to write regular expressions for various php functions.

Some regex resources:
* http://regular-expressions.info
* http://www.gskinner.com/RegExr/
* http://www.zytrax.com/tech/web/regex.htm
		</textarea>
		<label><b>Output:</b></label><br />
		<textarea id="output_array" readonly="true">Output array</textarea>
	</section>
	<footer>
		<section role="footer_info" class="grid_8">
			<p>Created by <a href="http://www.google.com/recaptcha/mailhide/d?k=01GvI7be3WzbxPtMmYKui_Aw==&amp;c=c-gjL-GhjNGs9rAqFINbmg==" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501GvI7be3WzbxPtMmYKui_Aw\75\75\46c\75c-gjL-GhjNGs9rAqFINbmg\75\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal my e-mail address">Winter Faulk</a> for more software/tools check out <a href="http://faulk.me/" title="faulk.me">faulk.me</a>.</p>
		</section>
		<section role="php_ver" class="grid_4">
			<?php echo "Using PHP version ".phpversion(); ?>
		</section>
	</footer>
</div>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<script type="text/javascript">
	$(document).ready(function() {
		var regex = $("#regex_input");
		var str = $("#input_string");
		var output = $("#output_array");
		var opt = $("input[name=option]");
		var flags = $("input[name=flags]");
		
		$(".split_only").hide();
		$(".preg_all_only").show();
		$(".preg_only").show();
		getRegex();
		
		opt.change(function() {
			$("#flags_none").attr("checked", "checked");
			switch($("input[name=option]:checked").val())
			{
				case "0": //preg_all_match
					$(".split_only").hide();
					$(".preg_all_only").show();
					$(".preg_only").show();
					break;
				case "1": //preg_match
					$(".split_only").hide();
					$(".preg_all_only").hide();
					$(".preg_only").show();
					break;
				case "2": // preg_split
					$(".split_only").show();
					$(".preg_all_only").hide();
					$(".preg_only").hide();
					break;
			}
					
			getRegex();
		});
		flags.change(function() { getRegex(); });
		regex.keyup(function() { getRegex(); });
		str.keyup(function() { getRegex(); });
		
		function getRegex()
		{
			$.get("regex.php", {
				r: regex.val(),
				s: str.val(),
				o: $("input[name=option]:checked").val(),
				f: $("input[name=flags]:checked").val()
				},
				function(data) { output.val(data); }
			)
		}
		
	});
</script>

</body>
</html>