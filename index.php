<!-- created by 4mir z4r3i -->
 <html>
  <head>
     <title> My First PHp code [♥️😄]</title>
  </head>
</html>
<pre>
<?php
$num = 15;
for($v_1=$num/2; $v_1<=$num; $v_1+=2){

    for($v_2=1; $v_2<$num-$v_1; $v_2+=2){
        echo "&nbsp;";
    }
    for($v_2=1; $v_2<=$v_1; $v_2++){
        echo "*";
    }
    for($v_2=1; $v_2<=$num-$v_1; $v_2++){
        echo "&nbsp;";
    }
    for($v_2=1; $v_2<=$v_1; $v_2++){
        echo "*";
    }
    echo "<br/>";
    }
for($v_1=$num; $v_1>=1; $v_1--){
    for($v_2=$v_1; $v_2<$num; $v_2++){
        echo "&nbsp;";
    }
    for($v_2=1; $v_2<=($v_1*2)-1; $v_2++){
        echo "*";
    }
    echo "<br/>";
}
?>
<!-- created by 4mir z4r3i -->
</pre>
</html>
