<?php

class Calendar {
    private $year;
    private $month;

    public function __construct($year = null, $month = null) {
        $this->year = $year ?? date('Y');
        $this->month = $month ?? date('m');
    }

    public function getDaysInMonth() {
        return cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
    }

    public function getFirstDayOfMonth() {
        return date('N', strtotime("$this->year-$this->month-01"));
    }

    public function getMonths() {
        return ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    }

    public function getDaysOfWeek() {
        return ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
    }

    public function getYear() {
        return $this->year;
    }

    public function getMonth() {
        return $this->month;
    }
}