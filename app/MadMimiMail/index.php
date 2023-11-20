<?php
require('MadMimi.class.php');
$mimi = new MadMimi('gowtham.rv@borderlessaccess.com', '0f7e01c38beba729b8ce512d6229c2fd');
$options = array(
       'promotion_name' => 'Test Promotion',
       'recipients' => 'Nicholas Young <praveen.k@borderlessaccess.com>',
       'subject' => 'Testing the Mailer API',
       'from' => 'Mad Mimi <no-reply@madmimi.com>'
);
$html_body = "<html><head><title>My title</title></head>
<body>Body content[[tracking_beacon]]</body></html>";
$mimi->SendHTML($options, $html_body);