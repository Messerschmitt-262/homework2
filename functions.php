<?php
function set_message($message, $type = 'success')
	{
		$messages = $_SESSION['messages'][$type] ?? [];
		$messages[] = $message;
		$_SESSION['messages'][$type] = $messages;
	}

function print_message()
{
	$messages = $_SESSION['messages'] ?? [];
	if($messages)
	{
		foreach($messages as $type => $message)
			foreach($message as $text)
				if($type = 'success')
			echo 'Поздравляем! :)'.'<br>';
		elseif($type = 'error')
		{

		}
		unset($_SESSION['messages']);
	}
		
}
	
function random_string($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
  $characters_length = strlen($characters);
  $random_string = '';
  for ($i = 0; $i < $length; $i++) {
     $random_string .= $characters[rand(0, $characters_length - 1)];
  }
	   return $random_string;
}