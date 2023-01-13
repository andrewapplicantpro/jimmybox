<?php
return array(
		"siteUrl"=>"http://127.0.0.1/app1/public/",
		"database"=>[
				"type"=>"mysql",
				"wrapper"=>"Ubiquity\db\providers\pdo\PDOWrapper",
				"dbName"=>getenv('DB_NAME'),
				"serverName"=>"127.0.0.1",
				"port"=>"3306",
				"user"=>getenv('DB_USER'),
				"password"=>getenv('DB_PASS'),
				"options"=>[],
				"cache"=>false
		],
		"sessionName"=>"app1",
		"namespaces"=>[],
		"templateEngine"=>'Ubiquity\\views\\engine\\Twig',
		"templateEngineOptions"=>array("cache"=>false),
		"test"=>false,
		"debug"=>false,
		"logger"=>function(){return new \Ubiquity\log\libraries\UMonolog("app1",\Monolog\Logger::INFO);},
		"di"=>["@exec"=>["jquery"=>function($controller){
						return \Ajax\php\ubiquity\JsUtils::diSemantic($controller);
					}]],
		"cache"=>["directory"=>"cache/","system"=>"Ubiquity\\cache\\system\\ArrayCache","params"=>[]],
		"mvcNS"=>["models"=>"models","controllers"=>"controllers","rest"=>""]
);
