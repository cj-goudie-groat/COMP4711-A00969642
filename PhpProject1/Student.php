<?php

/**
 * Student is a class which has an array of grades, a name, and 
 * an array of email addresses
 * @author Connor
 */
class Student {
    /**
     * Constructor for student
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
 
    /**
     * Add a new email address to the array
     * @param type $which
     * @param type $address
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Add a new grade to the array
     * @param type $grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Calculates student's average grade
     * @return type
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
     * Prints out the student's data in a formatted manner
     * @return type
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
