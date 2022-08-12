<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Телефоны</title>
<link href="" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="jquery-3.5.0.min.js"></script>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/></head>
<body>

<h1>Добавление записи</h1>
<form action="func.php" method="post">
    <input type="text" name="tel" id="tel" placeholder="Введите номер телефона">
    <input type="text" name="name" id="name" placeholder="Введите имя">
    <input type="text" name="dataa" id="dataa" placeholder="Введите дату">
    <button type="submit" id="btn" class="butclass">Войти</button>
</form><a href="./indextabl.php">Таблица</a><br>
<div id="res">Успешно</div>
<script>
$('#res').hide();
$(Document).on('click','.butclass',function(e){
    e.preventDefault();

    var tel=$('#tel').val();
    var name=$('#name').val();
    var dataa=$('#dataa').val();
    
    $.ajax({
        url:'./func.php',
        data:{'tel':tel, 'name':name, 'dataa':dataa},
        dataType: "html",
        method:"post",
        success:function(data){

            $('#res').show(1000);
            
        },
    });
    });
</script>
</body></html>
