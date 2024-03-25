<<!DOCTYPE html>
<html>
<head>
	<title>Terms of Service</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <<style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap");

:root {
  --bg-clr: black;
  --white: #fff;
  --primary-text-clr: #212121;
  --secondary-text-clr: #8c8c8c;
  --bg-hvr: #5803c7;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
}

body{
  background: var(--bg-clr);
  font-size: 12px;
}

.flex_align_justify{
  display: flex;
  align-items: center;
  justify-content: center;
}

.flex_align{
  display: flex;
  align-items: center;
}

.wrapper{
  min-height: 100vh;
  padding: 0 20px;
}

.terms_service{
  width: 500px;
  max-width: 100%;
  height: 450px;
  background: var(--white);
  border-radius: 3px;
  box-shadow: 0px 0px 3px rgba(0,0,0,0.15);
}

.terms_service .tc_item{
  padding: 20px 40px;
}

.terms_service .tc_head{
  box-shadow: 0 1px 2px rgba(0,0,0,0.15);
  height: 90px;
}

.terms_service .tc_head .icon{
  width: 50px;
  height: 50px;
  background: var(--bg-clr);
  margin-right: 20px;
  border-radius: 50%;
  font-size: 18px;
  color: var(--white);
}

.terms_service .tc_body{
  height: calc(100% - 170px);
  overflow: auto;
  padding-right: 20px;
}

.terms_service .tc_body ol li{
  margin-bottom: 15px;
}

.terms_service .tc_body ol li h3{
  margin-bottom: 5px;
}

.terms_service .tc_foot{
  box-shadow: 0 -1px 2px rgba(0,0,0,0.15);
  justify-content: space-between;
  height: 80px;
}

.terms_service .tc_foot button{
  width: 100%;
  border: 1px solid var(--bg-clr);
  padding: 10px 20px;
  border-radius: 3px;
  cursor: pointer;
  transition: all 0.5s ease;
}

.terms_service .tc_foot button.accept_btn{
  background: var(--bg-clr);
  color: var(--white);
}
.terms_service .tc_foot button.decline_btn{
  margin-right: 20px;
  background: var(--white);
  color: var(--bg-clr);
}

.terms_service .tc_foot button.decline_btn:hover{
  background: var(--bg-clr);
  color: var(--white);
}

.terms_service .tc_foot button.accept_btn:hover{
  background: var(--bg-hvr);
  color: var(--white);
}
    </style>
</head>
<body>

<div class="wrapper flex_align_justify">
  <div class="terms_service">
      <div class="tc_item tc_head flex_align_justify">
        <div class="icon flex_align_justify">
          <ion-icon name="terminal-outline"></ion-icon>
        </div>
        <div class="text">
          <h2>TERMS OF SERVICE AND PRIVACY POLICY</h2>
        </div>
      </div>
      <div class="tc_item tc_body">
        <ol>
          <li>
            <h3>Terms of use</h3>
            <p>This site shall only be used for it's specified purpose by the developer.Any person wishing to use the site for data scraping is advised to contact the developer before using the site</p>
          </li>
          <li>
            <h3>Privacy Policy</h3>
            <p>This  informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data.We use your data to provide and improve the Service. By using the Service, you agree to the collection</p>
         </li>
          <li>
            <h3>Intellectual property rights</h3>
            <p>We caution users of this site to adhere to the website's terms of service before modifying and using the software code.We respond to notices of alleged infringement in accordance with applicable intellectual property laws and may terminate the accounts of repeat infringers.If you believe that your intellectual property rights have been infringed upon, please contact us at <link url="frankrobi1223@gmail.com"> with a detailed infringement notice.</p>
          </li>
          <li>
            <h3>Prohibited activities</h3>
            <p>Users are prohibited from violating the intellectual property rights of others while using this service. This includes posting copyrighted material without permission, infringing trademarks, or engaging in plagiarism.</p>
          </li>
          <li>
            <h3>Termination clause</h3>
            <p>If found to be infringing and going against the put terms, the developer reserves the right to terminate your use of this website.</p>
          </li>
        </ol>
      </div>
      <div class="tc_item tc_foot flex_align">
          <button class="accept_btn"  onclick = "window.location.href='home.php';">Accept</button>
          <script>
  function showTermsAlert() {
    alert("You cannot enter the site until you accept the terms.");
  }
</script>

          <button class="decline_btn" onclick = "showTermsAlert()" >Decline</button>
      </div>
  </div>
</div>

</body>
</html>