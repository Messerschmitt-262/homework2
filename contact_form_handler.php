<?php
	
	//Begin a new session.
	session_start();

	//Insert file functions.php here.
	require_once 'functions.php';

	//Assign value of superglobal array $_SERVER to the variable.
	$protocol_domain = $_SERVER['HTTP_ORIGIN'];
		
	//Define max size of uploading files (per file).
	$max_filesize = 4096; //KB

	//Define legal MIME type of uploading files.
	$allowed_types = ['image/jpeg', 'image/png'];

	//Define legal extension of uploading files.
	$allowed_extensions = ['jpg', 'jpeg', 'png'];

	//Set maximum size of uploading files in php.ini.
	ini_set('upload_max_filesize', '128M');

	//Set default timezone.
	date_default_timezone_set('Europe/Kiev');

	//Assingn value from super global array $_POST, containing name of user, to the variable $name and remove space and tab characters berfore and after the string.
	$name = trim($_POST['name']);

	//Assign user email from super global array $_POST, containing user email, to the variable $email remove space and tab characters berfore and after the string.
	$email = trim($_POST['email']);

	//Assign user entered message from super global array $_POST to the variable $message remove space and tab characters berfore and after the string. 
	$message = trim($_POST['message']);

	//Verify variables $name, $email and $message not to be empty.
	if(empty($name) OR empty($email) OR empty($message))
	{
		//Halt an execution of a script and display a message.
		set_message('Пожалуйста, заполните все поля!');
	}
	//Verify acceptable length of strings stored in $name and $email variables.
	elseif (mb_strlen($name) > 250 OR mb_strlen($email) > 250)
	{
		//Halt an execution of a script and display a message.
		set_message('Слишком длинное имя или email');
	}
	//Verify user email to correspond with the template name@server.domain
	elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === !FALSE)
	{
		//Halt an execution of a script and display a message.
		set_message('Введите правильный email');
	}
	//Execute only when all above validations are passed.
	else
	{
		//Assign to the variable $filler string splitting, every new record in requests.txt file.
		$filler = "======================";

		//Open a requests.txt file in writing only mode, place the file pointer at the end of the file and assign a resource to the variable $fh.
		$fh = fopen('requests.txt', 'a');
		
		//Assingn value from subarray of super global array $_FILES to the variable $image.
		$image = $_FILES['image'];

		//Assign temporary names of uploaded files to the variable $tmp_name.
		$tmp_name = $image['tmp_name'];

		//Assign original names of uploaded files to the variable $original_name.
		$original_name = $image['name'];

		//Count number of elements in $original_name variable.
		$files_amount = count($original_name);

		//Array for record of full files paths.
		$uploaded_files_full_names = [];

		//Variable to store number of current uploading file.
		$file_number = 0;

		//Loop for handling of file.
		for($i = 0; $i < $files_amount; $i++)
		{
			//Check if file exist.
			if ($original_name[$i])
		{
			//Variable $dotpos stores number of dot position.
			$dotpos = strripos($original_name[$i], '.');
			
			//Store extension of handling file.			
			$extension = substr($original_name[$i], $dotpos + 1);

			//Check file size.
			if(filesize($tmp_name[$i]) > $max_filesize * 1024)
			{
				//Display message if file size exceeds acceptable value.
				set_message('Размер загружаемого файла превышает максиамально допустимый.');
			}
			//Check file MIME types and extensions.
			elseif(!in_array($image['type'][$i], $allowed_types) OR !in_array($extension, $allowed_extensions))
			{
				//Display message if file MIME type or extension is not premissible.
				set_message('Этот файл запрещён к загрузке.');
			}
			//If all verifications are passed, file handling begins.
			else
			{
				//Store directory name in variable.
				$dir = 'uploads';

				//Create subdirectory named from numbers 0 to 10.
				$subdir = mt_rand(0, 10);

				//Store directory and subdirectory names diveded by slash.
				$path = $dir. '/' . $subdir;
				
				//Chek if variable $path is directory.
				if(!is_dir($path))
					//Create new directory with name stored in variable $path.
					mkdir($path);


				//Begin of loop with postcondition.
				do
				{
					//Generate and store random file name.
					$random_name = random_string(8);

					//Concatenate file name with extension.
					$filename = $random_name . '.' . $extension;

					//Check existence of file.
					$is_exists = file_exists($path. '/' . $filename);

					//Chek loop condition.
				} while ($is_exists);
				
				
				//Store number of handling file.
				$file_number = $i + 1;

				//Store uploaded files full names.
				$uploaded_files_full_names [] = "Файл #".$file_number."\r\n".$protocol_domain."/".$path."/".$filename;
				
				//Move uploaded file from temporary directory to user directory.							
				$result = move_uploaded_file($tmp_name[$i], $path . '/' . $filename);

				
				//Chek if filemove successfull.
				if(!$result)
				{
					//Display message if filemove is not successfull.
					set_message('Произошла ошибка.');
				}
			}
		}
	}

	//Convert array to string with \r\n separator.
	$file_path = implode("\r\n", $uploaded_files_full_names);

		//Assigns formated date and time to the variable $date.
		$date = date('F d, Y, H:i');

		//String for writing to the request.txt file.
		$line = $date."\r\n"."Имя: ".$name."\r\n"."Email: ".$email."\r\n".$message."\r\n".$file_path.$file_number.": ".$full_file_name."\r\n".$filler."\r\n";

		//This function writes data stored in variable $line to the file request.txt adressed by variable $fh.  
		fwrite($fh, $line);

		//Close file adressed by resource stored in variable $fh.
		fclose($fh);
		
	}
	//Display message if form successfully sent.
	set_message('Спасибо за отправку формы');

	//Redirect to the index.php page when form have been sent.
	header('Location: index.php');
?>