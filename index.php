<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="heading">
            <h1>Age Validation</h1>
        </div>
        <div class="check">
            <form method="POST">
                <table>
                <tr>
                    <td>Age : </td>
                    <td><input type="number" name="age"></td>
                </tr>
                <tr><td id="sub"><input type="submit" name="ok" value="ok"></td></tr>
                </table>
            </form>
            <?php
                $int = $_POST['age'];
                $min = 26;
                $max = 56;
                if(isset($int)){
                    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
                        // echo"<script>alert('Variable value is not within the legal range')</script>";
                        echo "The age ".$int." is not valid.";
                        
                    } else {
                        // echo"<script>alert('Variable value is within the legal range')</script>";
                        echo "The age ".$int." is valid.";
                    }
                } 
            ?>
        </div>
    </body>
</html>