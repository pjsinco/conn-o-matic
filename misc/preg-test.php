#!/usr/bin/env php

<?php 

$str = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu imperdiet velit. Etiam nec mattis dui. Vivamus quam lectus, tempor a vehicula ut, laoreet quis tellus. Sed faucibus in lectus at auctor. Proin convallis dictum arcu, quis ornare risus mollis ac. Praesent porta consequat lectus, sed tincidunt elit gravida aliquam. Donec nec tortor sed lectus faucibus lobortis. Aliquam in turpis tempor, tincidunt massa a, condimentum enim. Fusce sodales diam eget purus cursus, non gravida lectus bibendum. Proin et commodo nibh, non consectetur justo. Morbi ultrices mauris sed leo sollicitudin, ac tempus neque scelerisque. Sed non felis non nulla vehicula faucibus sit amet nec sem. Sed congue pharetra mi, eu pharetra ante varius id. Praesent lectus mauris, tincidunt non sagittis sit amet, consectetur eget dui. Cras ut vulputate sapien.</p>

<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus massa ante, pretium non lorem eget, tempor convallis augue. Ut nec augue bibendum, pellentesque purus id, vulputate magna. Nam id vestibulum felis. Phasellus id sollicitudin dui, eget interdum nunc. Nullam id orci orci. Nam id vehicula nibh. Phasellus imperdiet cursus erat. Nam luctus mattis semper. Praesent quis sagittis erat, ac tempus nibh.</p>

<p>In vitae metus turpis. Duis a nulla fermentum, aliquam risus in, fermentum ante. Integer ullamcorper condimentum tincidunt. Vivamus tempor ut ante a vestibulum. Fusce fermentum aliquam quam vel fermentum. Praesent et dolor vestibulum, commodo purus et, hendrerit leo. Quisque nec pulvinar quam. Nulla laoreet lectus in rutrum facilisis.</p>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam et rutrum purus. Curabitur molestie sem a leo luctus pharetra. Sed lacinia, arcu id eleifend lobortis, odio eros vestibulum lacus, non sollicitudin sapien justo fermentum turpis. Donec blandit dui ante, sit amet ornare neque tempor at. Pellentesque eu neque sed turpis mattis laoreet. Quisque bibendum sapien ac consectetur porttitor. Suspendisse iaculis nunc diam, in venenatis tellus accumsan a. Etiam sit amet euismod leo, nec cursus enim. Proin ut viverra ipsum, vitae imperdiet libero. Quisque vestibulum, ante eu condimentum auctor, enim massa gravida purus, vel rutrum purus ante sed nunc. Suspendisse at sapien ut nisl pellentesque cursus. Donec pharetra sit amet mi pulvinar tincidunt. Curabitur gravida, leo nec vehicula mattis, lacus urna ultrices felis, luctus ultrices justo orci ac orci. Fusce vitae mas.</p>';

$style = array(
  'font-size' => '13px',
  'color' => '#333333',
  'line-height' => '17px',
  'margin-top' => '0px',
  'margin-right' => '20px',
  'margin-bottom' => '10px',
  'margin-left' => '20px'   
);

$p_style = '';
foreach ($style as $key => $value) {
  $p_style .= $key . ':' . $value . ' ';
}

echo '<p style="' . $p_style . '">';

//echo str_replace('<p>', '<p style="color: fuchsia">', $str);

?>
