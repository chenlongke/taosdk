<?php
/**
 * TOP API: taobao.lz.st.warning.config request
 * 
 * @author auto create
 * @since 1.0, 2014-01-10 00:00:00
 */
class LzStWarningConfigRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.lz.st.warning.config";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
