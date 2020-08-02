
$(document).ready(function () {
    $('#contentdashboardv1').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentdashboard').className = "nav-link active";
        document.getElementById('contentdashboardv1').className = "nav-link active";
        $('.urlpage').html('Dashboard Page');
        $('#contentpage').load('tes');
        return false;
    })
    $('#contenthelpdesk').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentdashboard').className = "nav-link active";
        document.getElementById('contenthelpdesk').className = "nav-link active";
        $('.urlpage').html('Helpdesk Page');
        $('#contentpage').load('helpdesk');
        return false;
    })
    $('#contentsales').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentdashboard').className = "nav-link active";
        document.getElementById('contentsales').className = "nav-link active";
        $('.urlpage').html('Sales Page');
        $('#contentpage').load('sales');
        return false;
    })
    $('#contentdeposit').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentdaily').className = "nav-link active";
        document.getElementById('contentdeposit').className = "nav-link active";
        $('.urlpage').html('Deposit Page');
        $('#contentpage').load('deposit');
        return false;
    })
    $('#contentbanana').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentdaily').className = "nav-link active";
        document.getElementById('contentbanana').className = "nav-link active";
        $('.urlpage').html('Banana Page');
        $('#contentpage').load('banana');
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
        $('#contentpage').load('edcdatatable');
        return false;
    })
    $('#contentcashier').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentusers').className = "nav-link active";
        document.getElementById('contentcashier').className = "nav-link active";
        $('.urlpage').html('Cashier Page');
        $('#contentpage').load('cashierdatatable');
        return false;
    })
    $('#contentmanagement').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentusers').className = "nav-link active";
        document.getElementById('contentmanagement').className = "nav-link active";
        $('.urlpage').html('Management Page');
        $('#contentpage').load('managementdatatable');
        return false;
    })
    $('#contentpos').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentterminal').className = "nav-link active";
        document.getElementById('contentpos').className = "nav-link active";
        $('.urlpage').html('POS Page');
        $('#contentpage').load('posdatatable');
        return false;
    })
    $('#contentcounter').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentterminal').className = "nav-link active";
        document.getElementById('contentcounter').className = "nav-link active";
        $('.urlpage').html('Counter Page');
        $('#contentpage').load('counterdatatable');
        return false;
    })
    $('#contentscheduledatatable').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentscheduledatatable').className = "nav-link active";
        $('.urlpage').html('Schedule Datatable Page');
        $('#contentpage').load('scheduledatatable');
        return false;
    })
    $('#contentschedulecreate').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentschedulecreate').className = "nav-link active";
        $('.urlpage').html('Add Schedule Page');
        $('#contentpage').load('schedule/create');
        return false;
    })
    $('#contentmonitoring').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentmonitoring').className = "nav-link active";
        $('.urlpage').html('Monitoring Page');
        $('#contentpage').load('monitoring');
        return false;
    })
    $('#contentchronology').click(function () {
        $('a').removeClass('active');
        document.getElementById('contentchronology').className = "nav-link active";
        $('.urlpage').html('Chronology');
        $('#contentpage').load('chronology');
        return false;
    })

})

