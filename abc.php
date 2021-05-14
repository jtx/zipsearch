        $lat1 = deg2rad($lat1);
        $lon1 = deg2rad($lon1);
        $lat2 = deg2rad($lat2);
        $lon2 = deg2rad($lon2);

        // Find the deltas
        $delta_lat = $lat2 - $lat1;
        $delta_lon = $lon2 - $lon1;

        // http://en.wikipedia.org/wiki/Great-circle_distance
        // Find the Great Circle distance
        $temp = pow(sin($delta_lat/2.0),2) + cos($lat1) * cos($lat2) * pow(sin($delta_lon/2.0),2);
        $distance = 3956 * 2 * atan2(sqrt($temp),sqrt(1-$temp));

        return $distance;

