<?php
  echo "아이디: {$_POST['id']} <br>";

  if ($_POST['pw1'] == $_POST['pw2']) {
      echo "비밀번호가 일치합니다.<br>";
  }
  else {
      echo $_POST['pw1']."와 ".$_POST['pw2']."로 비밀번호가 일치치하지 않습니다.<br>";
  }
  echo "연락처: {$_POST['p1']} - {$_POST['p2']} - {$_POST['p3']}<br>";
  echo "성별: {$_POST['gender']}<br>";
  echo "사용 가능 기술: ";
  if (!empty($_POST['skill'])) {
    foreach ($_POST['skill'] as $value) {
        echo $value."&nbsp;&nbsp;&nbsp;";
    }
  }
  else {
    echo "없음";
  }


?>
