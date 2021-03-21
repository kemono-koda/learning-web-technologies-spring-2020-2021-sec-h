<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY</title>
</head>
<body>
<form method="post" action="">
		<fieldset>
			<legend>DISPLAY</legend>
			<table border="1">
                <tr>
                <td>
                NAME
                </td>
                <td>
                PROFIT
                </td>
                <td>
               
                </td>
                <td>
                
                </td>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'product_db');
                $sql="SELECT name, profit from products";
                $result=$conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        echo "<tr><td>".$row["name"]."</td><td>".$row["profit"]."</";
                    }
                }


                ?>
                </tr>
			</table>
		</fieldset>
	</form>
</body>
</html>