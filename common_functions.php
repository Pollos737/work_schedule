<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/16/2016
 * Time: 9:20 PM
 */

function getDaysOfCurrentWeek()
{
    if (date('D') != 'Mon') {
        $startdate = date('Y-m-d', strtotime('last Monday'));
    } else {
        $startdate = date('Y-m-d');
    }

    //ends on sunday
    if (date('D') != 'Sun') {
        $enddate = date('Y-m-d', strtotime('Sunday'));
    } else {
        $enddate = date('Y-m-d');
    }

    $DateArray = array();
    $timestamp = strtotime($startdate);
    while ($startdate < $enddate) {
        $startdate = date('Y-m-d', $timestamp);
        $DateArray[] = $startdate;
        $timestamp = strtotime('+1 days', strtotime($startdate));
    }
    return $DateArray;
}

function createForm($datesOfCurrentWeek, $daysOfWeek)
{
    $output = '';
    for($i = 0; $i < count($datesOfCurrentWeek); $i++){
        $output .= '<div class="form-group '.$datesOfCurrentWeek[$i].'">';
        $output .= '<h3>'.$daysOfWeek[$i].' '.$datesOfCurrentWeek[$i].'</h3>';
        $output .= "<label>Start Time: </label>";
        $output .= '<select class="control-label" name="'.$daysOfWeek[$i].'_start">';
        for($hours = 0; $hours < 24; $hours++)
            for($minute = 0; $minute < 60; $minute+= 30) {
                $output .= '<option value="'.$hours.':'.$minute.'">'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                    .str_pad($minute,2,'0',STR_PAD_LEFT).'</option>';
            }
        $output .= '</select>';
        $output .= "<label>End Time: </label>";
        $output .= '<select class="control-label" name="'.$daysOfWeek[$i].'_end">';
        for($hours = 0; $hours < 24; $hours++)
            for($minute = 0; $minute < 60; $minute+= 30) {
                $output .= '<option value="'.$hours.':'.$minute.'">' .str_pad($hours,2,'0',STR_PAD_LEFT).':'
                    .str_pad($minute,2,'0',STR_PAD_LEFT).'</option>';
            }
        $output .= '</select></div>';
    }
    return $output;
}