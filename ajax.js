// Insert Section Start
$(".btn").click(function () {
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();

    $.ajax({
        method: "POST",
        url: "insert.php",
        data: {name:name, email:email, pass:pass},
        success: function (data) {
            read()
        },
    });
});

// Reading Data Section Start Here
function read() {
    var read="";
    $.ajax({
        url: "read.php",
        method: "POST",
        data:{read:read},
        success: function(data){
            $("#tbody").html(data);
        }
    });
}

// Delete Section Start
function Delete(userId) {
    $con = confirm("Are you sure?");
    if($con==true){
        $.ajax({
            url: "delete.php",
            method: "POST",
            data:{userId:userId},
            success: function(data){
                read();
            }
        });
    }
}

// Edit Section Start
function Edit(userId) {
    
        $.ajax({
            url: "edit.php",
            method: "GET",
            data: {userId:userId},
            success: function(data){
                $("body").html(data);
            }
        }); 
}
// UPDATE DATA
function UPDATE_DATA(userId) {
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();

    $.ajax({
        url: "updateQuery.php",
        method: "GET",
        data: {name:name, email:email, pass:pass,userId:userId},
        success: function(data){
            alert(data)
        }
    }); 
}

// Read Data
$(".read-btn").click(function () {
    var read="";
    $.ajax({
        url: "read.php",
        method: "POST",
        data:{read:read},
        success: function(data){
            $("#tbody").html(data);
        }
    });
});

function home() {
    var read="";
    $.ajax({
        url: "index.php",
        method: "POST",
        data:{read:read},
        success: function(data){
            $("body").html(data);
        }
    });
}

