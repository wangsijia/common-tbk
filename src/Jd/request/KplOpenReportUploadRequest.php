<?php

namespace Wangsijia\Tbk\Jd\request;

class KplOpenReportUploadRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.report.upload";
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
    private  $dataJson;

    public function setDataJson($dataJson){
        $this->apiParas['dataJson'] = $dataJson;
    }
    public function getDataJson(){
        return $this->apiParas['dataJson'];
    }
}