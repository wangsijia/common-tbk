<?php

namespace Wangsijia\Tbk\Jd\request;

class KplOpenUserLoginGetuidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.user.login.getuid";
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
    private  $from;

    public function setFrom($from){
        $this->apiParas['from'] = $from;
    }
    public function getFrom(){
        return $this->apiParas['from'];
    }
    private  $ip;

    public function setIp($ip){
        $this->apiParas['ip'] = $ip;
    }
    public function getIp(){
        return $this->apiParas['ip'];
    }
}
