<?php
/**
 * TOP API: taobao.videos.open request
 * 
 * @author auto create
 * @since 1.0, 2013-07-17 00:00:00
 */
class VideosOpenRequest
{
	/** 
	 * 是否允许他人观看，公开后，可被任何应用搜索到
	 **/
	private $isOpen;
	
	/** 
	 * 在淘宝视频中的应用key，该值向淘宝视频申请产生
	 **/
	private $videoAppKey;
	
	/** 
	 * 视频id列表
	 **/
	private $videoIds;
	
	private $apiParas = array();
	
	public function setIsOpen($isOpen)
	{
		$this->isOpen = $isOpen;
		$this->apiParas["is_open"] = $isOpen;
	}

	public function getIsOpen()
	{
		return $this->isOpen;
	}

	public function setVideoAppKey($videoAppKey)
	{
		$this->videoAppKey = $videoAppKey;
		$this->apiParas["video_app_key"] = $videoAppKey;
	}

	public function getVideoAppKey()
	{
		return $this->videoAppKey;
	}

	public function setVideoIds($videoIds)
	{
		$this->videoIds = $videoIds;
		$this->apiParas["video_ids"] = $videoIds;
	}

	public function getVideoIds()
	{
		return $this->videoIds;
	}

	public function getApiMethodName()
	{
		return "taobao.videos.open";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isOpen,"isOpen");
		RequestCheckUtil::checkNotNull($this->videoAppKey,"videoAppKey");
		RequestCheckUtil::checkNotNull($this->videoIds,"videoIds");
		RequestCheckUtil::checkMaxListSize($this->videoIds,100,"videoIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
