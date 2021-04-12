<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
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

<script src="./lib/jquery-3.6.0.js"></script>
<script src="./bootstrap/js/bootstrap.bundle.js"></script>
<script>
//    等於const rowTpl= o=>{}
    let rowTpl =function(o) {
        return `
        <tr>
            <td>${o.name}</td>
            <td>${o.age}</td>
            <td>${o.gender}</td>
        </tr>`;
    };

    function loadData(){
        $.get('13-json-1.php', function(data){
            console.log(data);
            //★資料會一直重複加上去
            $('tbody').append(rowTpl(data[0]));

            //★呈現資料只會重複一次(背景還是會繼續加資料只是不顯示)
            $('tbody').html('');
            data.forEach(el=>{
                $('tbody').append(rowTpl(el));
            });
        }, 'json');
    }
</script>
</body>
</html>