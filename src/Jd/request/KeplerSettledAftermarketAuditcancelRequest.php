<?php

namespace Wangsijia\Tbk\Jd\request;

class KeplerSettledAftermarketAuditcancelRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kepler.settled.aftermarket.auditcancel";
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
    private  $serviceId;

    public function setServiceId($serviceId){
        $this->apiParas['serviceId'] = $serviceId;
    }
    public function getServiceId(){
        return $this->apiParas['serviceId'];
    }
    private  $approveNotes;

    public function setApproveNotes($approveNotes){
        $this->apiParas['approveNotes'] = $approveNotes;
    }
    public function getApproveNotes(){
        return $this->apiParas['approveNotes'];
    }
    private  $operatorInfo;

    public function setOperatorInfo($operatorInfo){
        $this->apiParas['operatorInfo'] = $operatorInfo;
    }
    public function getOperatorInfo(){
        return $this->apiParas['operatorInfo'];
    }
    private  $client;

    public function setClient($client){
        $this->apiParas['client'] = $client;
    }
    public function getClient(){
        return $this->apiParas['client'];
    }
}
