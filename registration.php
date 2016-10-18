<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>	
		<title>Coal Investment Website</title>
		<link href="css/edit.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500' ' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
		<!--webfonts-->
	</head>
	<body>	
			<!--start-login-form-->
				<div class="main">
			    	
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2><span></span>Register</h2>
								<a href="index.php"><img src="images/close.png" alt=""></a>
						 	 </div>
						  	<form name="register" action="register.php" method="get" id="register">
								<p>
								
								  <input type="text" id="Username" name="Username" placeholder="Username" required  />
								  <input type="email" id="Email" name="Email" placeholder="Email Address" required pattern="(^.+@.+\..+$)" />
								  <!-- pattern="'(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/')" -->
								  <input type="password" id="Password" name="Password" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
								  <input type="text" id="No_KTP" name="No_KTP" placeholder="Nomor KTP" required pattern="(^[0-9]+$)" />
								  <input type="text" id="Nama_Lengkap" name="Nama_Lengkap" placeholder="Nama Lengkap"  required  /> 
								  <!--pattern="^([A-Za-z]{1,}$)" -->
								  <input type="text" id="Tempat_Lahir" name="Tempat_Lahir" placeholder="Tempat Lahir" required />
								  
								   <!-- <h4> <strong> <b> Tanggal Lahir   : </b> </strong></h4> -->
								  <input  type="text" id="Tgl_Lahir" name="Tgl_Lahir" placeholder="Tanggal Lahir (YYYY-MM-DD)" required pattern="(^[0-9]+$)" />
								  
								   <h3> <strong> <b> Jenis Kelamin : </b> </strong></h3> 
								  <select name="Jenis_Kelamin">
									<!-- <option selected="selected" style="font:center">Pilih Jenis Kelamin Anda</option>-->
								    <option>Laki-Laki</option>
								    <option>Perempuan</option>
							      </select >
								  								
								  <input type="text" id="Alamat" name="Alamat" placeholder="Alamat Lengkap"  required />
								  <input type="text" id="No_HP" name="No_HP" placeholder="Nomor Handphone" required pattern="(^[0-9]+$)" />
								  
								   <h4> <strong> <b> Nama Bank   : </b> </strong></h4> 
								  <select name="Bank">
								    <!--<option selected="selected"> Pilih Nama Bank Anda</option>-->
									<option>Bank Rakyat Indonesia (BRI)</option>
								    <option>Bank Negara Indonesia (BNI)</option>
								    <option>Bank Central Asia (BCA)</option>
								    <option>Bank Mandiri</option>
								    <option>Bank Tabungan Negara (BTN)</option>
								    <option>Bank CIMB Niaga</option>
							      </select >
								  
								  
								  <input type="text" id="No_Rekening" name="No_Rekening" placeholder="Nomor Rekening" required pattern="(^[0-9]+$)" />
								  <input type="text" id="Nama_Rekening" name="Nama_Rekening" placeholder="Nama Pemilik Rekening" required />
								  <p>&nbsp; </p>
								  <p>&nbsp; </p>
								  <input type="text" id="Investasi" name="Investasi" placeholder="Jumlah yang Akan Diinvestasikan" pattern="(^[0-9]+$)" />
								  
							  </p>
							  
								
												 
								<div class="submit">
									<input type="submit" name="submit" onclick="myFunction()" value="Sign Me Up >" >
								</div>
									<div class="clear"> </div>
								</div>
								
								
											
						  </form>
						  <script type="text/javascript">

  document.addEventListener("DOMContentLoaded", function() {

    // JavaScript form validation
	var checkForm = function(e)
    {
      if(this.Username.value == "") 
		{
        this.Username.focus();
        e.preventDefault(); // equivalent to return false
        return;
		}
	};
	

	
    var checkPassword = function(str)
    {
      var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
      return re.test(str);
    };
	
	
	var checkNama_Lengkap = function(str3)
    {
      var rez = /^[A-Za-z]{1,}$/;
      return rez.test3(str3);
    };
	
	var checkTempat_Lahir = function(str5)
    {
      if(this.Tempat_Lahir.value == "") 
		{
        this.Tempat_Lahir.focus();
        str5.preventDefault(); // equivalent to return false
        return;
		}
	};
	
	var checkTgl_Lahir = function(str8)
    {
      if(this.Tgl_Lahir.value == "") 
		{
        this.Tgl_Lahir.focus();
        str8.preventDefault(); // equivalent to return false
        return;
		}
	};
	
	
	var checkAlamat = function(str6)
    {
      if(this.Alamat.value == "") 
		{
        this.Alamat.focus();
        str6.preventDefault(); // equivalent to return false
        return;
		}
	};
	
	
    var register = document.getElementById("register");
    register.addEventListener("submit", checkForm, true);
	

    // HTML5 form validation

    var supports_input_validity = function()
    {
      var i = document.createElement("input");
      return "setCustomValidity" in i;
    }

    if(supports_input_validity()) {
      var UsernameInput = document.getElementById("Username");
      var UsernameRule = "Username Tidak Boleh Kosong.";
      UsernameInput.setCustomValidity(UsernameRule);

	  var EmailInput = document.getElementById("Email");
      var EmailRule = "Alamat Email Tidak Boleh Kosong Dan Harus Valid.";
      EmailInput.setCustomValidity(EmailRule);
	  
      var PasswordInput = document.getElementById("Password");
      var PasswordRule = "Password Tidak Boleh Kosong, Password Harus Terdiri Dari 8 Karakter Yang Merupakan Kombinasi Dari Huruf Besar, Huruf Kecil Dan Angka. ";
      PasswordInput.setCustomValidity(PasswordRule);
		
       var No_KTPInput = document.getElementById("No_KTP");
      var No_KTPRule = "Nomor KTP Tidak Boleh Kosong Dan Harus Berupa Angka.";
      No_KTPInput.setCustomValidity(No_KTPRule);
	  
	   var Nama_LengkapInput = document.getElementById("Nama_Lengkap");
      var Nama_LengkapRule = "Nama Lengkap Tidak Boleh Kosong Dan Hanya Boleh Terdiri Dari Huruf Saja.";
      Nama_LengkapInput.setCustomValidity(Nama_LengkapRule);
	
		var Tempat_LahirInput = document.getElementById("Tempat_Lahir");
      var Tempat_LahirRule = "Tempat Lahir Tidak Boleh Kosong Dan Harus Sesuai Dengan KTP.";
      Tempat_LahirInput.setCustomValidity(Tempat_LahirRule);
	
	var Tgl_LahirInput = document.getElementById("Tgl_Lahir");
      var Tgl_LahirRule = "Tanggal Lahir Tidak Boleh Kosong Dan Harus Sesuai Dengan KTP.";
      Tgl_LahirInput.setCustomValidity(Tgl_LahirRule);
	  
	   var AlamatInput = document.getElementById("Alamat");
      var AlamatRule = "Alamat Tidak Boleh Kosong Dan Harus Sesuai Lengkap.";
      AlamatInput.setCustomValidity(AlamatRule);
	  
	   var No_HPInput = document.getElementById("No_HP");
      var No_HPRule = "Nomor HP Tidak Boleh Kosong Dan Harus Berupa Angka.";
      No_HPInput.setCustomValidity(No_HPRule);
	  
	  var No_RekeningInput = document.getElementById("No_Rekening");
      var No_RekeningRule = "Nomor Rekening Tidak Boleh Kosong Dan Harus Sesuai.";
      No_RekeningInput.setCustomValidity(No_RekeningRule);
	  
	  var Nama_RekeningInput = document.getElementById("Nama_Rekening");
      var Nama_RekeningRule = "Nama Rekening Tidak Boleh Kosong Dan Harus Sesuai.";
      Nama_RekeningInput.setCustomValidity(Nama_RekeningRule);
	  
	  var InvestasiInput = document.getElementById("Investasi");
      var InvestasiRule = "Jumlah Investasi Tidak Boleh Kosong Dan Harus Berupa Angka.";
      InvestasiInput.setCustomValidity(InvestasiRule);
	  
	  
      // input onchange event handlers
	  
	  UsernameInput.addEventListener("change", function() {
        UsernameInput.setCustomValidity(this.validity.patternMismatch ? UsernameRule : "");
      }, false);
	  
	  EmailInput.addEventListener("change", function() {
        EmailInput.setCustomValidity(this.validity.patternMismatch ? EmailRule : "");
      }, false);
	  
	  PasswordInput.addEventListener("change", function() {
        this.setCustomValidity(this.validity.patternMismatch ? PasswordRule : "");
        if(this.checkValidity()) {
          pwd2Input.pattern = this.value;
          pwd2Input.setCustomValidity(pwd2Rule);
        } else {
          pwd2Input.pattern = this.pattern;
          pwd2Input.setCustomValidity("");
        }
      }, false);
	  
	  No_KTPInput.addEventListener("change", function() {
        No_KTPInput.setCustomValidity(this.validity.patternMismatch ? No_KTPRule : "");
      }, false);

	  Nama_LengkapInput.addEventListener("change", function() {
        Nama_LengkapInput.setCustomValidity(this.validity.patternMismatch ? Nama_LengkapRule : "");
      }, false);
	  
	  Tempat_LahirInput.addEventListener("change", function() {
        Tempat_LahirInput.setCustomValidity(this.validity.patternMismatch ? Tempat_LahirRule : "");
      }, false);
	  
		 Tgl_LahirInput.addEventListener("change", function() {
        Tgl_LahirInput.setCustomValidity(this.validity.patternMismatch ? Tgl_LahirRule : "");
      }, false);
	  

	  AlamatInput.addEventListener("change", function() {
        AlamatInput.setCustomValidity(this.validity.patternMismatch ? AlamatRule : "");
      }, false);
	  
	  No_HP.addEventListener("change", function() {
        No_HPInput.setCustomValidity(this.validity.patternMismatch ? No_HPRule : "");
      }, false);
	  
	   No_Rekening.addEventListener("change", function() {
        No_RekeningInput.setCustomValidity(this.validity.patternMismatch ? No_RekeningRule : "");
      }, false);
	  
	  Nama_Rekening.addEventListener("change", function() {
        Nama_RekeningInput.setCustomValidity(this.validity.patternMismatch ? Nama_RekeningRule : "");
      }, false);
	  
	   
	  
	  InvestasiInput.addEventListener("change", function() {
        InvestasiInput.setCustomValidity(this.validity.patternMismatch ? InvestasiRule : "");
      }, false);
	  
	  
      

    }

  }, false);

</script>
						 
					</div>
					
											
	
					</div>
			</div>
				<!--//End-login-form-->	
				
			  </div>
	</body>
</html>


