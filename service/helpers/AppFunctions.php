<?php
/**
 * Created by PhpStorm.
 * User: rex
 * Email: caoliang@simpleware.com.cn
 * Date: 01/12/2017
 * Time: 8:20 PM
 */

if (!function_exists('get_logger')) {
    /**
     * 获取日志记录器
     *
     * @return \yii\log\Logger
     */
    function get_logger() {
        return \Yii::$app->log->getLogger();
    }
}

if (!function_exists('id2lowercamel')) {
    /**
     * 将给定字符串根据其分隔符转为小驼峰写法
     *
     * @param string $id 需要被转的字符
     * @param string $separator 分隔符
     * @return string 转了之后的字符
     */
    function id2lowercamel($id, $separator = '-') {
        return lcfirst(\yii\helpers\Inflector::id2camel($id, $separator));
    }
}

if (!function_exists('get_app')) {
    /**
     * Yii的$app对象
     *
     * @return \yii\console\Application|\yii\web\Application
     */
    function get_app() {
        return \Yii::$app;
    }
}

if (!function_exists('get_request')) {
    /**
     * Yii的$request对象
     *
     * @return \yii\console\Request|\yii\web\Request
     */
    function get_request() {
        return get_app()->request;
    }
}

if (!function_exists('get_response')) {
    /**
     * Yii的$response对象
     *
     * @return \yii\console\Response|\yii\web\Response
     */
    function get_response() {
        return get_app()->response;
    }
}

if (!function_exists('get_post')) {
    /**
     * Yii的post方法
     *
     * @param null $name
     * @param null $defaultValue
     * @return array|mixed
     */
    function get_post($name = null, $defaultValue = null) {
        return get_request()->post($name, $defaultValue);
    }
}

if (!function_exists('get_get')) {
    /**
     * Yii的get方法
     *
     * @param null $name
     * @param null $defaultValue
     * @return array|mixed
     */
    function get_get($name = null, $defaultValue = null) {
        return get_request()->get($name, $defaultValue);
    }
}

if (!function_exists('get_security')) {
    /**
     * Yii的Security对象
     *
     * @return \yii\base\Security
     */
    function get_security() {
        return get_app()->getSecurity();
    }
}