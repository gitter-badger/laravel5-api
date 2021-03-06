<?php

namespace SehrGut\Laravel5_Api;

use Illuminate\Http\Request;

/**
 * This basic RequestAdapter assumes the keys are part of the url or the
 * query string and therefore available as properties of the request.
 */
class RequestAdapter
{
    public $request;

	public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Check if a given key exists in the request.
     *
     * @param  String  $key  The key to check for
     * @return boolean
     */
    public function hasKey(String $key)
    {
        return !is_null($this->request->$key);
    }

    /**
     * Get the value for a given key.
     *
     * @param  String  $key
     * @return mixed
     */
    public function getValueByKey(String $key)
    {
        return $this->request->$key;
    }

    /**
     * Get the request payload.
     *
     * @return array
     */
    public function getPayload()
    {
        return $this->request->all();
    }
}