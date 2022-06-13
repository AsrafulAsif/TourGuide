<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51KAr35J7vdFLF9e7bzz7BXcwB7XMV0jpAG2vfXTM5WcapsgGixh5SRnepCb7Nvy8pvvAK7fjiJ3N9Mc8ehocO7PQ00J1U9kyBb";

$secretKey="sk_test_51KAr35J7vdFLF9e7vhltrXcjD56IZTQZ0xy9JjNwbBEMRKwNt6MGbL3IBAQolOiB3ZIJF55Cx1n8ktXcrGjQCQr300qqHXyQHU";

\Stripe\Stripe ::setApikey($secretKey);
?>