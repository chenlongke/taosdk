<?php
/**
 * TOP API: taobao.audio.upload request
 * 
 * @author auto create
 * @since 1.0, 2014-01-03 00:00:00
 */
class AudioUploadRequest
{
	/** 
	 * 分类id
	 **/
	private $categoryId;
	
	/** 
	 * 音频文件，音频的文件大小是根据业务方来设置的，最大10M是开放平台可以支持的10M
	 **/
	private $data;
	
	/** 
	 * 音频文件的格式，默认是mp3格式，具体可以支持的格式是业务方设置的
	 **/
	private $ext;
	
	/** 
	 * 音频名称
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setExt($ext)
	{
		$this->ext = $ext;
		$this->apiParas["ext"] = $ext;
	}

	public function getExt()
	{
		return $this->ext;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getApiMethodName()
	{
		return "taobao.audio.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->categoryId,9223372036854775807,"categoryId");
		RequestCheckUtil::checkMinValue($this->categoryId,0,"categoryId");
		RequestCheckUtil::checkNotNull($this->data,"data");
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
