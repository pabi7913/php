<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <button class="btn btn-primary" onclick="loadData()">load</button>

    <table class="table table-striped">
        <thead>
        <tr>

            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script src="../lib/jquery-3.6.0.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.js"></script>
<script>
//   箭頭函式
    const rowTpl = o => {
        return `
        <tr>
            <td>${o.name}</td>
            <td>${o.age}</td>
            <td>${o.gender}</td>
        </tr>`;
    };

    function loadData(){
        $.get('14-array-1.php', function(data){
            console.log(data);
            $('tbody').append(rowTpl(data[0]));

        }, 'json');
    }

</script>
</body>
</html>