<?php

namespace Wangsijia\Tbk\Jd\request;

class ServicePromotionCouponGetCodeBySubUnionIdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.service.promotion.coupon.getCodeBySubUnionId";
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
                                    	                                            		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $couponUrl;
                              public function setCouponUrl($couponUrl ){
                 $this->couponUrl=$couponUrl;
                 $this->apiParas["couponUrl"] = $couponUrl;
              }

              public function getCouponUrl(){
              	return $this->couponUrl;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $materialIds;
                              public function setMaterialIds($materialIds ){
                 $this->materialIds=$materialIds;
                 $this->apiParas["materialIds"] = $materialIds;
              }

              public function getMaterialIds(){
              	return $this->materialIds;
              }
                                                                                                                                        	                   			private $subUnionId;
    	                        
	public function setSubUnionId($subUnionId){
		$this->subUnionId = $subUnionId;
         $this->apiParas["subUnionId"] = $subUnionId;
	}

	public function getSubUnionId(){
	  return $this->subUnionId;
	}

                        	                   			private $positionId;
    	                        
	public function setPositionId($positionId){
		$this->positionId = $positionId;
         $this->apiParas["positionId"] = $positionId;
	}

	public function getPositionId(){
	  return $this->positionId;
	}

                        	                   			private $pid;
    	                        
	public function setPid($pid){
		$this->pid = $pid;
         $this->apiParas["pid"] = $pid;
	}

	public function getPid(){
	  return $this->pid;
	}

                            }





        
 

