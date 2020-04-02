<?php


class Session
{
	public function put($name, $value){
	
		return $_SESSION[$name] = $value;
	
	}
	
	public function exists($name){
		return (isset($_SESSION[$name])) ? true : false;
	}
	
	public function delete($name){
		if(self::exists($name)){
			unset($_SESSION[$name]);
		}
	}
	
	public function get($name){
		return $_SESSION[$name];
	}
	
	
	public static function flash($name, $string = '' ){
		
		if(self::exists($name) && self::get($name) !== ''){
			$session = self::get($name);
			self::delete($name);
			return $session;
		}
		else{
			
			self::put($name, $string);
			
		}
		
		
	}
	
	
	
}