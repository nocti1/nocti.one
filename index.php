<?php
	$yeanah = rand(0,2);
	$rand = rand(0,12);
?>
<!doctype html>
<html>
<head>
	<link href="index/index.css" rel="stylesheet" type="text/css">
	<title>nocti1ucent</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<div id="hidden">
	<h1>nocti1ucent</h1>
	<h2>Website of Bass Music producer nocti1ucent</h2>
	<h3>Bass Music</h3>
	<h3>Hip-Hop</h3>
	<h3>Trap</h3>
	<h3>Electronic</h3>
	<h3>Dance</h3>
	<h3>EDM</h3>
	<h3>House</h3>
	<h3>Dubstep</h3>
	<h3>Hard Dance</h3>
	<h3>Reggaeton</h3>
	<h3>Orchestral</h3>
	<h3>Progressive</h3>
	<h3>Alternative</h3>
	<h3>Experimental</h3>
	</div>
	<? 
	if($yeanah == 0)
	{
	if($rand == 0)
	{
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/3PyiQHO0COfbN4hm8giuNZ" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else if($rand == 1)
	{
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/5MSWAXnZXQqf9DVHSWPdIU" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else if($rand == 2)
	{
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/7DEW548ljC1YMSkz08uSjw" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else if($rand == 3)
	{
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/0WijuVO8461ilP01epeHLU" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else if($rand == 4)
	{
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/0RxKi2CZKH3Pj7brorx7d0" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else if($rand == 5)
	{	
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/1DngVeLhMuXUh584Y0ela2" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else if($rand == 6)
	{
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/5caBlcw6m2AJXCuPXTy7gy" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else if($rand == 7)
	{	
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/3iAzb9G7hatC0to0SCu6Ac" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else if($rand == 8)
	{
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/1VBtxR1tP70Ue0H840JWhp" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else if($rand == 9)
	{	
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/5P1y0qZVc77fCEigQVNkgj" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else if($rand == 10)
	{	
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/6y42BmPNnBHrG6FVxtVCa9" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else if($rand == 11)
	{	
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/0ik7DW1pxoqYgweJMHynVf" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else if($rand == 12)
	{	
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/2iDhGR1jVKNjpPZ17LWNoU" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	} else {
		$rand = rand(0,1);
		if($rand == 0)
	{	
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/1Nrc0eh9Ydx34Qp6DIajdd" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	else
		{	
		echo('<div id="spotifysong" class="fade-in"><iframe src="https://open.spotify.com/embed/track/6rwwkenZmqhv5NV2z3woZB" allowtransparency="true" allow="encrypted-media"></iframe></div>');
	}
	}
	echo "<div id='members' class='fade-in'>";
	echo $memberpanel;
	echo "</div>";
	?>
	<div id="content" class="fade-in">
		<a class="link" href="https://www.facebook.com/nocti1"><img class="fb" src="index/iconmonstr-facebook-1.svg">facebook</a>
		<a class="link" href="https://www.soundcloud.com/nocti1"><img src="index/iconmonstr-soundcloud-1.svg">soundcloud</a>
		<a class="link" href="https://www.sptfy.com/nocti1"><img src="index/iconmonstr-spotify-1.svg">spotify</a>
		<a class="link" href="https://www.youtube.com/channel/UCJDzHWvOhEl1do087buwezQ"><img src="index/iconmonstr-youtube-1.svg">youtube</a>
	</div>
</body>
</html>
