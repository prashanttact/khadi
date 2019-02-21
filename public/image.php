<?php
/**
 * Image
 * 
 * @author Rob Keplin
 * @link http://www.robkeplin.com
 **/
 
class Image
{
	public $errors;
	private $_image;
	
	public function __construct()
	{
		$this->errors = array();
		$this->_image = NULL;
	}
	
	public function getImage($url)
	{
		$ext = strrchr($url, '.');
		$ext = strtolower($ext);
		
		switch($ext) {
			case '.jpeg':
			case '.jpg':
				$this->_image = imagecreatefromjpeg($url);
				break;
			case '.gif':
				$this->_image = imagecreatefromgif($url);
				break;
			case '.png':
				$this->_image = imagecreatefrompng($url);
			default:
				$this->errors[] = "The linked file must be a .jpeg, .jpg, .gif, or .png";
				break;
		}
	}
	
	public function resizeImage($new_width, $new_height, $url)
	{
		if($this->_image)
		{
			//Resize the image
			 $old_width = imagesx($this->_image);
			 $old_height = imagesy($this->_image);
			
			//Keep the resolution of the image the same
			if($old_width>$new_width){
			if($old_height > $new_height) 
			{
				$ratio = $old_height / $new_height;
			}
			if($old_width > $new_width) 
			{
				$wratio = $old_width / $new_width;
			}
			//$ratioheigh = $old_height / $new_height;
			$new_width = ceil($old_width / $wratio);
			$new_height = ceil($old_height / $ratio);
			//$new_height =ceil($old_height/$ratioheigh) ;
			}else{
				$new_height=$old_height;
				$new_width=$old_width;
			}
			$new_image = imagecreatetruecolor($new_width, $new_height);
			
			$ext = strrchr($url, '.');
			$ext = strtolower($ext);
		
			if($ext=='.png')
			{
				$whiteBackground = imagecolorallocate($new_image, 255, 255, 255); 
				imagefill($new_image,0,0,$whiteBackground);	
			}
			

			imagecopyresampled($new_image, $this->_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);
			$this->_image = $new_image;
		}
	}
	
	public function displayImage()
	{
		if($this->_image)
		{
			header('Content-type: image/jpeg');
			imagejpeg($this->_image, NULL, 100);
			imagedestroy($this->_image);	
		}
	}
	
}

?>
