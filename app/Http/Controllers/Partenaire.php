<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Partenaire extends Controller
{

    public function redirecttoprofile()
    {
        return view('Partenaire.Profile');
    }

    public function showTabcalender()
    {
        return view('Partenaire.table-calendar');
    }

    public function showchat()
    {
        return view('Partenaire.app-chat');
    }

    public function showTableBasic()
    {
        return view('Partenaire.table-basic');
    }

    public function showTableDarkBasic()
    {
        return view('Partenaire.table-dark-basic');
    }

    public function showTableDatatableBasic()
    {
        return view('Partenaire.table-datatable-basic');
    }

    public function showTableLayoutColoured()
    {
        return view('Partenaire.table-layout-coloured');
    }

    public function showTableSizing()
    {
        return view('Partenaire.table-sizing');
    }

    public function showTicketList()
    {
        return view('Partenaire.Interventions');
    }

    public function showFormInputGrid()
    {
        return view('Partenaire.form-input-grid');
    }

    public function showFormInputs()
    {
        return view('Partenaire.form-inputs');
    }

    public function showSidebar()
    {
        return view('Partenaire.sidebar');
    }

    public function showUICards()
    {
        return view('Partenaire.ui-cards');
    }

    public function showUIListMedia()
    {
        return view('Partenaire.ui-list-media');
    }

    public function showUIPopover()
    {
        return view('Partenaire.ui-popover');
    }


    public function UpdateProfile()
    {

        return view('Partenaire.UpdateProfile');
    }

    public function appcalendar()
    {

        return view('Partenaire.app-calendar');
    }


    public function showcomment()
    {

        return view('Partenaire.comment');
    }


    public function addservice()
    {

        return view('Partenaire.AddService');
    }

    public function messervices()
    {

        return view('Partenaire.MesServices');
    }

    public function service()
    {

        return view('Partenaire.service');
    }


    public function   updateService()
    {

        return view('Partenaire.updateService');
    }

    public function AjouterComment()
    {

        return view('Partenaire.AjouterComment');
    }
}
