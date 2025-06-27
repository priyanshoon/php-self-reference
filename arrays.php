<?php

$list = array("id" => 4, 0, 10, "limit" => 30, 40);
$country = ["India", "Japan", "Brazil", "Indonasia", "Denmark"];

echo count($list);

echo $list["id"];
echo $country[2];

for ($i = 0; $i < count($country); $i += 1) {
}

echo "\n";
foreach ($country as $name) {
    echo $name;
    echo "\n";
}

// for html rendering
foreach ($country as $i => $name): ?>
    <li>
        <article>
            <h1><?php echo $i ?> : <?php echo $name ?></h1>
        </article>
    </li>
<?php
endforeach;
