<?php


$id = $_GET['id'];
$data = new Tag();
$item = $data->find($id);
var_dump($item);
?>
<div class="wrap">
    <h2>Edit Tag</h2>
    <form action="process.php" method="POST">
        <input name="id" hidden value="1">
        <div class="form-wrap">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?=$item->name?>" required>
            <br><br>
        </div>

        <div class="form-wrap">
            <label for="">Description:</label>
            <textarea name="description" id="description" rows="5" cols="40" aria-describedby="description-description"><?=$item->description?></textarea>
            <br><br>
        </div>

        <input type="submit" value="Submit">
    </form>

</div>