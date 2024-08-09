<h1>Arrays</h1>
<?php
//inedxed or numeric arrays
$fname = ["John","Tom"];
print_r($fname);
echo '<br>';

$colors = array("Black","Green","Blue")
?>
<pre>
    <?php  print_r($colors);
    ?>
</pre>
<?php
//Associative Arrays

$users =[
    "Fullname " =>"Alex Okama",
    "email" =>"AOkama@yahoo.com",
    "phone" => "+254954095",
    
];

?>
<pre>
    <?php print_r($users);?>
</pre>
<?php
//Multidimentional Arrays

$user_details = [
    "Director" => array(
        "Fullname " =>"Alex Okama",
        "email" =>"AOkama@yahoo.com",
        "Address" =>"Mada"
        "phone" => [
            "Mobile" =>"+254954095",
            "Work" =>"+254384578",
            "cell" =>"+254728372849",


        ],)
]
?>
