<?php 

namespace Antiscrape\Scrambler;

use Antiscrape\Data\Data;

class GenericScrambler implements ScramblerInterface
{
    private $input;
    private $mockMultiplier = 5;

	public function __construct($input = null)
	{
		$this->input = $input;
	}

    public function scramble($input = null)
    {
        if ($input) {
            $this->input = $input;
        }

        $inputLen = str_split($this->input, 1);
        $mockCount = strlen($this->input) * $this->mockMultiplier;

        $stacks = $this->mergeMockData(array_map(function($char) {
            return array($this->createData($char, 'visible'));
        }, $inputLen), $this->createMockData($mockCount), $mockCount);

        return $this->shuffleStacks($stacks);
    }

    private function mergeMockData($stacks, $mockData, $mockCount)
    {
        for ($i = 0; $i < $mockCount; $i++) {
            $randStack = mt_rand(0, count($stacks) - 1);
            $stacks[$randStack][] = $this->createData(array_pop($mockData), 'hidden');
        }

        return $stacks;
    }

    private function shuffleStacks($stacks)
    {
        foreach ($stacks as $stack) {
            shuffle($stack);
            $shuffledStacks[] = $stack;
        }

        return $shuffledStacks;
    }

    private function createMockData($idLen = 8, $chars = 'abcdefghijklmnopqrstuvwxyz')
    {
        $charsLen = strlen($chars) - 1;
        $mockData = array();

        for ($i = 0; $i < $idLen; $i++) {
            $randEntry = mt_rand(1, $charsLen);
            $mockData[] = $randEntry % 2 === 0 ? $chars[$randEntry] : ucfirst($chars[$randEntry]);
        }

        return $mockData;
    }

    private function createData($data, $visibility)
    {
        return new Data($data, $visibility);
    }

    public function setMultiplier($multiplier)
    {
        $this->mockMultiplier = $multiplier;

        return $this;
    }
}