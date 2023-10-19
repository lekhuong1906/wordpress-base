<?php

$id = $_GET['id'];

$data = [
    'name' => "Ngyen Van A",
    'tag_id' => '',
    'tag_name' => "Cookie",
    'tag' => "Cookie",
    'position' => 1,
    'pages' => [1, 2, 3, 4],
    'all_page' => [1, 2, 3, 4, 5, 6, 7, 8, 9],
    'active' => 1,
    'all_tag' => [1 => 'Cookie', 2 => 'Cookie 1', 3 => 'Cookie 2', 4 => 'Cookie 3', 5 => 'Cookie 4', 6 => 'Cookie 5']
];

// echo "<pre>";
// var_dump($data['all_tag']);die;

?>
<?php

$nds_add_meta_nonce = wp_create_nonce('nds_add_user_meta_form_nonce');
?>

<style>
    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    .mr-3 {
        margin-right: 3%;
    }

    .col-wrap--hidden {
        display: none;
    }

    .custom-ul {
        background-color: #fff;
        overflow: scroll;
        overflow-x: hidden;
        max-height: 130px;
        max-width: 300px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .custom-ul li {
        display: flex;
        margin: 5px 0 5px 3%;
        align-items: center;
        margin-bottom: 5px;

        word-wrap: break-word;
    }

    .custom-ul input[type="checkbox"] {
        margin-right: 5px;
    }
</style>

<div class="wrap nosubsub">
    <h1 class="wp-heading-inline">Tag Edit</h1>
    <div class="wp-clearfix">

        <form action="#" method="POST">
            <input type="hidden" name="action" value="hanlde_add_tag" />
            <input type="hidden" name="nds_add_user_meta_nonce" value="<?php echo $nds_add_meta_nonce ?>" />
            <div class="row">
                <div class="col-wrap mr-3">
                    <div class="form-wrap">
                        <label for="tag_id">Name</label>
                        <select id="tag_id" name="tag_id" class="postform" aria-describedby="parent-description">
                            <option value="<?= $data['tag_id'] ?>" hidden><?= $data['tag_name'] ?></option>
                            <?php foreach ($data['all_tag'] as $name) : ?>
                                <option value=""><?= $name ?></option>
                            <?php endforeach; ?>
                            <option value="null">Other</option>
                        </select>

                    </div>
                </div>

                    <div id="name" class="col-wrap aaa <?php echo ($data['tag_id']==null)? '' : 'col-wrap--hidden'?> mr-3">
                        <div class="form-wrap">
                            <label for="name">Name</label>
                            <input name="name" type="text" placeholder="Enter Name" value="<?= $data['name'] ?>">
                        </div>
                    </div>

                    <div id="position" class="col-wrap aaa <?php echo ($data['tag_id']==null)? '' : 'col-wrap--hidden'?> mr-3">
                        <div class="form-wrap">
                            <label for="position">Position</label>
                            <select name="position" id="parent" aria-describedby="parent-description">
                                <option value="<?= $data['position'] ?>" hidden><?php echo htmlspecialchars($data['position'] == 1 ? '<head>' : '<body>') ?></option>
                                <option value="0">&lt;head&gt;</option>
                                <option value="1">&lt;body&gt;</option>
                            </select>
                        </div>
                    </div>

                <div class="col-wrap mr-3">
                    <div class="form-wrap">
                        <label for="instalation_page">Instalation Page</label>
                        <ul class="custom-ul">
                            <li><input type="checkbox" id="all" name="instalation_page[]" value="all"> <label for="all">All</label></li>
                            <?php foreach ($data['all_page'] as $page) : ?>
                                <li>
                                    <input id="<?php echo 'checkbox-' . $page ?>" type="checkbox" name="instalation_page[]" value="<?= $page ?>"   <?php echo in_array($page,$data['pages'])? 'checked' : '' ?> > 
                                    <label for="<?php echo 'checkbox-' . $page ?>"><?= $page ?></label>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>

                <div class="col-wrap">
                    <div class="form-wrap">
                        <label for="tag">Tag</label>
                        <textarea id="tag" name="tag" rows="5" cols="40" aria-describedby="description-description"><?= $data['tag'] ?></textarea>
                    </div>
                </div>

            </div>
            <input type="submit" class="button-primary" name="submit" value="Update">
        </form>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function() {
        //Show data when load page
        jQuery('#tag_id').on('change', function() {
            let value = jQuery(this).val();
            if (value == "null") {
                jQuery('#name,#position').removeClass('col-wrap--hidden');
            } else {
                jQuery('#name,#position').addClass('col-wrap--hidden');
            }
        });


        // Sellection when after editing
        let $checkboxes = jQuery('input[type="checkbox"]').not('#all');
        jQuery('#all').change(function() {
            let isChecked = jQuery(this).prop('checked');
            jQuery('input[type="checkbox"]').prop('checked', isChecked);
        });

        $checkboxes.change(function() {
            // Check if all checkboxes except "All" are selected
            let allChecked = $checkboxes.length === $checkboxes.filter(':checked').length;
            jQuery('#all').prop('checked', allChecked);
        });


    })
</script>