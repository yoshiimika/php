<?php
$people =[
    [
        "name" => "Taro",
        "age" => "25歳",
        "gender" => "men"
    ],
    [
        "name" => "Jiro",
        "age" => "20歳",
        "gender" => "men"
    ],
    [
        "name" => "Hanako",
        "age" => "16歳",
        "gender" => "women"
    ]
    ];

foreach ($people as $person){
    echo $person["name"]."(".$person["age"].$person["gender"].")"."<br>";
}