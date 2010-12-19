<?php

	class extension_thumbnail extends Extension {

		public function about(){
			return array(
				'name' => 'Piano',
				'version' => '0.1',
				'release-date' => '19th Dec 2010',
				'author' => array(
						'name' => 'Ross Cairns',
						'website' => 'http://rosscairns.com/',
						'email' => 'ross[~~]electricglen.com'
					)
			);
		}

		public function getSubscribedDelegates()
		{
			return array(
				array(
					'page' => '/administration/',
					'delegate' => 'AdminPagePreGenerate',
					'callback' => '__appendAssets'
				)
			);
		}

		public function __appendAssets($context)
		{
			$callback = $this->_Parent->getPageCallback();

			if ($callback['driver'] == 'publish' && ($callback['context']['page'] == 'index' || $callback['context']['page'] == 'edit'))
			{
				$page = Administration::instance()->Page;
				
				$page->addScriptToHead(URL . '/extensions/thumbnail/assets/piano.js', 105);
			}
		}

	}
