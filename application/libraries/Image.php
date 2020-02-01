<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Image
{
    public function save($path, $username, $mime_type, $encoded_image)
    {
        $image_url = ($path . $username . '.' . $mime_type);

        file_put_contents($image_url, base64_decode($encoded_image));

        return $image_url;
    }

    public function getRandomStr($length)
	{
		$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$chars_len = strlen($chars);
		
		$randString = '';
		for($i = 0; $i < $length; $i++) 
		{
			$randString .= $chars[rand(0, $chars_len-1)];
		}
		
		return $randString;
	}
}
