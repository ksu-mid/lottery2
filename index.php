<html >
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
</head>
<body>
    <div> Заповніть поля числами вказаними в білеті </div>
    <form action="" method="POST">
        <input id="input_1" type="number" name="number_1" required min="1" max="52">
        <input id="input_2" type="number" name="number_2" required min="1" max="52">
        <input id="input_3" type="number" name="number_3" required min="1" max="52">
        <input id="input_4" type="number" name="number_4" required min="1" max="52">
        <input id="input_5" type="number" name="number_5" required min="1" max="52">
        <input id="input_6" type="number" name="number_6" required min="1" max="52">
        <input id="submit" type="submit" value="Отправить">
        <small class="error">Числа не должны повторяться!</small>

    </form>
    
    <br>
    <table>
        <thead>
            <tr>За результатами 538 розіграшів</tr>
            <tr>
                <th>Вгадано</th>
                <th>Кількість разів</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>6x6</td>
                <td id="result_1"></td>
            </tr>
            <tr>
                <td>5x6</td>
                <td id="result_2"></td>
            </tr>
            <tr>
                <td>4x6</td>
                <td id="result_3"></td>
            </tr>
            <tr>
                <td>3x6</td>
                <td id="result_4"></td>
            </tr>
            <tr>
                <td>2x6</td>
                <td id="result_5"></td>
            </tr>
        </tbody>
    </table>

</body>
</html>