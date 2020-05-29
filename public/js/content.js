
$(document).ready(function () {
    $('#contentdashboardv1').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentdashboard').className = "nav-link active";
        document.getElementById('contentdashboardv1').className = "nav-link active";
        $('.urlpage').html('Dashboard Page');
        $('#contentpage').load('tes');
        return false;
    })
    $('#contentgallery').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentgallery').className = "nav-link active";
        $('.urlpage').html('Gallery Page');
        $('#contentpage').load('gallery');
        return false;
    })
    $('#contentcalendar').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentcalendar').className = "nav-link active";
        $('.urlpage').html('Calendar Page');
        $('#contentpage').load('calendar');
        return false;
    })
    $('#contentprofile').click(function () {
        $('.urlpage').html('Profile Page');
        $('#contentpage').load('profile');
        return false;
    })
    $('#contentcontact').click(function () {
        $('.urlpage').html('Contact Page');
        $('#contentpage').load('contact');
        return false;
    })
    $('#contentedc').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentterminal').className = "nav-link active";
        document.getElementById('contentedc').className = "nav-link active";
        $('.urlpage').html('EDC Page');
        $('#contentpage').load('edctable');
        return false;
    })
    $('#contentcashier').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentusers').className = "nav-link active";
        document.getElementById('contentcashier').className = "nav-link active";
        $('.urlpage').html('Cashier Page');
        $('#contentpage').load('cashiertable');
        return false;
    })
    $('#contentmanagement').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentusers').className = "nav-link active";
        document.getElementById('contentmanagement').className = "nav-link active";
        $('.urlpage').html('Management Page');
        $('#contentpage').load('managementtable');
        return false;
    })
    $('#contentpos').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentterminal').className = "nav-link active";
        document.getElementById('contentpos').className = "nav-link active";
        $('.urlpage').html('POS Page');
        $('#contentpage').load('postable');
        return false;
    })
    $('#contentcounter').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentterminal').className = "nav-link active";
        document.getElementById('contentcounter').className = "nav-link active";
        $('.urlpage').html('Counter Page');
        $('#contentpage').load('countertable');
        return false;
    })
    $('#contentscheduledatatable').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentscheduledatatable').className = "nav-link active";
        $('.urlpage').html('Schedule Datatable Page');
        $('#contentpage').load('scheduletable');
        return false;
    })
    $('#contentscheduleadd').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentscheduleadd').className = "nav-link active";
        $('.urlpage').html(' Add Schedule Page');
        $('#contentpage').load('scheduleadd');
        return false;
    })
    $('#contentmonitoring').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentmonitoring').className = "nav-link active";
        $('.urlpage').html('Monitoring Page');
        $('#contentpage').load('monitoring');
        return false;
    })



})
