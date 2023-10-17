<?php

$post = new Tag();
$pages = $post->get_page();


$url = admin_url('admin.php?page=tag_edit&id=' . 1); //id
echo $url;die;
?>

<style>
    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    .col-wrap--hidden {
        display: none;
    }

    .mr-3 {
        margin-right: 3%;
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

        /* white-space: normal; */
    }

    .custom-ul input[type="checkbox"] {
        margin-right: 5px;
    }
</style>

<div class="wrap nosubsub">
    <h1 class="wp-heading-inline">Tag Add</h1>
    <div class="wp-clearfix">
        <a class="button" type="submit" href="<?=$url?>">Submit</a>
        <form action="" method="post">
            <div class="row">

                <div class="col-wrap mr-3">
                    <div class="form-wrap">
                        <label for="tag_name">Description</label>
                        <select name="tag_name" id="parent" class="postform" aria-describedby="parent-description">
                            <option value="-1" hidden>--Sellect--</option>
                            <?php foreach ($tag_names as $tag_name) : ?>
                                <option value=""><?= $tag_name->name ?></option>
                            <?php endforeach; ?>
                            <option value="10">Other</option>
                        </select>

                    </div>
                </div>

                <div class="col-wrap col-wrap--hidden mr-3">
                    <div class="form-wrap">
                        <label for="name_entry">Name</label>
                        <input name="name_entry" type="text" placeholder="Enter Name Entry">
                    </div>
                </div>

                <div class="col-wrap col-wrap--hidden mr-3">
                    <div class="form-wrap">
                        <label for="tag_name">Position</label>
                        <select name="tag_name" id="parent" class="" aria-describedby="parent-description">
                            <option value="-1" hidden>--Sellect--</option>
                            <option value="0">&lt;head&gt;</option>
                            <option value="1">&lt;body&gt;</option>
                        </select>

                    </div>
                </div>

                <div class="col-wrap mr-3">
                    <div class="form-wrap">
                        <label for="tag_name">Instalation Page</label>
                        <!-- <div class="search-bar">
                            <input style="width:100%;" type="text" placeholder="Search">
                        </div> -->
                        <ul class="custom-ul">
                            <li><input type="checkbox" id="all"> <label for="item1">All</label></li>
                            <?php foreach ($pages as $page) : ?>
                                <li><input type="checkbox" id="<?= $page->id ?>"> <label for="<?= $page->id ?>"><?= $page->post_title ?></label></li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>

                <div class="col-wrap">
                    <div class="form-wrap">
                        <label for="tag-description">Tag</label>
                        <textarea name="description" id="tag-description" rows="5" cols="40" aria-describedby="description-description"></textarea>
                    </div>
                </div>

            </div>
            <input type="submit" class="button-primary" name="submit" value="Add">
        </form>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function() {
        //show name entry and installation position
        jQuery('#parent').on('change', function() {
            let value = jQuery(this).val();
            if (value == 10) {
                jQuery('.col-wrap.col-wrap--hidden').css('display', 'block');
            } else {
                jQuery('.col-wrap.col-wrap--hidden').css('display', 'none');
            }
        });

        //
        var $checkboxes = jQuery('input[type="checkbox"]').not('#all');

        jQuery('#all').change(function() {
            var isChecked = jQuery(this).prop('checked');
            jQuery('input[type="checkbox"]').prop('checked', isChecked);
        });

        $checkboxes.change(function() {
            // Kiểm tra xem tất cả các checkbox trừ "All" có được chọn không
            var allChecked = $checkboxes.length === $checkboxes.filter(':checked').length;
            jQuery('#all').prop('checked', allChecked);
        });
    })
</script>