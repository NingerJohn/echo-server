<?php
namespace common\libraries;

/**
* 
*/
class Security
{
	
	public $one;


	function __construct()
	{
		# code...
		$this->one = time();
	}




	public function displayVar($value='')
	{
		# code...
		var_dump( $this->one );
	}

    public function generateAuthData()
    {
        # code...
        
    }



	/**
	 * 重新映射md5值
	 * @author NJ 2016年09月07日20:45:14
	 * @return string 映射以后的字符
	 */
	public static function remapMd5($original_str=null, $type='encode')
	{
        if ( empty($original_str) || !in_array($type, ['encode', 'decode']) ) {
			// 非法参数返回null
            return null;
        }
        // 映射规则基础数组
		$map_arr = [
			'a'=>'i','b'=>'l','c'=>'q','d'=>'6','e'=>'g','f'=>'2','g'=>'h','h'=>'7','i'=>'5','j'=>'v','k'=>'1','l'=>'4',
			'm'=>'n','n'=>'b','o'=>'t','p'=>'z','q'=>'8','r'=>'r','s'=>'s','t'=>'m','u'=>'d','v'=>'9','w'=>'x','x'=>'o',
			'y'=>'p','z'=>'a','1'=>'u','2'=>'e','3'=>'f','4'=>'k','5'=>'3','6'=>'w','7'=>'y','8'=>'0','9'=>'j','0'=>'c',
		];
        if ( $type == 'encode' ) {
            // 正映射(从键到值) - 加密
            $fin_str = strtr($original_str, $map_arr);
            return $fin_str;
        } else {
            // 逆映射(从值到键) - 解密
            $fin_str = strtr($original_str, array_flip($map_arr));
            return $fin_str;
        }
        
	}


}












