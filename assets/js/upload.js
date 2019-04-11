  $("#btnUpdate").click(function (event) {
        //stop submit the form, we will post it manually.
        event.preventDefault();
        	var id = $('#changeAvatar').find('input[name=idUs]').val();
        // Get form
          	var form_data= $('#changePhoto')[0];
		// Create an FormData object
        var data = new FormData(form_data);

		// If you want to add an extra field for the FormData
        data.append("CustomField", "This is some extra data, testing");

		// disabled the submit button
        // $("#btnUpdate").prop("disabled", true);

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: FULL_SITE_ROOT + 'api/data/user/changeAvatar/'+id,
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
            	autohidenotify('success', 'Success', 'Your change was changed!!!');
                $('.modal').modal('hide');
                location.reload();
            },
            error: function (response) {
            	autohidenotify('error', 'Error', 'Error, Please check again!!!');
                //$("#result").text(e.responseText);
            }
        });
  });





