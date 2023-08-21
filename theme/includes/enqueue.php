<?php

	function enqueue_stuff() {

		$templatedir = get_template_directory_uri();
		$enqueList = [	
			[
				"name" => 'fullpage.min.css', 
				"type" => 'css',
				"path" => $templatedir . '/fullpage.min.css',
				"version" => '2.9.7'
			],
			[
				"name" => 'slick-theme.css', 
				"type" => 'css',
				"path" => $templatedir . '/slick-theme.min.css',
				"version" => '1.8.1'
			],
			[
				"name" => 'slick.css', 
				"type" => 'css',
				"path" => $templatedir . '/slick.css',
				"version" => '1.8.1'
			],
			[
				"name" => 'style.css', 
				"type" => 'css',
				"path" => $templatedir . '/style.css',
				"version" => filemtime(get_theme_file_path('/style.css'))
			],
			
			[
				"name" => 'jquery.js', 
				"type" => 'js',
				"path" => $templatedir . '/js/jquery-3.3.1.min.js',
				"version" => '3.3.1',
				"loadInFooter" => false
			],
			[
				"name" => 'slick.min.js', 
				"type" => 'js',
				"path" => $templatedir . '/js/slick.min.js',
				"version" => '1.8.1',
				"loadInFooter" => true
			],
			[
				"name" => 'scrolloverflow.min.js', 
				"type" => 'js',
				"path" => $templatedir . '/js/scrolloverflow.min.js',
				"version" => '2.9.7',
				"loadInFooter" => true
			],
			[
				"name" => 'fullpage.min.js', 
				"type" => 'js',
				"path" => $templatedir . '/js/fullpage.min.js',
				"version" => '2.9.7',
				"loadInFooter" => true
			],
			[
				"name" => 'custom.js', 
				"type" => 'js',
				"path" => $templatedir . '/js/custom.js',
				"version" => '1.0.0',
				"loadInFooter" => true
			]
		];
		
		foreach($enqueList as $asset) {	
			if ($asset['type'] === 'css') {
				wp_enqueue_style( 
					'victor_'.$asset['name'],  	// handle
					$asset['path'], 			// src
					null, 						// deps
					$asset['version'] 			// ver
				);	
			}	
			if ($asset['type'] === 'js') {
				wp_enqueue_script( 
					'victor_'.$asset['name'],  	// handle
					$asset['path'], 			// src
					array(), 					// deps
					$asset['version'], 			// ver
					$asset['loadInFooter']		// in footer
				);	
			}
		}
	} 
	
	add_action( 'wp_enqueue_scripts', 'enqueue_stuff' );
	
	
	// Function to defer or asynchronously load scripts for SEO Performance
	
	function js_async_attr($tag){	
		if (true == strpos($tag, 'defer') ) {
			 return str_replace( ' src', '  defer="defer" src', $tag ); 
		}
		return $tag;
	}
	add_filter( 'script_loader_tag', 'js_async_attr', 1 );


?>
