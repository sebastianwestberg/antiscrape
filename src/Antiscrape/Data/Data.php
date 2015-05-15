<?php

namespace Antiscrape\Data;

class Data extends DataAbstract implements DataInterface
{
	protected $data;
	protected $state;
	protected $id;

	public function __construct($data, $state, $id = null)
	{
		$this->id = $id ?: $this->idGenerator();
		$this->data = $data;
		$this->state = $state;
	}

    public function idGenerator($idLen = 8, $chars = 'abcdefghijklmnopqrstuvwxyz')
    {
    	$id = '';
        $charsLen = strlen($chars) - 1;

        for ($i = 0; $i < $idLen; $i++) {
            $randEntry = mt_rand(1, $charsLen);
            $id .= $randEntry % 2 === 0 ? $chars[$randEntry] : ucfirst($chars[$randEntry]);
        }

        return $id;
    }
}