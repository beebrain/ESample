<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class pointlocation
{
    var $pointOnVertex = true; // Check if the point sits exactly on one of the vertices?
    var $polygon_array = [];


    public function __construct()
    {
        log_message('Debug', 'PointLocation  class is loaded.');
    }



    public function addPolygon($polygon)
    {

        $vertices = array();
        foreach ($polygon as $vertex) {
            $vertices[] = $this->pointtoCoordinates($vertex);
        }
        array_push($this->polygon_array, $vertices);
    }
    public function pointInPolygon($point)
    {
        $point = $this->pointtoCoordinates($point);


        foreach ($this->polygon_array as $key => $vertices) {
            // Check if the point sits exactly on a vertex
            if ($this->pointOnVertex == true and $this->pointOnVertex($point, $vertices) == true) {
                return $key; // is a vertex return true in polygon
            }

            // Check if the point is inside the polygon or on the boundary
            $intersections = 0;
            $vertices_count = count($vertices);


            for ($i = 1; $i < $vertices_count; $i++) {
                $vertex1 = $vertices[$i - 1];
                $vertex2 = $vertices[$i];
                if ($vertex1['y'] == $vertex2['y'] and $vertex1['y'] == $point['y'] and $point['x'] > min($vertex1['x'], $vertex2['x']) and $point['x'] < max($vertex1['x'], $vertex2['x'])) { // Check if point is on an horizontal polygon boundary
                    return $key; // is a boundary
                }
                if ($point['y'] > min($vertex1['y'], $vertex2['y']) and $point['y'] <= max($vertex1['y'], $vertex2['y']) and $point['x'] <= max($vertex1['x'], $vertex2['x']) and $vertex1['y'] != $vertex2['y']) {
                    $xinters = ($point['y'] - $vertex1['y']) * ($vertex2['x'] - $vertex1['x']) / ($vertex2['y'] - $vertex1['y']) + $vertex1['x'];
                    if ($xinters == $point['x']) { // Check if point is on the polygon boundary (other than horizontal)
                        return $key; // is a boundary
                    }
                    if ($vertex1['x'] == $vertex2['x'] || $point['x'] <= $xinters) {
                        $intersections++;
                    }
                }
            }
            // If the number of edges we passed through is odd, then it's in the polygon. 
            if ($intersections % 2 != 0) {
                return $key; // is a inside
            }
        }
        return -1;  //is not inside
    }

    public function pointOnVertex($point, $vertices)
    {
        foreach ($vertices as $vertex) {
            if ($point == $vertex) {
                return true;
            }
        }
    }


    public function pointtoCoordinates($pointString)
    {

        return array("x" => $pointString->lat, "y" => $pointString->lon);
    }
    public function pointStringToCoordinates($pointString)
    {
        $coordinates = explode(" ", $pointString);
        return array("x" => $coordinates[0], "y" => $coordinates[1]);
    }
}
