<?php

class ViewProduct extends Product {

    public function showAllProducts() { 
        $datas = $this->getAllProducts();

            echo    '<table class="product-table">';
            echo    '<tr class="product-row"> </tr>
                     <th class="product-row-header"></th>
                     <th class="product-row-header">ID</th>
                     <th class="product-row-header">Name</th>
                     <th class="product-row-header">Description</th>
                     <th class="product-row-header">Price</th>
                     <th class="product-row-header">Amount</th>
                     <th class="product-row-header">Updated</th>';

        foreach ($datas as $data) {
            echo '<tr class="product-row product-item">';

                echo '<td class="product-item-name"><a href="product.php?id=' .$data['id']. '"><button>E</button>';              
                echo '<td class="product-item-name" style="text-align: center;">' . $data['id'] . '</td>';
                echo '<td class="product-item-name">' . $data['Name'] . '</td>';
                echo '<td class="product-item-name">' . $data['Description'] . '</td>';
                echo '<td class="product-item-name">$' . $data['Price'] . '</td>';
                echo '<td class="product-item-name" style="text-align: center;">' . $data['Amount'] . '</td>';
                echo '<td class="product-item-name">' . $data['Updated'] . '</td>';


            echo '</tr>';
        }
    }

    public function showProduct($query_id) {
        $datas = $this->getAProduct($query_id);
        foreach ($datas as $data) {

            echo '<form class="form signpup-form" action="Database/Scripts/editproduct.scr.php" method="post">';
                echo '<input class="input signup-input" type="text" name="pid" style="display: none;" value=' .$query_id. '>';
                echo '<label class="signup-input" for="npname">Name</tr><input class="input signup-input" type="text" id="npname" name="newproductname" value="' .$data['Name']. '">';
                echo '<label class="signup-input" for="npdesc">Description</label><input class="input signup-input" type="text" id="npdesc" name="newproductdesc" value="' .$data['Description']. '">';
                echo '<label class="signup-input" for="npprice">Price</label><input class="input signup-input" type="text" id="npprice" name="newproductprice" value="' .$data['Price']. '">';
                echo '<label class="signup-input" for="npamount">Amount</label><input class="input signup-input" type="text" id="npamount" name="newproductamount" value="' .$data['Amount']. '">';
                echo  '<button class="btn btn-primary signup-input type="submit" name="editproduct-submit">Submit</submit>';
            echo '</form>';
        }
    }
}

?>