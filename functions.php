<?php 
/**
 * @package      xups
 * @author       Jelon
 * @version      0.0.1
 * @since        2015-01-05
 * @todo         主题函数文件
 * @link         http://jelon.in
 *
 */

?>
<?php
//人性化时间格式转换
function time_tranx($date) {
    $str      = '';
    $the_time = strtotime($date);
    $diff     = $_SERVER['REQUEST_TIME'] - $the_time;
    $day      = floor($diff / 86400);
    $free     = $diff % 86400;

    if ($day > 0) {
        return $day . '天前';
    } else {
        if ($free > 0) {
            $hour = floor($free / 3600);
            $free = $free % 3600;
                if ($hour > 0) {
                    return $hour . '小时前';
                } else {
                    if ($free > 0) {
                        $min = floor($free / 60);
                        $free = $free % 60;
                        if ($min > 0) {
                            return $min . '分钟前';
                        } else {
                            if ($free > 0) {
                                return $free . '秒前';
                            } else {
                                return '刚刚';
                            }
                        }
                    } else {
                        return '刚刚';
                    }
                }
        } else {
            return '刚刚';
        }
    }

}
