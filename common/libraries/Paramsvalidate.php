<?php
namespace common\libraries;

/**
* 参数验证类
* 
* @author NJ 2016年9月22日10:28:37
* 
*/
class Paramsvalidate
{
	
	public $rules;

	public $params;

	function __construct()
	{
		# code...
	}

    /**
     * 参数检测总函数
     * 
     * @author NJ 2016年9月22日10:07:11
     * @param  array $params 参数数组
     * @param  array $rules  规则
     * @return array         结果数组
     * 
     */
    public function _paramsCheck($params=null, $rules=null)
    {
        # code...
        $params = $this->post();
        $rules_type_one = [
            ['page', 'notEmpty', 1],
            ['page_size', 'int|str|lgt:0', 20],
            ['province_id', 'int|str|lgt:0'],
        ];

    }

    /**
     * 必须验证
     * 
     * @author NJ 2016年9月22日10:10:31
     * @return boolean true or false
     * 
     */
    private function _required()
    {
        # code...
    }

    /**
     * 必须且不能为空验证
     * @author NJ 2016年9月22日10:10:31
     * @return boolean true or false
     */
    private function _notEmpty()
    {
        # code...
    }

    /**
     * 邮箱验证
     * @author NJ 2016年9月22日10:10:31
     * @return boolean true or false
     */
    private function _email()
    {
        # code...
    }

    /**
     * 固定号码规则验证
     * @author NJ 2016年9月22日10:10:31
     * @return boolean true or false
     */
    private function _telephone()
    {
        # code...
    }

    /**
     * 手机号码规则验证
     * @author NJ 2016年9月22日10:10:31
     * @return boolean true or false
     */
    private function _mobile()
    {
        # code...
        
    }

    /**
     * 手机号码规则验证
     * 
     * @author NJ 2016年9月22日10:10:31
     * @return boolean true or false
     * 
     */
    private function _fixLength()
    {
        # code...
        
    }



}





































