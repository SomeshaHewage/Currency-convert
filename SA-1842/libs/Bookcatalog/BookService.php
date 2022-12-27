<?php

namespace Bookcatalog;

class BookService
{
    /**
     * @soap
     * @param Bookcatalog\convey $information_data
     * @return string
     */
    public function currency_convert($information_data)
    {
        $sourceCurrency_base = $this->get_Data($information_data->sourceCurrency);

        $targetCurrency_base = $this->get_Data($information_data->targetCurrency);

        $calculation = ($information_data->amountInSourceCurrency/$sourceCurrency_base)*$targetCurrency_base;

        return $calculation;
    }

    function get_Data($Data)
    {
        $Data_json = file_get_contents('Data.json');

        $decode_file = json_decode($Data_json, true);

        $currency_data = $decode_file['money'];

        foreach ($currency_data as $value)
        {
            $target_money = $value['target_currency'];

            $money_value = $value['value'];

            if($target_money == $Data)
            {
                return $money_value;
            }
        }
    }
}

