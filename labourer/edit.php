<?php 
   session_start(); 
   include('db.php'); 
 
  if (!isset($_SESSION['labour_username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: labour_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['labour_username']);
  	header("location: ../index.html");
  }
  
?>


<!DOCTYPE html>
<html>
<head>
  <title>Edit Details | LabourFriend</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="It's Free ! Register In LabourFriend To Get Work In Your Locality Easily.">
    <meta name="keywords" content="LabourFriend,labour friend,hire labour,find labour,labours near me,hire construction labour,hire plumber,hire mason,hire painter,hire carpenter,hire electrician,hire tite setter,labours in odisha,hire labour in odisha,plumber near me,electrician near me,mason near me,tile setter near me,painter near me,carpenter near me,find labours in odisha,nayak groups ">
    <meta name="owner" content="Chandan Kumar Nayak">
     <link rel="shortcut icon" type="image/png" href="../image/lf.jpg">
  <link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<!--===============================================================================================-->


<style type="text/css">
	body{
		background: #eeeeee;
		font-family: 'Varela Round', sans-serif;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {
		color: #fff;
		background: #926dde;
		padding: 5px 16px;
		border-radius: 0;
		border: none;
		box-shadow: 0 0 4px rgba(0,0,0,.1);
	}
	.navbar img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: #efe5ff;
		padding-left: 0;
		padding-right: 50px;
		font-size: 24px;		
	}
	.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
		color: #fff;
	}
	.navbar .navbar-brand i {
		font-size: 25px;
		margin-right: 5px;
	}
	.navbar .nav-item i {
		font-size: 18px;
	}
	.navbar .nav-item span {
		position: relative;
		top: 3px;
	}
	.navbar .nav > li a {
		color: #efe5ff;
		padding: 8px 15px;
		font-size: 14px;		
	}
	.navbar .nav > li a:hover, .navbar .nav > li a:focus {
		color: #fff;
		text-shadow: 0 0 4px rgba(255,255,255,0.3);
	}
	.navbar .nav > li > a > i {
		display: block;
		text-align: center;
	}
	.navbar .dropdown-item i {
		font-size: 16px;
		min-width: 22px;
	}
    .navbar .dropdown-item .material-icons {
        font-size: 21px;
        line-height: 16px;
        vertical-align: middle;
        margin-top: -2px;
    }
	.navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
		color: #fff;
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777 !important;
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:focus {
		color: #333 !important;
		background: transparent !important;
	}
	.navbar .nav .active a, .navbar .nav .active a:hover, .navbar .nav .active a:focus {
		color: #fff;
		text-shadow: 0 0 4px rgba(255,255,255,0.2);
		background: transparent !important;
	}
	.navbar .nav .user-action {
		padding: 9px 15px;
	}
	.navbar .navbar-toggle {
		border-color: #fff;
	}
	.navbar .navbar-toggle .icon-bar {
		background: #fff;
	}
	.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
		background: transparent;
	}
	.navbar .navbar-nav .open .dropdown-menu {
		background: #faf7fd;
		border-radius: 1px;
		border-color: #faf7fd;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .divider {
		background-color: #e9ecef !important;
	}
	@media (min-width: 1200px){
		.form-inline .input-group {
			width: 350px;
			margin-left: 30px;
		}
	}
	@media (max-width: 1199px){
		.navbar .nav > li > a > i {
			display: inline-block;			
			text-align: left;
			min-width: 30px;
			position: relative;
			top: 4px;
		}
		.navbar .navbar-collapse {
			border: none;
			box-shadow: none;
			padding: 0;
		}
		.navbar .navbar-form {
			border: none;			
			display: block;
			margin: 10px 0;
			padding: 0;
		}
		.navbar .navbar-nav {
			margin: 8px 0;
		}
		.navbar .navbar-toggle {
			margin-right: 0;
		}
		.input-group {
			width: 100%;
		}
	}
</style>

<script language="javascript" type="text/javascript" src="jquery/jquery-1.10.2.js"></script>  
  <script language="javascript" type="text/javascript" src="jquery/jquery-ui.js"></script>   
  <link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css" />
    
 
<script language="javascript" type="text/javascript">
            function dynamicdropdown(listindex)
            {
                document.getElementById("city").length = 0;
                switch (listindex)
                {

                    case "Angul" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Anugul");
                        document.getElementById("city").options[2]=new Option("Athmallik");
                        document.getElementById("city").options[3]=new Option("Banarpal");
                        document.getElementById("city").options[4]=new Option("Chendipada");
                        document.getElementById("city").options[5]=new Option("Kanhia");
                        document.getElementById("city").options[6]=new Option("Kishorenagar");
                        document.getElementById("city").options[7]=new Option("Pallahara");
                        document.getElementById("city").options[8]=new Option("Talcher");
                       
                        break;
                     

                    case "Boudh" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Boudh");
                        document.getElementById("city").options[2]=new Option("Harbhanga");
                        document.getElementById("city").options[3]=new Option("Kantamal");
                        break;

                   
                    case "Balangir" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Agalapur");
                        document.getElementById("city").options[2]=new Option("Bangamunda");
                        document.getElementById("city").options[3]=new Option("Belapada");
                        document.getElementById("city").options[4]=new Option("Balangir");
                        document.getElementById("city").options[5]=new Option("Deogam");
                        document.getElementById("city").options[6]=new Option("Gudvella");
                        document.getElementById("city").options[7]=new Option("Kaprakhole");
                        document.getElementById("city").options[8]=new Option("Luisinga");
                        document.getElementById("city").options[9]=new Option("Muribahal");
                        document.getElementById("city").options[10]=new Option("Patnagarh");
                        document.getElementById("city").options[11]=new Option("Puintala");
                        document.getElementById("city").options[12]=new Option("Saintala");
                        document.getElementById("city").options[13]=new Option("Titlagarh");
                        document.getElementById("city").options[14]=new Option("Turekela");
                        break;

             
                    case "Bargarh" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Ambabhona");
                        document.getElementById("city").options[2]=new Option("Atabira");
                        document.getElementById("city").options[3]=new Option("Bargarh");
                        document.getElementById("city").options[4]=new Option("Barpali");
                        document.getElementById("city").options[5]=new Option("Bhatli");
                        document.getElementById("city").options[6]=new Option("Bheden");
                        document.getElementById("city").options[7]=new Option("Bijepur");
                        document.getElementById("city").options[8]=new Option("Gaisilat");
                        document.getElementById("city").options[9]=new Option("Jharbandh");
                        document.getElementById("city").options[10]=new Option("Padmapur");
                        document.getElementById("city").options[11]=new Option("Paikamal");
                        document.getElementById("city").options[12]=new Option("Sohella");
                       
                        break;


                    case "Balasore" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Balasore");
                        document.getElementById("city").options[2]=new Option("Bahanaga");
                        document.getElementById("city").options[3]=new Option("Baliapal");
                        document.getElementById("city").options[4]=new Option("Basta");
                        document.getElementById("city").options[5]=new Option("Bhograi");
                        document.getElementById("city").options[6]=new Option("Jaleswar");
                        document.getElementById("city").options[7]=new Option("Khaira");
                        document.getElementById("city").options[8]=new Option("Nilagiri");
                        document.getElementById("city").options[9]=new Option("Oupada");
                        document.getElementById("city").options[10]=new Option("Remuna");
                        document.getElementById("city").options[11]=new Option("Simulia");
                        document.getElementById("city").options[12]=new Option("Soro");
                       
                        break;


                    case "Bhadrak" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Basudevpur");
                        document.getElementById("city").options[2]=new Option("Bhadrak");
                        document.getElementById("city").options[3]=new Option("Bhandaripokari");
                        document.getElementById("city").options[4]=new Option("Bonth");
                        document.getElementById("city").options[5]=new Option("Chandabali");
                        document.getElementById("city").options[6]=new Option("Dhamanagar");
                        document.getElementById("city").options[7]=new Option("Tihidi");
                        break;


                     case "Cuttack" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Athagarh");
                        document.getElementById("city").options[2]=new Option("Banki");
                        document.getElementById("city").options[3]=new Option("Banki-D Pada");
                        document.getElementById("city").options[4]=new Option("Baramba");
                        document.getElementById("city").options[5]=new Option("Barang");
                        document.getElementById("city").options[6]=new Option("Cuttack Sadar");
                        document.getElementById("city").options[7]=new Option("Kantapada");
                        document.getElementById("city").options[8]=new Option("Mahanga");
                        document.getElementById("city").options[9]=new Option("Narasinghapur");
                        document.getElementById("city").options[10]=new Option("Niali");
                        document.getElementById("city").options[11]=new Option("Nischantakoili");
                        document.getElementById("city").options[12]=new Option("Salepur");
                        document.getElementById("city").options[13]=new Option("Tangi-C Dwar");
                        document.getElementById("city").options[14]=new Option("Tigiria");
                       
                        break;


                     case "Deogarh" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Barkote");
                        document.getElementById("city").options[2]=new Option("Reamal");
                        document.getElementById("city").options[3]=new Option("Tileibani");
                       
                        break;


                    case "Dhenkanal" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Bhuban");
                        document.getElementById("city").options[2]=new Option("Dhenkanal");
                        document.getElementById("city").options[3]=new Option("Gondia");
                        document.getElementById("city").options[4]=new Option("Hindol");
                        document.getElementById("city").options[5]=new Option("Kamekhyanagar");
                        document.getElementById("city").options[6]=new Option("Kankadahad");
                        document.getElementById("city").options[7]=new Option("Odapada");
                        document.getElementById("city").options[8]=new Option("Parjang");
                        break;


                    case "Ganjam" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Aska");
                        document.getElementById("city").options[2]=new Option("Beguniapada");
                        document.getElementById("city").options[3]=new Option("Belaguntha");
                        document.getElementById("city").options[4]=new Option("Bhanjanagar");
                        document.getElementById("city").options[5]=new Option("Buguda");
                        document.getElementById("city").options[6]=new Option("Chhatarpur");
                        document.getElementById("city").options[7]=new Option("Chikiti");
                        document.getElementById("city").options[8]=new Option("Dharakote");
                        document.getElementById("city").options[9]=new Option("Digapahandi");
                        document.getElementById("city").options[10]=new Option("Ganjam");
                        document.getElementById("city").options[11]=new Option("Hinjilikatu");
                        document.getElementById("city").options[12]=new Option("Jagannath Prasad");
                        document.getElementById("city").options[13]=new Option("Kabisuryanagar");
                        document.getElementById("city").options[14]=new Option("Khalikote");
                        document.getElementById("city").options[15]=new Option("Kukudakhandi");
                        document.getElementById("city").options[16]=new Option("Patrapur");
                        document.getElementById("city").options[17]=new Option("Polasara");
                        document.getElementById("city").options[18]=new Option("Purastompur");
                        document.getElementById("city").options[19]=new Option("Rangeilunda");
                        document.getElementById("city").options[20]=new Option("Sanakhemundi");
                        document.getElementById("city").options[21]=new Option("Sheragada");
                        document.getElementById("city").options[22]=new Option("Sorada");
                        
                        break;


                   case "Gajapati" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Gumma");
                        document.getElementById("city").options[2]=new Option("Kasinagar");
                        document.getElementById("city").options[3]=new Option("Mohana");
                        document.getElementById("city").options[4]=new Option("Nuagada");
                        document.getElementById("city").options[5]=new Option("Paralakhemundi");
                        document.getElementById("city").options[6]=new Option("R.Udayagiri");
                        document.getElementById("city").options[7]=new Option("Rayagad");
                        break;

 
                      case "Jharsuguda" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Jharsuguda");
                        document.getElementById("city").options[2]=new Option("Kirmira");
                        document.getElementById("city").options[3]=new Option("Kolabira");
                        document.getElementById("city").options[4]=new Option("Laikera");
                        document.getElementById("city").options[5]=new Option("Lakhanpur");
                        
                        break;


                    case "Jajpur" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Barchana");
                        document.getElementById("city").options[2]=new Option("Bari");
                        document.getElementById("city").options[3]=new Option("Binjharpur");
                        document.getElementById("city").options[4]=new Option("Dangadi");
                        document.getElementById("city").options[5]=new Option("Dasarathpur");
                        document.getElementById("city").options[6]=new Option("Dharmasala");
                        document.getElementById("city").options[7]=new Option("Jajpur");
                        document.getElementById("city").options[8]=new Option("Korei");
                        document.getElementById("city").options[9]=new Option("Rasulpur");
                        document.getElementById("city").options[10]=new Option("Sukinda");
                        
                        break;


                    case "JagatSinghPur" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Balikuda");
                        document.getElementById("city").options[2]=new Option("Biridi");
                        document.getElementById("city").options[3]=new Option("Ersama");
                        document.getElementById("city").options[4]=new Option("Jagatsinghpur");
                        document.getElementById("city").options[5]=new Option("Kujang");
                        document.getElementById("city").options[6]=new Option("Naugaon");
                        document.getElementById("city").options[7]=new Option("Raghunathpur");
                        document.getElementById("city").options[8]=new Option("Tirtol");
                        break;


                    case "Khurda" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Balianta");
                        document.getElementById("city").options[2]=new Option("Balipatna");
                        document.getElementById("city").options[3]=new Option("Banapur");
                        document.getElementById("city").options[4]=new Option("Begunia");
                        document.getElementById("city").options[5]=new Option("Bhubeneswar");
                        document.getElementById("city").options[6]=new Option("Bolagad");
                        document.getElementById("city").options[7]=new Option("Chilika");
                        document.getElementById("city").options[8]=new Option("Jatni");
                        document.getElementById("city").options[9]=new Option("Khurdha");
                        document.getElementById("city").options[10]=new Option("Tangii");
                       
                        break;
                    

            
                   case "Keonjhar" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Anandapur");
                        document.getElementById("city").options[2]=new Option("Bansalpal");
                        document.getElementById("city").options[3]=new Option("Champua");
                        document.getElementById("city").options[4]=new Option("Ghasipura");
                        document.getElementById("city").options[5]=new Option("Ghatgaon");
                        document.getElementById("city").options[6]=new Option("Harichandanpur");
                        document.getElementById("city").options[7]=new Option("Hatadihi");
                        document.getElementById("city").options[8]=new Option("Jhumpura");
                        document.getElementById("city").options[9]=new Option("Joda");
                        document.getElementById("city").options[10]=new Option("Kendujhar");
                        document.getElementById("city").options[11]=new Option("Patna");
                        document.getElementById("city").options[12]=new Option("Saharapada");
                        document.getElementById("city").options[13]=new Option("Telkoi");
                        
                        break;


                   case "Kalahandi" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Bhawanipatna");
                        document.getElementById("city").options[2]=new Option("Dharamgarh");
                        document.getElementById("city").options[3]=new Option("Golamunda");
                        document.getElementById("city").options[4]=new Option("Jaipatna");
                        document.getElementById("city").options[5]=new Option("Junagarh");
                        document.getElementById("city").options[6]=new Option("Kalampur");
                        document.getElementById("city").options[7]=new Option("Karlamunda");
                        document.getElementById("city").options[8]=new Option("Kesinga");
                        document.getElementById("city").options[9]=new Option("Koksara");
                        document.getElementById("city").options[10]=new Option("Lanjigarh");
                        document.getElementById("city").options[11]=new Option("Madanpur");
                        document.getElementById("city").options[12]=new Option("Narla");
                        document.getElementById("city").options[13]=new Option("Thuamul");
                        
                        break;
                   


                 case "Kandhamal" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Baliguda");
                        document.getElementById("city").options[2]=new Option("Chakapad");
                        document.getElementById("city").options[3]=new Option("Daringbadi");
                        document.getElementById("city").options[4]=new Option("G.Udayagiri");
                        document.getElementById("city").options[5]=new Option("K.Nuagaon");
                        document.getElementById("city").options[6]=new Option("Khajuripada");
                        document.getElementById("city").options[7]=new Option("Kotagarh");
                        document.getElementById("city").options[8]=new Option("Phiringia");
                        document.getElementById("city").options[9]=new Option("Phulbani");
                        document.getElementById("city").options[10]=new Option("Raikia");
                        document.getElementById("city").options[11]=new Option("Tikabali");
                        document.getElementById("city").options[12]=new Option("Tumidbandh");
                        break;


                 case "Koraput" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Bandhugaon");
                        document.getElementById("city").options[2]=new Option("Boipariguda");
                        document.getElementById("city").options[3]=new Option("Boriguma");
                        document.getElementById("city").options[4]=new Option("Dasamanthpur");
                        document.getElementById("city").options[5]=new Option("Jeypore");
                        document.getElementById("city").options[6]=new Option("Koraput");
                        document.getElementById("city").options[7]=new Option("Kotpad");
                        document.getElementById("city").options[8]=new Option("Kundra");
                        document.getElementById("city").options[9]=new Option("Lampatput");
                        document.getElementById("city").options[10]=new Option("Laxmipur");
                        document.getElementById("city").options[11]=new Option("Nandapur");
                        document.getElementById("city").options[12]=new Option("Narayanpatna");
                        document.getElementById("city").options[13]=new Option("Pottangi");
                        document.getElementById("city").options[14]=new Option("Simliguda");
                        break;



              case "Kendrapara" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Aul");
                        document.getElementById("city").options[2]=new Option("Derabish");
                        document.getElementById("city").options[3]=new Option("Garadpur");
                        document.getElementById("city").options[4]=new Option("Kendrapara");
                        document.getElementById("city").options[5]=new Option("Mahakalapara");
                        document.getElementById("city").options[6]=new Option("Marasaghai");
                        document.getElementById("city").options[7]=new Option("Pattamundai");
                        document.getElementById("city").options[8]=new Option("Rajkanika");
                        document.getElementById("city").options[9]=new Option("Rajnagar");
                        
                        break;


              case "Malkangiri" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Kalimela");
                        document.getElementById("city").options[2]=new Option("Khairaput");
                        document.getElementById("city").options[3]=new Option("Korukonda");
                        document.getElementById("city").options[4]=new Option("Kudmulgumma");
                        document.getElementById("city").options[5]=new Option("Malkangiri");
                        document.getElementById("city").options[6]=new Option("Mathili");
                        document.getElementById("city").options[7]=new Option("Podia");
                        break;



              case "Mayurbhanj" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Badasahi");
                        document.getElementById("city").options[2]=new Option("Bahalda");
                        document.getElementById("city").options[3]=new Option("Bangiriposhi");
                        document.getElementById("city").options[4]=new Option("Baripada");
                        document.getElementById("city").options[5]=new Option("Bhetanati");
                        document.getElementById("city").options[6]=new Option("Bijatala");
                        document.getElementById("city").options[7]=new Option("Bisoi");
                        document.getElementById("city").options[8]=new Option("Gopabandhunagar");
                        document.getElementById("city").options[9]=new Option("Jamda");
                        document.getElementById("city").options[10]=new Option("Joshipur");
                        document.getElementById("city").options[11]=new Option("Kaptipada");
                        document.getElementById("city").options[12]=new Option("Karanija");
                        document.getElementById("city").options[13]=new Option("Khunta");
                        document.getElementById("city").options[14]=new Option("Kulina");
                        document.getElementById("city").options[15]=new Option("Kusumi");
                        document.getElementById("city").options[16]=new Option("Moroda");
                        document.getElementById("city").options[17]=new Option("Rairangpur");
                        document.getElementById("city").options[18]=new Option("Raruan");
                        document.getElementById("city").options[19]=new Option("Rasagobindapur");
                        document.getElementById("city").options[20]=new Option("Samakhunta");
                        document.getElementById("city").options[21]=new Option("Sarasakana");
                        document.getElementById("city").options[22]=new Option("Sukuruli");
                        document.getElementById("city").options[23]=new Option("Suliapada");
                        document.getElementById("city").options[24]=new Option("Thakurmunda");
                        document.getElementById("city").options[25]=new Option("Tiring");
                        document.getElementById("city").options[26]=new Option("Udala");
                        
                        break;



              case "Nabarangpur" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Chandahandi");
                        document.getElementById("city").options[2]=new Option("Debugaon");
                        document.getElementById("city").options[3]=new Option("Jharigaon");
                        document.getElementById("city").options[4]=new Option("Kosagumuda");
                        document.getElementById("city").options[5]=new Option("Nandahandi");
                        document.getElementById("city").options[6]=new Option("Nowarangpur");
                        document.getElementById("city").options[7]=new Option("Papadahandi");
                        document.getElementById("city").options[8]=new Option("Raighar");
                        document.getElementById("city").options[9]=new Option("Tentulikhunti");
                        document.getElementById("city").options[10]=new Option("Umerkote");
                        break;



              case "Nuapada" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Boden");
                        document.getElementById("city").options[2]=new Option("Khariar");
                        document.getElementById("city").options[3]=new Option("Komna");
                        document.getElementById("city").options[4]=new Option("Nuapada");
                        document.getElementById("city").options[5]=new Option("Sinapali");
                        
                        break;



               case "Nayagarh" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Bhapur");
                        document.getElementById("city").options[2]=new Option("Daspalla");
                        document.getElementById("city").options[3]=new Option("Gania");
                        document.getElementById("city").options[4]=new Option("Khandapada");
                        document.getElementById("city").options[5]=new Option("Nayagarh");
                        document.getElementById("city").options[6]=new Option("Nuagaon");
                        document.getElementById("city").options[7]=new Option("Odagaon");
                        document.getElementById("city").options[8]=new Option("Ranpur");
                        
                        break;



                case "Puri" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Astrang");
                        document.getElementById("city").options[2]=new Option("Brahmagiri");
                        document.getElementById("city").options[3]=new Option("Delang");
                        document.getElementById("city").options[4]=new Option("Gop");
                        document.getElementById("city").options[5]=new Option("Kakatpur");
                        document.getElementById("city").options[6]=new Option("Kanas");
                        document.getElementById("city").options[7]=new Option("Krushnaprasad");
                        document.getElementById("city").options[8]=new Option("Nimapada");
                        document.getElementById("city").options[9]=new Option("Pipili");
                        document.getElementById("city").options[10]=new Option("Puri");
                        document.getElementById("city").options[11]=new Option("Satyabadi");
                        
                        break;



             case "Rayagada" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Bisam Cuttack");
                        document.getElementById("city").options[2]=new Option("Chandrapur");
                        document.getElementById("city").options[3]=new Option("Gudari");
                        document.getElementById("city").options[4]=new Option("Gunupur");
                        document.getElementById("city").options[5]=new Option("Kaalyansinghpur");
                        document.getElementById("city").options[6]=new Option("Kaashipur");
                        document.getElementById("city").options[7]=new Option("Kolanara");
                        document.getElementById("city").options[8]=new Option("Muniguda");
                        document.getElementById("city").options[9]=new Option("Padmapur");
                        document.getElementById("city").options[10]=new Option("Ramanguda");
                        document.getElementById("city").options[11]=new Option("Rayagada");
                        
                        break;



              case "Sambalpur" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Bamara");
                        document.getElementById("city").options[2]=new Option("Dhankauda");
                        document.getElementById("city").options[3]=new Option("Jamanakira");
                        document.getElementById("city").options[4]=new Option("Jujumora");
                        document.getElementById("city").options[5]=new Option("Kuchinda");
                        document.getElementById("city").options[6]=new Option("Maneswar");
                        document.getElementById("city").options[7]=new Option("Nakatideul");
                        document.getElementById("city").options[8]=new Option("Rairakhola");
                        document.getElementById("city").options[9]=new Option("Rengali");
                        
                        break;



                 case "Sonepur" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Binka");
                        document.getElementById("city").options[2]=new Option("Birmaharalpur");
                        document.getElementById("city").options[3]=new Option("Dunguripalli");
                        document.getElementById("city").options[4]=new Option("Sonepur");
                        document.getElementById("city").options[5]=new Option("Tarva");
                        document.getElementById("city").options[6]=new Option("Ulunda");
                        
                        break;


                 case "Sundergarh" :
                        document.getElementById("city").options[0]=new Option("Select your block","");
                        document.getElementById("city").options[1]=new Option("Badagaon");
                        document.getElementById("city").options[2]=new Option("Balisankara");
                        document.getElementById("city").options[3]=new Option("Banaigarh");
                        document.getElementById("city").options[4]=new Option("Bisra");
                        document.getElementById("city").options[5]=new Option("Gurundia");
                        document.getElementById("city").options[6]=new Option("Hemagiri");
                        document.getElementById("city").options[7]=new Option("Koira");
                        document.getElementById("city").options[8]=new Option("Kunarmunda");
                        document.getElementById("city").options[9]=new Option("Kutra");
                        document.getElementById("city").options[10]=new Option("Lahunipada");
                        document.getElementById("city").options[11]=new Option("Lathikata");
                        document.getElementById("city").options[12]=new Option("Lepharipara");
                        document.getElementById("city").options[13]=new Option("Nuagaon");
                        document.getElementById("city").options[14]=new Option("Rajgangpur");
                        document.getElementById("city").options[15]=new Option("Subdega");
                        document.getElementById("city").options[16]=new Option("Sundargarh");
                        document.getElementById("city").options[17]=new Option("Tanngarapalli");
                        break;

                }
                return true;
            }
       </script>

</head> 
<body>


<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="../index.html"><b>LabourFriend</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
		
		<ul class="nav navbar-nav navbar-right ml-auto">
			
					
			<li class="nav-item"><a href="index.php" class="nav-link"><i class="fa fa-home"></i><span>Home</span></a></li>

			 <li class="nav-item"><a href="mailto:labourfriend134@gmail.com" class="nav-link"><i class="fa fa-envelope"></i><span>Contact Us</span></a></li>	
			
			<li class="nav-item"><a href="setting.php" class="nav-link"><i class="fa fa-gears"></i><span>Settings</span></a></li>
			<li class="nav-item"><a href="index.php?logout='1'" class="nav-link"><i class="material-icons">&#xE8AC;</i><span>Logout</span></a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>  

<div class="header">
  	<h2>Edit Details</h2>
  </div>


<?php
include "db.php";

if(isset($_POST['update'])){

   $eid=$_GET['id'];
    $adhar_no = $_POST['adhar_no'];
   $name = $_POST['name'];
     $phone = $_POST['phone'];
      $altphone = $_POST['altphone'];
       $dob = $_POST['dob'];
         $work = $_POST['work'];
          $gender = $_POST['gender'];
           $country = $_POST['country'];
            $state = $_POST['state'];
             $district = $_POST['district'];
              $city = $_POST['city'];
               $panchayat = $_POST['panchayat'];
               
				
			
$sql="UPDATE `daily_labour` SET adhar_no='$adhar_no' ,name='$name' ,phone='$phone' ,altphone='$altphone' ,dob='$dob',work='$work',country='$country',state='$state',district='$district',city='$city',panchayat='$panchayat',gender='$gender' WHERE id='$eid' AND labour_username='".$_SESSION['labour_username']."'";	

if($result = mysqli_query($db, $sql))

echo '<meta http-equiv="refresh" content="0;index.php" />';

  }


?>

<?php

$eid = ''; 
if( isset( $_GET['id'])) {
    $eid = $_GET['id']; 
} 

$getdata=("SELECT * FROM `daily_labour` WHERE id='$eid' AND labour_username='".$_SESSION['labour_username']."'");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{?>
<form method="post" action="" enctype="multipart/form-data">

        <div class="input-group">
        <table cellpadding="5" cellspacing="5">
		
		 <?php if (isset($_SESSION['labour_username'])) : ?>
    	<center><h3 style="color:yellow;font-size:0px;">Hello, <strong><?php echo $_SESSION['labour_username']; ?>!</strong></h3></center>
    <?php endif ?>

   <tr><td>Aadhaar No.:</td></tr> 
        <tr><td><input type="text" style="color:black" maxlength="12" pattern="\d{12}" name="adhar_no" placeholder="Your Aadhaar No." value="<?php echo $row['adhar_no']; ?>" required></td></tr>
 
  	<tr><td>Full Name:</td></tr> 
        <tr><td><input type="text" style="color:black" style="color:black" name="name" pattern="^[a-zA-Z\s]+$" placeholder="Enter Full Name" value="<?php echo $row['name']; ?>" required></td></tr>
  	  
  	  <tr><td>Phone:</td></tr>
  	  <tr><td><input type="tel" style="color:black" maxlength="10" pattern="^[6789]\d{9}$" placeholder="Enter Phone Number" name="phone" value="<?php echo $row['phone']; ?>" required ></td></tr>
	
  	<tr><td>Alternative Phone:(Optional)</td></tr>
          <tr><td><input type="tel" style="color:black" maxlength="10" pattern="^[6789]\d{9}$" placeholder="Enter Alternative Phone Number" name="altphone" value="<?php echo $row['altphone']; ?>" ></td></tr>

	<tr><td>Date Of Birth:</td></tr> 
        <tr><td><input type="text" style="color:black" name="dob" id="in_dob" placeholder="Enter Date Of Birth" value="<?php echo $row['dob']; ?>" required></td></tr>
<script type="text/javascript">
                            $(function() {
                            $("#in_dob").datepicker({ dateFormat: 'yy-mm-dd', yearRange:'-80:+0', changeYear:true, changeMonth:true});
                        });
                         </script>

  
  <tr><td>Select Country:</td></tr>

<tr><td><select name="country" style="color:black" required>
    
    <option value="India">India</option>
  
    
</select></td></tr>

  
   <tr><td>Select State:</td></tr>

<tr><td><select name="state" style="color:black" required>

    <option value="Odisha">Odisha</option>
    
</select></td></tr>

  
  <tr><td>Select District:</td></tr>
<tr><td>

            <select name="district" style="color:black" class="required-entry" id="district" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
                 <option value="" selected="selected">-Select-</option>
                <option value="Angul" <?php if($row['district']=='Angul') {?> selected="selected" <?php } ?>>Angul</option>
                <option value="Boudh" <?php if($row['district']=='Boudh') {?> selected="selected" <?php } ?>>Boudh</option>
                <option value="Balangir" <?php if($row['district']=='Balangir') {?> selected="selected" <?php } ?>>Balangir</option>
                <option value="Bargarh" <?php if($row['district']=='Bargarh') {?> selected="selected" <?php } ?>>Bargarh</option>
                <option value="Balasore" <?php if($row['district']=='Balasore') {?> selected="selected" <?php } ?>>Balasore</option>
                <option value="Bhadrak" <?php if($row['district']=='Bhadrak') {?> selected="selected" <?php } ?>>Bhadrak</option>
                <option value="Cuttack" <?php if($row['district']=='Cuttack') {?> selected="selected" <?php } ?>>Cuttack</option>
                <option value="Deogarh" <?php if($row['district']=='Deogarh') {?> selected="selected" <?php } ?>>Deogarh</option>
                <option value="Dhenkanal" <?php if($row['district']=='Dhenkanal') {?> selected="selected" <?php } ?>>Dhenkanal</option>
                <option value="Ganjam" <?php if($row['district']=='Ganjam') {?> selected="selected" <?php } ?>>Ganjam</option>
                <option value="Gajapati" <?php if($row['district']=='Gajapati') {?> selected="selected" <?php } ?>>Gajapati</option>
                <option value="Jharsuguda" <?php if($row['district']=='Jharsuguda') {?> selected="selected" <?php } ?>>Jharsuguda</option>
                <option value="Jajpur" <?php if($row['district']=='Jajpur') {?> selected="selected" <?php } ?>>Jajpur</option>
                <option value="JagatSinghPur" <?php if($row['district']=='JagatSinghPur') {?> selected="selected" <?php } ?>>JagatSinghPur</option>
                <option value="Khurda" <?php if($row['district']=='Khurda') {?> selected="selected" <?php } ?>>Khurda</option>
                <option value="Keonjhar" <?php if($row['district']=='Keonjhar') {?> selected="selected" <?php } ?>>Keonjhar</option>
                <option value="Kalahandi" <?php if($row['district']=='Kalahandi') {?> selected="selected" <?php } ?>>Kalahandi</option>
                <option value="Kandhamal" <?php if($row['district']=='Kandhamal') {?> selected="selected" <?php } ?>>Kandhamal</option>
                <option value="Koraput" <?php if($row['district']=='Koraput') {?> selected="selected" <?php } ?>>Koraput</option>
                <option value="Kendrapara" <?php if($row['district']=='Kendrapara') {?> selected="selected" <?php } ?>>Kendrapara</option>
                <option value="Malkangiri" <?php if($row['district']=='Malkangiri') {?> selected="selected" <?php } ?>>Malkangiri</option>
                <option value="Mayurbhanj" <?php if($row['district']=='Mayurbhanj') {?> selected="selected" <?php } ?>>Mayurbhanj</option>
                <option value="Nabarangpur" <?php if($row['district']=='Nabarangpur') {?> selected="selected" <?php } ?>>Nabarangpur</option>
                <option value="Nuapada" <?php if($row['district']=='Nuapada') {?> selected="selected" <?php } ?>>Nuapada</option>
                <option value="Nayagarh" <?php if($row['district']=='Nayagarh') {?> selected="selected" <?php } ?>>Nayagarh</option>
                <option value="Puri" <?php if($row['district']=='Puri') {?> selected="selected" <?php } ?>>Puri</option>
                <option value="Rayagada" <?php if($row['district']=='Rayagada') {?> selected="selected" <?php } ?>>Rayagada</option>
                <option value="Sambalpur" <?php if($row['district']=='Sambalpur') {?> selected="selected" <?php } ?>>Sambalpur</option>
                <option value="Sonepur" <?php if($row['district']=='Sonepur') {?> selected="selected" <?php } ?>>Sonepur</option>
                <option value="Sundergarh" <?php if($row['district']=='Sundergarh') {?> selected="selected" <?php } ?>>Sundergarh</option>
            </select>
</td></tr>

<tr><td>Select Block:</td></tr>
     <tr><td>   
   
            <script type="text/javascript" language="JavaScript">
                document.write('<select name="city" id="city" style="color:black" required><option value="<?php echo $row['city']; ?>"><?php echo $row['city']; ?></option></select>')

            </script>
            </td></tr>

   <tr><td>Panchayat:</td></tr>
 <tr><td><input type="text" style="color:black" name="panchayat" placeholder="Enter Panchayat Name" value="<?php echo $row['panchayat']; ?>" required></td></tr>
  
<tr><td>Gender:</td></tr>
<tr><td>
<input type="radio" name="gender" value="Male" <?php if($row['gender']=='Male') {?> checked="checked" <?php } ?> />Male
<input type="radio" name="gender" value="Female" <?php echo $row['gender']?> 
<?php if($row['gender']=='Female') {?> checked="checked" <?php } ?> />Female
</td></tr>

<tr><td>Select Work:</td></tr>

 <tr><td><select name="work" style="color:black" required>
<option value="<?php echo $row['work'];?>"><?php echo $row['work'];?></option>
<?php
include "db.php";
$getdata=("SELECT * FROM `work`");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{?>
    <option value="<?php echo $row['work'];?>"><?php echo $row['work'];?></option>
<?php	}
	?> 
</select></td></tr>

</table>
</div>
<?php	}
	?>
	<input type="hidden" name="id" value="<?php echo $eid ?>" />
  <tr><td><center><input class="MyButton" type="submit" name="update" value="Update" /><input type="reset" class="MyButton" value="Reset"></center></td></tr>
        
</form>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <p class="w3-medium">Copyright © 2019 LabourFriend.in (a NAYAK GROUPS Venture) All Rights Reserved.</p>
</footer>

</body>
</html>