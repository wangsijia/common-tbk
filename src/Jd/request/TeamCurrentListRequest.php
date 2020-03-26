<?php

namespace Wangsijia\Tbk\Jd\request;

class TeamCurrentListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.team.current.list";
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
    private  $cityId;

    public function setCityId($cityId){
        $this->apiParas['cityId'] = $cityId;
    }
    public function getCityId(){
        return $this->apiParas['cityId'];
    }
    private  $teamType;

    public function setTeamType($teamType){
        $this->apiParas['teamType'] = $teamType;
    }
    public function getTeamType(){
        return $this->apiParas['teamType'];
    }
    private  $areaId;

    public function setAreaId($areaId){
        $this->apiParas['areaId'] = $areaId;
    }
    public function getAreaId(){
        return $this->apiParas['areaId'];
    }
    private  $sqId;

    public function setSqId($sqId){
        $this->apiParas['sqId'] = $sqId;
    }
    public function getSqId(){
        return $this->apiParas['sqId'];
    }
    private  $groupId;

    public function setGroupId($groupId){
        $this->apiParas['groupId'] = $groupId;
    }
    public function getGroupId(){
        return $this->apiParas['groupId'];
    }
    private  $group2Id;

    public function setGroup2Id($group2Id){
        $this->apiParas['group2Id'] = $group2Id;
    }
    public function getGroup2Id(){
        return $this->apiParas['group2Id'];
    }
    private  $sort;

    public function setSort($sort){
        $this->apiParas['sort'] = $sort;
    }
    public function getSort(){
        return $this->apiParas['sort'];
    }
    private  $start;

    public function setStart($start){
        $this->apiParas['start'] = $start;
    }
    public function getStart(){
        return $this->apiParas['start'];
    }
    private  $limit;

    public function setLimit($limit){
        $this->apiParas['limit'] = $limit;
    }
    public function getLimit(){
        return $this->apiParas['limit'];
    }
    private  $isTeamExternalUrl;

    public function setIsTeamExternalUrl($isTeamExternalUrl){
        $this->apiParas['isTeamExternalUrl'] = $isTeamExternalUrl;
    }
    public function getIsTeamExternalUrl(){
        return $this->apiParas['isTeamExternalUrl'];
    }
    private  $client;

    public function setClient($client){
        $this->apiParas['client'] = $client;
    }
    public function getClient(){
        return $this->apiParas['client'];
    }
}
