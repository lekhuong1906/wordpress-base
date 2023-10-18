<?php

?>

<div class="wrap">
    <h2>Add Tag</h2>
    <form action="<?php echo admin_url('admin-post.php'); ?>" method="POST">
        <div class="form-wrap">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br><br>
        </div>

        <div class="form-wrap">
            <label for="">Description:</label>
            <textarea name="description" id="description" rows="5" cols="40" aria-describedby="description-description"></textarea>
            <br><br>
        </div>

        <input type="submit" value="Submit">
    </form>

</div>