<?php

namespace Wangsijia\Tbk\Jd\request;

class TeamPromotionHotListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.team.promotion.hot.list";
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
                                    	                   			private $teamId;
    	                        
	public function setTeamId($teamId){
		$this->teamId = $teamId;
         $this->apiParas["teamId"] = $teamId;
	}

	public function getTeamId(){
	  return $this->teamId;
	}

                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $client;
    	                        
	public function setClient($client){
		$this->client = $client;
         $this->apiParas["client"] = $client;
	}

	public function getClient(){
	  return $this->client;
	}

}





        
 

