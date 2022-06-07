<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/addproduct.css">
    <title>Product Add</title>
</head>
<body>

<div class="product-add-header">
    <header class="flex-between-center">
        <h2>Product List</h2>
        <div class="product-add-header-buttons flex-between-center">
            <div>
                <button>save</button>
            </div>

            <div>
                <button>cancel</button>
            </div>
        </div>
    </header>
</div>


<form action="" method="post">
    <div>
        <label for="sku">SKU</label>
        <input name="sku" id="sku" type="text">
    </div>

    <div>
        <label for="name">Name</label>
        <input name="name" id="name" type="text">
    </div>

    <div>
        <label for="price">Price($)</label>
        <input name="price" id="price" type="number">
    </div>

    <div>
        <label for="type_switcher"></label>
        <select name="type_switcher" id="product_type">
            <option value="" disabled selected >Type Switcher</option>
            <option value="dvd">DVD</option>
            <option value="furniture">Furniture</option>
            <option value="book">Book</option>
        </select>
    </div>

    <div class="products">
        <div class="dvd">
            <div>
                <label for="size">Size(MB)</label>
                <input type="text" name="size" id="size">
            </div>
        </div>

        <div class="furniture">
            <div>
                <label for="height">height(CM)</label>
                <input type="text" id="height" name="height">
            </div>

            <div>
                <label for="width">Width(CM)</label>
                <input type="text" name="width" id="width">
            </div>

            <div>
                <label for="length">Length</label>
                <input type="text" name="length" id="length">
            </div>

        </div>

        <div class="book">
            <div>
                <label for="weight">Weight(KG)</label>
                <input type="text" name="weight" id="weight">
            </div>
        </div>
    </div>
    <div>
        <button>save</button>
    </div>
</form>

<footer class="product-list_footer page-content_footer">
    <p>Scandiweb Test Assignment</p>
</footer>
</body>
</html>