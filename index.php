<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input as Unordered List</title>
</head>
<body>
    <form action="" method="post" >
        <label for="inputs">Enter the Inputs</label>
        <textarea name="inputs" id="" cols="20" rows="5"></textarea>
        <input type="submit" value="Generate">
    </form>


    <?php 
    
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $inputs=$_POST['inputs'];
            $items=explode("\n",$inputs);
            ?>
            <ul>
                <?php foreach($items as $i): ?>
                    <li><?php echo htmlspecialchars(trim($i)); ?></li>
                <?php endforeach ?>
            </ul>
        <?php
        }
    ?>
</body>
</html>