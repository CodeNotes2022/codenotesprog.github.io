<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from script.viserlab.com/elab/register by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Mar 2022 19:52:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> E-Lab - Sign Up</title>
  <meta name="title" Content="E-Lab - Sign Up">
    <meta name="description" content="Online learning management platform">
    <meta name="keywords" content="lms,online platform">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="E-Lab - Sign Up">
    
    <meta itemprop="name" content="E-Lab - Sign Up">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/616191dd14e5e1633784285.jpg">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="lab - Online lerning  platfrm">
    <meta property="og:description" content="Online learning management platform">
    <meta property="og:image" content="assets/images/seo/616191dd14e5e1633784285.jpg"/>
    <meta property="og:image:type" content="image/jpg" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="register.html">
    
    <meta name="twitter:card" content="summary_large_image">
  <!-- bootstrap 5  -->
  <link rel="stylesheet" href="assets/templates/basic/css/lib/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/global/css/all.min.css"> 
  <!-- lineawesome font -->
  <link rel="stylesheet" href="assets/global/css/line-awesome.min.css"> 
  <!--  -->

  <!-- slick slider css -->
  <link rel="stylesheet" href="assets/templates/basic/css/lib/slick.css">

  <!-- main css -->
  <link rel="stylesheet" href="assets/templates/basic/css/main.css">
  <link rel="stylesheet" href="assets/templates/basic/css/colorbc94.css?color=2d54a8&amp;secondColor=14233c">
  
  <style>
    .country-code .input-group-prepend .input-group-text{
        background: #fff !important;
    }
    .country-code select{
        border: none;
    }
    .country-code select:focus{
        border: none;
        outline: none;
    }
    .hover-input-popup {
        position: relative;
    }
    .hover-input-popup:hover .input-popup {
        opacity: 1;
        visibility: visible;
    }
    .input-popup {
        position: absolute;
        bottom: 130%;
        left: 50%;
        width: 280px;
        background-color: #1a1a1a;
        color: #fff;
        padding: 20px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }
    .input-popup::after {
        position: absolute;
        content: '';
        bottom: -19px;
        left: 50%;
        margin-left: -5px;
        border-width: 10px 10px 10px 10px;
        border-style: solid;
        border-color: transparent transparent #1a1a1a transparent;
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }
    .input-popup p {
        padding-left: 20px;
        position: relative;
    }
    .input-popup p::before {
        position: absolute;
        content: '';
        font-family: 'Line Awesome Free';
        font-weight: 900;
        left: 0;
        top: 4px;
        line-height: 1;
        font-size: 18px;
    }
    .input-popup p.error {
        text-decoration: line-through;
    }
    .input-popup p.error::before {
        content: "\f057";
        color: #ea5455;
    }
    .input-popup p.success::before {
        content: "\f058";
        color: #28c76f;
    }
</style>
</head>
  <body> 
        <div class="preloader">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div> 
    </div> 

    <div class="main-wrapper">
        

    <section class="account-section style--two">
        <div class="left">
            <div class="top-el">
                <img src="assets/images/frontend/login/60b3677e407f81622370174.png" alt="image">
              </div>
              <div class="bottom-el">
                <img src="assets/images/frontend/login/60b3677e8c1071622370174.png" alt="image">
              </div>
          <div class="account-form-area">
            <div class="text-center">
              <a href="https://script.viserlab.com/elab" class="account-logo"><img src="assets/images/logoIcon/logo.png" alt="image"></a>
            </div>
             <?php
                                         extract($_POST);
                                         // print_r($_POST);die();
                                         include "inc/conn.php";
                                            if(isset($submit))
                                                {
                                          $sql="INSERT INTO `signup`(`firstname`, `lastname`, `country`, `mobile`, `username`, `email`, `password`, `conf_password`) VALUES ('$firstname','$lastname','$country','$mobile','$username','$email','$password','$conf_password')";
                                         if(mysqli_query($way,$sql))
                                                {?>
                                            <script type="text/javascript">
                                            //alert("All Right");
                                           window.location = "login.php";</script>
                                            <?php
                                        if ($_POST["pass"] === $_POST["re_pass"]) {
                                                    
                                                        }
                                                    

                                                }else{
                                                    
                                                }
                                            }
                                          ?>
            <form class="account-form mt-5" action="" method="POST" onsubmit="return submitUserForm();">
                <div class="row">
                    <input type="hidden" name="_token" value="MZmrDwb9xNEYAytcbe9AFlRlcldm9rHtg6eMFoV9">                    
                    <div class="form-group col-sm-6">
                        <label for="firstname" class="">First Name</label>
                        <input id="firstname" type="text" class="form--control" placeholder="First Name" name="firstname" value="" required>
                    
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="lastname" class="">Last Name</label>
                        <input id="lastname" type="text" class="form--control" placeholder="Last Name" name="lastname" value="" required>
                        
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="" for="country">Country</label>
                        <select name="country" id="country" class="form--control">
                                                            <option data-mobile_code="93" value="Afghanistan" data-code="AF">Afghanistan</option>
                                                            <option data-mobile_code="358" value="Aland Islands" data-code="AX">Aland Islands</option>
                                                            <option data-mobile_code="355" value="Albania" data-code="AL">Albania</option>
                                                            <option data-mobile_code="213" value="Algeria" data-code="DZ">Algeria</option>
                                                            <option data-mobile_code="1684" value="AmericanSamoa" data-code="AS">AmericanSamoa</option>
                                                            <option data-mobile_code="376" value="Andorra" data-code="AD">Andorra</option>
                                                            <option data-mobile_code="244" value="Angola" data-code="AO">Angola</option>
                                                            <option data-mobile_code="1264" value="Anguilla" data-code="AI">Anguilla</option>
                                                            <option data-mobile_code="672" value="Antarctica" data-code="AQ">Antarctica</option>
                                                            <option data-mobile_code="1268" value="Antigua and Barbuda" data-code="AG">Antigua and Barbuda</option>
                                                            <option data-mobile_code="54" value="Argentina" data-code="AR">Argentina</option>
                                                            <option data-mobile_code="374" value="Armenia" data-code="AM">Armenia</option>
                                                            <option data-mobile_code="297" value="Aruba" data-code="AW">Aruba</option>
                                                            <option data-mobile_code="61" value="Australia" data-code="AU">Australia</option>
                                                            <option data-mobile_code="43" value="Austria" data-code="AT">Austria</option>
                                                            <option data-mobile_code="994" value="Azerbaijan" data-code="AZ">Azerbaijan</option>
                                                            <option data-mobile_code="1242" value="Bahamas" data-code="BS">Bahamas</option>
                                                            <option data-mobile_code="973" value="Bahrain" data-code="BH">Bahrain</option>
                                                            <option data-mobile_code="880" value="Bangladesh" data-code="BD">Bangladesh</option>
                                                            <option data-mobile_code="1246" value="Barbados" data-code="BB">Barbados</option>
                                                            <option data-mobile_code="375" value="Belarus" data-code="BY">Belarus</option>
                                                            <option data-mobile_code="32" value="Belgium" data-code="BE">Belgium</option>
                                                            <option data-mobile_code="501" value="Belize" data-code="BZ">Belize</option>
                                                            <option data-mobile_code="229" value="Benin" data-code="BJ">Benin</option>
                                                            <option data-mobile_code="1441" value="Bermuda" data-code="BM">Bermuda</option>
                                                            <option data-mobile_code="975" value="Bhutan" data-code="BT">Bhutan</option>
                                                            <option data-mobile_code="591" value="Bolivia, Plurinational State of" data-code="BO">Bolivia, Plurinational State of</option>
                                                            <option data-mobile_code="387" value="Bosnia and Herzegovina" data-code="BA">Bosnia and Herzegovina</option>
                                                            <option data-mobile_code="267" value="Botswana" data-code="BW">Botswana</option>
                                                            <option data-mobile_code="55" value="Brazil" data-code="BR">Brazil</option>
                                                            <option data-mobile_code="246" value="British Indian Ocean Territory" data-code="IO">British Indian Ocean Territory</option>
                                                            <option data-mobile_code="673" value="Brunei Darussalam" data-code="BN">Brunei Darussalam</option>
                                                            <option data-mobile_code="359" value="Bulgaria" data-code="BG">Bulgaria</option>
                                                            <option data-mobile_code="226" value="Burkina Faso" data-code="BF">Burkina Faso</option>
                                                            <option data-mobile_code="257" value="Burundi" data-code="BI">Burundi</option>
                                                            <option data-mobile_code="855" value="Cambodia" data-code="KH">Cambodia</option>
                                                            <option data-mobile_code="237" value="Cameroon" data-code="CM">Cameroon</option>
                                                            <option data-mobile_code="1" value="Canada" data-code="CA">Canada</option>
                                                            <option data-mobile_code="238" value="Cape Verde" data-code="CV">Cape Verde</option>
                                                            <option data-mobile_code=" 345" value="Cayman Islands" data-code="KY">Cayman Islands</option>
                                                            <option data-mobile_code="236" value="Central African Republic" data-code="CF">Central African Republic</option>
                                                            <option data-mobile_code="235" value="Chad" data-code="TD">Chad</option>
                                                            <option data-mobile_code="56" value="Chile" data-code="CL">Chile</option>
                                                            <option data-mobile_code="86" value="China" data-code="CN">China</option>
                                                            <option data-mobile_code="61" value="Christmas Island" data-code="CX">Christmas Island</option>
                                                            <option data-mobile_code="61" value="Cocos (Keeling) Islands" data-code="CC">Cocos (Keeling) Islands</option>
                                                            <option data-mobile_code="57" value="Colombia" data-code="CO">Colombia</option>
                                                            <option data-mobile_code="269" value="Comoros" data-code="KM">Comoros</option>
                                                            <option data-mobile_code="242" value="Congo" data-code="CG">Congo</option>
                                                            <option data-mobile_code="243" value="Congo, The Democratic Republic of the Congo" data-code="CD">Congo, The Democratic Republic of the Congo</option>
                                                            <option data-mobile_code="682" value="Cook Islands" data-code="CK">Cook Islands</option>
                                                            <option data-mobile_code="506" value="Costa Rica" data-code="CR">Costa Rica</option>
                                                            <option data-mobile_code="225" value="Cote d&#039;Ivoire" data-code="CI">Cote d&#039;Ivoire</option>
                                                            <option data-mobile_code="385" value="Croatia" data-code="HR">Croatia</option>
                                                            <option data-mobile_code="53" value="Cuba" data-code="CU">Cuba</option>
                                                            <option data-mobile_code="357" value="Cyprus" data-code="CY">Cyprus</option>
                                                            <option data-mobile_code="420" value="Czech Republic" data-code="CZ">Czech Republic</option>
                                                            <option data-mobile_code="45" value="Denmark" data-code="DK">Denmark</option>
                                                            <option data-mobile_code="253" value="Djibouti" data-code="DJ">Djibouti</option>
                                                            <option data-mobile_code="1767" value="Dominica" data-code="DM">Dominica</option>
                                                            <option data-mobile_code="1849" value="Dominican Republic" data-code="DO">Dominican Republic</option>
                                                            <option data-mobile_code="593" value="Ecuador" data-code="EC">Ecuador</option>
                                                            <option data-mobile_code="20" value="Egypt" data-code="EG">Egypt</option>
                                                            <option data-mobile_code="503" value="El Salvador" data-code="SV">El Salvador</option>
                                                            <option data-mobile_code="240" value="Equatorial Guinea" data-code="GQ">Equatorial Guinea</option>
                                                            <option data-mobile_code="291" value="Eritrea" data-code="ER">Eritrea</option>
                                                            <option data-mobile_code="372" value="Estonia" data-code="EE">Estonia</option>
                                                            <option data-mobile_code="251" value="Ethiopia" data-code="ET">Ethiopia</option>
                                                            <option data-mobile_code="500" value="Falkland Islands (Malvinas)" data-code="FK">Falkland Islands (Malvinas)</option>
                                                            <option data-mobile_code="298" value="Faroe Islands" data-code="FO">Faroe Islands</option>
                                                            <option data-mobile_code="679" value="Fiji" data-code="FJ">Fiji</option>
                                                            <option data-mobile_code="358" value="Finland" data-code="FI">Finland</option>
                                                            <option data-mobile_code="33" value="France" data-code="FR">France</option>
                                                            <option data-mobile_code="594" value="French Guiana" data-code="GF">French Guiana</option>
                                                            <option data-mobile_code="689" value="French Polynesia" data-code="PF">French Polynesia</option>
                                                            <option data-mobile_code="241" value="Gabon" data-code="GA">Gabon</option>
                                                            <option data-mobile_code="220" value="Gambia" data-code="GM">Gambia</option>
                                                            <option data-mobile_code="995" value="Georgia" data-code="GE">Georgia</option>
                                                            <option data-mobile_code="49" value="Germany" data-code="DE">Germany</option>
                                                            <option data-mobile_code="233" value="Ghana" data-code="GH">Ghana</option>
                                                            <option data-mobile_code="350" value="Gibraltar" data-code="GI">Gibraltar</option>
                                                            <option data-mobile_code="30" value="Greece" data-code="GR">Greece</option>
                                                            <option data-mobile_code="299" value="Greenland" data-code="GL">Greenland</option>
                                                            <option data-mobile_code="1473" value="Grenada" data-code="GD">Grenada</option>
                                                            <option data-mobile_code="590" value="Guadeloupe" data-code="GP">Guadeloupe</option>
                                                            <option data-mobile_code="1671" value="Guam" data-code="GU">Guam</option>
                                                            <option data-mobile_code="502" value="Guatemala" data-code="GT">Guatemala</option>
                                                            <option data-mobile_code="44" value="Guernsey" data-code="GG">Guernsey</option>
                                                            <option data-mobile_code="224" value="Guinea" data-code="GN">Guinea</option>
                                                            <option data-mobile_code="245" value="Guinea-Bissau" data-code="GW">Guinea-Bissau</option>
                                                            <option data-mobile_code="595" value="Guyana" data-code="GY">Guyana</option>
                                                            <option data-mobile_code="509" value="Haiti" data-code="HT">Haiti</option>
                                                            <option data-mobile_code="379" value="Holy See (Vatican City State)" data-code="VA">Holy See (Vatican City State)</option>
                                                            <option data-mobile_code="504" value="Honduras" data-code="HN">Honduras</option>
                                                            <option data-mobile_code="852" value="Hong Kong" data-code="HK">Hong Kong</option>
                                                            <option data-mobile_code="36" value="Hungary" data-code="HU">Hungary</option>
                                                            <option data-mobile_code="354" value="Iceland" data-code="IS">Iceland</option>
                                                            <option data-mobile_code="91" value="India" data-code="IN">India</option>
                                                            <option data-mobile_code="62" value="Indonesia" data-code="ID">Indonesia</option>
                                                            <option data-mobile_code="98" value="Iran, Islamic Republic of Persian Gulf" data-code="IR">Iran, Islamic Republic of Persian Gulf</option>
                                                            <option data-mobile_code="964" value="Iraq" data-code="IQ">Iraq</option>
                                                            <option data-mobile_code="353" value="Ireland" data-code="IE">Ireland</option>
                                                            <option data-mobile_code="44" value="Isle of Man" data-code="IM">Isle of Man</option>
                                                            <option data-mobile_code="972" value="Israel" data-code="IL">Israel</option>
                                                            <option data-mobile_code="39" value="Italy" data-code="IT">Italy</option>
                                                            <option data-mobile_code="1876" value="Jamaica" data-code="JM">Jamaica</option>
                                                            <option data-mobile_code="81" value="Japan" data-code="JP">Japan</option>
                                                            <option data-mobile_code="44" value="Jersey" data-code="JE">Jersey</option>
                                                            <option data-mobile_code="962" value="Jordan" data-code="JO">Jordan</option>
                                                            <option data-mobile_code="77" value="Kazakhstan" data-code="KZ">Kazakhstan</option>
                                                            <option data-mobile_code="254" value="Kenya" data-code="KE">Kenya</option>
                                                            <option data-mobile_code="686" value="Kiribati" data-code="KI">Kiribati</option>
                                                            <option data-mobile_code="850" value="Korea, Democratic People&#039;s Republic of Korea" data-code="KP">Korea, Democratic People&#039;s Republic of Korea</option>
                                                            <option data-mobile_code="82" value="Korea, Republic of South Korea" data-code="KR">Korea, Republic of South Korea</option>
                                                            <option data-mobile_code="965" value="Kuwait" data-code="KW">Kuwait</option>
                                                            <option data-mobile_code="996" value="Kyrgyzstan" data-code="KG">Kyrgyzstan</option>
                                                            <option data-mobile_code="856" value="Laos" data-code="LA">Laos</option>
                                                            <option data-mobile_code="371" value="Latvia" data-code="LV">Latvia</option>
                                                            <option data-mobile_code="961" value="Lebanon" data-code="LB">Lebanon</option>
                                                            <option data-mobile_code="266" value="Lesotho" data-code="LS">Lesotho</option>
                                                            <option data-mobile_code="231" value="Liberia" data-code="LR">Liberia</option>
                                                            <option data-mobile_code="218" value="Libyan Arab Jamahiriya" data-code="LY">Libyan Arab Jamahiriya</option>
                                                            <option data-mobile_code="423" value="Liechtenstein" data-code="LI">Liechtenstein</option>
                                                            <option data-mobile_code="370" value="Lithuania" data-code="LT">Lithuania</option>
                                                            <option data-mobile_code="352" value="Luxembourg" data-code="LU">Luxembourg</option>
                                                            <option data-mobile_code="853" value="Macao" data-code="MO">Macao</option>
                                                            <option data-mobile_code="389" value="Macedonia" data-code="MK">Macedonia</option>
                                                            <option data-mobile_code="261" value="Madagascar" data-code="MG">Madagascar</option>
                                                            <option data-mobile_code="265" value="Malawi" data-code="MW">Malawi</option>
                                                            <option data-mobile_code="60" value="Malaysia" data-code="MY">Malaysia</option>
                                                            <option data-mobile_code="960" value="Maldives" data-code="MV">Maldives</option>
                                                            <option data-mobile_code="223" value="Mali" data-code="ML">Mali</option>
                                                            <option data-mobile_code="356" value="Malta" data-code="MT">Malta</option>
                                                            <option data-mobile_code="692" value="Marshall Islands" data-code="MH">Marshall Islands</option>
                                                            <option data-mobile_code="596" value="Martinique" data-code="MQ">Martinique</option>
                                                            <option data-mobile_code="222" value="Mauritania" data-code="MR">Mauritania</option>
                                                            <option data-mobile_code="230" value="Mauritius" data-code="MU">Mauritius</option>
                                                            <option data-mobile_code="262" value="Mayotte" data-code="YT">Mayotte</option>
                                                            <option data-mobile_code="52" value="Mexico" data-code="MX">Mexico</option>
                                                            <option data-mobile_code="691" value="Micronesia, Federated States of Micronesia" data-code="FM">Micronesia, Federated States of Micronesia</option>
                                                            <option data-mobile_code="373" value="Moldova" data-code="MD">Moldova</option>
                                                            <option data-mobile_code="377" value="Monaco" data-code="MC">Monaco</option>
                                                            <option data-mobile_code="976" value="Mongolia" data-code="MN">Mongolia</option>
                                                            <option data-mobile_code="382" value="Montenegro" data-code="ME">Montenegro</option>
                                                            <option data-mobile_code="1664" value="Montserrat" data-code="MS">Montserrat</option>
                                                            <option data-mobile_code="212" value="Morocco" data-code="MA">Morocco</option>
                                                            <option data-mobile_code="258" value="Mozambique" data-code="MZ">Mozambique</option>
                                                            <option data-mobile_code="95" value="Myanmar" data-code="MM">Myanmar</option>
                                                            <option data-mobile_code="264" value="Namibia" data-code="NA">Namibia</option>
                                                            <option data-mobile_code="674" value="Nauru" data-code="NR">Nauru</option>
                                                            <option data-mobile_code="977" value="Nepal" data-code="NP">Nepal</option>
                                                            <option data-mobile_code="31" value="Netherlands" data-code="NL">Netherlands</option>
                                                            <option data-mobile_code="599" value="Netherlands Antilles" data-code="AN">Netherlands Antilles</option>
                                                            <option data-mobile_code="687" value="New Caledonia" data-code="NC">New Caledonia</option>
                                                            <option data-mobile_code="64" value="New Zealand" data-code="NZ">New Zealand</option>
                                                            <option data-mobile_code="505" value="Nicaragua" data-code="NI">Nicaragua</option>
                                                            <option data-mobile_code="227" value="Niger" data-code="NE">Niger</option>
                                                            <option data-mobile_code="234" value="Nigeria" data-code="NG">Nigeria</option>
                                                            <option data-mobile_code="683" value="Niue" data-code="NU">Niue</option>
                                                            <option data-mobile_code="672" value="Norfolk Island" data-code="NF">Norfolk Island</option>
                                                            <option data-mobile_code="1670" value="Northern Mariana Islands" data-code="MP">Northern Mariana Islands</option>
                                                            <option data-mobile_code="47" value="Norway" data-code="NO">Norway</option>
                                                            <option data-mobile_code="968" value="Oman" data-code="OM">Oman</option>
                                                            <option data-mobile_code="92" value="Pakistan" data-code="PK">Pakistan</option>
                                                            <option data-mobile_code="680" value="Palau" data-code="PW">Palau</option>
                                                            <option data-mobile_code="970" value="Palestinian Territory, Occupied" data-code="PS">Palestinian Territory, Occupied</option>
                                                            <option data-mobile_code="507" value="Panama" data-code="PA">Panama</option>
                                                            <option data-mobile_code="675" value="Papua New Guinea" data-code="PG">Papua New Guinea</option>
                                                            <option data-mobile_code="595" value="Paraguay" data-code="PY">Paraguay</option>
                                                            <option data-mobile_code="51" value="Peru" data-code="PE">Peru</option>
                                                            <option data-mobile_code="63" value="Philippines" data-code="PH">Philippines</option>
                                                            <option data-mobile_code="872" value="Pitcairn" data-code="PN">Pitcairn</option>
                                                            <option data-mobile_code="48" value="Poland" data-code="PL">Poland</option>
                                                            <option data-mobile_code="351" value="Portugal" data-code="PT">Portugal</option>
                                                            <option data-mobile_code="1939" value="Puerto Rico" data-code="PR">Puerto Rico</option>
                                                            <option data-mobile_code="974" value="Qatar" data-code="QA">Qatar</option>
                                                            <option data-mobile_code="40" value="Romania" data-code="RO">Romania</option>
                                                            <option data-mobile_code="7" value="Russia" data-code="RU">Russia</option>
                                                            <option data-mobile_code="250" value="Rwanda" data-code="RW">Rwanda</option>
                                                            <option data-mobile_code="262" value="Reunion" data-code="RE">Reunion</option>
                                                            <option data-mobile_code="590" value="Saint Barthelemy" data-code="BL">Saint Barthelemy</option>
                                                            <option data-mobile_code="290" value="Saint Helena, Ascension and Tristan Da Cunha" data-code="SH">Saint Helena, Ascension and Tristan Da Cunha</option>
                                                            <option data-mobile_code="1869" value="Saint Kitts and Nevis" data-code="KN">Saint Kitts and Nevis</option>
                                                            <option data-mobile_code="1758" value="Saint Lucia" data-code="LC">Saint Lucia</option>
                                                            <option data-mobile_code="590" value="Saint Martin" data-code="MF">Saint Martin</option>
                                                            <option data-mobile_code="508" value="Saint Pierre and Miquelon" data-code="PM">Saint Pierre and Miquelon</option>
                                                            <option data-mobile_code="1784" value="Saint Vincent and the Grenadines" data-code="VC">Saint Vincent and the Grenadines</option>
                                                            <option data-mobile_code="685" value="Samoa" data-code="WS">Samoa</option>
                                                            <option data-mobile_code="378" value="San Marino" data-code="SM">San Marino</option>
                                                            <option data-mobile_code="239" value="Sao Tome and Principe" data-code="ST">Sao Tome and Principe</option>
                                                            <option data-mobile_code="966" value="Saudi Arabia" data-code="SA">Saudi Arabia</option>
                                                            <option data-mobile_code="221" value="Senegal" data-code="SN">Senegal</option>
                                                            <option data-mobile_code="381" value="Serbia" data-code="RS">Serbia</option>
                                                            <option data-mobile_code="248" value="Seychelles" data-code="SC">Seychelles</option>
                                                            <option data-mobile_code="232" value="Sierra Leone" data-code="SL">Sierra Leone</option>
                                                            <option data-mobile_code="65" value="Singapore" data-code="SG">Singapore</option>
                                                            <option data-mobile_code="421" value="Slovakia" data-code="SK">Slovakia</option>
                                                            <option data-mobile_code="386" value="Slovenia" data-code="SI">Slovenia</option>
                                                            <option data-mobile_code="677" value="Solomon Islands" data-code="SB">Solomon Islands</option>
                                                            <option data-mobile_code="252" value="Somalia" data-code="SO">Somalia</option>
                                                            <option data-mobile_code="27" value="South Africa" data-code="ZA">South Africa</option>
                                                            <option data-mobile_code="211" value="South Sudan" data-code="SS">South Sudan</option>
                                                            <option data-mobile_code="500" value="South Georgia and the South Sandwich Islands" data-code="GS">South Georgia and the South Sandwich Islands</option>
                                                            <option data-mobile_code="34" value="Spain" data-code="ES">Spain</option>
                                                            <option data-mobile_code="94" value="Sri Lanka" data-code="LK">Sri Lanka</option>
                                                            <option data-mobile_code="249" value="Sudan" data-code="SD">Sudan</option>
                                                            <option data-mobile_code="597" value="Suricountry" data-code="SR">Suricountry</option>
                                                            <option data-mobile_code="47" value="Svalbard and Jan Mayen" data-code="SJ">Svalbard and Jan Mayen</option>
                                                            <option data-mobile_code="268" value="Swaziland" data-code="SZ">Swaziland</option>
                                                            <option data-mobile_code="46" value="Sweden" data-code="SE">Sweden</option>
                                                            <option data-mobile_code="41" value="Switzerland" data-code="CH">Switzerland</option>
                                                            <option data-mobile_code="963" value="Syrian Arab Republic" data-code="SY">Syrian Arab Republic</option>
                                                            <option data-mobile_code="886" value="Taiwan" data-code="TW">Taiwan</option>
                                                            <option data-mobile_code="992" value="Tajikistan" data-code="TJ">Tajikistan</option>
                                                            <option data-mobile_code="255" value="Tanzania, United Republic of Tanzania" data-code="TZ">Tanzania, United Republic of Tanzania</option>
                                                            <option data-mobile_code="66" value="Thailand" data-code="TH">Thailand</option>
                                                            <option data-mobile_code="670" value="Timor-Leste" data-code="TL">Timor-Leste</option>
                                                            <option data-mobile_code="228" value="Togo" data-code="TG">Togo</option>
                                                            <option data-mobile_code="690" value="Tokelau" data-code="TK">Tokelau</option>
                                                            <option data-mobile_code="676" value="Tonga" data-code="TO">Tonga</option>
                                                            <option data-mobile_code="1868" value="Trinidad and Tobago" data-code="TT">Trinidad and Tobago</option>
                                                            <option data-mobile_code="216" value="Tunisia" data-code="TN">Tunisia</option>
                                                            <option data-mobile_code="90" value="Turkey" data-code="TR">Turkey</option>
                                                            <option data-mobile_code="993" value="Turkmenistan" data-code="TM">Turkmenistan</option>
                                                            <option data-mobile_code="1649" value="Turks and Caicos Islands" data-code="TC">Turks and Caicos Islands</option>
                                                            <option data-mobile_code="688" value="Tuvalu" data-code="TV">Tuvalu</option>
                                                            <option data-mobile_code="256" value="Uganda" data-code="UG">Uganda</option>
                                                            <option data-mobile_code="380" value="Ukraine" data-code="UA">Ukraine</option>
                                                            <option data-mobile_code="971" value="United Arab Emirates" data-code="AE">United Arab Emirates</option>
                                                            <option data-mobile_code="44" value="United Kingdom" data-code="GB">United Kingdom</option>
                                                            <option data-mobile_code="1" value="United States" data-code="US">United States</option>
                                                            <option data-mobile_code="598" value="Uruguay" data-code="UY">Uruguay</option>
                                                            <option data-mobile_code="998" value="Uzbekistan" data-code="UZ">Uzbekistan</option>
                                                            <option data-mobile_code="678" value="Vanuatu" data-code="VU">Vanuatu</option>
                                                            <option data-mobile_code="58" value="Venezuela, Bolivarian Republic of Venezuela" data-code="VE">Venezuela, Bolivarian Republic of Venezuela</option>
                                                            <option data-mobile_code="84" value="Vietnam" data-code="VN">Vietnam</option>
                                                            <option data-mobile_code="1284" value="Virgin Islands, British" data-code="VG">Virgin Islands, British</option>
                                                            <option data-mobile_code="1340" value="Virgin Islands, U.S." data-code="VI">Virgin Islands, U.S.</option>
                                                            <option data-mobile_code="681" value="Wallis and Futuna" data-code="WF">Wallis and Futuna</option>
                                                            <option data-mobile_code="967" value="Yemen" data-code="YE">Yemen</option>
                                                            <option data-mobile_code="260" value="Zambia" data-code="ZM">Zambia</option>
                                                            <option data-mobile_code="263" value="Zimbabwe" data-code="ZW">Zimbabwe</option>
                                                    </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="mobile" class="">Mobile</label>
                            <div class="input-group ">
                                    <span class="input-group-text mobile-code">  
                                    </span>
                                    <input type="hidden" name="mobile_code">
                                    <input type="hidden" name="country_code">
                                <input type="text" name="mobile" id="mobile" value="" class="form--control checkUser" placeholder="Your Phone Number">
                            </div>
                        <small class="text-danger mobileExist"></small>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="username" class="">Username</label>
                    <input id="username" type="text" class="form--control checkUser" placeholder="User Name" name="username" value="" required>
                        <small class="text-danger usernameExist"></small>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="email" class="">E-Mail Address</label>
                        <input id="email" type="email" class="form--control checkUser" name="email" placeholder="Email Address" value="" required>
                    
                    </div>

                    <div class="form-group  hover-input-popup col-sm-6">
                        <label for="password" class="">Password</label>
                        <input id="password" type="password" class="form--control" placeholder="Password" name="password" required>
                                                    <div class="input-popup">
                                <p class="error lower">1 small letter minimum</p>
                                <p class="error capital">1 capital letter minimum</p>
                                <p class="error number">1 number minimum</p>
                                <p class="error special">1 special character minimum</p>
                                <p class="error minimum">6 character password</p>
                            </div>
                                            </div>

                    <div class="form-group col-sm-6">
                        <label for="password-confirm" class="">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form--control" placeholder="Confirm Password" name="conf_password" required autocomplete="new-password">
                    </div>

                    <div class="form-group col-sm-6">
                                            </div>
                    
                                        <div class="form-group col-sm-6 row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8">
                            <input type="checkbox" id="agree" name="agree">
                            <label for="agree">I agree with *****</label>
                        </div>
                    </div>
                                        
                    <div class="form-group  mb-0">
                        <button type="submit" id="recaptcha" class="btn btn--base w-100" name="submit">
                            Register                        </button>
                    </div>
                
                    <div class="col-sm-12 mt-2 text-end">
                        <p>Haven an account? <a href="login.php" class="text--base">Login</a></p>
                    </div>
                </div>
            </form>
          </div>
        </div>
        <div class="right bg_img" style="background-image: url('assets/images/frontend/login/60b3677dac8841622370173.jpg');">
            <div class="content text-center">
              <h2 class="title text-white">Learn virtually from anywhere</h2>
              <p class="text-white mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
          </div>
      </section> 
    

<div class="modal fade" id="existModalCenter" tabindex="-1" role="dialog" aria-labelledby="existModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="existModalLongTitle">You are with us</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6 class="text-center">You already have an account please Sign in </h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="login.php" class="btn btn--base">Login</a>
      </div>
    </div>
  </div>
</div>
    </div>


    <script src="assets/global/js/jquery-3.6.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/templates/basic/js/lib/bootstrap.bundle.min.js"></script>
    <!-- slick slider js -->
    <script src="assets/templates/basic/js/lib/slick.min.js"></script>
    <!-- scroll animation -->
    <script src="assets/templates/basic/js/lib/wow.min.js"></script>
    <!-- lightcase js -->

    <!-- main js -->
    <script src="assets/templates/basic/js/app.js"></script>
    <script src="assets/global/js/secure_password.js"></script>

        <script>
      "use strict";
        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span class="text-danger">Captcha field is required.</span>';
                return false;
            }
            return true;
        }
        (function ($) {
                        $(`option[data-code=IN]`).attr('selected','');
            
            $('select[name=country]').on('change',function(){
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
            });
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
                            $('input[name=password]').on('input',function(){
                    secure_password($(this));
                });
            
            $('.checkUser').on('focusout',function(e){
                var url = 'check-mail.php';
                var value = $(this).val();
                var token = 'MZmrDwb9xNEYAytcbe9AFlRlcldm9rHtg6eMFoV9';
                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {mobile:mobile,_token:token}
                }
                if ($(this).attr('name') == 'email') {
                    var data = {email:value,_token:token}
                }
                if ($(this).attr('name') == 'username') {
                    var data = {username:value,_token:token}
                }
                $.post(url,data,function(response) {
                  if (response['data'] && response['type'] == 'email') {
                    $('#existModalCenter').modal('show');
                  }else if(response['data'] != null){
                    $(`.${response['type']}Exist`).text(`${response['type']} already exist`);
                  }else{
                    $(`.${response['type']}Exist`).text('');
                  }
                });
            });

        })(jQuery);

    </script>

    
    <link rel="stylesheet" href="assets/global/css/iziToast.min.css">
<script src="assets/global/js/iziToast.min.js"></script>

<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>

    <script>
        (function ($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "https://script.viserlab.com/elab/change/"+$(this).val() ;
            });
        })(jQuery);
    </script>
    </body>

<!-- Mirrored from script.viserlab.com/elab/register by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Mar 2022 19:52:18 GMT -->
</html>