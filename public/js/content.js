$(function(){
	$('#contentdashboardv1').click(function() {
        $('a').removeClass('active');
        document.getElementById('contentdashboard').className="nav-link active";
        document.getElementById('contentdashboardv1').className="nav-link active";
		$('#contentpage').load('tes');
			return false;
    })
    $('#contentgallery').click(function() {
        $('a').removeClass('active');
        document.getElementById('contentgallery').className="nav-link active";
		$('#contentpage').load('gallery');
			return false;
    })
    $('#contentprofile').click(function() {
		$('#contentpage').load('profile');
			return false;
    })
    $('#contentcontact').click(function() {
		$('#contentpage').load('contact');
			return false;
    })
    $('#contentedc').click(function() {
        $('#contentpage').load('edctable');
        return false;
    })
    $('#contentcashier').click(function() {
        $('#contentpage').load('cashiertable');
        return false;
    })
    $('#contentmanagement').click(function() {
        $('#contentpage').load('managementtable');
        return false;
    })
    $('#contentpos').click(function() {
		$('#contentpage').load('postable');
			return false;
    })
    $('#contentcounter').click(function() {
		$('#contentpage').load('countertable');
			return false;
    })
    $('#contentmonitoring').click(function() {
		$('#contentpage').load('monitoring');
			return false;
	})



})
