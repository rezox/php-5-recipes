<?php
  # Recipe 5-8  / Example 3
  
  # NOTE: The output you observe from running this example
  # will very likely NOT match what is shown in the text.
  
  echo 'Output of <code>mktime()</code>: ' . mktime() . ".<br>\n";
  echo 'Output of <code>gmmktime()</code>: ' . gmmktime() . ".<br>\n";
  echo 'Local timezone: ' . date('O') . ".<br>\n";
  echo 'date/mktime: ' . date('r', mktime()) . ".<br>\n";
  echo 'date/gmmktime: ' . date('r', gmmktime()) . ".<br>\n";
  echo 'gmdate/mktime: ' . gmdate('r', mktime()) . ".<br>\n";
  echo 'gmdate/gmmktime: ' . gmdate('r', gmmktime());
?>