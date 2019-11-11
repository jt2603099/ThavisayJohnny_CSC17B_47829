<?php

$surveyName = isset($_POST["surveyName"]) ? $_POST["surveyName"] : '';
$surveyDescription = isset($_POST["surveyDescription"]) ? $_POST["surveyDescription"] : '';
$Answer1 = isset($_POST["Answer1"]) ? $_POST["Answer1"] : '';
$Answer2 = isset($_POST["Answer2"]) ? $_POST["Answer2"] : '';
$Answer3 = isset($_POST["Answer3"]) ? $_POST["Answer3"] : '';

$ok = true;
$messages = array();


if (!isset($surveyName) || empty($surveyName)) {
    !$ok;
    $messages[] = "Name of survey cannot be empty!";
}

if (!isset($surveyDescription) || empty($surveyDescription)) {
    !$ok;
    $messages[] = "Description of survey cannot be empty!";
}

if (!isset($Answer1) || empty($Answer1)) {
    !$ok;
    $messages[] = "First answer of survey cannot be empty";
}

if (!isset($Answer2) || empty($Answer2)) {
    !$ok;
    $messages[] = "Second answer of survey cannot be empty!";
}

if (!isset($Answer3) || empty($Answer3)) {
    !$ok;
    $messages[] = "Third answer of survey cannot be empty!";
}

echo json_encode(
    array('ok' => $ok, 
          'messages' => $messages)
);

?>