<?php

namespace Wangsijia\Tbk\Jd\request;

class KeplerSettledAftermarketGetbackmodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kepler.settled.aftermarket.getbackmode";
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
    private  $orderId;

    public function setOrderId($orderId){
        $this->apiParas['orderId'] = $orderId;
    }
    public function getOrderId(){
        return $this->apiParas['orderId'];
    }
    private  $wareId;

    public function setWareId($wareId){
        $this->apiParas['wareId'] = $wareId;
    }
    public function getWareId(){
        return $this->apiParas['wareId'];
    }
    private  $backAddr;

    public function setBackAddr($backAddr){
        $this->apiParas['backAddr'] = $backAddr;
    }
    public function getBackAddr(){
        return $this->apiParas['backAddr'];
    }
    private  $client;

    public function setClient($client){
        $this->apiParas['client'] = $client;
    }
    public function getClient(){
        return $this->apiParas['client'];
    }
}
