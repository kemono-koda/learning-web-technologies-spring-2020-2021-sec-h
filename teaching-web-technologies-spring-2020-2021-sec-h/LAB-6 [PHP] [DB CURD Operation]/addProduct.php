<?php

session_start();

if(isset($_POST['save'])){

    $name = $_POST['name'];
    $buyingPrice = $_POST['buyingPrice'];
    $sellingPrice = $_POST['sellingPrice'];
    $profit=(int)$sellingPrice-(int)$buyingPrice;
    if(isset($_POST['checkbox']))
    {
        $displayable="Yes";
    }
    else
    {
        $displayable="";
    }
    if($name == "" || $buyingPrice == "" || $sellingPrice == "" ){
        echo "null submission...";
    }else{

        //connection
$conn = mysqli_connect('localhost', 'root', '', 'product_db');



//query
$sql = "insert into products(Id,Name,sellingPrice,buyingPrice,Displayable,Profit) values('','$name','$sellingPrice','$buyingPrice','$displayable','$profit')"; 


//array
$result = mysqli_query($conn, $sql);
print_r($result);


//close
mysqli_close($conn);

            header('location: display.php');
        
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PRODUCT</title>
</head>
<body>
<form method="post" action="">
		<fieldset>
			<legend>ADD PRODUCT</legend>
			<table>
                <tr>
                <td>Name</td>
                </tr>
				<tr>
					
					<td><input type="text" name="name" value=""> </td>
				</tr>
                <tr>
                <td>Buying Price</td>
                </tr>
				<tr>
					
					<td><input type="text" name="buyingPrice" value=""> </td>
				</tr>
                <tr>
                <td>Selling Price</td>
                </tr>
				<tr>
					
					<td><input type="text" name="sellingPrice" value=""> </td>
				</tr>
				<tr>
					<td colspan="3">
                    <hr>
                    </td>

				</tr>
                <tr>
                <td><input type="checkbox" name="checkbox" value="Yes"> Display</td>
                </tr>
                <tr>
					<td colspan="3">
                    <hr>
                    </td>

				</tr>
                <tr>
                <td>
						<input type="submit" name="save" value="save"> 
					</td>
                </tr>
			</table>
		</fieldset>
	</form>
</body>
</html>