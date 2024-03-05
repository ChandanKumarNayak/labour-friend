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
  <title>Labour Details | LabourFriend</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="It's Free ! Register In LabourFriend To Get Work In Your Locality Easily.">
    <meta name="keywords" content="LabourFriend,labour friend,hire labour,find labour,labours near me,hire construction labour,hire plumber,hire mason,hire painter,hire carpenter,hire electrician,hire tite setter,labours in odisha,hire labour in odisha,plumber near me,electrician near me,mason near me,tile setter near me,painter near me,carpenter near me,find labours in odisha,nayak groups ">
    <meta name="owner" content="Chandan Kumar Nayak">
     <link rel="shortcut icon" type="image/png" href="../image/lf.jpg">
  <link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
  <div class="header">
  	<h2>Fill The Form</h2>
  </div>
	
  <form method="post" action="" enctype="multipart/form-data">

        <div class="input-group">
        <table cellpadding="5" cellspacing="5">
		
		 <?php if (isset($_SESSION['labour_username'])) : ?>
    	<center><h3 style="color:yellow;font-size:0px;">Hello, <strong><?php echo $_SESSION['labour_username']; ?>!</strong></h3></center>
    <?php endif ?>

        <tr><td>Profile Image:[Max-size:500kb]</td></tr>
        <tr><td><input class="MyButton1" type="file" name="myimage" accept = "image/*" required></td></tr>
 
  	<tr><td>Full Name:</td></tr> 
        <tr><td><input type="text" name="name" pattern="^[a-zA-Z\s]+$" placeholder="Enter Full Name" required></td></tr>
 
  	  
  	  <tr><td>Phone:</td></tr>
  	  <tr><td><input type="tel" maxlength="10" pattern="^[6789]\d{9}$" placeholder="Enter Phone Number" name="phone" required ></td></tr>
	
  	<tr><td>Alternative Phone:(Optional)</td></tr>
          <tr><td><input type="tel" maxlength="10" pattern="^[6789]\d{9}$" placeholder="Enter Alternative Phone Number" name="altphone" ></td></tr>

	<tr><td>Date Of Birth:</td></tr> 
        <tr><td><input type="text" name="dob" id="in_dob" placeholder="Enter Date Of Birth" required></td></tr>
<script type="text/javascript">
                            $(function() {
                            $("#in_dob").datepicker({ dateFormat: 'yy-mm-dd', yearRange:'-80:+0', changeYear:true, changeMonth:true});
                        });
                         </script>
  	  
 

  <tr><td>Select Work:</td></tr>

 <tr><td><select name="work" required>
<option value="" selected="selected">-Select-</option>
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

  
  <tr><td>Select Country:</td></tr>

<tr><td><select name="country" required>
    
    <option value="India">India</option>
  
    
</select></td></tr>

  
   <tr><td>Select State:</td></tr>

<tr><td><select name="state" required>

    <option value="Odisha">Odisha</option>
    
</select></td></tr>

  
   <tr><td>Select District:</td></tr>

<tr><td><select name="district" class="required-entry" id="district" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
               <option value="" selected="selected">-Select-</option>
                <option value="Angul">Angul</option>
                <option value="Boudh">Boudh</option>
                <option value="Balangir">Balangir</option>
                <option value="Bargarh">Bargarh</option>
                <option value="Balasore">Balasore</option>
                <option value="Bhadrak">Bhadrak</option>
                <option value="Cuttack">Cuttack</option>
                <option value="Deogarh">Deogarh</option>
                <option value="Dhenkanal">Dhenkanal</option>
                <option value="Ganjam">Ganjam</option>
                <option value="Gajapati">Gajapati</option>
                <option value="Jharsuguda">Jharsuguda</option>
                <option value="Jajpur">Jajpur</option>
                <option value="JagatSinghPur">JagatSinghPur</option>
                <option value="Khurda">Khurda</option>
                <option value="Keonjhar">Keonjhar</option>
                <option value="Kalahandi">Kalahandi</option>
                <option value="Kandhamal">Kandhamal</option>
                <option value="Koraput">Koraput</option>
                <option value="Kendrapara">Kendrapara</option>
                <option value="Malkangiri">Malkangiri</option>
                <option value="Mayurbhanj">Mayurbhanj</option>
                <option value="Nabarangpur">Nabarangpur</option>
                <option value="Nuapada">Nuapada</option>
                <option value="Nayagarh">Nayagarh</option>
                <option value="Puri">Puri</option>
                <option value="Rayagada">Rayagada</option>
                <option value="Sambalpur">Sambalpur</option>
                <option value="Sonepur">Sonepur</option>
                <option value="Sundergarh">Sundergarh</option>
            </select></td></tr>
  
   <tr><td>Select Block:</td></tr>

    
     <tr><td><script type="text/javascript" language="JavaScript">
                document.write('<select name="city" id="city" required><option value="" required>-Select-</option></select>')
            </script></td></tr>

<tr><td>Panchayat Name:</td></tr>
  	  <tr><td><input type="text" placeholder="Enter Panchayat Name" name="panchayat" required ></td></tr>
            
  <tr><td>Gender:</td></tr>
  <tr><td>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>value="Female">Female
  </tr></td>
     
  	    <tr><td><center><input class="MyButton" type="submit" name="add" value="Register" /><input type="reset" class="MyButton" value="Reset"></center></td></tr>
                 
  </table>
  </div>	
  </form>
  
</body>
</html>


<!--===============================================Server Part================================================-->

<?php
include "db.php";

$upload_image="";
$folder="";
$insert_path="";
 $name = "";
 $target_dir = "";
 $target_file = "";
 $imageFileType = "";
 $extensions_arr = "";
 $uploadOk = "1";
 
if(isset($_POST['add'])){
	
	
$upload_image=$_FILES['myimage']['name'];

 // Select file type
 $imageFileType = strtolower(pathinfo($upload_image,PATHINFO_EXTENSION));

// Check file size
if ($_FILES['myimage']['size'] > 500000) {
   
    $uploadOk = 0;
} 

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 
     echo "<center><div style ='font:15px/21px Arial,tahoma,sans-serif;color:white'>Sorry, your image size is more than 500kb.</div></center>";
// if everything is ok, try to upload file
} else {
	
   $name = $_POST['name'];
    $myimage = $_POST['myimage'];
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
                $status = $_POST['status'];
				
			
$sql="UPDATE `daily_labour` SET myimage='$upload_image' ,name='$name' ,phone='$phone' ,altphone='$altphone' ,dob='$dob',work='$work',country='$country',state='$state',district='$district',city='$city',panchayat='$panchayat',gender='$gender',status='1',form_status='1' WHERE labour_username='".$_SESSION['labour_username']."'";	

if($result = mysqli_query($db, $sql))

$folder="../dbimg/";

move_uploaded_file($_FILES['myimage']['tmp_name'], "$folder".$_FILES['myimage']['name']);


echo '<meta http-equiv="refresh" content="0;index.php" />';

  }
}
}

?>