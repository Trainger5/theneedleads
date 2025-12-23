<?php include './include/header.php';?>
<section style="
  min-height:70vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:linear-gradient(135deg, #fff3ec, #ffe5d4);
  text-align:center;
  font-family: Arial, Helvetica, sans-serif;
">
  <div style="
    background:#ffffff;
    padding:50px 40px;
    border-radius:20px;
    box-shadow:0 20px 50px rgba(0,0,0,0.1);
    max-width:420px;
    width:100%;
    display:flex;
    flex-direction:column;
    align-items:center;
  ">

    <img src="assets/img/sitelogo.png" alt="Logo"
         style="width:180px; margin-bottom:25px;">

    <div style="
      width:70px;
      height:70px;
      background:#f85a03;
      border-radius:50%;
      display:flex;
      align-items:center;
      justify-content:center;
      color:#ffffff;
      font-size:36px;
      margin-bottom:20px;
    ">
      ✓
    </div>

    <h1 style="
      margin:0 0 10px 0;
      font-size:32px;
      color:#333333;
    ">
      Thank You!
    </h1>

    <p style="
      margin:0 0 30px 0;
      font-size:16px;
      color:#666666;
      line-height:1.6;
    ">
      We’ve received your request and our team will contact you shortly.
    </p>

    <a href="index.php"
       style="
         background:#f85a03;
         padding:16px 36px;
         border-radius:50px;
         font-size:18px;
         text-decoration:none;
         color:#ffffff;
         display:inline-block;
         transition:all 0.3s ease;
         box-shadow:0 10px 20px rgba(248,90,3,0.3);
       "
       onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 15px 25px rgba(248,90,3,0.4)'"
       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 20px rgba(248,90,3,0.3)'"
    >
      Back To Home
    </a>

  </div>
</section>

<?php include './include/footer.php';?>