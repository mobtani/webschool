<?php
echo "
<article>
<section>
<img src='{$row[imgSrc]}'><br>
<section>
<h4>
<a href='productDetails.php?id={$row['id']}'>
نام کالا: {$row['name']}
</a>
</h4>
<section>
<p>
<span>قیمت کالا :</span> ". number_format($row['price']) ." تومان<br>
<span>توضیحات مربوطه</span> ". $row['description'] ." <br>
<br>
</p>
</section>
</section>

</section>
</article>
";
?>