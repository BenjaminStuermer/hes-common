<?php

namespace HESCommon\Services;

// TODO: This class should be a Helper instead of a Service
class BooleanService extends Service
{
    /**
     * Returns int value of a bool, or null or entered value is null
     * @param bool|null $val
     * @return int|null
     */
    public function getIntValForThreeValueBoolean(?bool $val) : ?int
    {
        if (null !== $val) {
            return (int) $val;
        }
        return null;
    }
}