<?php

namespace Wangsijia\Tbk\Jd\request;

class UnionServiceQueryPerformanceForReverseWithKeyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.UnionService.queryPerformanceForReverseWithKey";
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
    private  $unionId;

    public function setUnionId($unionId){
        $this->apiParas['unionId'] = $unionId;
    }
    public function getUnionId(){
        return $this->apiParas['unionId'];
    }
    private  $key;

    public function setKey($key){
        $this->apiParas['key'] = $key;
    }
    public function getKey(){
        return $this->apiParas['key'];
    }
    private  $time;

    public function setTime($time){
        $this->apiParas['time'] = $time;
    }
    public function getTime(){
        return $this->apiParas['time'];
    }
    private  $pageIndex;

    public function setPageIndex($pageIndex){
        $this->apiParas['pageIndex'] = $pageIndex;
    }
    public function getPageIndex(){
        return $this->apiParas['pageIndex'];
    }
    private  $pageSize;

    public function setPageSize($pageSize){
        $this->apiParas['pageSize'] = $pageSize;
    }
    public function getPageSize(){
        return $this->apiParas['pageSize'];
    }
}

?>