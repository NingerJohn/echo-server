<?php

namespace frontend\models\user;

use Yii;

/**
 * This is the model class for table "es_user".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property string $real_name
 * @property string $nickname
 * @property string $email
 * @property string $mobile
 * @property string $password
 * @property string $hash_salt
 * @property string $avatar
 * @property string $last_login_ip
 * @property integer $last_login_time
 * @property integer $role_id
 * @property integer $user_status
 * @property string $id_number
 * @property string $id_image
 * @property integer $gender
 * @property integer $birth_time
 * @property integer $birth_province_id
 * @property string $birth_province
 * @property integer $birth_city_id
 * @property string $birth_city
 * @property string $qq
 * @property integer $political_status
 * @property integer $major_id
 * @property string $major_name
 * @property string $nationality
 * @property integer $country_id
 * @property string $country_name
 * @property integer $university_id
 * @property string $university_name
 * @property integer $work_province_id
 * @property string $work_province
 * @property integer $work_city_id
 * @property string $work_city
 * @property integer $work_area_id
 * @property string $work_area
 * @property string $home_address
 */
class User extends \common\models\FrontModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'es_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['last_login_time', 'role_id', 'user_status', 'gender', 'birth_time', 'birth_province_id', 'birth_city_id', 'political_status', 'major_id', 'country_id', 'university_id', 'work_province_id', 'work_city_id', 'work_area_id'], 'integer'],
            [['user_name', 'real_name', 'nickname', 'university_name'], 'string', 'max' => 50],
            [['email', 'home_address'], 'string', 'max' => 100],
            [['mobile', 'last_login_ip'], 'string', 'max' => 15],
            [['password', 'hash_salt'], 'string', 'max' => 32],
            [['avatar', 'id_image'], 'string', 'max' => 150],
            [['id_number', 'birth_province', 'birth_city', 'country_name', 'work_province', 'work_city', 'work_area'], 'string', 'max' => 20],
            [['qq', 'major_name', 'nationality'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('user', '用户ID'),
            'user_name' => Yii::t('user', '用户名'),
            'real_name' => Yii::t('user', '真实姓名'),
            'nickname' => Yii::t('user', 'Nickname'),
            'email' => Yii::t('user', '邮箱地址'),
            'mobile' => Yii::t('user', '手机号码'),
            'password' => Yii::t('user', '登陆密码'),
            'hash_salt' => Yii::t('user', '密码盐值'),
            'avatar' => Yii::t('user', '头像图片地址'),
            'last_login_ip' => Yii::t('user', '上次登陆IP地址'),
            'last_login_time' => Yii::t('user', '上次登陆时间'),
            'role_id' => Yii::t('user', '角色ID'),
            'user_status' => Yii::t('user', '用户状态（-1：被删除；1：正常；2：被加入黑名单；）'),
            'id_number' => Yii::t('user', '身份证号码'),
            'id_image' => Yii::t('user', '身份证图片地址'),
            'gender' => Yii::t('user', '性别（1：男；2：女）'),
            'birth_time' => Yii::t('user', '出生日期'),
            'birth_province_id' => Yii::t('user', '籍贯省ID'),
            'birth_province' => Yii::t('user', '籍贯省名字'),
            'birth_city_id' => Yii::t('user', '籍贯市ID'),
            'birth_city' => Yii::t('user', '籍贯市名字'),
            'qq' => Yii::t('user', 'QQ号'),
            'political_status' => Yii::t('user', '政治面貌（1：团员；2：党员）'),
            'major_id' => Yii::t('user', '专业ID'),
            'major_name' => Yii::t('user', '专业名称'),
            'nationality' => Yii::t('user', '民族'),
            'country_id' => Yii::t('user', '国家ID'),
            'country_name' => Yii::t('user', '国家名字'),
            'university_id' => Yii::t('user', '大学ID'),
            'university_name' => Yii::t('user', '大学名字'),
            'work_province_id' => Yii::t('user', '工作省ID'),
            'work_province' => Yii::t('user', '工作省名字'),
            'work_city_id' => Yii::t('user', '工作市ID'),
            'work_city' => Yii::t('user', '工作市名字'),
            'work_area_id' => Yii::t('user', '工作区ID'),
            'work_area' => Yii::t('user', '工作区名字'),
            'home_address' => Yii::t('user', '家庭住址（全）'),
        ];
    }
}
