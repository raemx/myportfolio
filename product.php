<?php
/*Allows for no repetition of code when adding new products*/
function product($productname, $productprice, $productimg, $productdesc){
  $element=
  "<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"shop.php\" method=\"post\">
      <div class=\"card shadow\">

        <div>
          <img src=\"$productimg\" class=\"img-fluid card-img-top\">
        </div>

        <div class=\"card-body\">
          <h5 class=\"card-title\">$productname</h5>
          <p class=\"card-text\">
            $productdesc
          </p>
          <h5>
            <span class=\"price\">
            £$productprice
          </span>
          </h5>
          <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart<i class=\"fas fa-shopping\"></i</button>
        </div>

        </div>
      </form>
    </div>
  ";
echo $element;
}
?>
