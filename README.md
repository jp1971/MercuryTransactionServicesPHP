Mercury TransactionServices Sample PHP Integration
==================================================

MercuryTSClient class (contained in MercuryTSClient.php) is used to send requests to Mercury's Transaction Services API.

MercuryTSClient
 - [getTypes()](https://hc.mercurydev.net/tws/transactionservice.asmx?WSDL)
 - [creditPreAuthToken( $preAuth, $password )](https://hc.mercurydev.net/tws/transactionservice.asmx?op=CreditPreAuthToken)
 - [creditPreAuthCaptureToken( $preAuthCapture, $password )](https://hc.mercurydev.net/tws/transactionservice.asmx?op=CreditPreAuthCaptureToken)
 - [creditSaleToken( $creditSale, $password )](https://hc.mercurydev.net/tws/transactionservice.asmx?op=CreditSaleToken)
 - [creditAdjustToken( $creditAdjust, $password ) ](https://hc.mercurydev.net/tws/transactionservice.asmx?op=CreditAdjustToken)
 - [creditVoidSaleToken( $creditVoidSale, $password ) ](https://hc.mercurydev.net/tws/transactionservice.asmx?op=CreditVoidSaleToken)
 - [creditReversalToken( $creditReversal, $password ) ](https://hc.mercurydev.net/tws/transactionservice.asmx?op=CreditReversalToken)
 - [creditReturnToken( $creditReturn, $password ) ](https://hc.mercurydev.net/tws/transactionservice.asmx?op=CreditReturnToken)
 - [creditVoidReturnToken( $creditVoidReturn, $password ) ](https://hc.mercurydev.net/tws/transactionservice.asmx?op=CreditVoidReturnToken) 

Each method takes an associative array of request parameters as well as the appropriate WebServices Password.

All types exposed by the Transaction Services API are returned by MercuryTSClient->getTypes();

The appropriate endpoint WSDL URL must be specified in the constructor of MercuryTSClient.

MercuryTSClient uses [PHP's SoapClient](http://php.net/manual/en/class.soapclient.php) which requires PHP 5+ and the libxml PHP extension. This means that passing in --enable-libxml is also required, although this is implicitly accomplished because libxml is enabled by default.

