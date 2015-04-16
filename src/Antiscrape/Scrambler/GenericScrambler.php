<?php 

namespace Antiscrape\Scrambler;

use Antiscrape\Formatter\CssFormatter;

class GenericScrambler implements ScramblerInterface
{
	private $formatter;
	private $iterations;

	public function __construct(\Antiscrape\Formatter\FormatterInterface $formatter = null, $iterations = 10)
	{
		$this->formatter = $formatter ?: new CssFormatter();
		$this->setIterations($iterations);
	}

	public function setIterations($iterations)
	{
		$this->iterations = $iterations;
		return $this;
	}

	public function scramble($email)
	{
		$elementOuterArr = $this->build($email);
		$html = '';

		foreach ($elementOuterArr as $elementInnerArr) {
			shuffle($elementInnerArr);

			foreach ($elementInnerArr as $element) {
				$html .= $element;
			}
		}

		return $html;
	}

	public function getFormatting()
	{
		return $this->formatter->getFormatting();
	}

	private function build($email)
	{
		$formatter = $this->formatter;

		// Add real and visible data
		$emailScrambler = array_map(function($val) use($formatter) {
			$className = $formatter->nameGenerator();

			$formatter->addFormatting(array('selector' => $className, 'style' => 'display: inline'));
			$str = sprintf('<span class="%s">%s</span>', $className, $val);

			return (array) $str;
		}, str_split($email, 1));

		// Add scrap data with hidden classes
		for ($i = 0; $i < $this->iterations; $i++) {
			$className = $formatter->nameGenerator();
			$randStack = mt_rand(0, count($emailScrambler) - 1);

			$emailScrambler[$randStack][] = sprintf('<span class="%s">%s</span>', $className, $i);

			$formatter->addFormatting(array('selector' => $className, 'style' => 'display:none'));
		}

		return $emailScrambler;
	}

}