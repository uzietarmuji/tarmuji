<?php
	if (isset ($_POST["button2"]) and
	$_POST["button2"] =="proses"){
	unset ($_POST["jml"]);	
	}
?>
<html>
	<head>
		<title> multi textfild </title>
	</head>
	<body>
		<form id="form1" name="form1" method="post" action="">
		<table width="100%" border="0" cellpadding="2">
			<tr>
				<td> berapa jumlah text fild
					<select name="jml" id="jml">
						<?php for ($jml=1; $jml <30; $jml++){ ?>
						<option value="<?php echo $jml; ?>">
							<?php echo $jml; ?>
						</option>
						<?php }?>
					</select>
					<input type="submit" name="button" id="button"
						value="add text field"/>
				</td>
			</tr>
			<tr>
				<td><hr /></td>
			</tr>
			<?php for ($text=0; $text<$_POST["jml"];$text++){?>
			<tr>
				<td>
					text fild: <?php echo ($text+1); ?>
					<input type="text" name="nama[]" id="nama[]">
				</td>
			</tr>
			<?php } ?>
			<?php if(isset($_POST["jml"])) {?>
			<tr>
				<td>
					<input type="submit" name="button2" value="proses">
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td>
					<?php
					if (isset($_POST["button2"]) and
					$_POST["button2"] == "proses"){
					if (is_array($_POST["nama"])){
					foreach($_POST["nama"] as $value){
					if (!empty($value)){
					echo "taman anda, ";
					echo $value;
					echo "<br />";
					}
				}
			}
		}
					?>
				</td>
			</tr>
		</table>
	</body>
</html>