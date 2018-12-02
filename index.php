<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Regexp</title>
</head>
<style>
    label {
        width: 250px;
        color: blueviolet;
    }
    input[type="text"]{
        width: 400px;
        padding: 0;
        margin: 0;
    }
    input[type="submit"]{
        background-color: white;
        border: 2px solid blueviolet;
        border-radius: 10px;
        text-align: center;
        width: 150px;
        padding: 5px;
    }
    .in{
        display: flex;
        margin: 10px 50px;
    }
    span{
        font-size: 20px;
        color: blueviolet;
    }
    th{
        color: blueviolet;
        font-size: 16px;
    }
    table{
        margin-top: 50px;
    }
    form{
        margin-bottom: 50px;
    }
</style>
<body>
<form action="regexp.php" method="post" style="display: flex; flex-direction: column; align-items: center">
    <span>Введите текст: (обратный слеш и *)</span>
    <textarea name="content" style="width: 400px; height: 50px"></textarea>

    <input class="button" type="submit" value="Отправить">
</form>
<form action="reg1.php" method="post" style="display: flex; flex-direction: column; align-items: center">
    <span>Введите текст: (символ а, за которым идет b)</span>
    <textarea name="content1" style="width: 400px; height: 50px"></textarea>

    <input class="button" type="submit" value="Отправить">
</form>
<form action="reg2.php" method="post" style="display: flex; flex-direction: column; align-items: center">
    <span>Введите переменную:</span>
    <input type="text" name="var">
    <span>Введите текст:</span>
    <textarea name="content2" style="width: 400px; height: 50px"></textarea>

    <input class="button" type="submit" value="Отправить">
</form>
<form action="reg3.php" method="post" style="display: flex; flex-direction: column; align-items: center">
    <span>Введите текст: (вывод слов из 5 любых символов)</span>
    <textarea name="content3" style="width: 400px; height: 50px"></textarea>

    <input class="button" type="submit" value="Отправить">
</form>
<form action="reg4.php" method="post" style="display: flex; flex-direction: column; align-items: center">
    <span>Введите текст: (вывод повторяющихся слов)</span>
    <textarea name="content4" style="width: 400px; height: 50px"></textarea>

    <input class="button" type="submit" value="Отправить">
</form>
<form action="reg5.php" method="post" style="display: flex; flex-direction: column; align-items: center">
    <span>Введите цвета (пример: #FFFFFF):</span>
    <textarea name="content5" style="width: 400px; height: 50px"></textarea>

    <input class="button" type="submit" value="Отправить">
</form>
<form action="reg6.php" method="post" style="display: flex; flex-direction: column; align-items: center">
    <span>Введите смайлики:</span>
    <textarea name="content6" style="width: 400px; height: 50px"></textarea>

    <input class="button" type="submit" value="Отправить">
</form>
<form action="reg7.php" method="post" style="display: flex; flex-direction: column; align-items: center">
    <span>Введите ip:</span>
    <textarea name="content7" style="width: 400px; height: 50px"></textarea>

    <input class="button" type="submit" value="Отправить">
</form>
</body>
</html>