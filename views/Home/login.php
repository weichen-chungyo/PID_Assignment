<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/PID_Assignment/css/bootstrap.min.css" rel="stylesheet">
  <link href="/PID_Assignment/css/jquery.toast.css" rel="stylesheet">
  <link href="/PID_Assignment/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>login</title>
</head>

<body>
  <div class="row">
    <div class="otherHeader col-md-12">
      <ul class=" nav">
        <li class="nav-item">
          <a class="header-link nav-link" href="mall.php?admin=">賣家中心</a>
        </li>
        <li class="nav-item">
          <a class="header-link nav-link" href="/PID_Assignment/home/mall">回購物中心</a>
        </li>
        <li class="nav-item dropdown ml-md-auto">
          <div class="row">
            <a class="header-link nav-link fa fa-question-circle d-flex align-items-center" href="#"> 幫助中心</a>
           
          </div>

        </li>
      </ul>
    </div>
  </div>
  <div class="container">


    <div class="row">
      <div class="col-sm-3">
        &nbsp;
      </div>
      <div class="col-sm-6">
        <span>&nbsp;</span>


        <div id="tab-demo">
          <ul class="tab-title text-center ">
            <li><a href="#tab01">
                <h1> 登入 </h1>
              </a></li>
            <li><a href="#tab02">
                <h1> 註冊 </h1>
              </a></li>
          </ul>
          <div id="tab01" class="tab-inner ">
            <form method="post">
              <div class="form-group row justify-content-center ">
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend ">
                      <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                      </div>
                    </div>
                    <input required id="account" name="account" type="text" aria-describedby="accountHelpBlock" class="form-control">
                  </div>
                  <span id="accountHelpBlock" class="form-text text-muted">輸入帳號</span>
                </div>
              </div>

              <div class="form-group row justify-content-center ">
                <div class="col-8">
                  <input required id="password" name="password" type="password" aria-describedby="passwordHelpBlock" class="form-control">
                  <span id="passwordHelpBlock" class="form-text text-muted">輸入密碼</span>
                </div>
              </div>
              <div class="form-group row text-center ">
                <div class="offset-3 col-12">
                  <button name="submit" type="submit" class="btn btn-primary">登入</button>
                </div>
              </div>
            </form>
          </div>
          <div id="tab02" class="tab-inner">
            <form method="post" onsubmit="return checkID()">
              <div class="form-group row justify-content-center">
                <div class="col-8">
                  <div class="input-group ">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                      </div>
                    </div>
                    <input required id="account" name="account" type="text" aria-describedby="accountHelpBlock" class="form-control">
                  </div>
                  <span id="accountHelpBlock" class="form-text text-muted">輸入帳號</span>
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-8">
                  <input required id="personID" name="personID" type="text" class="form-control" aria-describedby="personIDHelpBlock">
                  <span id="personIDHelpBlock" class="form-text text-muted">輸入身分證</span>
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-8">
                  <input required id="password" name="password" type="password" aria-describedby="passwordHelpBlock" class="form-control">
                  <span id="passwordHelpBlock" class="form-text text-muted">輸入密碼</span>
                </div>
              </div>
              <div class="form-group row text-center">
                <div class="offset-3 col-12">
                  <button name="submit" type="submit" class="btn btn-primary">註冊</button>

                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
      <div class="col-sm-3">
        &nbsp;

      </div>
    </div>

  </div>

  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery.toast.js"></script>

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <script>
    $(document).ready(function(e) {

      $(function() {
        var $li = $('ul.tab-title li');
        $($li.eq(0).addClass('active').find('a').attr('href')).siblings('.tab-inner').hide();

        $li.click(function() {
          $($(this).find('a').attr('href')).show().siblings('.tab-inner').hide();
          $(this).addClass('active').siblings('.active').removeClass('active');
        });
      });


    });

    function checkID() {

      var idStr = $("#personID").val();

      // 依照字母的編號排列，存入陣列備用。
      var letters = new Array('A', 'B', 'C', 'D',
        'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M',
        'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V',
        'X', 'Y', 'W', 'Z', 'I', 'O');
      // 儲存各個乘數
      var multiply = new Array(1, 9, 8, 7, 6, 5,
        4, 3, 2, 1);
      var nums = new Array(2);
      var firstChar;
      var firstNum;
      var lastNum;
      var total = 0;
      // 撰寫「正規表達式」。第一個字為英文字母，
      // 第二個字為1或2，後面跟著8個數字，不分大小寫。
      var regExpID = /^[a-z](1|2)\d{8}$/i;
      // 使用「正規表達式」檢驗格式
      if (idStr.search(regExpID) == -1) {
        // 基本格式錯誤
        alert("請仔細填寫身份證號碼");
        return false;
      } else {
        // 取出第一個字元和最後一個數字。
        firstChar = idStr.charAt(0).toUpperCase();
        lastNum = idStr.charAt(9);
      }
      // 找出第一個字母對應的數字，並轉換成兩位數數字。
      for (var i = 0; i < 26; i++) {
        if (firstChar == letters[i]) {
          firstNum = i + 10;
          nums[0] = Math.floor(firstNum / 10);
          nums[1] = firstNum - (nums[0] * 10);
          break;
        }
      }
      // 執行加總計算
      for (var i = 0; i < multiply.length; i++) {
        if (i < 2) {
          total += nums[i] * multiply[i];
        } else {
          total += parseInt(idStr.charAt(i - 1)) *
            multiply[i];
        }
      }
      // 和最後一個數字比對
      if ((10 - (total % 10)) != lastNum) {
        alert("身份證號碼寫錯了！");
        return false;
      }
      return true;
    }
  </script>
</body>

</html>