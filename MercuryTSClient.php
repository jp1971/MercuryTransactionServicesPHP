<?php

/*  Copyright 2013  JP1971  (email : jameson@jp1971.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class MercuryTSClient {		
	
	private $wsClient;
	
	function __construct() {
		// Transaction Services API WSDL URL
		$wsdlURL = "https://hc.mercurydev.net/tws/transactionservice.asmx?WSDL";
		$this->wsClient = new SoapClient($wsdlURL);
	}
			
	public function getTypes() {
		return $this->wsClient->__getTypes();
	}
	
	public function creditPreAuthToken( $preAuth, $password ) {
		$preAuthRequest = array( 'request' => $preAuth, 'password' => $password );
		return $this->wsClient->CreditPreAuthToken( $preAuthRequest );
	}

	public function creditPreAuthCaptureToken( $preAuthCapture, $password ) {
		$preAuthCaptureRequest = array( 'request' => $preAuthCapture, 'password' => $password );
		return $this->wsClient->CreditPreAuthCaptureToken( $preAuthCaptureRequest );
	}	
	
	public function creditReturnToken($creditReturn, $password) {
		$creditReturnRequest = array( 'request' => $creditReturn, 'password' => $password );
		return $this->wsClient->CreditReturnToken( $creditReturnRequest );
	}	
	
}

?>