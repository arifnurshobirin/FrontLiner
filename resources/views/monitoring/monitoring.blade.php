<!-- Small Box (Stat card) -->
<h5 class="mb-2 mt-4">Small Box</h5>

<div class="row"  id="accordion">
    @foreach($data as $list)
    <div class="col-lg-2 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $list->NoCounter }}</h3>

                <p>Reguler</p>
            </div>
            <div class="icon">
                <i class="fas fa-cash-register"></i>
            </div>
            <a class="small-box-footer nav-link" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $list->id }}">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
            <!-- <a href="#" class="small-box-footer nav-link" data-toggle="dropdown">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
                        <div class="box-body bg-white dropdown-menu">
                        <button class="btn-primary dropdown-item">Change Color</button>
                        </div> -->
            <div id="collapse{{ $list->id }}" class="panel-collapse collapse in">
                <div class="card-body">
                    Anim pariatur   
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
<!-- /.row -->


<div  id="monitoringcontainer">

</div>


<script>
    
$(document).ready(function () {
    var allCounter = < ? php echo $data ? > ;
    var counterContent = "";
    var lastIndex;
    for (var i = 0; i < allCounter.length; i++) {
        // for(var i=0;i<18;i++){
        lastIndex = i;
        if ((i % 6) == 0) {
            if (i == 0) {
                counterContent = counterContent + "<div class='row'>";
            } else {
                counterContent = counterContent + "</div>";
                counterContent = counterContent + "<div class='row'>";
            }


            lastIndex = 0;
        }
        counterContent = counterContent + "<div class='col-lg-2 col-6'>";
        counterContent = counterContent + "<div class='datapos small-box " + allCounter[i].status_monitoring + "'  id='counter_" + allCounter[i].id_counter + "' >";
        counterContent = counterContent + "<div class='inner'>";
        counterContent = counterContent + "<h5>" + allCounter[i].namaCounter + "</h5>";
        counterContent = counterContent + "<h6>" + allCounter[i].fullname + "</h6>";
        counterContent = counterContent + "</div>";
        counterContent = counterContent + " <div class='icon'>";
        counterContent = counterContent + " <i class='ion ion-person' nama='gantiwarna' id='gantiwarna' ></i>";
        counterContent = counterContent + " </div>";
        counterContent = counterContent + " <div class='box box-default collapsed-box box-solid'>";
        counterContent = counterContent + " <a class='small-box-footer '>More info<button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-arrow-circle-right'></i></button></a>";
        counterContent = counterContent + "  <div class='box-body bg-white'>";
        counterContent = counterContent + " <button class='btn-primary btn-block btn-sm' onClick='changeColor(" + allCounter[i].id_counter + ")'>Change Color</button>";
        counterContent = counterContent + " </div>";
        counterContent = counterContent + " </div>";
        counterContent = counterContent + " </div>";
        counterContent = counterContent + " </div>";





    }
    if ((lastIndex % 6) != 0) {
        // counterContent = counterContent+"</div>";
    }

    $("#counterContainer").html(counterContent);


});

function changeColor(id) {
    if ($("#counter_" + id).hasClass("bg-green")) {
        $("#counter_" + id).removeClass("bg-green");
        $("#counter_" + id).addClass("bg-red");
    } else if ($("#counter_" + id).hasClass("bg-red")) {
        $("#counter_" + id).removeClass("bg-red");
        $("#counter_" + id).addClass("bg-black");
    } else if ($("#counter_" + id).hasClass("bg-black")) {
        $("#counter_" + id).removeClass("bg-black");
        $("#counter_" + id).addClass("bg-gray");
    } else if ($("#counter_" + id).hasClass("bg-gray")) {
        $("#counter_" + id).removeClass("bg-gray");
        $("#counter_" + id).addClass("bg-green");
    } else {
        $("#counter_" + id).addClass("bg-green");
    }
}


$("#btnSaveMonitoring").click(function () {

    var datapos = new Array();
    $(".datapos").each(function (idx, elm) {
        datapos.push({
            'id': $(elm).attr("id"),
            'class': $(elm).attr("class")
        });
    })


    $.post("save-monitoring", "datapos=" + JSON.stringify(datapos), function () {
        alert("Berhasil Save POS");
    })

})

</script>