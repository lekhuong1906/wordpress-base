
<?php
//get data
    global $post;
    $post_id = $post->ID;
    $product_price = get_post_meta($post_id,'product_price',true);
    $sale_off = get_post_meta($post_id,'saleoff',true);
    $quantity = get_post_meta($post_id,'quantity',true);

?>

<table class="form-table">
    <tr>
        <th scope="row">
            <label for="blogname">Product Price</label>
        </th>
        <td>
            <input type="text" name="product_price" class="regular-text" value="<?php $product_price ?>" >
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="saleoff">Sale Off</label>
        </th>
        <td>
            <input type="text" name="saleoff" class="regular-text" value="<?php $sale_off ?>" >
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="quantity">Quantity</label>
        </th>
        <td>
            <input type="text" name="quantity" class="regular-text" value="<?php $quantity ?>" >
        </td>
    </tr>
</table>

