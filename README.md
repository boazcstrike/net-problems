## Net-Problems v0.01

#### Make sure to have at least 1 hour of old data (use cmd)
###### C:\>ping google.com >>C:Users/username/Desktop/ping1.txt -t

#### and have at least 1 hour of new data (use cmd)
###### C:\>ping google.com >>C:Users/username/Desktop/ping2.txt -t

#### it is recommended to have at least 4 ping.txts, (ping1.txt, ping2.txt, ping3.txt ping4.txt) to see the results of the connection

Copy paste this to your index.php
Change for($i=?) ==> ? to the number of pings you have done.
-------


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Net Problems</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body style="font-family: Droid Sans Mono,monospace;">
		<div class="container" style="margin-top: 5em;">
			<div class="">
				<h1>Net Problems v0.01</h1>
				<h5><?= date('M d, Y, D'); ?></h5>
			</div>
			<div class="row">
				<?php for($i=3;$i>0;$i--): 

					$file_url = "C:/Users/Bo/Desktop/ping".$i.".txt";

					$file_content =  file_get_contents($file_url);

					$rto = substr_count($file_content, "Request timed out.");
					$dnu = substr_count($file_content, "Destination net unreachable.");
					$rfs = substr_count($file_content, "TTL=54");

					$total = $rto + $dnu + $rfs;
					$min = $total/60;
					$hour = $min/60;


					$dec_loss = $rto / $total;
					$percent_loss = $dec_loss * 100;

					$dec_none = $dnu / $total;
					$percent_none = $dec_none * 100;

				?>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<bR><br>
						    <h3 class="panel-title">Ping <?= $i; ?> Results</h3>
						</div>
					  	<div class="panel-body">
						  	<h6>Good:
						  		<span style="font-size: 1.2em; font-family: 'Lucida Console',Monaco,monospace;">
						  			<?= $rfs; ?>
						  		</span>
						  	</h6>
						  	<h6>Loss:
						  		<span style="font-size: 1.2em; font-family: 'Lucida Console',Monaco,monospace;">
						  		<?= $percent_loss . " %"; ?>
						  	</h6>
						    <h6>Request timed out:
						    	<span style="font-size: 1.2em; font-family: 'Lucida Console',Monaco,monospace;">
						    	<?= $rto; ?>
						    </h6>
						    <h6>No connection:
						    	<span style="font-size: 1.2em; font-family: 'Lucida Console',Monaco,monospace;"><?= $percent_none . " %"; ?>
						    </h6>
						    <h6>Destination Net Unreachable:
						    	<span style="font-size: 1.2em; font-family: 'Lucida Console',Monaco,monospace;">
						    	<?= $dnu; ?>
					    	</h6>
					    	<br>
					    	<p>Elapsed time:<br>
						    	<?= $hour . " hours"; ?><br>
						    	<?= $min . " minutes"; ?><br>
						    	<?= $total . " outputs"; ?><br>
					   		</p>
					  	</div>
					</div>
				</div>
			<?php endfor; ?>
			</div>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>

---
## Load the index.php on the server and you should see statistics of your internet connection from pinging Google.com