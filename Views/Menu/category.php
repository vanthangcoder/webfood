<?php foreach($Categories as $category) {?>
    <li><a href="?act=menu&loai=<?= $category['category_id'];?>"><?= $category['category_name'] ?></a></li>
<?php } ?>