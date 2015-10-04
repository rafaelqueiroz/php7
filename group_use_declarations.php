<?php
// before
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

// after
use Symfony\Component\Console\ {
 Command\Command,
 Input\InputInterface,
 Input\InputOption,
 Output\OutputInterface
};

use Cake\Core\App;
use Cake\Core\ObjectRegistry;
use Cake\Event\EventDispatcherInterface;
use Cake\Event\EventDispatcherTrait;

use Cake\ {
	Core\App,
	Core\ObjectRegistry,
	Event\EventDispatcherInterface,
	Event\EventDispatcherTrait	
}