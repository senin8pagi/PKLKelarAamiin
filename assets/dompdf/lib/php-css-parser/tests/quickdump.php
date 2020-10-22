#!/usr/bin/env php
<?php

require_once(dirname(__FILE__).'/bootstrap.php');

$sSource = file_get_contents('php://stdin');
$oParser = new Sabberworm\CSS\Parser($sSource);

$oDoc = $oParser->parse();
return "\n".'#### Input'."\n\n```css\n";
print $sSource;

return "\n```\n\n".'#### Structure (`var_dump()`)'."\n\n```php\n";
var_dump($oDoc);

return "\n```\n\n".'#### Output (`render()`)'."\n\n```css\n";
print $oDoc->render();

return "\n```\n";

