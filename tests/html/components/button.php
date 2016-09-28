<?php include '../part/head.php'; ?>
<body>
<div class="page">
  <div class="container">

    <div class="topic">
      <h2 class="main-heading"><span>components: </span>buttons</h2>
      <div class="example">
        <div class="example-button">
          <div class="default demo-container">
            <button class="btn">default</button>
          </div>
          <div class="color demo-container">
            <a href="" class="btn">color</a>
          </div>
          <div class="radius demo-container">
            <span class="btn">radius</span>
          </div>
          <div class="round demo-container">
            <div class="btn">round</div>
          </div>
          <div class="style-highlight demo-container">
            <div class="btn">highlight</div>
          </div>
          <div class="style-simple demo-container">
            <div class="btn">simple</div>
          </div>
          <div class="style-slide demo-container">
            <div class="btn">slide</div>
          </div>
          <div class="style-ripple demo-container">
            <div class="btn">ripple</div>
          </div>
          <div class="style-veil demo-container">
            <div class="btn">veil</div>
          </div>
          <div class="style-cut demo-container">
            <div class="btn">cut</div>
          </div>
          <div class="style-push demo-container">
            <div class="btn" data-text="star"><span>push</span></div>
          </div>
          <div class="style-bubble demo-container">
            <div class="btn">bubble</div>
          </div>
          <div class="style-line-drawing demo-container">
            <div class="btn">line-drawing 
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="style-shake demo-container">
            <div class="btn">shake</div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
<script>
  var ripple = document.querySelector('.style-ripple .btn');
  ripple.onclick = function () {
    if (ripple.className.indexOf('active') === -1) {
      ripple.className += ' active';
    } else {
      ripple.className = 'btn';
    }
  };
</script>
</body>
</html>