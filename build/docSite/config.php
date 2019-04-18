<?php
define("GA_ENABLED", true);

define("ROOT_URL"           , "https://smithymx67.co.uk/Framework");
define("ROOT_DOCSITE_URL"   , ROOT_URL . "/docSite");
define("CSS_LIB"            , ROOT_URL . "/bluePallet-v1.3.2.min.css");
define("JS_LIB"             , ROOT_URL . "/yellowPallet-v1.3.2.min.js");
define("VERSION"            , "1.3.2");

require_once "../PurplePallet/Logger.php";
$logger = new \PurplePallet\Logger();
$logger->setLogLocation("/opt/lampp/htdocs/Web-Framework/logs/");
$logger->log($logger->DEFAULT, "This is a test");
echo exec('whoami');
?>
