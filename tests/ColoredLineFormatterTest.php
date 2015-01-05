<?php

use \Bramus\Monolog\Formatter\ColoredLineFormatter;

class ColoredLineFormatterTest extends PHPUnit_Framework_TestCase {

	protected function setUp()
	{

		$this->clf = new ColoredLineFormatter();

	}

	protected function tearDown()
	{
		// ...
	}

	public function testInstantiation()
	{

		$this->assertInstanceOf('\Bramus\Monolog\Formatter\ColoredLineFormatter', $this->clf);

	}

	public function testResets()
	{

		$this->assertEquals($this->clf->resetFormatting(), "\033[0m");

	}

	public function testForegroundFormatting()
	{

		// Foreground Colors, No Formatting
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, '', 'foreground'), "\033[0;30m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, '', 'foreground'), "\033[0;31m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, '', 'foreground'), "\033[0;32m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, '', 'foreground'), "\033[0;33m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, '', 'foreground'), "\033[0;34m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, '', 'foreground'), "\033[0;35m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, '', 'foreground'), "\033[0;36m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, '', 'foreground'), "\033[0;37m");

		// Foreground Colors, Bold
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, 'bold', 'foreground'), "\033[1;30m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, 'bold', 'foreground'), "\033[1;31m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, 'bold', 'foreground'), "\033[1;32m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, 'bold', 'foreground'), "\033[1;33m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, 'bold', 'foreground'), "\033[1;34m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, 'bold', 'foreground'), "\033[1;35m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, 'bold', 'foreground'), "\033[1;36m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, 'bold', 'foreground'), "\033[1;37m");

		// Foreground Colors, Dim
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, 'dim', 'foreground'), "\033[2;30m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, 'dim', 'foreground'), "\033[2;31m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, 'dim', 'foreground'), "\033[2;32m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, 'dim', 'foreground'), "\033[2;33m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, 'dim', 'foreground'), "\033[2;34m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, 'dim', 'foreground'), "\033[2;35m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, 'dim', 'foreground'), "\033[2;36m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, 'dim', 'foreground'), "\033[2;37m");

		// Foreground Colors, Underline
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, 'underline', 'foreground'), "\033[4;30m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, 'underline', 'foreground'), "\033[4;31m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, 'underline', 'foreground'), "\033[4;32m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, 'underline', 'foreground'), "\033[4;33m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, 'underline', 'foreground'), "\033[4;34m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, 'underline', 'foreground'), "\033[4;35m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, 'underline', 'foreground'), "\033[4;36m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, 'underline', 'foreground'), "\033[4;37m");

		// Foreground Colors, Blink
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, 'blink', 'foreground'), "\033[5;30m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, 'blink', 'foreground'), "\033[5;31m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, 'blink', 'foreground'), "\033[5;32m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, 'blink', 'foreground'), "\033[5;33m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, 'blink', 'foreground'), "\033[5;34m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, 'blink', 'foreground'), "\033[5;35m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, 'blink', 'foreground'), "\033[5;36m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, 'blink', 'foreground'), "\033[5;37m");

		// Foreground Colors, Reverse
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, 'reverse', 'foreground'), "\033[7;30m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, 'reverse', 'foreground'), "\033[7;31m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, 'reverse', 'foreground'), "\033[7;32m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, 'reverse', 'foreground'), "\033[7;33m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, 'reverse', 'foreground'), "\033[7;34m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, 'reverse', 'foreground'), "\033[7;35m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, 'reverse', 'foreground'), "\033[7;36m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, 'reverse', 'foreground'), "\033[7;37m");

		// Foreground Colors, Conceal
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, 'conceal', 'foreground'), "\033[8;30m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, 'conceal', 'foreground'), "\033[8;31m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, 'conceal', 'foreground'), "\033[8;32m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, 'conceal', 'foreground'), "\033[8;33m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, 'conceal', 'foreground'), "\033[8;34m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, 'conceal', 'foreground'), "\033[8;35m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, 'conceal', 'foreground'), "\033[8;36m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, 'conceal', 'foreground'), "\033[8;37m");

	}

	public function testForegroundHighFormatting()
	{

		// Foreground Colors, No Formatting
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, '', 'foreground_high'), "\033[0;90m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, '', 'foreground_high'), "\033[0;91m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, '', 'foreground_high'), "\033[0;92m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, '', 'foreground_high'), "\033[0;93m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, '', 'foreground_high'), "\033[0;94m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, '', 'foreground_high'), "\033[0;95m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, '', 'foreground_high'), "\033[0;96m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, '', 'foreground_high'), "\033[0;97m");

		// Foreground Colors, Bold
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, 'bold', 'foreground_high'), "\033[1;90m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, 'bold', 'foreground_high'), "\033[1;91m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, 'bold', 'foreground_high'), "\033[1;92m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, 'bold', 'foreground_high'), "\033[1;93m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, 'bold', 'foreground_high'), "\033[1;94m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, 'bold', 'foreground_high'), "\033[1;95m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, 'bold', 'foreground_high'), "\033[1;96m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, 'bold', 'foreground_high'), "\033[1;97m");

		// Foreground Colors, Dim
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, 'dim', 'foreground_high'), "\033[2;90m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, 'dim', 'foreground_high'), "\033[2;91m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, 'dim', 'foreground_high'), "\033[2;92m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, 'dim', 'foreground_high'), "\033[2;93m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, 'dim', 'foreground_high'), "\033[2;94m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, 'dim', 'foreground_high'), "\033[2;95m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, 'dim', 'foreground_high'), "\033[2;96m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, 'dim', 'foreground_high'), "\033[2;97m");

		// Foreground Colors, Underline
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, 'underline', 'foreground_high'), "\033[4;90m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, 'underline', 'foreground_high'), "\033[4;91m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, 'underline', 'foreground_high'), "\033[4;92m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, 'underline', 'foreground_high'), "\033[4;93m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, 'underline', 'foreground_high'), "\033[4;94m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, 'underline', 'foreground_high'), "\033[4;95m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, 'underline', 'foreground_high'), "\033[4;96m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, 'underline', 'foreground_high'), "\033[4;97m");

		// Foreground Colors, Blink
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, 'blink', 'foreground_high'), "\033[5;90m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, 'blink', 'foreground_high'), "\033[5;91m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, 'blink', 'foreground_high'), "\033[5;92m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, 'blink', 'foreground_high'), "\033[5;93m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, 'blink', 'foreground_high'), "\033[5;94m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, 'blink', 'foreground_high'), "\033[5;95m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, 'blink', 'foreground_high'), "\033[5;96m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, 'blink', 'foreground_high'), "\033[5;97m");

		// Foreground Colors, Reverse
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, 'reverse', 'foreground_high'), "\033[7;90m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, 'reverse', 'foreground_high'), "\033[7;91m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, 'reverse', 'foreground_high'), "\033[7;92m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, 'reverse', 'foreground_high'), "\033[7;93m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, 'reverse', 'foreground_high'), "\033[7;94m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, 'reverse', 'foreground_high'), "\033[7;95m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, 'reverse', 'foreground_high'), "\033[7;96m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, 'reverse', 'foreground_high'), "\033[7;97m");

		// Foreground Colors, Conceal
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, 'conceal', 'foreground_high'), "\033[8;90m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, 'conceal', 'foreground_high'), "\033[8;91m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, 'conceal', 'foreground_high'), "\033[8;92m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, 'conceal', 'foreground_high'), "\033[8;93m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, 'conceal', 'foreground_high'), "\033[8;94m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, 'conceal', 'foreground_high'), "\033[8;95m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, 'conceal', 'foreground_high'), "\033[8;96m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, 'conceal', 'foreground_high'), "\033[8;97m");

	}

	public function testBackgroundFormatting()
	{

		// Background Colors
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, '', 'background'), "\033[0;40m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, '', 'background'), "\033[0;41m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, '', 'background'), "\033[0;42m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, '', 'background'), "\033[0;43m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, '', 'background'), "\033[0;44m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, '', 'background'), "\033[0;45m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, '', 'background'), "\033[0;46m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, '', 'background'), "\033[0;47m");

	}

	public function testBackgroundHighFormatting()
	{

		// Background Colors
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLACK, '', 'background_high'), "\033[0;100m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_RED, '', 'background_high'), "\033[0;101m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_GREEN, '', 'background_high'), "\033[0;102m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_YELLOW, '', 'background_high'), "\033[0;103m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_BLUE, '', 'background_high'), "\033[0;104m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_PURPLE, '', 'background_high'), "\033[0;105m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_CYAN, '', 'background_high'), "\033[0;106m");
		$this->assertEquals(ColoredLineFormatter::formatColor(ColoredLineFormatter::COLOR_WHITE, '', 'background_high'), "\033[0;107m");

	}

}

// EOF
