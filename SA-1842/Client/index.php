<!DOCTYPE html>
<html lang="en">
<head>
    <title>Currency Coverter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

   <h2>Currenncy Conversion </h2>

    <p>This web service converts currencies.</a></p>


    <form action="Client.php" method="post">

        <div class="form-group">
            <label for="usr">Money Amount:</label>
            <input type="number" class="form-control" id="usr" name="amount">
        </div>
       
        <div class="form-group">
        <label for="sel1">Source Currency Type</label>
            <select class="form-control" id="sel1" name="source">
            <option value="AFN">AFN</option>
          <option value="ALL">ALL</option>
          <option value="AMD">AMD</option>
          <option value="ANG">ANG</option>
          <option value="AOA">AOA</option>
          <option value="ARS">ARS</option>
          <option value="AUD">AUD</option>
          <option value="AWG">AWG</option>
          <option value="AZN">AZN</option>
          <option value="BAM">BAM</option>
          <option value="BBD">BBD</option>
          <option value="BDT">BDT</option>
          <option value="BGN">BGN</option>
          <option value="BHD">BHD</option>
          <option value="BIF">BIF</option>
          <option value="BMD">BMD</option>
          <option value="BND">BND</option>
          <option value="BOB">BOB</option>
          <option value="BRL">BRL</option>
          <option value="BSD">BSD</option>
          <option value="BTC">BTC</option>
          <option value="BTN">BTN</option>
          <option value="BWP">BWP</option>
          <option value="BYN">BYN</option>
          <option value="BZD">BZD</option>
          <option value="CAD">CAD</option>
          <option value="CDF">CDF</option>
          <option value="CHF">CHF</option>
          <option value="CLF">CLF</option>
          <option value="CLP">CLP</option>
          <option value="CNH">CNH</option>
          <option value="CNY">CNY</option>
          <option value="COP">COP</option>
          <option value="CRC">CRC</option>
          <option value="CUC">CUC</option>
          <option value="CUP">CUP</option>
          <option value="CVE">CVE</option>
          <option value="CZK">CZK</option>
          <option value="DJF">DJF</option>
          <option value="DKK">DKK</option>
          <option value="DOP">DOP</option>
          <option value="DZD">DZD</option>
          <option value="EGP">EGP</option>
          <option value="ERN">ERN</option>
          <option value="ETB">ETB</option>
          <option value="EUR">EUR</option>
          <option value="FJD">FJD</option>
          <option value="FKP">FKP</option>
          <option value="GBP">GBP</option>
          <option value="GEL">GEL</option>
          <option value="GGP">GGP</option>
          <option value="GHS">GHS</option>
          <option value="GIP">GIP</option>
          <option value="GMD">GMD</option>
          <option value="GNF">GNF</option>
          <option value="GTQ">GTQ</option>
          <option value="GYD">GYD</option>
          <option value="HKD">HKD</option>
          <option value="HNL">HNL</option>
          <option value="HRK">HRK</option>
          <option value="HTG">HTG</option>
          <option value="HUF">HUF</option>
          <option value="IDR">IDR</option>
          <option value="ILS">ILS</option>
          <option value="IMP">IMP</option>
          <option value="INR">INR</option>
          <option value="IQD">IQD</option>
          <option value="IRR">IRR</option>
          <option value="ISK">ISK</option>
          <option value="JEP">JEP</option>
          <option value="JMD">JMD</option>
          <option value="JOD">JOD</option>
          <option value="JPY">JPY</option>
          <option value="KES">KES</option>
          <option value="KGS">KGS</option>
          <option value="KHR">KHR</option>
          <option value="KMF">KMF</option>
          <option value="KPW">KPW</option>
          <option value="KRW">KRW</option>
          <option value="KWD">KWD</option>
          <option value="KYD">KYD</option>
          <option value="KZT">KZT</option>
          <option value="LAK">LAK</option>
          <option value="LBP">LBP</option>
          <option value="LKR">LKR</option>
          <option value="LRD">LRD</option>
          <option value="LSL">LSL</option>
          <option value="LYD">LYD</option>
          <option value="MAD">MAD</option>
          <option value="MDL">MDL</option>
          <option value="MGA">MGA</option>
          <option value="MKD">MKD</option>
          <option value="MMK">MMK</option>
          <option value="MNT">MNT</option>
          <option value="MOP">MOP</option>
          <option value="MRO">MRO</option>
          <option value="MRU">MRU</option>
          <option value="MUR">MUR</option>
          <option value="MVR">MVR</option>
          <option value="MWK">MWK</option>
          <option value="MXN">MXN</option>
          <option value="MYR">MYR</option>
          <option value="MZN">MZN</option>
          <option value="NAD">NAD</option>
          <option value="NGN">NGN</option>
          <option value="NIO">NIO</option>
          <option value="NOK">NOK</option>
          <option value="NPR">NPR</option>
          <option value="NZD">NZD</option>
          <option value="OMR">OMR</option>
          <option value="PAB">PAB</option>
          <option value="PEN">PEN</option>
          <option value="PGK">PGK</option>
          <option value="PHP">PHP</option>
          <option value="PKR">PKR</option>
          <option value="PLN">PLN</option>
          <option value="PYG">PYG</option>
          <option value="QAR">QAR</option>
          <option value="RON">RON</option>
          <option value="RSD">RSD</option>
          <option value="RUB">RUB</option>
          <option value="RWF">RWF</option>
          <option value="SAR">SAR</option>
          <option value="SBD">SBD</option>
          <option value="SCR">SCR</option>
          <option value="SDG">SDG</option>
          <option value="SEK">SEK</option>
          <option value="SGD">SGD</option>
          <option value="SHP">SHP</option>
          <option value="SLL">SLL</option>
          <option value="SOS">SOS</option>
          <option value="SRD">SRD</option>
          <option value="SSP">SSP</option>
          <option value="STD">STD</option>
          <option value="STN">STN</option>
          <option value="SVC">SVC</option>
          <option value="SYP">SYP</option>
          <option value="SZL">SZL</option>
          <option value="THB">THB</option>
          <option value="TJS">TJS</option>
          <option value="TMT">TMT</option>
          <option value="TND">TND</option>
          <option value="TOP">TOP</option>
          <option value="TRY">TRY</option>
          <option value="TTD">TTD</option>
          <option value="TWD">TWD</option>
          <option value="TZS">TZS</option>
          <option value="UAH">UAH</option>
          <option value="UGX">UGX</option>
          <option value="USD">USD</option>
          <option value="UYU">UYU</option>
          <option value="UZS">UZS</option>
          <option value="VEF">VEF</option>
          <option value="VES">VES</option>
          <option value="VND">VND</option>
          <option value="VUV">VUV</option>
          <option value="WST">WST</option>
          <option value="XAF">XAF</option>
          <option value="XAG">XAG</option>
          <option value="XAU">XAU</option>
          <option value="XCD">XCD</option>
          <option value="XDR">XDR</option>
          <option value="XOF">XOF</option>
          <option value="XPD">XPD</option>
          <option value="XPF">XPF</option>
          <option value="XPT">XPT</option>
          <option value="YER">YER</option>
          <option value="ZAR">ZAR</option>
          <option value="ZMW">ZMW</option>
          <option value="ZWL">ZWL</option>
            </select>
            <br>
        </div>

        <div class="form-group">
            <label for="sel2">Target Currency Type</label>
            
            <select class="form-control" id="sel2" name="target">
                
          <option value="AED">AED</option>
          <option value="AFN">AFN</option>
          <option value="ALL">ALL</option>
          <option value="AMD">AMD</option>
          <option value="ANG">ANG</option>
          <option value="AOA">AOA</option>
          <option value="ARS">ARS</option>
          <option value="AUD">AUD</option>
          <option value="AWG">AWG</option>
          <option value="AZN">AZN</option>
          <option value="BAM">BAM</option>
          <option value="BBD">BBD</option>
          <option value="BDT">BDT</option>
          <option value="BGN">BGN</option>
          <option value="BHD">BHD</option>
          <option value="BIF">BIF</option>
          <option value="BMD">BMD</option>
          <option value="BND">BND</option>
          <option value="BOB">BOB</option>
          <option value="BRL">BRL</option>
          <option value="BSD">BSD</option>
          <option value="BTC">BTC</option>
          <option value="BTN">BTN</option>
          <option value="BWP">BWP</option>
          <option value="BYN">BYN</option>
          <option value="BZD">BZD</option>
          <option value="CAD">CAD</option>
          <option value="CDF">CDF</option>
          <option value="CHF">CHF</option>
          <option value="CLF">CLF</option>
          <option value="CLP">CLP</option>
          <option value="CNH">CNH</option>
          <option value="CNY">CNY</option>
          <option value="COP">COP</option>
          <option value="CRC">CRC</option>
          <option value="CUC">CUC</option>
          <option value="CUP">CUP</option>
          <option value="CVE">CVE</option>
          <option value="CZK">CZK</option>
          <option value="DJF">DJF</option>
          <option value="DKK">DKK</option>
          <option value="DOP">DOP</option>
          <option value="DZD">DZD</option>
          <option value="EGP">EGP</option>
          <option value="ERN">ERN</option>
          <option value="ETB">ETB</option>
          <option value="EUR">EUR</option>
          <option value="FJD">FJD</option>
          <option value="FKP">FKP</option>
          <option value="GBP">GBP</option>
          <option value="GEL">GEL</option>
          <option value="GGP">GGP</option>
          <option value="GHS">GHS</option>
          <option value="GIP">GIP</option>
          <option value="GMD">GMD</option>
          <option value="GNF">GNF</option>
          <option value="GTQ">GTQ</option>
          <option value="GYD">GYD</option>
          <option value="HKD">HKD</option>
          <option value="HNL">HNL</option>
          <option value="HRK">HRK</option>
          <option value="HTG">HTG</option>
          <option value="HUF">HUF</option>
          <option value="IDR">IDR</option>
          <option value="ILS">ILS</option>
          <option value="IMP">IMP</option>
          <option value="INR">INR</option>
          <option value="IQD">IQD</option>
          <option value="IRR">IRR</option>
          <option value="ISK">ISK</option>
          <option value="JEP">JEP</option>
          <option value="JMD">JMD</option>
          <option value="JOD">JOD</option>
          <option value="JPY">JPY</option>
          <option value="KES">KES</option>
          <option value="KGS">KGS</option>
          <option value="KHR">KHR</option>
          <option value="KMF">KMF</option>
          <option value="KPW">KPW</option>
          <option value="KRW">KRW</option>
          <option value="KWD">KWD</option>
          <option value="KYD">KYD</option>
          <option value="KZT">KZT</option>
          <option value="LAK">LAK</option>
          <option value="LBP">LBP</option>
          <option value="LKR">LKR</option>
          <option value="LRD">LRD</option>
          <option value="LSL">LSL</option>
          <option value="LYD">LYD</option>
          <option value="MAD">MAD</option>
          <option value="MDL">MDL</option>
          <option value="MGA">MGA</option>
          <option value="MKD">MKD</option>
          <option value="MMK">MMK</option>
          <option value="MNT">MNT</option>
          <option value="MOP">MOP</option>
          <option value="MRO">MRO</option>
          <option value="MRU">MRU</option>
          <option value="MUR">MUR</option>
          <option value="MVR">MVR</option>
          <option value="MWK">MWK</option>
          <option value="MXN">MXN</option>
          <option value="MYR">MYR</option>
          <option value="MZN">MZN</option>
          <option value="NAD">NAD</option>
          <option value="NGN">NGN</option>
          <option value="NIO">NIO</option>
          <option value="NOK">NOK</option>
          <option value="NPR">NPR</option>
          <option value="NZD">NZD</option>
          <option value="OMR">OMR</option>
          <option value="PAB">PAB</option>
          <option value="PEN">PEN</option>
          <option value="PGK">PGK</option>
          <option value="PHP">PHP</option>
          <option value="PKR">PKR</option>
          <option value="PLN">PLN</option>
          <option value="PYG">PYG</option>
          <option value="QAR">QAR</option>
          <option value="RON">RON</option>
          <option value="RSD">RSD</option>
          <option value="RUB">RUB</option>
          <option value="RWF">RWF</option>
          <option value="SAR">SAR</option>
          <option value="SBD">SBD</option>
          <option value="SCR">SCR</option>
          <option value="SDG">SDG</option>
          <option value="SEK">SEK</option>
          <option value="SGD">SGD</option>
          <option value="SHP">SHP</option>
          <option value="SLL">SLL</option>
          <option value="SOS">SOS</option>
          <option value="SRD">SRD</option>
          <option value="SSP">SSP</option>
          <option value="STD">STD</option>
          <option value="STN">STN</option>
          <option value="SVC">SVC</option>
          <option value="SYP">SYP</option>
          <option value="SZL">SZL</option>
          <option value="THB">THB</option>
          <option value="TJS">TJS</option>
          <option value="TMT">TMT</option>
          <option value="TND">TND</option>
          <option value="TOP">TOP</option>
          <option value="TRY">TRY</option>
          <option value="TTD">TTD</option>
          <option value="TWD">TWD</option>
          <option value="TZS">TZS</option>
          <option value="UAH">UAH</option>
          <option value="UGX">UGX</option>
          <option value="USD">USD</option>
          <option value="UYU">UYU</option>
          <option value="UZS">UZS</option>
          <option value="VEF">VEF</option>
          <option value="VES">VES</option>
          <option value="VND">VND</option>
          <option value="VUV">VUV</option>
          <option value="WST">WST</option>
          <option value="XAF">XAF</option>
          <option value="XAG">XAG</option>
          <option value="XAU">XAU</option>
          <option value="XCD">XCD</option>
          <option value="XDR">XDR</option>
          <option value="XOF">XOF</option>
          <option value="XPD">XPD</option>
          <option value="XPF">XPF</option>
          <option value="XPT">XPT</option>
          <option value="YER">YER</option>
          <option value="ZAR">ZAR</option>
          <option value="ZMW">ZMW</option>
          <option value="ZWL">ZWL</option>
            </select>
            <br>
        </div>

        <button type="submit" class="btn btn-warning" name="submit">Convert</button>
        <button type="submit" class="btn btn-warning" name="submit">Reload</button>
        
    </form>


    <?php if(isset($_GET['message'])){ ?>

        <div class="alert alert-warning" role="alert"><b><?php echo $_GET['message'];?></b></div>

    <?php }?>

</div>

</body>

</html>
