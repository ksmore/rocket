<?php include 'include/head.php'; ?>
<body>
<div class="page">
  <div class="container">

    <div class="topic">
      <h2 class="main-heading"><span>components: </span>Switch</h2>
      <div class="example example-switch">
        <section>
          <div class="switch one">
            <input type="checkbox" id="switch1" name="switch-1">
            <label for="switch1"></label>
          </div>              
          <div class="switch two">
            <input type="checkbox" id="switch2" name="switch-2" checked="">
            <label for="switch2"></label>
          </div>
        </section>
        <section>
          <h5>slider</h5>
          <div class="switch slider">
            <input type="checkbox" id="switch-slider" name="switch-slider">
            <label for="switch-slider">
              <span class="before"></span>
              <span class="after"></span>
            </label>
          </div>
        </section>
        <section>
          <h5>Has text</h5>
          <div class="switch text">
            <input type="checkbox" id="switch-text" name="switch-text" checked="">
            <label for="switch-text"><span></span></label>
          </div>
        </section>
        <section class="switch-group">
          <h5>Switch group</h5>
          <div class="switch switch-g">
            <input type="radio" id="switch-1" name="switch-g">
            <label for="switch-1"></label>
          </div>              
          <div class="switch switch-g">
            <input type="radio" id="switch-2" name="switch-g" checked="">
            <label for="switch-2"></label>
          </div>              
          <div class="switch switch-g">
            <input type="radio" id="switch-3" name="switch-g">
            <label for="switch-3"></label>
          </div>              
        </section>
      </div>
      <pre><code class="language-scss">
.one { @include switch(radius); }
.two { @include switch(round 50px #C06EE1); }
.slider { @include switch(round slider 42px 27px #399DE1); }
.text { @include switch(round text ("on" "off") 36px #399DE1); }
.switch-group .switch-g { @include switch(radius 25px #CC412F); }
      </code></pre>
    
    <?php include "include/more-demos.php" ?>
  </div>
</div>
<?php include "include/site-footer.php"; ?>
</body>
</html>

