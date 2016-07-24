<?php include 'include/head.php'; ?>
<body>
<div class="page">
  <div class="container">

    <div class="topic">
      <h2 class="main-heading"><span>components: </span>dropdown</h2>
      <div class="example">
        <div class="dropdown-1">
          <label for="dropdown"><span>dropdown: </span><img src="images/arrow-down.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="checkbox" name="" id="dropdown">
          <ul>
            <li><a href="">item 01</a></li>
            <li><a href="">item 02</a></li>
            <li class="sub-1">
              <input type="checkbox" name="" id="dropdown-2">
              <label for="dropdown-2">item 03 <img src="images/arrow-down.png" alt=""></label>
              <ul>
                <li><a href="">subitem 01</a></li>
                <li><a href="">subitem 02</a></li>
                <li><a href="">subitem 03</a></li>
              </ul>
            </li>
          </ul>
        </div>              
        <div class="dropdown-2">
          <span>dropdown: hover</span>
          <ul>
            <li><a href="">item 01</a></li>
            <li class="sub-2"><a href="">item 02 <img src="images/arrow-right.png" alt=""></a>
              <ul>
                <li><a href="">subitem 01</a></li>
                <li><a href="">subitem 02</a></li>
                <li class="sub-2"><a href="">subitem 03 <img src="images/arrow-right.png" alt=""></a>
                  <ul>
                    <li><a href="">subitem 01</a></li>
                    <li><a href="">subitem 02</a></li>
                    <li><a href="">subitem 03</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="">item 03</a></li>
          </ul>
        </div>              
      </div>
    </div>
    
  </div>
</div>
</body>
</html>