<?php

define("COOKIE_OBJECT", "CookieObject");

class Survey {
    
    public function __construct($parameters = array()) {
        foreach($parameters as $key => $value) {
            $this->$key = $value;
        }
    }

    public function displayCookie() {
        foreach($this as $key => $value) {
            print "$key => $value\n";
        }
    }

}

if (!isset($_COOKIE[COOKIE_OBJECT])) {
    echo "Missing cookie named " .COOKIE_OBJECT. " is not set!";    
} else {
    //echo ($_COOKIE[COOKIE_OBJECT]);
    $obj = json_decode($_COOKIE[COOKIE_OBJECT], true);
    $phpClassFromJSCookie = new Survey($obj);
    echo "Display as PHP Class: <br>";
    foreach ($phpClassFromJSCookie as $key => $value) {
        echo "$key : $value<br>";
    }
}
?>