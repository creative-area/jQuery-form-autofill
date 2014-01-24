<?php
$post_json = json_encode($_POST);
?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="content-style-type" content="text/css">
	<meta http-equiv="content-script-type" content="text/javascript">
	<title>jQuery form autofill demo by Creative Area</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="shortcut icon" href="http://www.creative-area.net/favicon.ico">
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.js"></script>
	<script type="text/javascript" src="../doc/js/beautify.js"></script>
	<script type="text/javascript" src="../jquery.formautofill.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#postdata').html(
			js_beautify('var postdata = <?= str_replace('>', '&gt;', str_replace('<', '&lt;', addcslashes($post_json, "'") ) ) ?>;')
		);
		prettyPrint();
		
		$("#myform").autofill(<?= $post_json ?>);
	});
	</script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../doc/css/prettify.css">
	<link rel="stylesheet" type="text/css" href="../doc/css/style.css">
	<script type="text/javascript">//<![CDATA[
// Google Analytics
var _gaq = _gaq || [];
_gaq.push(['_setAccount','UA-5479812-6']);
_gaq.push(['_trackPageview']);
(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
//]]>
</script>
</head>
<body>
	
	<div class="navbar navbar-fixed-top navbar-inverse">
		<a href="https://github.com/creative-area/jQuery-form-autofill"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
        <div class="navbar-inner">
			<div class="container">
				<a class="brand" href="../doc/">jQuery form autofill</a>
				<ul class="nav">
					<li><a href="../doc/#download">download</a></li>
					<li><a href="../doc/#howtouse">how to use</a></li>
					<li><a href="../doc/#optionalparams">options</a></li>
					<li><a href="../doc/#examples">examples</a></li>
					<li><a href="./">demo</a></li>
				</ul>
			</div>
        </div>
    </div>
    
	<div class="container">
		<div class="content">
		
		   	<h1>jQuery form autofill</h1>
		   	
		   	fill the form. submit ... form is autofilled by post data.
			
			<section id="example-elements">
				<p>&nbsp;</p>
				<h3>Demo</h3>
		   		
				<div class="row">
					<div class="span5">
					
						<form id="myform" class="form-stacked" action="" method="post">
							<fieldset>
								<div class="clearfix">
									<label for="input">input text</label>
									<div class="input">
										<input class="span4" name="input" id="input" type="text">
									</div>
								</div><!-- /clearfix -->
								
								<div class="clearfix">
									<label for="another">another input text</label>
									<div class="input">
										<input class="span4" name="another" id="another" type="text">
									</div>
								</div><!-- /clearfix -->
									
								<div class="clearfix">
									<label for="select">select</label>
									<div class="input">
										<select name="select" id="select" class="span4">
										<option value="1">value = 1</option>
										<option value="2">value = 2</option>
										<option value="3">value = 3</option>
										<option value="4">value = 4</option>
										<option value="5">value = 5</option>
										</select>
									</div>
								</div><!-- /clearfix -->
									
								<div class="clearfix">
									<label for="multiselect">multiple select</label>
									<div class="input">
										<select name="multiselect[]" id="multiselect" class="span4" multiple="multiple" size="4">
										<option value="1">value = 1</option>
										<option value="2">value = 2</option>
										<option value="3">value = 3</option>
										<option value="4">value = 4</option>
										<option value="5">value = 5</option>
										</select>
									</div>
								</div><!-- /clearfix -->
								
								<div class="clearfix">
									<label for="textarea">textarea</label>
									<div class="input">
										<textarea class="span4" name="textarea" id="textarea" rows="3"></textarea>
									</div>
								</div><!-- /clearfix -->
								
								<div class="clearfix">
									<label for="checkbox">checkbox</label>
									<div class="input">
										<ul class="inputs-list">
											<li>
												<label>
													<input name="checkbox" id="checkbox" value="1" type="checkbox">
													<span>value = 1</span>
												</label>
											</li>
										</ul>
									</div>
								</div><!-- /clearfix -->
								
								<div class="clearfix">
									<label for="another_checkbox">another checkbox</label>
									<div class="input">
										<ul class="inputs-list">
											<li>
												<label>
													<input name="another_checkbox" id="another_checkbox" value="1" type="checkbox">
													<span>value = 1</span>
												</label>
											</li>
										</ul>
									</div>
								</div><!-- /clearfix -->
								
								<div class="clearfix">
									<label for="checkbox_multiple">checkbox multiple</label>
									<div class="input">
										<ul class="inputs-list inputs-list-hack">
											<li>
												<label>
													<input name="checkbox_multiple[]" value="1" type="checkbox">
													<span>1</span>
												</label>
											</li>
											<li>
												<label>
													<input name="checkbox_multiple[]" value="2" type="checkbox">
													<span>2</span>
												</label>
											</li>
											<li>
												<label>
													<input name="checkbox_multiple[]" value="3" type="checkbox">
													<span>3</span>
												</label>
											</li>
											<li>
												<label>
													<input name="checkbox_multiple[]" value="4" type="checkbox">
													<span>4</span>
												</label>
											</li>
										</ul>
									</div>
								</div><!-- /clearfix -->
								
								<div class="clearfix">
									<label for="radio">radio</label>
									<div class="input">
										<ul class="inputs-list inputs-list-hack">
											<li>
												<label>
													<input name="radio" value="on" type="radio">
													<span>on</span>
												</label>
											</li>
											<li>
												<label>
													<input name="radio" value="off" type="radio">
													<span>off</span>
												</label>
											</li>
											<li>
												<label>
													<input name="radio" value="other" type="radio">
													<span>other</span>
												</label>
											</li>
										</ul>
									</div>
								</div><!-- /clearfix -->
								
								<input class="btn btn-info clickaction_id" type="submit" value="submit" />
								<input class="btn" type="reset" value="reset" />
								
							</fieldset>
							
						</form>
					</div>
					
					<div class="span7">
						<span class="label label-info">php</span>
						<pre id="phpdata" class="prettyprint">&lt;?php
$post_json = json_encode($_POST);
?&gt;</pre>
						<p></p>
						<span class="label label-info">php</span> <span class="label label-warning">javascript</span>
						<pre class="prettyprint">var postdata = &lt;?= $post_json ?&gt;;</pre>
						
						<p></p>
						<span class="label label-warning">render javascript</span>
						<pre id="postdata" class="prettyprint"></pre>
						
						<p></p>
						<span class="label label-success">jQuery form autofill</span>
						<pre class="prettyprint">$("#myform").autofill( postdata );</pre>
						
						<p></p>
						<span class="label label-important">one line</span>
						<pre class="prettyprint">$("#myform").autofill( &lt;?= json_encode($_POST) ?&gt; );</pre>
					</div>
				</div>
			</section>
		
		</div>
			
		<footer>
			<p>Copyright © <?= date('Y')?> - <a href="http://www.creative-area.net">Creative Area</a></p>
		</footer>
		
	</div>

</body>
</html>