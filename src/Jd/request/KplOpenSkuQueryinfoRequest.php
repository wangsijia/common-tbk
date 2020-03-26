<?php

namespace Wangsijia\Tbk\Jd\request;

class KplOpenSkuQueryinfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.sku.queryinfo";
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
                                                        		                                    	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                        	                   	                    		private $skuAlias;
    	                        
	public function setSkuAlias($skuAlias){
		$this->skuAlias = $skuAlias;
         $this->apiParas["skuAlias"] = $skuAlias;
	}

	public function getSkuAlias(){
	  return $this->skuAlias;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $currentPage;
    	                        
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["currentPage"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
	}

                        	                   			private $wareState;
    	                        
	public function setWareState($wareState){
		$this->wareState = $wareState;
         $this->apiParas["wareState"] = $wareState;
	}

	public function getWareState(){
	  return $this->wareState;
	}
}
