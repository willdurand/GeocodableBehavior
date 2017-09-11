
/**
 * Calculates the distance between a given <?php echo $objectName ?> and this one.
 *
 * @param <?php echo $className ?> <?php echo $variableName ?>    A <?php echo $className ?> object.
 * @param double $unit     The unit measure.
 *
 * @return double   The distance between the two objects.
 */
public function getDistanceTo(<?php echo $className ?> <?php echo $variableName ?>, $unit = <?php echo $peerName ?>::KILOMETERS_UNIT)
{
    $dist = rad2deg(acos(round(sin(deg2rad($this-><?php echo $latitudeGetter ?>())) * sin(deg2rad(<?php echo $variableName ?>-><?php echo $latitudeGetter ?>())) +  cos(deg2rad($this-><?php echo $latitudeGetter ?>())) * cos(deg2rad(<?php echo $variableName ?>-><?php echo $latitudeGetter ?>())) * cos(deg2rad($this-><?php echo $longitudeGetter ?>() - <?php echo $variableName ?>-><?php echo $longitudeGetter ?>())),14))) * 60 * <?php echo $peerName ?>::MILES_UNIT;

    if (<?php echo $peerName ?>::MILES_UNIT === $unit) {
        return $dist;
    } elseif (<?php echo $peerName ?>::NAUTICAL_MILES_UNIT === $unit) {
        return $dist * <?php echo $peerName ?>::NAUTICAL_MILES_UNIT;
    }

    return $dist * <?php echo $peerName ?>::KILOMETERS_UNIT;
}
