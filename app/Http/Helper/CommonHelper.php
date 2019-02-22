<?php 
namespace App\Http\Helper;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use Auth;
use Session;

class CommonHelper extends Controller {
	


	/**
     * safe_b64encode for user public profile
     * @param  $string
     * @return $stringrequestQuotationVendorApproved
     */
    public static function safe_base64_encode($string) {
        $data = base64_encode($string);
        $data = str_replace(array('+', '/', '='), array('-', '_', ''), $data);
        return $data;
    }

    /**
     * Site version of base64_decode().
     * Security purpose
     */
    public static function safe_base64_decode($string) {
        $data = str_replace(array('-', '_'), array('+', '/'), $string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }
    

}

?>