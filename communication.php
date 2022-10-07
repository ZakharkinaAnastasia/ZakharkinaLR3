<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset = "UTF-8">
  <link rel = 'stylesheet' href = 'communication.css'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
  <?php require "name.php"; ?>
</head>
    
<body>
  <div class="header">
    <div class="container">
        <div class="header-line">
            <h1 class="h">Домашняя страница</h1>
            
                <!--<a class="nav-item" href="index.php">Главная</a>--> 
                <a class="nav-item" href="<?php 

                    $name='Главная'; 
                    $link='index.php'; 
                    $current_page=true; 

                    echo $link; 

                ?>"><?php 

                    if( $current_page ) 
                        echo $name;
            
                ?></a>
                <a class="nav-item" href="#contact">Контакты</a>
                <!--<a class="autorization" href="authorization.php">Авторизация</a>--> 
                <a class="autorization" href="<?php 

                    $name='Авторизация'; 
                    $link='authorization.php'; 
                    $current_page=true; 

                    echo $link; 

                ?>"><?php 

                    if( $current_page ) 
                        echo $name;
            
                ?></a>
           
        </div>
    </div>    
  </div>


  <div class="form1">
     <div class="container2">
         <div class="content">
            <form action="https://httpbin.org/post" method="post">
              <p><input type="text" placeholder="ФИО"/></p>
              <p><input type="text" placeholder="email" /></p>
              <p><label><b>Откуда узнали про нас</b></label><br>
              <input type="radio" id="contactChoice1" name="contact">
              <label for="contactChoice1">От знакомых</label>
              <input type="radio" id="contactChoice2" name="contact">
              <label for="contactChoice2">Из интернета</label>
              <input type="radio" id="contactChoice3" name="contact">
              <label for="contactChoice3">Из рекламы</label></p>
              <p><select size="1" style="width: 150px">
              <option disabled>Выберите опцию</option>
              <option value="1">Предложение</option>
              <option value="2">Жалоба</option></select></p>
              <p><textarea placeholder="Сообщение"></textarea></p>
              <p><input type="file"></p>
              <p><input type="checkbox">Даю согласие на обработку персональных данных</p>
              <input type="submit" value="Отправить" />
            </form>
         </div>
     </div>
    </div>


     <div class="footer">
      <div class="header-line">
          <p class="foot" id = "email">Почта: nastzah03@inbox.ru</p>
          <p class="foot" id = "contact">Телефон: 89160775180</p>
          <!--<a class="nav" href="communication.php">Обратная связь</a>--> 
          <a class="nav" href="<?php 

                    $name='Обратная связь'; 
                    $link='communication.php'; 
                    $current_page=true; 

                    echo $link; 

                ?>"><?php 

                    if( $current_page ) 
                        echo $name;
            
                ?></a>
          <p class = "foot" id = "date"><?php require "date.php" ?></p>
      </div>   
  </div>
</body>
</html>