<?php
/**
 * TOP API: Taobao.media.update request
 * 
 * @author auto create
 * @since 1.0, 2010-06-07 00:00:00
 */
class TaobaoMediaUpdateRequest
{
	/** 
	 * 文件ID，不能为空
	 **/
	private $fileId;
	
	/** 
	 * 文件标题,最大长度50字符，中英文都算一字符
	 **/
	private $fileName;
	
	/** 
	 * ISV给定的缩略图地址，最大长度500字符，type为normal_video或img_video时有两套，用”|”分开，分别是480*360和120*90，如http://www.56.com/img/aaa_480x360.jpg|http://www.56.com/img/aaa_120x90.jpg;type为flash时传一套
	 **/
	private $fileScale;
	
	/** 
	 * 文件分类ID
	 **/
	private $mediaCategoryId;
	
	/** 
	 * 用户昵称
	 **/
	private $nick;
	
	/** 
	 * 文件状态，normal代表正常，froze代表被冻结
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setFileId($fileId)
	{
		$this->fileId = $fileId;
		$this->apiParas["file_id"] = $fileId;
	}

	public function getFileId()
	{
		return $this->fileId;
	}

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		$this->apiParas["file_name"] = $fileName;
	}

	public function getFileName()
	{
		return $this->fileName;
	}

	public function setFileScale($fileScale)
	{
		$this->fileScale = $fileScale;
		$this->apiParas["file_scale"] = $fileScale;
	}

	public function getFileScale()
	{
		return $this->fileScale;
	}

	public function setMediaCategoryId($mediaCategoryId)
	{
		$this->mediaCategoryId = $mediaCategoryId;
		$this->apiParas["media_category_id"] = $mediaCategoryId;
	}

	public function getMediaCategoryId()
	{
		return $this->mediaCategoryId;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "Taobao.media.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fileId,"fileId");
		RequestCheckUtil::checkMaxLength($this->fileName,50,"fileName");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
