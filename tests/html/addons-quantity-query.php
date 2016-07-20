<?php include 'include/head.php'; ?>
<body>
<div class="page">
  <div class="container">

    <div class="topic">
      <h2 class="main-heading"><span>addons: </span>quantity-query</h2>
      <div class="quantity-query">
        <div class="control">
          <input type="button" value="at-least 4" class="type at-least active">
          <input type="button" value="at-most 4" class="type at-most">
          <input type="button" value="equal-to 4" class="type equal-to">
          <input type="button" value="between 3 - 6" class="type between">
          <input type="button" value="+" class="action plus">
          <input type="button" value="-" class="action minus">
          <span class="info">Boxes' color turn to <span>pink</span> when fulfill the condition.</span>
        </div>
        <div class="show at-least">
          <div class="box"></div>
          <div class="box"></div>
          <div class="box"></div>
          <div class="box"></div>
        </div>
      </div>
    </div>
    
  </div>
</div>
<script type="text/javascript">
  ready(function () {
    var show = kit('.show'),
        plus = kit('.plus'),
        minus = kit('.minus'),
        atLeast = kit('.at-least'),
        atMost = kit('.at-most'),
        equalTo = kit('.equal-to'),
        between = kit('.between');

    var list = ['at-least', 'at-most', 'equal-to', 'between'];

    atLeast.click(function() { 
      show[0].className = 'show at-least'; 
      kit(this).addClass('active').siblings().removeClass('active');
    });
    atMost.click(function() { 
      show[0].className = 'show at-most'; 
      kit(this).addClass('active').siblings().removeClass('active');
    });
    equalTo.click(function() { 
      show[0].className = 'show equal-to'; 
      kit(this).addClass('active').siblings().removeClass('active');
    });
    between.click(function() { 
      show[0].className = 'show between'; 
      kit(this).addClass('active').siblings().removeClass('active');
    });
    plus.click(function() { 
      var show = kit('.show').lastChild();
      show.append('<div class="box"></div>');
    });
    minus.click(function() { 
      var show = kit('.show');
      if (kit('.show .box').length > 1) {
        show.lastChild().remove();
      }
    });

  });
</script>
</body>
</html>