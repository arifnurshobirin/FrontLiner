$(function () {
    $('#contentdashboardv1').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentdashboard').className = "nav-link active";
        document.getElementById('contentdashboardv1').className = "nav-link active";
        $('#contentpage').load('tes');
        return false;
    })
    $('#contentgallery').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentgallery').className = "nav-link active";
        $('#contentpage').load('gallery');
        return false;
    })
    $('#contentcalendar').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentcalendar').className = "nav-link active";
        $('#contentpage').load('calendar');
        return false;
    })
    $('#contentprofile').click(function () {
        $('#contentpage').load('profile');
        return false;
    })
    $('#contentcontact').click(function () {
        $('#contentpage').load('contact');
        return false;
    })
    $('#contentedc').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentterminal').className = "nav-link active";
        document.getElementById('contentedc').className = "nav-link active";
        $('#contentpage').load('edctable');
        return false;
    })
    $('#contentcashier').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentusers').className = "nav-link active";
        document.getElementById('contentcashier').className = "nav-link active";
        $('#contentpage').load('cashiertable');
        return false;
    })
    $('#contentmanagement').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentusers').className = "nav-link active";
        document.getElementById('contentmanagement').className = "nav-link active";
        $('#contentpage').load('managementtable');
        return false;
    })
    $('#contentpos').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentterminal').className = "nav-link active";
        document.getElementById('contentpos').className = "nav-link active";
        $('#contentpage').load('postable');
        return false;
    })
    $('#contentcounter').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentterminal').className = "nav-link active";
        document.getElementById('contentcounter').className = "nav-link active";
        $('#contentpage').load('countertable');
        return false;
    })
    $('#contentmonitoring').click(function () {
        $('#contentpage').load('monitoring');
        return false;
    })



})
