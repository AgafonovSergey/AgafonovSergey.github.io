<?PHP

  echo "<strong>_POST array:</strong> <br>";
  print_r($_POST);
  echo "<br><br><br>";



if (!empty($_POST)) {

 	$message = "Вам пришло новое сообщение с сайта: \n "
 	. "Имя отправителя: " . $_POST['userName'] . "\n"
    . "Email отправителя: " . $_POST['userEmail'] . "\n"
    . "Сообщение: \n " . $_POST['message'];

	$resultMail = mail("sergey.agafonov.97@mail.ru", "Сообщение с сайта", $message );

	if ( $resultMail) {
		echo "Сообщение отправлено успешно";
	} else {
		echo "Что-то пошло не так";
	}


}





// <!--  <form action="index.php" method="post">
//   <input type="text" name="userName" placeholder="Ваше имя"><br>
//   <input type="text" name="userEmail" placeholder="Ваш Email"><br>
//   <textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение"></textarea>
//   <br>
//   <input type="submit" value="Отправить форму!">
// </form> 
//  -->





// if (!empty($_POST)) {

//     $message= "Вам пришло новое сообщение с сайта: \n"
//     . "Имя отправителя: " . $_POST['username'] . "\n"
//     . "Пароль отправителя: " . $_POST['userpassword'] . "\n"
//     . "Email отправителя: \n " . $_POST['useremail'];

// $Result= mail("sergey.agafonov.97@mail.ru", "Сообщение с сайта", $message);

//   if ($Result) {
// echo "Все правильно";
//   } else {
// echo "Ошибка";
//   }} 
//