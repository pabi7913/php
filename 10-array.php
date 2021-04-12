<!--產生空格-->
<pre>
    <?php
    $a1 = array(1, 2, 3, 'a', '45', 'bc');
    //    等於
    $a2 = [1, 2, 3, 'a', '45', 'bc'];
    //    notice
    echo $a1;
    //    A:Notice:  Array to string conversion in C:\xampp\htdocs\php\10-array.php on line 8
    //    列出一條
    print_r($a1);
    //    A:
    //    ArrayArray
    //    (
    //        [0] => 1
    //    [1] => 2
    //    [2] => 3
    //    [3] => a
    //    [4] => 45
    //    [5] => bc
    //)
    //    詳細列出
    var_dump($a2);
    ?>
<!--  A:
      array(6) {
      [0]=>
      int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  string(1) "a"
  [4]=>
  string(2) "45"
  [5]=>
  string(2) "bc"
}-->
</pre>