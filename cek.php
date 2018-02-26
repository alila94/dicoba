<!DOCTYPE html>
<html>
<head>
	<title>Dictionary word</title>
	<!-- style -->
	 <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php 

		$teks = $_POST['textnya'];

		$kata = array("pro","gram","merit","program","it","programmer");
 		$hasil = 0;
 
		$jml_kata = count($kata);
 
		for ($i=0; $i<$jml_kata; $i++)
 
		{ 
			if (stristr($teks,$kata[$i]))
			{ 
				$hasil=1;
				$ceks[]= $kata[$i];
			
			} 
		}
 
		if($hasil){
			?>
			<div class="contact">
                				<h5 align="center">Output : </h5>
                				<div class="col-md-4">
                    				<input type="text" name="hasil" placeholder="teksnya" id="textnya" class="form-control" value=<?php echo json_encode($ceks); ?>>
                				</div>
                				
    				</div>
			<!-- echo json_encode($ceks); -->
			<?php
		} else {
			?>
			<div class="contact">
                				<h5 align="center">Output</h5>
                				<div class="col-md-4">
                    				<input type="text" name="hasil" placeholder="teksnya" id="textnya" class="form-control" value="Nothing detected"; >
                				</div>
                				
    				</div>
			
		<?php
	}

?>