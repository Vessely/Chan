$(document).ready(function () {
  var ready = 0;

  $(".file").val("");
  $(".custom-input").click(function () {
    $(".file").trigger('click');
  });

  $(".file").change(function () {
    my_file = this.files[0].name;
    extension = my_file.substr( (my_file.lastIndexOf('.') + 1) );
    check_ext = ext_validate(extension);
    if(check_ext === 0){
      $(".custom-input").html(my_file);
    }else{
      $(".custom-input").html("Solo imagenes por favor :(");
    }
  });

  $(".submit").click(function () {
    var form = new FormData();
    var title = $(".txt-title").val();
    var post = $(".txt-post").val();

    form.append("title", title);
    form.append("post", post);
    form.append("image", $("input[name=file]")[0].files[0]);

    $.ajax({
      url: "controller/new_post.php",
      type: 'POST',
      contentType: false,
      processData: false,
      data: form,
      success:function(data){
        console.log(data);
      }
    });
  });

  //Functions.
	function ext_validate(extension){
		//Retorna 0 en el caso de que sea valido.
		//Retorna 1 en el caso de que no sea valido.

		switch (extension) {
			case "jpg":
				return 0;
				break;

			case "png":
				return 0;
				break;

			case "gif":
				return 0;
				break;

			case "svg":
				return 0;
				break;

			default:
				return 1;
				break;
		}
	}
});
