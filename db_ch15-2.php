<?php
require 'db.inc.php';

$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or
    die ('Unable to connect. Check your connection parameters.');
mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));

$query = 'INSERT INTO ecomm_products
        (product_code, name, description, price)
    VALUES
        ("01",
        "wolverine outfit",
        "Feel the rage of wolverine in this x-men suit ' .
        'all made of high quality and 100% preshrunk cotton.",
         17.95),
         ("02",
         "Cap america outfit", 
         "Save the world and proudfully become captain america ' .
         'along with captain\'s mask.",
         5.95),
         ("03",
         "Wonder Woman",
         "Girls be ready to look wonder ' .
         'Be ready to become wonder woman ' .
         'and save the world.",
         8.95),
         ("04",
         "Superman body suit",
         "Number one hero of dc universe is here ' .
         'be the superman among your friends ' .
         'and fight your way through the super-villains",
         99.95),
         ("05",
         "spider-man",
         "Knock Knock its your friendly neighbourhood ' .
         'Specially designed for portability and stealth, ' .
         'time to be a radioactive spidey.",
         139.95),
         ("06",
         "thor suit", 
         "This is it , the mightiest thor is here ' .
         'With a hammer which can only be lift by non other than, ' .
         'thor, that is you ' .
         'Beware loki!!.",
         199.95)';
mysql_query($query, $db) or die(mysql_error($db));

echo 'Success!';
?>