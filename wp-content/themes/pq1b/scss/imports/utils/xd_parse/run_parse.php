<?php

$cssFiles = preg_grep('#min.css#', glob(__DIR__ . "/xd_fireblade_exports/**/*.css"), PREG_GREP_INVERT);

//echo "<pre>" . print_r($cssFiles, true) . "</pre>";

$buffer = "";
    foreach ($cssFiles as $cssFile) {
        $buffer .= file_get_contents($cssFile);
    }
  
$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);   
$buffer = str_replace(': ', ':', $buffer);
$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
  

function BreakCSS($buffer) {

    $results = array();

    preg_match_all('/(.+?)\s?\{\s?(.+?)\s?\}/', $buffer, $matches);
    
    foreach($matches[0] AS $i=>$original)
        foreach(explode(';', $matches[2][$i]) AS $attr)
            if (strlen(trim($attr)) > 0) // for missing semicolon on last element, which is legal
            {
                list($name, $value) = explode(':', $attr);
                $n = preg_replace('/[#.]/', '', $matches[1][$i]);
                $n = str_replace(' ', '-', $n);
                $n = strtolower($n);

            
                
                $results[$n][trim($name)] = trim($value);

            }
    return $results;
    
    // sort then run a loop

    
    
}

echo "<pre>" . print_r (BreakCSS($buffer),true) . "</pre>";

$fp = fopen(__DIR__ . '/scss/map/_xd_map.json', 'w');

if(fwrite($fp, json_encode(BreakCSS($buffer))) === FALSE) {
    echo "_xd_map.json error try again.";
}
echo "_xd_map.json successfully created.";
fclose($fp);

?>