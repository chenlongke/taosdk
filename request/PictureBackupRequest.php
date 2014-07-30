<?php
/**
 * TOP API: taobao.picture.backup request
 * 
 * @author auto create
 * @since 1.0, 2013-11-28 00:00:00
 */
class PictureBackupRequest
{
	/** 
	 * 惟一标示
	 **/
	private $backupFlag;
	
	/** 
	 * 图片内容
	 **/
	private $backupImg;
	
	/** 
	 * 备份图片地址
	 **/
	private $backupPic;
	
	/** 
	 * 错误描述
	 **/
	private $backupStatus;
	
	/** 
	 * umid
	 **/
	private $backupUmid;
	
	private $apiParas = array();
	
	public function setBackupFlag($backupFlag)
	{
		$this->backupFlag = $backupFlag;
		$this->apiParas["backup_flag"] = $backupFlag;
	}

	public function getBackupFlag()
	{
		return $this->backupFlag;
	}

	public function setBackupImg($backupImg)
	{
		$this->backupImg = $backupImg;
		$this->apiParas["backup_img"] = $backupImg;
	}

	public function getBackupImg()
	{
		return $this->backupImg;
	}

	public function setBackupPic($backupPic)
	{
		$this->backupPic = $backupPic;
		$this->apiParas["backup_pic"] = $backupPic;
	}

	public function getBackupPic()
	{
		return $this->backupPic;
	}

	public function setBackupStatus($backupStatus)
	{
		$this->backupStatus = $backupStatus;
		$this->apiParas["backup_status"] = $backupStatus;
	}

	public function getBackupStatus()
	{
		return $this->backupStatus;
	}

	public function setBackupUmid($backupUmid)
	{
		$this->backupUmid = $backupUmid;
		$this->apiParas["backup_umid"] = $backupUmid;
	}

	public function getBackupUmid()
	{
		return $this->backupUmid;
	}

	public function getApiMethodName()
	{
		return "taobao.picture.backup";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->backupUmid,"backupUmid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
