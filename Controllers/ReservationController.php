<?php 
class ReservationController extends Controller
{
    public function process($params)
    {
        // HTTP header
        //header("HTTP/1.0 404 Not Found");
        // HTML header
        $this->head['title'] = 'Reservation';
        // Sets the template
        $this->view = 'reservation';
    }
}