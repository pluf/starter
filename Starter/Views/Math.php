<?php

class Starter_Views_Math
{

    public function add($request, $match)
    {
        $a = $match['a'];
        $b = $match['b'];
        
        return $a + $b;
    }

    public function multiple($request, $match)
    {
        $a = $match['a'];
        $b = $match['b'];
        return $a * $b;
    }
    
    /**
     * Math operations
     * 
     * @param Pluf_HTTP_Request $request
     * @param array $match
     * @return number
     */
    public function  run($request, $match)
    {
        if( $match['operator'] === 'add'){
            return $request->REQUEST['a'] + $request->REQUEST['b'];
        }
        
        throw new Pluf_Exception('Unsuported operation');
    }
}