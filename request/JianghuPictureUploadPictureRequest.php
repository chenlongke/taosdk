<?php
/**
 * TOP API: taobao.jianghu.picture.uploadPicture request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class JianghuPictureUploadPictureRequest
{
	/** 
	 * 相册ID(须数字)，注意：该接口无法向头像相册对应的ablum_id里传照片
	 **/
	private $albumId;
	
	/** 
	 * 上传照片的二进制数组，采用http的multipart协议。图片最大1M，空间最大100M。可允许的后缀jpg/jpeg/png/bmp/gif。
	 **/
	private $picture;
	
	/** 
	 * 照片的名称（最长40个字符，一个汉字或者一个英文字母或者一个标点符号都算作一个字符）
	 **/
	private $pictureName;
	
	private $apiParas = array();
	
	public function setAlbumId($albumId)
	{
		$this->albumId = $albumId;
		$this->apiParas["album_id"] = $albumId;
	}

	public function getAlbumId()
	{
		return $this->albumId;
	}

	public function setPicture($picture)
	{
		$this->picture = $picture;
		$this->apiParas["picture"] = $picture;
	}

	public function getPicture()
	{
		return $this->picture;
	}

	public function setPictureName($pictureName)
	{
		$this->pictureName = $pictureName;
		$this->apiParas["picture_name"] = $pictureName;
	}

	public function getPictureName()
	{
		return $this->pictureName;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.picture.uploadPicture";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->albumId,"albumId");
		RequestCheckUtil::checkNotNull($this->picture,"picture");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
