<?php
/**
 * TOP API: taobao.kelude.bugimg.upload request
 * 
 * @author auto create
 * @since 1.0, 2013-11-11 00:00:00
 */
class KeludeBugimgUploadRequest
{
	/** 
	 * 文件的原始名称
	 **/
	private $filename;
	
	/** 
	 * 图片内容的Base64编码.图片最大为2M,只支持JPG,PNG。如果需要传多张，可调多次
	 **/
	private $image;
	
	private $apiParas = array();
	
	public function setFilename($filename)
	{
		$this->filename = $filename;
		$this->apiParas["filename"] = $filename;
	}

	public function getFilename()
	{
		return $this->filename;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.bugimg.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->filename,"filename");
		RequestCheckUtil::checkNotNull($this->image,"image");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
