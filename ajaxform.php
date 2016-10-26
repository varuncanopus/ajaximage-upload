
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<form id="data" method="post" enctype="multipart/form-data">
    <input type="text" name="first" value="Bob" />
    <input type="text" name="middle" value="James" />
    <input type="text" name="last" value="Smith" />
    <input name="image" type="file" />
    <button name="submit" id="submit">Submit</button>
</form>

<script>
    $("form#data").submit(function(){

    var formData = new FormData($(this)[0]);


    $.ajax({
        url: 'uploads.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});
    </script>