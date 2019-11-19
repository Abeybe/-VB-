<!DOCTYPE html>
<head>
    <title>jsとphp</title>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <script>
        //ここがjavascript
        document.write("hello javascript<br>");
    </script>
    
    <?php 
        //ここがphp
        echo "hello php<br>";
    ?>

    <div id="sayhello">Hello</div>

    <table border="1">
        <tr>
            <th>A</th>
            <th>B</th>
            <th>C</th>
        </tr>
        <tr>
            <td>A1</td>
            <td>B1</td>
            <td>C1</td>
        </tr>
        <tr>
            <td>A2</td>
            <td>B2</td>
            <td>C2</td>
        </tr>
        <tr>
            <td>A3</td>
            <td>B3</td>
            <td>C3</td>
        </tr>
    </table>

    <script>
        onclickSayHello();
    </script>
</body>
</html>
