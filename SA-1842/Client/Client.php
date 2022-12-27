<?php

class details

{
    public $amountInSourceCurrency;

    public $sourceCurrency;

    public $targetCurrency;

}

class Client{

    public $instance = NULL;

    public function __construct()
    {
        $params = array(
            'location'=>'http://localhost/SA-1842/Server.php?wsdl',
            'uri' =>  'urn://localhost/SA-1842/Server.php?wsdl'  ,
            'trace'=>1,'cache_wsdl'=>WSDL_CACHE_NONE    );
        $this->instance =  new SoapClient(NULL, $params);
    }

    public function currency_Conv($information_data)
    {
        return $this->instance->__soapCall('currency_convert', [$information_data]);
    }

}

if(isset($_POST['submit']))
{
    $source_money = $_POST['amount'];

    $source_money = $_POST['source'];

    $target_money = $_POST['target'];

    $client = new Client;

    $information_data = new details();

    $information_data->amountInSourceCurrency = $source_money;

    $information_data->sourceCurrency = $source_money;

    $information_data->targetCurrency = $target_money;

    try
    {
        $return_data = $client->currency_Conv($information_data);

        header('location: index.php?message= the latest conversion : '.$return_data);
    }
    catch (Exception $e)
    {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

