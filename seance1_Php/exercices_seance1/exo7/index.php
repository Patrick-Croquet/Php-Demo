<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo7</title>
</head>
<body>
<?php
echo "<table border='1' style='border-collapse: collapse'>";
for($row=1; $row <= 10; $row++){
    echo "<tr> \n";
    for($col=1; $col <= 10; $col++){
        $calcul = $row * $col;
        echo "<td>$calcul</td> \n";
    }
    echo "</tr> \n";
}
echo "</table>";
?>
<?php
if(isset($_POST['table_num']) && $_POST['table_num'] != ''){
    echo "<h3>Resultat:</h3>";
    $table_num = $_POST['table_num'];
    for($i=1; $i<=10; ++$i){
        echo "$table_num * $i = ".$table_num * $i ."<br />";
    }
}
?>
<div class="container">
            <div class="row">
                <hr />
                <div class="form-group">
                    <form class="form-horizontal" method="POST">
                      <div class="form-group">
                        <label for="table_num" class="col-sm-2 control-label">Table de Multiplication :</label>
                        <div class="col-sm-2">
                          <input type="number" class="form-control" min="1" name="table_num" placeholder="Table n°" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="upto" class="col-sm-2 control-label"></label>
                        <div class="col-sm-2">
                          <input type="submit" class="form-control btn btn-primary" />
                        </div>
                      </div>
                    </form>
                </div>
            </div>
</div>
</body>
</html>