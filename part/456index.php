<!--用include的方式加入分支-->
<!--❶ config:指定先進入的大包包,再往裡面找-->
<?php include __DIR__. '/config.php'; ?>
<!--include之下的內容皆為include的,與下層無關-->
<?php
//也可以寫在這裡,但index要改的話,要改很多
//define('WEB_ROOT', '/php');
$title = 'index';

//建立一個陣列
$persons = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => 'David',
        'age' => 25,
        'gender' => 'male',
    ],
    [
        'name' => 'Flora',
        'age' => 22,
        'gender' => 'female',
    ],
    [
        'name' => 'Mary',
        'age' => 28,
        'gender' => 'female',
    ]
];
?>
<!--❷html-->
<?php include __DIR__. '/html-head.php'; ?>
<!--❸navbar-->
<?php include __DIR__. '/navbar.php'; ?>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($persons as $p): ?>
            <tr>
                <td><?= $p['name'] ?></td>
                <td><?= $p['gender'] ?></td>
                <td><?= $p['age'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!--❹scripts-->
<?php include __DIR__. '/scripts.php'; ?>
<!--❺footer-->
<?php include __DIR__. '/html-foot.php'; ?>
