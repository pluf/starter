<?php

/**
 * Starter main views
 *
 * @author maso <mostafa.barmshory@dpq.co.ir>
 */
class Starter_Views
{

    /**
     * Hello world!
     *
     * @param Pluf_HTTP_Request $request
     * @param array $match
     * @return Pluf_HTTP_Response_Json
     */
    public function hello($request, $match)
    {
        return array(
            'message' => 'hi'
        );
    }

    public function by($request, $match)
    {
        $result = array();
        $result['title'] = 'Sample result';
        $result['message'] = 'By';
        
        return $result;
    }
    
    public function echo($request, $match)
    {
        $result = array();
        $result['message'] = $match['message'];
        return $result;
    }
}