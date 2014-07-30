<?php
/**
 * TOP API: taobao.fang.communitypicture.update request
 * 
 * @author auto create
 * @since 1.0, 2014-01-02 00:00:00
 */
class FangCommunitypictureUpdateRequest
{
	/** 
	 * 小区ID
	 **/
	private $buildingId;
	
	/** 
	 * 图片地址列表
	 **/
	private $picList;
	
	/** 
	 * 图片标题列表
	 **/
	private $picTitleList;
	
	/** 
	 * 更新操作的用户旺旺昵称
	 **/
	private $userNick;
	
	/** 
	 * 淘宝视频的flash地址
	 **/
	private $videoUrl;
	
	private $apiParas = array();
	
	public function setBuildingId($buildingId)
	{
		$this->buildingId = $buildingId;
		$this->apiParas["building_id"] = $buildingId;
	}

	public function getBuildingId()
	{
		return $this->buildingId;
	}

	public function setPicList($picList)
	{
		$this->picList = $picList;
		$this->apiParas["pic_list"] = $picList;
	}

	public function getPicList()
	{
		return $this->picList;
	}

	public function setPicTitleList($picTitleList)
	{
		$this->picTitleList = $picTitleList;
		$this->apiParas["pic_title_list"] = $picTitleList;
	}

	public function getPicTitleList()
	{
		return $this->picTitleList;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function setVideoUrl($videoUrl)
	{
		$this->videoUrl = $videoUrl;
		$this->apiParas["video_url"] = $videoUrl;
	}

	public function getVideoUrl()
	{
		return $this->videoUrl;
	}

	public function getApiMethodName()
	{
		return "taobao.fang.communitypicture.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buildingId,"buildingId");
		RequestCheckUtil::checkNotNull($this->picList,"picList");
		RequestCheckUtil::checkNotNull($this->picTitleList,"picTitleList");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
