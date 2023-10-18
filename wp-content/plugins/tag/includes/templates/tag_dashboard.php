<?php
$url = admin_url('admin.php?page=add-tag-management'); //id
$url_edit = admin_url('admin.php?page=edit-tag-management');

$data = new Tag();
$items = $data->get();

?>

<style>
    /* Thêm CSS để tùy chỉnh giao diện bảng */
    table {
        width: 100%;
        background-color: #fff;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .mb-5 {
        margin-bottom: 10px;
    }
</style>
<div class="wrap">
    <h1>Dashboard</h1>
    <a class="button" href="<?= $url ?>">Add New</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        <?php foreach ($items as $item) : ?>
            <tr>
                <td><input type="checkbox" name="id"></td>
                <td><?= $item->name ?></td>
                <td><?= $item->description ?></td>
                <td><a class="button" href="<?php echo $url_edit ."&id=". $item->id ?>">Add New</a></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>