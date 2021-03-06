<?php
include_once "models/Poll.class.php";
$poll = new Poll($db);
//check if form was submitted
$isPollSubmitted = isset( $_POST['user-input'] );
//if it was submitted
if ($isPollSubmitted) {
  //get input received from form
  $input = $_POST['user-input'];
  //update model
  $poll->updatePoll($input);
}
$pollData = $poll->getPollData();
$pollAsHTML = include_once "views/poll-html.php";
return $pollAsHTML;
