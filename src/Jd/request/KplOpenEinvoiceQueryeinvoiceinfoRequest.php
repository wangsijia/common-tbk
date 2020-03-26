<?php

namespace Wangsijia\Tbk\Jd\request;

class KplOpenEinvoiceQueryeinvoiceinfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.einvoice.queryeinvoiceinfo";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $eInvoiceQueryWs;

    public function setEInvoiceQueryWs($eInvoiceQueryWs){
        $this->apiParas['eInvoiceQueryWs'] = $eInvoiceQueryWs;
    }
    public function getEInvoiceQueryWs(){
        return $this->apiParas['eInvoiceQueryWs'];
    }
}
