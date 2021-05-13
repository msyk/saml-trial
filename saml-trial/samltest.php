<?php
//require_once('/var/www/demo_im_com/simplesamlphp/lib/_autoload.php');
require_once('lib/src/INTER-Mediator/INTER-Mediator.php');

use SimpleSAML\Auth\Simple;
$as = new Simple('default-sp');
var_export($as);
$as->requireAuth();
$name=$as->getAuthData("saml:sp:NameID");
$attributes=$as->getAttributes();
print_r($attributes);
echo ($attributes["uid"][0]);

?>

<html>
<body>
<h1>こんにちは <?php echo ($attributes["uid"][0]); ?></h1>
<a href="/saml-trial/lib/src/INTER-Mediator/vendor/simplesamlphp/simplesamlphp/www/module.php/core/authenticate.php?as=default-sp&logout">logout</a>
</body>
</html>
