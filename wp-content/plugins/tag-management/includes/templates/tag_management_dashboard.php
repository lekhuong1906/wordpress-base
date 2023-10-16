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
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .custom-ul li {
        display: flex;
        margin: 5px 0;
        align-items: center;
    }

    .custom-ul input[type="checkbox"] {
        margin-right: 5px;
    }
</style>

<div class="wrap nosubsub">
    <h1 class="wp-heading-inline">Tag Add</h1>
    <div class="wp-clearfix">

        <form action="#" method="get">
            <div class="row">

                <div class="col-wrap mr-3">
                    <div class="form-wrap">
                        <label for="tag_name">Description</label>
                        <select name="tag_name" id="parent" class="postform" aria-describedby="parent-description">
                            <option value="-1" hidden>--Sellect--</option>
                            <!-- <option class="level-0" value="1">--Slect--</option> -->
                            <option value="">[Google Analytics] Globla site tag</option>
                            <option value="">[Google Ads] Global site tag</option>
                            <option value="">[Google Ads] Conversion tag</option>
                            <option value="">[Yahoo! Ads] Site general tag</option>
                            <option value="">[Yahoo! Ads] Conversion tag</option>
                            <option value="">[TikTok Ads] TikTok Pixel</option>
                            <option value="">[Meta Ads] Meta pixel</option>
                            <option value="">[Microsoft Advertising] UET tag</option>
                            <option value="">[Twitter Ads] Twitter Pixel</option>
                            <option value="10">Other</option>
                        </select>

                    </div>
                </div>

                <div class="col-wrap col-wrap--hidden mr-3">
                    <div class="form-wrap">
                        <label for="name_entry">Name entry</label>
                        <input name="name_entry" type="text" placeholder="Enter Name Entry">
                    </div>
                </div>

                <div class="col-wrap col-wrap--hidden mr-3">
                    <div class="form-wrap">
                        <label for="tag_name">Position</label>
                        <select name="tag_name" id="parent" class="" aria-describedby="parent-description">
                            <option value="-1" hidden>--Sellect--</option>
                            <option value="">"head"</option>
                            <option value="">"body"</option>
                        </select>

                    </div>
                </div>

                <div class="col-wrap mr-3">
                    <div class="form-wrap">
                        <label for="tag_name">Instalation Page</label>
                        <ul class="custom-ul">
                            <li><input type="checkbox" id="item1"> <label for="item1">All</label></li>
                            <li><input type="checkbox" id="item2"> <label for="item2">Thank Page</label></li>
                            <li><input type="checkbox" id="item3"> <label for="item3">Top Page</label></li>
                            <li><input type="checkbox" id="item3"> <label for="item3">Application Page</label></li>
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
            <button class="button-primary">Add</button>
        </form>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#parent').on('change', function() {
            let value = jQuery(this).val();
            if (value == 10) {
                jQuery('.col-wrap.col-wrap--hidden').css('display', 'block');
            } else {
                jQuery('.col-wrap.col-wrap--hidden').css('display', 'none');
            }
        });
    })
</script>