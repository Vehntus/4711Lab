<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *  The Student Class is used to for the creation of student objects containing
 *  the students name, emails, and grades.
 * 
 * @author Vehntus
 */
class Student {
    
    // The Student constructor
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    // The add_email function is used to add a students email(s)
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    
    // The add_grade function is used to add a students grade(s)
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    // The average function is used to calculate the students grades average
    function average() {
        $total = 0;
        // Loops to sum multiple grades
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /* The toString function is used to return the students information
     * as a string
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        // Loops to return multiple emails
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
    
    
    
}
