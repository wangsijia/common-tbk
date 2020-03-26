<?php

namespace Wangsijia\Tbk\Jd\request;

class KeplerSettledAftermarketSaveaftermarketRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kepler.settled.aftermarket.saveaftermarket";
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
    private  $afsApplyDto;

    public function setAfsApplyDto($afsApplyDto){
        $this->apiParas['afsApplyDto'] = $afsApplyDto;
    }
    public function getAfsApplyDto(){
        return $this->apiParas['afsApplyDto'];
    }
    private  $client;

    public function setClient($client){
        $this->apiParas['client'] = $client;
    }
    public function getClient(){
        return $this->apiParas['client'];
    }
}
