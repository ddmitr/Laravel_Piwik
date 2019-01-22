<?php

namespace RobBrazier\Piwik\Module;

/**
 * Class VisitTimeModule.
 *
 * @see https://developer.matomo.org/api-reference/reporting-api#VisitTime for arguments
 */
class VisitTimeModule extends Module
{
    /**
     * @param array[string]mixed $arguments extra arguments to be passed to the api call
     * @param string             $format    override format (defaults to one specified in config file)
     *
     * @return mixed
     */
    public function getVisitInformationPerLocalTime($arguments = [], $format = null)
    {
        $options = $this->getOptions($format)->setArguments($arguments);

        return $this->request->send($options);
    }

    /**
     * @param array[string]mixed $arguments extra arguments to be passed to the api call
     * @param string             $format    override format (defaults to one specified in config file)
     *
     * @return mixed
     */
    public function getVisitInformationPerServerTime($arguments = [], $format = null)
    {
        $options = $this->getOptions($format)->setArguments($arguments);

        return $this->request->send($options);
    }

    /**
     * @param array[string]mixed $arguments extra arguments to be passed to the api call
     * @param string             $format    override format (defaults to one specified in config file)
     *
     * @return mixed
     */
    public function getByDayOfWeek($arguments = [], $format = null)
    {
        $options = $this->getOptions($format)->setArguments($arguments);

        return $this->request->send($options);
    }
}
