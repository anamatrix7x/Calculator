<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="functions.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <br><br>
        <select name="oper">
            <label>Choose Operation!</label>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiplication</option>
            <option value="div">division</option>
        </select>
        <br><br>
        <input type="text" name="num02" placeholder="Number 2">
        <br><br>
        <button type="submit">Calculate</button>

    </form>
</body>
</html>