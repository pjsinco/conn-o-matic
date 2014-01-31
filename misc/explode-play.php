#!/usr/bin/env php
<?php 

$str = "Did you know the JAOA is interested in basic science articles? Here's what you can do to help increase such submissions:

Explain to students and researchers outside of the osteopathic profession how their research may build on the evidence base of the osteopathic tenets.

Encourage these investigators to submit their basic science research articles to the JAOA. Researchers who prefer to publish their studies in basic science journals should be encouraged to submit derivative articles, in which they explain how their original work connects to and supports the tenets.";

$arr = explode(PHP_EOL, $str);

print_r($arr);

?>
