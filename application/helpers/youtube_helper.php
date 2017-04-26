<?php

function youtube($url) {

    //http://www.youtube.com/watch?v=eYEtiWUHCRM&feature=g-all-u
    $code = preg_replace(array('/.*v=/', '/&.*/'), '',  $url);
    return "<iframe width='560' height='315' src='http://www.youtube.com/embed/$code' frameborder='0' allowfullscreen></iframe>";
}