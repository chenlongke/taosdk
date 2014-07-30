<?php
/**
 * TOP API: taobao.media.add request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class MediaAddRequest
{
	/** 
	 * 文件标题，最大长度50字符，，中英文都算一字符，不能为空
	 **/
	private $fileName;
	
	/** 
	 * ISV给定的缩略图地址，最大长度500字节，type为normal_video或img_video时有两套，用”|”分开，分别是480*360和120*90，如http://www.56.com/img/aaa_480x360.jpg|http://www.56.com/img/aaa_120x90.jpg;type为flash时传一套
	 **/
	private $fileScale;
	
	/** 
	 * ISV给定的文件路径，最大长度500字节，URL中不能有端口号
	 **/
	private $fileUrl;
	
	/** 
	 * 文件分类ID，只能有一个分类，不能为空
	 **/
	private $mediaCategoryId;
	
	/** 
	 * 用户昵称
	 **/
	private $nick;
	
	/** 
	 * normal_video：普通视频，img_video：相册视频（仅对视频isv有效）
	 **/
	private $type;
	
	private $apiParas = array();
	
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

	public function setFileUrl($fileUrl)
	{
		$this->fileUrl = $fileUrl;
		$this->apiParas["file_url"] = $fileUrl;
	}

	public function getFileUrl()
	{
		return $this->fileUrl;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.media.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fileName,"fileName");
		RequestCheckUtil::checkNotNull($this->fileUrl,"fileUrl");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
