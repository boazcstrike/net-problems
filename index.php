<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body>
		<div class="container" style="margin-top: 5em;">
			<div class="row">

				<div class="col-md-6">
					<?php

						$file_content =  file_get_contents("C:/Users/Bo/Desktop/ping.txt");

						$rto = substr_count($file_content, "Request timed out.");
						$dnu = substr_count($file_content, "Destination net unreachable.");
						$rfs = substr_count($file_content, "Reply from 172.217.31.238:");

						$total = $rto + $dnu + $rfs;

						$dec_loss = $rto / $total;
						$percent_loss = $dec_loss * 100;

						$dec_none = $dnu / $total;
						$percent_none = $dec_none * 100;

					?>

					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">Results</h3>
					  </div>
					  <div class="panel-body">
					  	<h6>Good Connection:</h6><h3><?= $rfs; ?></h3>
					  	<h6>LOSS Connection:</h6><h3><?= $percent_loss . " %"; ?></h3>
					    <h6>Request timed out:</h6><h3><?= $rto; ?></h3>
					    <h6>NO Connection:</h6><h3><?= $percent_none . " %"; ?></h3>
					    <h6>Net Unreachable:</h6><h3><?= $dnu; ?></h3>
					  </div>
					</div>
					<?php

						// $fix1 = str_replace("Pinging google.com [172.217.31.238] with 32 bytes of data:", "", $file_content);
						// $fix2 = str_replace("Request", "<br>Request", $fix1);
						// $final_output = str_replace("Reply", "<br>Reply", $fix2);

					?>

<!-- 					<div class="justify-content-center">
						<p style="font-size:0.8em">
							<?= $final_output; ?>
						</p>
					</div> -->
				</div>


				<div class="col-md-6">
					<?php

						$file_content =  file_get_contents("C:/Users/Bo/Desktop/ping-new.txt");

						$rto = substr_count($file_content, "Request timed out.");
						$dnu = substr_count($file_content, "Destination net unreachable.");
						$rfs = substr_count($file_content, "Reply from 172.217.31.238:");

						$total = $rto + $dnu + $rfs;

						$dec_loss = $rto / $total;
						$percent_loss = $dec_loss * 100;

						$dec_none = $dnu / $total;
						$percent_none = $dec_none * 100;

					?>

					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">Results</h3>
					  </div>
					  <div class="panel-body">
					  	<h6>Good Connection:</h6><h3><?= $rfs; ?></h3>
					  	<h6>LOSS Connection:</h6><h3><?= $percent_loss . " %"; ?></h3>
					    <h6>Request timed out:</h6><h3><?= $rto; ?></h3>
					    <h6>NO Connection:</h6><h3><?= $percent_none . " %"; ?></h3>
					    <h6>Net Unreachable:</h6><h3><?= $dnu; ?></h3>
					  </div>
					</div>
					<?php

						// $fix1 = str_replace("Pinging google.com [172.217.31.238] with 32 bytes of data:", "", $file_content);
						// $fix2 = str_replace("Request", "<br>Request", $fix1);
						// $final_output = str_replace("Reply", "<br>Reply", $fix2);

					?>
				</div>

			</div>
		</div>




		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
