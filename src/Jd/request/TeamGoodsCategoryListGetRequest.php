<?php

namespace Wangsijia\Tbk\Jd\request;

class TeamGoodsCategoryListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.team.goods.category.list.get";
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
    }





        
 
