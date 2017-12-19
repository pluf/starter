<?php
Pluf::loadFunction('Pluf_Shortcuts_GetObjectOr404');

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
}