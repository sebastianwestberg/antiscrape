<?php

namespace Antiscrape\Data;

abstract class DataAbstract
{
	public function getData()
	{
		return $this->data;
	}

	public function getState()
	{
		return $this->state;
	}

	public function getId()
	{
		return $this->id;
	}
}