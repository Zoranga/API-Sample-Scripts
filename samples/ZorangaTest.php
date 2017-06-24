<?php
/*
 * This file is part of the Zoranga API Sample Code
 *
   * (c) Tom Kalu <tom@zoranga.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
 
/* IMPORTANT WARNING! - Do not reveal your API key. */

/* IMPORTANT WARNING! - You must use the new nonce in making the next API call */

/* IMPORTANT WARNING! - All responses are in JSON format. */


//////////////Here is the API endpoint

 $service_url = 'http://zoranga.com/api/v1/';

       $curl = curl_init($service_url);

///////////////Object could be statusRequest, pinDeposit or airtimeTransfer

///////////////When object is statusRequest, you only need the apiKey, merchantId and reference as you post parameters

       $curl_post_data = array

(

        'amount' => $amount,

        'apiKey' => $apiKey,

        'description' => $description,

        'merchantId' => $merchantId,
        
        'object' => $object,
        
        'network' => $network,

        'depositors_mobile_number' =>  $depositors_mobile_number,

        'airtime_pin' => $airtime_pin

      

);

       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

       curl_setopt($curl, CURLOPT_POST, true);

       curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);

       $curl_response = curl_exec($curl);

       curl_close($curl);


///////////////////////////Decide what you do with the responses, for me I just displayed it

print $curl_response;



exit;
