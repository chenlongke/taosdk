<?php
/**
 * TOP API: taobao.item.video.upload request
 * 
 * @author auto create
 * @since 1.0, 2012-11-11 00:00:00
 */
class ItemVideoUploadRequest
{
	/** 
	 * 视频在商品中的ID(第一次上传视频可以不传，更新已有的记录要上传)
	 **/
	private $id;
	
	/** 
	 * 视频所属商品文字的版本。可选值:zh_HK(繁体),zh_CN(简体);默认值:zh_CN。不存默认简体
	 **/
	private $lang;
	
	/** 
	 * 商品数字ID，必选
	 **/
	private $numIid;
	
	/** 
	 * 要和商品相关联的视频的数字ID(该数字ID必需是用户所拥有的上传在指定视频空间里的视频的数字ID)
	 **/
	private $videoId;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setLang($lang)
	{
		$this->lang = $lang;
		$this->apiParas["lang"] = $lang;
	}

	public function getLang()
	{
		return $this->lang;
	}

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function setVideoId($videoId)
	{
		$this->videoId = $videoId;
		$this->apiParas["video_id"] = $videoId;
	}

	public function getVideoId()
	{
		return $this->videoId;
	}

	public function getApiMethodName()
	{
		return "taobao.item.video.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkMinValue($this->numIid,0,"numIid");
		RequestCheckUtil::checkNotNull($this->videoId,"videoId");
		RequestCheckUtil::checkMinValue($this->videoId,0,"videoId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
