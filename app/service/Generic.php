<?php
/**
 * complysec description
 *
 * @author Oliver Bayes-Shelton <oliver.bayes-shelton@randomstorm.com>
 * @package
 * @subpackage
 */

namespace Service;

use Phalcon\Tag,
    Phalcon\Mvc\Model\Criteria,
    Phalcon\Cache\Frontend\Data,
    Phalcon\Cache\Backend\File,
    Service\Json;

class Generic extends AbstractService
{
    public function getDailySummaryObservationsByLocationName($locationName) {

        $location = \Location::findFirst(array(
            "town = :town:
            AND status = '1'",
            "bind"     => array('town' => $locationName),
        ));

        if(!$location) {
            return false;
        }

        $days = \Dailysummary::find(array(
            "location_id = :location_id:
            AND date = '2014-01-21 06:20:00'
            AND status = '1'",
            "bind" => array('location_id' => $location->id)
        ));

        $data = array();

        foreach($days as $day) {

            $data['dailysummarry'] = $day;

        }

        $observations = \Observations::find(array(
            "location_id = :location_id: AND status = '1'",
            "bind" => array('location_id' => $location->id)
        ));

        foreach($observations as $observation) {

            $data[$observation->date] = $observation;

        }

        return json_encode($data);

    }
}
